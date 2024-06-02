<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$status = $query->pluck('status');
        //$nama_pekerjaan = $query->pluck('nama_pekerjaan');

        //count total nilai pekerjaan RKAP
        $values_rkap = DB::table('projects');
        $total_rkap = $values_rkap->sum('nilai_pekerjaan_rkap');
        $format_total = number_format($total_rkap, '0','.', '.');

        //count total nilai pekerjaan aktual
        $values_aktual = DB::table('projects');
        $total_aktual = $values_aktual->sum('nilai_pekerjaan_aktual');
        $format_aktual = number_format($total_aktual, '0','.', '.');

        //count total nilai pekerjaan kontrak / tahun berjalan
        $values_kontrak = DB::table('projects');
        $total_kontrak = $values_kontrak->sum('nilai_pekerjaan_kontrak_tahun_berjalan');
        $format_kontrak = number_format($total_kontrak, '0','.', '.');

        //dd($total_rkap);

        //count data postpone
        $query_postpone = DB::table('projects');
        $data_postpone = $query_postpone->where('status', 'Postpone')->get();
        $count_postpone = count($data_postpone);
        // Get total number of records
        $total_records = DB::table('projects')->count();
        // Calculate percentage
        $percentage_postpone = ($count_postpone / $total_records) * 100;

        //count data follow up
        $query_followUp = DB::table('projects');
        $data_followUp = $query_followUp->where('status', 'Follow Up')->get();
        $count_followUp = count($data_followUp);
        // Get total number of records
        $total_records = DB::table('projects')->count();
        // Calculate percentage
        $percentage_followUp = ($count_followUp / $total_records) * 100;

        //count data implementasi
        $query_implementasi = DB::table('projects');
        $data_implementasi = $query_implementasi->where('status', 'Implementasi')->get();
        $count_implementasi = count($data_implementasi);
        // Get total number of records
        $total_records = DB::table('projects')->count();
        // Calculate percentage
        $percentage_implementasi = ($count_implementasi / $total_records) * 100;

        //dd($count_implementasi);

        //count data pembayaran
        $query_pembayaran = DB::table('projects');
        $data_pembayaran = $query_pembayaran->where('status', 'Payment')->get();
        $count_pembayaran = count($data_pembayaran);
        // Get total number of records
        $total_records = DB::table('projects')->count();
        // Calculate percentage
        $percentage_pembayaran = ($count_pembayaran / $total_records) * 100;

        //count data selesai
        $query_selesai = DB::table('projects');
        $data_selesai = $query_selesai->where('status', 'Finished')->get();
        $count_selesai = count($data_selesai);
        // Get total number of records
        $total_records = DB::table('projects')->count();
        // Calculate percentage
        $percentage_selesai = ($count_selesai / $total_records) * 100;


        //dd($percentage_postpone);

        return view('dashboard', compact('count_postpone', 'count_followUp', 'count_implementasi', 'count_pembayaran', 'count_selesai', 'percentage_postpone', 'percentage_followUp', 'percentage_implementasi', 'percentage_pembayaran', 'percentage_selesai', 'format_total', 'format_aktual', 'format_kontrak', 'total_rkap', 'total_aktual', 'total_kontrak'));

    }
}