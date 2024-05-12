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

        <button onclick="filterCalendar()">Filter</button>
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
            @foreach($projects as $project)
                @php
                    $totalNilaiRkap += $project->nilai_pekerjaan_rkap;
                    $totalNilaiAktual += $project->nilai_pekerjaan_aktual;
                    $totalNilaiKontrak += $project->nilai_pekerjaan_kontrak_tahun_berjalan;
                @endphp
                <tr>
                    <td>{{ $baseNumber + $loop->index }}</td>
                    <td>
                        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                    <td>
                        <span class="status-btn" style="background-color: {{ getStatusColor($project->status) }}">{{ $project->status }}</span>
                    </td>
                    <td>
                        <a href="{{ route('projects.show', $project->nama_pekerjaan) }}">{{ $project->nama_pekerjaan }}</a>
                    </td>
                    <td>{{ $project->nama_service }}</td>
                    <td>{{ number_format($project->nilai_pekerjaan_rkap, 0, ',', '.') }}</td>
                    <td>{{ number_format($project->nilai_pekerjaan_aktual, 0, ',', '.') }}</td>
                    <td>{{ number_format($project->nilai_pekerjaan_kontrak_tahun_berjalan, 0, ',', '.') }}</td>
                    <td>{{ $project->plan_start_date }}</td>
                    <td>{{ $project->plan_end_date }}</td>
                    <td>{{ $project->actual_start_date }}</td>
                    <td>{{ $project->actual_end_date }}</td>
                    <td>{{ $project->account_marketing }}</td>
                    <td>
                        <span class="status-btn" style="background-color: {{ getRasciColor($project->dirut) }}">{{ $project->dirut }}</span>
                    </td>
                    <td>
                        <span class="status-btn" style="background-color: {{ getRasciColor($project->dirop) }}">{{ $project->dirop }}</span>
                    </td>
                    <td>
                        <span class="status-btn" style="background-color: {{ getRasciColor($project->dirke) }}">{{ $project->dirke }}</span>
                    </td>
                    <td>
                        <span class="status-btn" style="background-color: {{ getRasciColor($project->kskmr) }}">{{ $project->kskmr }}</span>
                    </td>
                    <td>
                        <span class="status-btn" style="background-color: {{ getRasciColor($project->ksham) }}">{{ $project->ksham }}</span>
                    </td>
                    <td>
                        <span class="status-btn" style="background-color: {{ getRasciColor($project->msdmu) }}">{{ $project->msdmu }}</span>
                    </td>
                    <td>
                        <span class="status-btn" style="background-color: {{ getRasciColor($project->mkakt) }}">{{ $project->mkakt }}</span>
                    </td>
                    <td>
                        <span class="status-btn" style="background-color: {{ getRasciColor($project->mbilp) }}">{{ $project->mbilp }}</span>
                    </td>
                    <td>
                        <span class="status-btn" style="background-color: {{ getRasciColor($project->mppti) }}">{{ $project->mppti }}</span>
                    </td>
                    <td>
                        <span class="status-btn" style="background-color: {{ getRasciColor($project->mopti) }}">{{ $project->mopti }}</span>
                    </td>
                    <td>
                        <span class="status-btn" style="background-color: {{ getRasciColor($project->mbsar) }}">{{ $project->mbsar }}</span>
                    </td>
                    <td>
                        <span class="status-btn" style="background-color: {{ getRasciColor($project->msadb) }}">{{ $project->msadb }}</span>
                    </td>
                </tr>
            @endforeach



        </tbody>
    </table>
</div>

@endsection