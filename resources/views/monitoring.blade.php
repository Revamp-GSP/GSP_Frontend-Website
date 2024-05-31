@extends('layouts.main')

@section('container')

<!-- Link CSS -->
<link rel="stylesheet" href="css/monitoring.css">

<div class="title">
    <a>Form Monitoring Pekerjaan</a>
</div>
<form action="/monitoring/query" method="POST">
@csrf
<div class="main-selection">
    <div class="selector-service">
        <h6>Jenis Layanan</h6>
        <select name="filter_layanan" class="form-select" aria-label="Default select example" onchange='if(this.value != 0) { this.form.submit(); }'>
            <option value="" selected >Silahkan Pilih Layanan</option>
            <option value="Data Center">Data Center</option>
            <option value="E-Payment">E-Payment</option>
            <option value="ERP">ERP</option>
            <option value="GesPay">GesPay</option>
            <option value="IT-SERVICE">IT Service</option>
            <option value="IT Service lainnya">IT Service lainnya</option>
            <option value="Jasa Aktivasi">Jasa Aktivasi</option>
            <option value="Jasa Serpo">Jasa Serpo</option>
            <option value="Jasa lainnya">Jasa lainnya</option>
            <option value="Mobile Apps">Mobile Apps</option>
            <option value="Payment Gateway">Payment Gateway</option>
            <option value="Seat Management">Seat Management</option>
            <option value="Web Apps">Web Apps</option>
        </select>
    </div>
    <div class="selector-status" >
        <h6>Status</h6>
        <select name="filter_status" class="form-select" aria-label="Default select example" onchange='if(this.value != 0) { this.form.submit(); }'>
            <option value="" selected>Silahkan Pilih Status</option>
            <option value="Postpone">Postpone</option>
            <option value="Follow up">Follow Up</option>
            <option value="Implementation">Implementation</option>
            <option value="Payment">Payment</option>
            <option value="Finished">Finished</option>
        </select>
    </div>
    <div class="selector-pelanggan">
        <h6>Pelanggan</h6>
        <select name="filter_pelanggan" class="form-select" aria-label="Default select example" onchange='if(this.value != 0) { this.form.submit(); }'>
            <option value="" selected>Silahkan Pilih Pelanggan</option>
            @foreach($projects as $project)
            <option value="{{ $project->nama_pelanggan }}">{{ $project->nama_pelanggan }}</option>
            @endforeach
        </select>
    </div>
    <div class="selector-accountMarketing">
        <h6>Account Marketing</h6>
        <select name="filter_accountMarketing" class="form-select" aria-label="Default select example" onchange='if(this.value != 0) { this.form.submit(); }'>
            <option value="" selected>Pilih Account Marketing</option>
            <option value="Administrator">Administrator</option>
            <option value="Busdev">Busdev</option>
            <option value="Direksi">Direksi</option>
            <option value="Manager Keuangan">Manager Keuangan</option>
            <option value="Manager Opha">Manager Ophar</option>
            <option value="Ophar">Ophar</option>
            <option value="Satuan Kinerja">Satuan Kinerja</option>
            <option value="SDM">SDM</option>
        </select>
    </div>
</div>
</form>
<div class="calendar">
    <div class="filters">
        <label for="start-date">Start Date:</label>
        <input type="date" id="start-date">

        <label for="end-date">End Date:</label>
        <input type="date" id="end-date">

        <button class="filter_cal" onclick="filterCalendar()" style="width:50px">Filter</button>
    </div>
    <div class="searchBar">
        <form action="/search" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search..." name="search">
                <button class="btn-search" type="submit">
                    <i class='bx bx-search'></i>
                </button>
            </div>
        </form>
        <!-- Display search results or other content here -->
    </div>
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Action</th>
              <th scope="col">Status</th>
              <th scope="col">Pelanggan</th>
              <th scope="col">Jenis Layanan</th>
              <th scope="col">Nama Pekerjaan</th>
              <th scope="col">Nilai Pekerjaan RKAP</th>
              <th scope="col">Nilai Pekerjaan Aktual</th>
              <th scope="col">Nilai Pekerjaan Kontrak/Tahun Berjalan</th>
              <th scope="col">Plan Start Date</th>
              <th scope="col">Plan End Date</th>
              <th scope="col">Actual Start Date</th>
              <th scope="col">Actual End Date</th>
              <th scope="col">Account Marketing</th>
              <th scope="col">DIRUT</th>
              <th scope="col">DIROP</th>
              <th scope="col">DIRKE</th>
              <th scope="col">KSKMR</th>
              <th scope="col">KSHAM</th>
              <th scope="col">MSDMU</th>
              <th scope="col">MKAKT</th>
              <th scope="col">MBILP</th>
              <th scope="col">MPPTI</th>
              <th scope="col">MOPTI</th>
              <th scope="col">MBSAR</th>
              <th scope="col">MSADB</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @php
                $baseNumber = ($projects->currentPage() - 1) * $projects->perPage() + 1;
            @endphp
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $baseNumber + $loop->index }}</td>
                    <td></td>
                    <td>{{ $project->status }}</td>
                    <td>{{ $project->nama_pelanggan }}</td>
                    <td>{{ $project->nama_service }}</td>
                    <td>
                        <a href="/task">{{ $project->nama_pekerjaan }}</a>
                    </td>
                    <td>{{ $project->nilai_pekerjaan_rkap }}</td>
                    <td>{{ $project->nilai_pekerjaan_aktual }}</td>
                    <td>{{ $project->nilai_pekerjaan_kontrak_tahun_berjalan }}</td>
                    <td>{{ $project->plan_start_date }}</td>
                    <td>{{ $project->plan_end_date }}</td>
                    <td>{{ $project->actual_start_date }}</td>
                    <td>{{ $project->actual_end_date }}</td>
                    <td>{{ $project->account_marketing }}</td>
                    <td>{{ $project->dirut }}</td>
                    <td>{{ $project->dirop }}</td>
                    <td>{{ $project->dirke }}</td>
                    <td>{{ $project->kskmr }}</td>
                    <td>{{ $project->ksham }}</td>
                    <td>{{ $project->msdmu }}</td>
                    <td>{{ $project->mkakt }}</td>
                    <td>{{ $project->mbilp }}</td>
                    <td>{{ $project->mppti }}</td>
                    <td>{{ $project->mopti }}</td>
                    <td>{{ $project->mbsar }}</td>
                    <td>{{ $project->msadb }}</td>
                </tr>
            @endforeach
            </tr>
        </tbody>
        <tfoot>
            <tr class="table">
                <td colspan="5" class="text-right"><strong>Total</strong></td>
                <td class="text-center"></td>
                <td class="text-center">{{$format_total}}</td>
                <td class="text-center">{{$format_aktual}}</td>
                <td class="text-center">{{$format_kontrak}}</td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
            </tr>
      </tfoot>
    </table>
</div>

@endsection