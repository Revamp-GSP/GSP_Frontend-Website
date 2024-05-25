@extends('layouts.main')

@section('container')

<!-- Link CSS -->
<link rel="stylesheet" href="css/monitoring.css">

<div class="title">
    <a>Form Monitoring Pekerjaan</a>
</div>
<div class="main-selection">
    <div class="selector-service">
        <h6>Jenis Layanan</h6>
        <select class="form-select" aria-label="Default select example">
            <option selected>Silahkan Pilih Layanan</option>
            <option value="1">Data Center</option>
            <option value="2">E-Payment</option>
            <option value="3">ERP</option>
            <option value="4">GesPay</option>
            <option value="5">IT Service</option>
            <option value="6">IT Service lainnya</option>
            <option value="7">Jasa Aktivasi</option>
            <option value="8">Jasa Serpo</option>
            <option value="9">Jasa lainnya</option>
            <option value="10">Mobile Apps</option>
            <option value="11">Payment Gateway</option>
            <option value="12">Seat Management</option>
            <option value="13">Web Apps</option>
        </select>
    </div>
    <div class="selector-status">
        <h6>Status</h6>
        <select class="form-select" aria-label="Default select example">
            <option selected>Silahkan Pilih Status</option>
            <option value="1">Postpone</option>
            <option value="2">Follow Up</option>
            <option value="3">Implementation</option>
            <option value="4">Payment</option>
            <option value="5">Finished</option>
        </select>
    </div>
    <div class="selector-pelanggan">
        <h6>Pelanggan</h6>
        <select class="form-select" aria-label="Default select example">
            <option selected>Silahkan Pilih Pelanggan</option>
            <option value="1">PT. ABC</option>
            <option value="2">PT. DEF</option>
            <option value="3">PT. GHI</option>
            <option value="4">PT. JKL</option>
            <option value="5">PT. MNO</option>
        </select>
    </div>
    <div class="selector-accountMarketing">
        <h6>Account Marketing</h6>
        <select class="form-select" aria-label="Default select example">
            <option selected>Select On Option</option>
            <option value="1">Administrator</option>
            <option value="2">Busdev</option>
            <option value="3">Direksi</option>
            <option value="4">Manager Keuangan</option>
            <option value="5">Manager Ophar</option>
            <option value="6">Ophar</option>
            <option value="7">Satuan Kinerja</option>
            <option value="8">SDM</option>
        </select>
    </div>
</div>
<div class="calendar">
    <div class="filters">
        <label for="start-date">Start Date:</label>
        <input type="date" id="start-date">

        <label for="end-date">End Date:</label>
        <input type="date" id="end-date">

        <button class="filter_cal" onclick="filterCalendar()">Filter</button>
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
                    <td>{{ $project->nama_pekerjaan }}</td>
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