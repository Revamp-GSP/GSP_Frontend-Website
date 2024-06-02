<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\customers;
use App\Models\product;
use App\Models\project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectsController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('projects');
    
        // Conditionally apply date range filter
        if ($request->has('date_range_start') && $request->has('date_range_end')) {
            $dateRangeStart = $request->date_range_start;
            $dateRangeEnd = $request->date_range_end;
    
            $query->whereBetween('plan_start_date', [$dateRangeStart, $dateRangeEnd])
                  ->orWhereBetween('plan_end_date', [$dateRangeStart, $dateRangeEnd])
                  ->orWhereBetween('actual_start_date', [$dateRangeStart, $dateRangeEnd])
                  ->orWhereBetween('actual_end_date', [$dateRangeStart, $dateRangeEnd]);
        }
    
        // Conditionally apply search filter
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nama_pelanggan', 'like', "%$search%")
                  ->orWhere('nama_service', 'like', "%$search%")
                  ->orWhere('nama_pekerjaan', 'like', "%$search%")
                  ->orWhere('nilai_pekerjaan_rkap', 'like', "%$search%")
                  ->orWhere('id', 'like', "%$search%")
                  ->orWhere('nilai_pekerjaan_rkap', 'like', "%$search%")
                  ->orWhere('nilai_pekerjaan_aktual', 'like', "%$search%")
                  ->orWhere('nilai_pekerjaan_kontrak_tahun_berjalan', 'like', "%$search%")
                  ->orWhere('status', 'like', "%$search%")
                  ->orWhere('account_marketing', 'like', "%$search%");
            });
        }
    
        // Apply sorting
        $projects = $query->orderByRaw("
            CASE
                WHEN status = 'Selesai' THEN 1
                WHEN status = 'Pembayaran' THEN 2
                WHEN status = 'Implementasi' THEN 3
                WHEN status = 'Follow Up' THEN 4
                WHEN status = 'Postpone' THEN 5
                ELSE 6
            END
        ")->orderBy('id')->paginate(10);


        //count total nilai pekerjaan RKAP
        $values_rkap = $query->pluck('nilai_pekerjaan_rkap');
        $total_rkap = $values_rkap->sum();
        $format_total = number_format($total_rkap, '0','.', '.');

        //count total nilai pekerjaan aktual
        $values_aktual = $query->pluck('nilai_pekerjaan_aktual');
        $total_aktual = $values_aktual->sum();
        $format_aktual = number_format($total_aktual, '0','.', '.');

        //count total nilai pekerjaan kontrak / tahun berjalan
        $values_kontrak = $query->pluck('nilai_pekerjaan_kontrak_tahun_berjalan');
        $total_kontrak = $values_kontrak->sum();
        $format_kontrak = number_format($total_kontrak, '0','.', '.');


        $baseNumber = 0;
        
        //dd($total_rkap);

    
        return view('monitoring', compact('projects', 'format_total', 'format_aktual', 'format_kontrak', 'baseNumber'));
    }
    

    public function create()
    {
        $customers = customers::all();
        $produks = product::all();
        return view('projects.createprojects', compact('customers', 'produks'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'customer_id' => 'sometimes|exists:customers,id',
            'product_id' => 'sometimes|exists:produks,id',
            'status' => 'required',
            'nama_pelanggan' => 'required',
            'nama_service' => 'required',
            'nama_pekerjaan' => 'required',
            'nilai_pekerjaan_rkap' => 'required|numeric',
            'nilai_pekerjaan_aktual' => 'required|numeric',
            'nilai_pekerjaan_kontrak_tahun_berjalan' => 'required|numeric',
            'plan_start_date' => 'nullable|date',
            'plan_end_date' => 'nullable|date',
            'actual_start_date' => 'nullable|date',
            'actual_end_date' => 'nullable|date',
            'account_marketing' => 'required',
            'dirut' => 'nullable|string',
            'dirop' => 'nullable|string',
            'dirke' => 'nullable|string',
            'kskmr' => 'nullable|string',
            'ksham' => 'nullable|string',
            'msdmu' => 'nullable|string',
            'mkakt' => 'nullable|string',
            'mbilp' => 'nullable|string',
            'mppti' => 'nullable|string',
            'mopti' => 'nullable|string',
            'mbsar' => 'nullable|string',
            'msadb' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        

        project::create($request->all());
        $customer = customers::firstOrCreate(['nama_pelanggan' => $request->nama_pelanggan]);

        $produk = product::firstOrCreate(['nama_service' => $request->nama_service]);

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function edit($id)
    {
        $project = project::findOrFail($id);
        $produks = product::all();
        $customers = customers::all();
        $account_marketing = [
            'Administrator' => ['Ahmad Gunawan', 'Sugih Permana', 'Yana Nugraha'],
            'Busdev' => ['Admin Sales', 'Alia Almitra', 'Aufa Putra', 'Desiana Latief', 'Greyta Sarah', 'Hadi Mustofa', 'Harry Fitriana', 'Isma Soraya', 'Johanes B. Indra', 'Mulyana Santosa', 'Olley Mosye', 'Ramdani Apriansyah', 'Ryan Apriantho', 'Sarah Thoharhatunissa', 'Topan Permata', 'Winda Sundayani'],
            'Direksi' => ['Bayu Mahendra', 'Burhanuddin -', 'Ruly Fasri'],
            'Manager Keuangan' => ['Elsa Marina', 'Oki Satrya', 'Taufik Munandar'],
        ];
        
        // Mengelompokkan data account marketing berdasarkan label optgroup
        $grouped_account_marketing = collect($account_marketing)->map(function ($options, $label) {
            return [
                'label' => $label,
                'options' => $options,
            ];
        });
        return view('projects.editprojects', compact('project', 'produks', 'customers', 'grouped_account_marketing'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'customer_id' => 'sometimes|exists:customers,id',
            'product_id' => 'sometimes|exists:produks,id',
            'status' => 'required',
            'nama_pelanggan' => 'required',
            'nama_service' => 'required',
            'nama_pekerjaan' => 'required',
            'nilai_pekerjaan_rkap' => 'required|numeric',
            'nilai_pekerjaan_aktual' => 'required|numeric',
            'nilai_pekerjaan_kontrak_tahun_berjalan' => 'required|numeric',
            'plan_start_date' => 'nullable|date',
            'plan_end_date' => 'nullable|date',
            'actual_start_date' => 'nullable|date',
            'actual_end_date' => 'nullable|date',
            'account_marketing' => 'required',
            'dirut' => 'nullable|string',
            'dirop' => 'nullable|string',
            'dirke' => 'nullable|string',
            'kskmr' => 'nullable|string',
            'ksham' => 'nullable|string',
            'msdmu' => 'nullable|string',
            'mkakt' => 'nullable|string',
            'mbilp' => 'nullable|string',
            'mppti' => 'nullable|string',
            'mopti' => 'nullable|string',
            'mbsar' => 'nullable|string',
            'msadb' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
            
        }

        $project = project::findOrFail($id);
        $customer = customers::firstOrCreate(['nama_pelanggan' => $request->nama_pelanggan]);

        $produk = product::firstOrCreate(['nama_service' => $request->nama_service]);
        $project->update($request->all());

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy($id)
    {
        project::findOrFail($id)->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }

    public function show($nama_pekerjaan)
    {
        // Cari proyek berdasarkan nama pekerjaan
        $project = project::where('nama_pekerjaan', $nama_pekerjaan)->first();
    
        // Periksa apakah proyek berhasil ditemukan
        if (!isset($project)) {
        // Jika tidak ditemukan, redirect atau tampilkan pesan kesalahan
        abort(404); // Misalnya, tampilkan halaman 404 Not Found
        }

        // Dapatkan status proyek
        $currentStatus = $project->status;

        // Langkah-langkah statis atau berdasarkan status proyek
        $steps = [
            ['number' => 1, 'name' => 'Langkah 1', 'description' => 'Deskripsi Langkah 1'],
            ['number' => 2, 'name' => 'Langkah 2', 'description' => 'Deskripsi Langkah 2'],
            ['number' => 3, 'name' => 'Langkah 3', 'description' => 'Deskripsi Langkah 3'],
            ['number' => 4, 'name' => 'Langkah 4', 'description' => 'Deskripsi Langkah 4'],
            ['number' => 5, 'name' => 'Langkah 5', 'description' => 'Deskripsi Langkah 5'],
        ];

        return view('projects.showprojects', [
            'project' => $project,
            'steps' => $steps,
            'currentStatus' => $currentStatus
        ]);
    }

    public function queryFilter(Request $request) {
        $query = DB::table('projects');
    
        if ($request->filled('filter_layanan')) {
            $query->where('nama_service', $request->filter_layanan);
        }
        if ($request->filled('filter_status')) {
            $query->where('status', $request->filter_status);
        }
        if ($request->filled('filter_pelanggan')) {
            $query->where('nama_pelanggan', $request->filter_pelanggan);
        }
        if ($request->filled('filter_accountMarketing')) {
            $query->where('account_marketing', $request->filter_accountMarketing);
        }
    
        $projects = $query->paginate(10);
    
        $values_rkap = $projects->pluck('nilai_pekerjaan_rkap');
        $total_rkap = $values_rkap->sum();
        $format_total = number_format($total_rkap, '0', '.', '.');
    
        //count total nilai pekerjaan aktual
        $values_aktual = $projects->pluck('nilai_pekerjaan_aktual');
        $total_aktual = $values_aktual->sum();
        $format_aktual = number_format($total_aktual, '0', '.', '.');
    
        //count total nilai pekerjaan kontrak / tahun berjalan
        $values_kontrak = $projects->pluck('nilai_pekerjaan_kontrak_tahun_berjalan');
        $total_kontrak = $values_kontrak->sum();
        $format_kontrak = number_format($total_kontrak, '0', '.', '.');
    
        $baseNumber = 0;

        $request->session()->put('filter_layanan', $request->filter_layanan);
        $request->session()->put('filter_status', $request->filter_status);
        $request->session()->put('filter_pelanggan', $request->filter_pelanggan);
        $request->session()->put('filter_accountMarketing', $request->filter_accountMarketing);

    
        return view('monitoring', compact('projects', 'format_total', 'format_aktual', 'format_kontrak', 'baseNumber'));
    }
    
}