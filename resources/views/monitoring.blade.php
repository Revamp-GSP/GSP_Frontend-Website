@extends('layouts.main')

@section('container')

<!-- Link CSS -->
<link rel="stylesheet" href="css/monitoring.css">

<div class="title">
    <a>Form Monitoring Pekerjaan</a>
</div>
<div class="main-selection">
    <form action="/monitoring/query" method="POST">
    @csrf
    <div class="selector-service">
        <h6>Jenis Layanan</h6>
        <select name="search" class="form-select" aria-label="Default select example" onchange='if(this.value != 0) { this.form.submit(); }'>
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
    </form>
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

<div class="filters-row">
    <div class="calendar">
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
                    <i class='bx bx-search' style="margin-top: 8px;"></i>
                </button>
            </div>
        </form>
        <!-- Display search results or other content here -->
    </div>
    <div class="add-Data">
        <!-- Button modal addData -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDataModal">
            Tambah Data
        </button>
  
        <!-- Modal addData -->
        <div class="modal fade" id="addDataModal" tabindex="-1" aria-labelledby="addDataLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="addDataLabel">Tambah Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-form-tab" data-bs-toggle="tab" data-bs-target="#nav-form" type="button" role="tab" aria-controls="nav-form" aria-selected="true">Input Pekerjaan</button>
                            <button class="nav-link" id="nav-rasci-tab" data-bs-toggle="tab" data-bs-target="#nav-rasci" type="button" role="tab" aria-controls="nav-rasci" aria-selected="false">RASCI</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-form" role="tabpanel" aria-labelledby="nav-form-tab" tabindex="0">
                                <div class="form-group">
                                    <label for="">Nama Pekerjaan:</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <!-- form untuk jenis layanan -->
                                <div class="form-group">
                                    <label for="nama_service">Jenis Layanan:</label>
                                    <select name="nama_service" id="nama_service" class="form-control" required>
                                        <option value="">Pilih Jenis Layanan</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Nilai Pekerjaan RKAP:</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Nilai Pekerjaan Aktual:</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Nilai Pekerjaan Kontrak:</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="form-group">
                                    <label for="nama_pelanggan">Nama Pelanggan:</label>
                                    <select name="nama_pelanggan" id="nama_pelanggan" class="form-control" required>
                                        <option value="">Pilih Nama Pelanggan</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="start-date">Plan Start Date:</label>
                                    <input type="date" id="plan-start-date" style="width: 440px;">
                                </div>
                                <div class="form-group">
                                    <label for="start-date">Plan End Date:</label>
                                    <input type="date" id="plan-end-date" style="width: 448px;">
                                </div>
                                <div class="form-group">
                                    <label for="start-date">Actual Start Date:</label>
                                    <input type="date" id="actual-start-date" style="width: 423px;">
                                </div>
                                <div class="form-group">
                                    <label for="start-date">Actual End Date:</label>
                                    <input type="date" id="actual-end-date" style="width: 431px;">
                                </div>
                                <div class="form-group">
                                    <label for="status">Status:</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="Pending">Postpone</option>
                                        <option value="Follow Up">Follow Up</option>
                                        <option value="Implementasi">Implementasi</option>
                                        <option value="Payment">Payment</option>
                                        <option value="Finished">Finished</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="account_marketing">Account Marketing:</label>
                                    <select name="account_marketing" id="account_marketing" class="form-control" required>
                                        <option value="">None</option>
                                        <optgroup label="Administrator">
                                            <option value="Ahmad Gunawan">Ahmad Gunawan</option>
                                            <option value="Sugih Permana">Sugih Permana</option>
                                            <option value="Yana Nugraha">Yana Nugraha</option>
                                        </optgroup>
                                        <optgroup label="Busdev">
                                            <option value="Admin Sales">Admin Sales</option>
                                            <option value="Alia Almitra">Alia Almitra</option>
                                            <option value="Aufa Putra">Aufa Putra</option>
                                            <option value="Desiana Latief">Desiana Latief</option>
                                            <option value="Greyta Sarah">Greyta Sarah</option>
                                            <option value="Hadi Mustofa">Hadi Mustofa</option>
                                            <option value="Harry Fitriana">Harry Fitriana</option>
                                            <option value="Isma Soraya">Isma Soraya</option>
                                            <option value="Johanes B. Indra">Johanes B. Indra</option>
                                            <option value="Mulyana Santosa">Mulyana Santosa</option>
                                            <option value="Olley Mosye">Olley Mosye</option>
                                            <option value="Ramdani Apriansyah">Ramdani Apriansyah</option>
                                            <option value="Ryan Apriantho">Ryan Apriantho</option>
                                            <option value="Sarah Thoharhatunissa">Sarah Thoharhatunissa</option>
                                            <option value="Topan Permata">Topan Permata</option>
                                            <option value="Winda Sundayani">Winda Sundayani</option>
                                        </optgroup>
                                        <optgroup label="Direksi">
                                            <option value="Bayu Mahendra">Bayu Mahendra</option>
                                            <option value="Burhanuddin -">Burhanuddin -</option>
                                            <option value="Ruly Fasri">Ruly Fasri</option>
                                        </optgroup>
                                        <optgroup label="Manager Keuangan">
                                            <option value="Elsa Marina">Elsa Marina</option>
                                            <option value="Oki Satrya">Oki Satrya </option>
                                            <option value="Taufik Munandar">Taufik Munandar</option>
                                        </optgroup>
                                        <optgroup label="Manager Ophar">
                                            <option value="Dadang Sutriaman">Dadang Sutriaman</option>
                                        </optgroup>  
                                        <optgroup label="Ophar">
                                            <option value="Asep Nugroho">Asep Nugroho</option>
                                            <option value="Dadang Sutriaman">Dadang Sutriaman</option>
                                            <option value="Fauzy Dalil Mutaqin">Fauzy Dalil Mutaqin</option>
                                            <option value="M. Hafila Hardenera">M. Hafila Hardenera</option>
                                            <option value="Umi Kencanawati">Umi Kencanawati</option>
                                        </optgroup>
                                        <optgroup label="Sat Kinerja">
                                            <option value="32">Hernowo Hardono</option>
                                        </optgroup>      
                                        <optgroup label="SDM">
                                            <option value="Agus Salam">Agus Salam</option>
                                            <option value="Teddy R. Asmara">Teddy R. Asmara</option>
                                        </optgroup>                
                                    </select>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-rasci" role="tabpanel" aria-labelledby="nav-rasci-tab" tabindex="0">
                                <!-- Radio buttons for DIRUT -->
                                <div class="form-group">
                                    <label for="dirut">DIRUT:</label>
                                    <div class="radio-buttons">
                                        <input type="radio" id="rasci_dirut_responsible" name="dirut" value="Responsible">
                                        <label for="rasci_dirut_responsible">Responsible</label>
                                        <input type="radio" id="rasci_dirut_accountable" name="dirut" value="Accountable">
                                        <label for="rasci_dirut_accountable">Accountable</label>
                                        <input type="radio" id="rasci_dirut_support" name="dirut" value="Support">
                                        <label for="rasci_dirut_support">Support</label>
                                        <input type="radio" id="rasci_dirut_consulted" name="dirut" value="Consulted">
                                        <label for="rasci_dirut_consulted">Consulted</label>
                                        <input type="radio" id="rasci_dirut_informed" name="dirut" value="Informed">
                                        <label for="rasci_dirut_informed">Informed</label>
                                    </div>
                                </div>
                                <!-- Radio buttons for DIROP -->
                                <div class="form-group">
                                    <label for="dirop">DIROP:</label>
                                    <div class="radio-buttons">
                                        <input type="radio" id="rasci_dirop_responsible" name="dirop" value="Responsible">
                                        <label for="rasci_dirop_responsible">Responsible</label>
                                        <input type="radio" id="rasci_dirop_accountable" name="dirop" value="Accountable">
                                        <label for="rasci_dirop_accountable">Accountable</label>
                                        <input type="radio" id="rasci_dirop_support" name="dirop" value="Support">
                                        <label for="rasci_dirop_support">Support</label>
                                        <input type="radio" id="rasci_dirop_consulted" name="dirop" value="Consulted">
                                        <label for="rasci_dirop_consulted">Consulted</label>
                                        <input type="radio" id="rasci_dirop_informed" name="dirop" value="Informed">
                                        <label for="rasci_dirop_informed">Informed</label>
                                    </div>
                                </div>
                                <!-- Radio buttons for DIRKE -->
                                <div class="form-group">
                                    <label for="dirke">DIRKE:</label>
                                    <div class="radio-buttons">
                                        <input type="radio" id="rasci_dirke_responsible" name="dirke" value="Responsible">
                                        <label for="rasci_dirke_responsible">Responsible</label>
                                        <input type="radio" id="rasci_dirke_accountable" name="dirke" value="Accountable">
                                        <label for="rasci_dirke_accountable">Accountable</label>
                                        <input type="radio" id="rasci_dirke_support" name="dirke" value="Support">
                                        <label for="rasci_dirke_support">Support</label>
                                        <input type="radio" id="rasci_dirke_consulted" name="dirke" value="Consulted">
                                        <label for="rasci_dirke_consulted">Consulted</label>
                                        <input type="radio" id="rasci_dirke_informed" name="dirke" value="Informed">
                                        <label for="rasci_dirke_informed">Informed</label>
                                    </div>
                                </div>
                                <!-- Radio buttons for KSKMR -->
                                <div class="form-group">
                                    <label for="kskmr">KSKMR:</label>
                                    <div class="radio-buttons">
                                        <input type="radio" id="rasci_kskmr_responsible" name="kskmr" value="Responsible">
                                        <label for="rasci_kskmr_responsible">Responsible</label>
                                        <input type="radio" id="rasci_kskmr_accountable" name="kskmr" value="Accountable">
                                        <label for="rasci_kskmr_accountable">Accountable</label>
                                        <input type="radio" id="rasci_kskmr_support" name="kskmr" value="Support">
                                        <label for="rasci_kskmr_support">Support</label>
                                        <input type="radio" id="rasci_kskmr_consulted" name="kskmr" value="Consulted">
                                        <label for="rasci_kskmr_consulted">Consulted</label>
                                        <input type="radio" id="rasci_kskmr_informed" name="kskmr" value="Informed">
                                        <label for="rasci_kskmr_informed">Informed</label>
                                    </div>
                                </div>
                                <!-- Radio buttons for KSHAM -->
                                <div class="form-group">
                                    <label for="ksham">KSHAM:</label>
                                    <div class="radio-buttons">
                                        <input type="radio" id="rasci_ksham_responsible" name="ksham" value="Responsible">
                                        <label for="rasci_ksham_responsible">Responsible</label>
                                        <input type="radio" id="rasci_ksham_accountable" name="ksham" value="Accountable">
                                        <label for="rasci_ksham_accountable">Accountable</label>
                                        <input type="radio" id="rasci_ksham_support" name="ksham" value="Support">
                                        <label for="rasci_ksham_support">Support</label>
                                        <input type="radio" id="rasci_ksham_consulted" name="ksham" value="Consulted">
                                        <label for="rasci_ksham_consulted">Consulted</label>
                                        <input type="radio" id="rasci_ksham_informed" name="ksham" value="Informed">
                                        <label for="rasci_ksham_informed">Informed</label>
                                    </div>
                                </div>
                                <!-- Radio buttons for MSDMU -->
                                <div class="form-group">
                                    <label for="msdmu">MSDMU:</label>
                                    <div class="radio-buttons">
                                        <input type="radio" id="rasci_msdmu_responsible" name="msdmu" value="Responsible">
                                        <label for="rasci_msdmu_responsible">Responsible</label>
                                        <input type="radio" id="rasci_msdmu_accountable" name="msdmu" value="Accountable">
                                        <label for="rasci_msdmu_accountable">Accountable</label>
                                        <input type="radio" id="rasci_msdmu_support" name="msdmu" value="Support">
                                        <label for="rasci_msdmu_support">Support</label>
                                        <input type="radio" id="rasci_msdmu_consulted" name="msdmu" value="Consulted">
                                        <label for="rasci_msdmu_consulted">Consulted</label>
                                        <input type="radio" id="rasci_msdmu_informed" name="msdmu" value="Informed">
                                        <label for="rasci_msdmu_informed">Informed</label>
                                    </div>
                                </div>
                                <!-- Radio buttons for MKAKT -->
                                <div class="form-group">
                                    <label for="mkakt">MKAKT:</label>
                                    <div class="radio-buttons">
                                        <input type="radio" id="rasci_mkakt_responsible" name="mkakt" value="Responsible">
                                        <label for="rasci_mkakt_responsible">Responsible</label>
                                        <input type="radio" id="rasci_mkakt_accountable" name="mkakt" value="Accountable">
                                        <label for="rasci_mkakt_accountable">Accountable</label>
                                        <input type="radio" id="rasci_mkakt_support" name="mkakt" value="Support">
                                        <label for="rasci_mkakt_support">Support</label>
                                        <input type="radio" id="rasci_mkakt_consulted" name="mkakt" value="Consulted">
                                        <label for="rasci_mkakt_consulted">Consulted</label>
                                        <input type="radio" id="rasci_mkakt_informed" name="mkakt" value="Informed">
                                        <label for="rasci_mkakt_informed">Informed</label>
                                    </div>
                                </div>
                                <!-- Radio buttons for MBILP -->
                                <div class="form-group">
                                    <label for="mbilp">MBILP:</label>
                                    <div class="radio-buttons">
                                        <input type="radio" id="rasci_mbilp_responsible" name="mbilp" value="Responsible">
                                        <label for="rasci_mbilp_responsible">Responsible</label>
                                        <input type="radio" id="rasci_mbilp_accountable" name="mbilp" value="Accountable">
                                        <label for="rasci_mbilp_accountable">Accountable</label>
                                        <input type="radio" id="rasci_mbilp_support" name="mbilp" value="Support">
                                        <label for="rasci_mbilp_support">Support</label>
                                        <input type="radio" id="rasci_mbilp_consulted" name="mbilp" value="Consulted">
                                        <label for="rasci_mbilp_consulted">Consulted</label>
                                        <input type="radio" id="rasci_mbilp_informed" name="mbilp" value="Informed">
                                        <label for="rasci_mbilp_informed">Informed</label>
                                    </div>
                                </div>
                                <!-- Radio buttons for MPPTI -->
                                <div class="form-group">
                                    <label for="mppti">MPPTI:</label>
                                    <div class="radio-buttons">
                                        <input type="radio" id="rasci_mppti_responsible" name="mppti" value="Responsible">
                                        <label for="rasci_mppti_responsible">Responsible</label>
                                        <input type="radio" id="rasci_mppti_accountable" name="mppti" value="Accountable">
                                        <label for="rasci_mppti_accountable">Accountable</label>
                                        <input type="radio" id="rasci_mppti_support" name="mppti" value="Support">
                                        <label for="rasci_mppti_support">Support</label>
                                        <input type="radio" id="rasci_mppti_consulted" name="mppti" value="Consulted">
                                        <label for="rasci_mppti_consulted">Consulted</label>
                                        <input type="radio" id="rasci_mppti_informed" name="mppti" value="Informed">
                                        <label for="rasci_mppti_informed">Informed</label>
                                    </div>
                                </div>
                                <!-- Radio buttons for MOPTI -->
                                <div class="form-group">
                                    <label for="mopti">MOPTI:</label>
                                    <div class="radio-buttons">
                                        <input type="radio" id="rasci_mopti_responsible" name="mopti" value="Responsible">
                                        <label for="rasci_mopti_responsible">Responsible</label>
                                        <input type="radio" id="rasci_mopti_accountable" name="mopti" value="Accountable">
                                        <label for="rasci_mopti_accountable">Accountable</label>
                                        <input type="radio" id="rasci_mopti_support" name="mopti" value="Support">
                                        <label for="rasci_mopti_support">Support</label>
                                        <input type="radio" id="rasci_mopti_consulted" name="mopti" value="Consulted">
                                        <label for="rasci_mopti_consulted">Consulted</label>
                                        <input type="radio" id="rasci_mopti_informed" name="mopti" value="Informed">
                                        <label for="rasci_mopti_informed">Informed</label>
                                    </div>
                                </div>
                                <!-- Radio buttons for MBSAR -->
                                <div class="form-group">
                                    <label for="mbsar">MBSAR:</label>
                                    <div class="radio-buttons">
                                        <input type="radio" id="rasci_mbsar_responsible" name="mbsar" value="Responsible">
                                        <label for="rasci_mbsar_responsible">Responsible</label>
                                        <input type="radio" id="rasci_mbsar_accountable" name="mbsar" value="Accountable">
                                        <label for="rasci_mbsar_accountable">Accountable</label>
                                        <input type="radio" id="rasci_mbsar_support" name="mbsar" value="Support">
                                        <label for="rasci_mbsar_support">Support</label>
                                        <input type="radio" id="rasci_mbsar_consulted" name="mbsar" value="Consulted">
                                        <label for="rasci_mbsar_consulted">Consulted</label>
                                        <input type="radio" id="rasci_mbsar_informed" name="mbsar" value="Informed">
                                        <label for="rasci_mbsar_informed">Informed</label>
                                    </div>
                                </div>
                                <!-- Radio buttons for MSADB -->
                                <div class="form-group">
                                    <label for="msadb">MSADB:</label>
                                    <div class="radio-buttons">
                                        <input type="radio" id="rasci_msadb_responsible" name="msadb" value="Responsible">
                                        <label for="rasci_msadb_responsible">Responsible</label>
                                        <input type="radio" id="rasci_msadb_accountable" name="msadb" value="Accountable">
                                        <label for="rasci_msadb_accountable">Accountable</label>
                                        <input type="radio" id="rasci_msadb_support" name="msadb" value="Support">
                                        <label for="rasci_msadb_support">Support</label>
                                        <input type="radio" id="rasci_msadb_consulted" name="msadb" value="Consulted">
                                        <label for="rasci_msadb_consulted">Consulted</label>
                                        <input type="radio" id="rasci_msadb_informed" name="msadb" value="Informed">
                                        <label for="rasci_msadb_informed">Informed</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
        </div>
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
                    <td>
                        <button type="button" class="btn btn-warning">
                            <i class='bx bxs-edit'></i>
                        </button>
                        <button type="button" class="btn btn-danger">
                            <i class='bx bxs-trash' ></i>
                        </button>
                    </td>
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