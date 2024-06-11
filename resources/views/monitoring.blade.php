@extends('layouts.main')

@section('container')

<!-- Link CSS -->
<link rel="stylesheet" href="css/monitoring.css">

<div class="title">
    <a>Form Monitoring Pekerjaan</a>
</div>
<form action="/monitoring" method="POST">
    @csrf
    <div class="main-selection">
        <div class="selector-service">
            <h6>Jenis Layanan</h6>
            <select name="filter_layanan" class="form-select" aria-label="Default select example" onchange='if(this.value != 0) { this.form.submit(); }'>
                <option value="reset" selected >Silahkan Pilih Layanan</option>
                <option value="Data Center" {{ session('filter_layanan') == 'Data Center' ? 'selected' : '' }}>Data Center</option>
                <option value="E-Payment" {{ session('filter_layanan') == 'E-Payment' ? 'selected' : '' }}>E-Payment</option>
                <option value="ERP" {{ session('filter_layanan') == 'ERP' ? 'selected' : '' }}>ERP</option>
                <option value="GesPay" {{ session('filter_layanan') == 'GesPay' ? 'selected' : '' }}>GesPay</option>
                <option value="IT-SERVICE" {{ session('filter_layanan') == 'IT-SERVICE' ? 'selected' : '' }}>IT Service</option>
                <option value="IT Service lainnya" {{ session('filter_layanan') == 'IT Service lainnya' ? 'selected' : '' }}>IT Service lainnya</option>
                <option value="Jasa Aktivasi" {{ session('filter_layanan') == 'Jasa Aktivasi' ? 'selected' : '' }}>Jasa Aktivasi</option>
                <option value="Jasa Serpo" {{ session('filter_layanan') == 'Jasa Serpo' ? 'selected' : '' }}>Jasa Serpo</option>
                <option value="Jasa lainnya" {{ session('filter_layanan') == 'Jasa lainnya' ? 'selected' : '' }}>Jasa lainnya</option>
                <option value="Mobile Apps" {{ session('filter_layanan') == 'Mobile Apps' ? 'selected' : '' }}>Mobile Apps</option>
                <option value="Payment Gateway" {{ session('filter_layanan') == 'Payment Gateway' ? 'selected' : '' }}>Payment Gateway</option>
                <option value="Seat Management" {{ session('filter_layanan') == 'Seat Management' ? 'selected' : '' }}>Seat Management</option>
                <option value="Web Apps" {{ session('filter_layanan') == 'Web Apps' ? 'selected' : '' }}>Web Apps</option>
            </select>
        </div>
        <div class="selector-status" >
            <h6>Status</h6>
            <select name="filter_status" class="form-select" aria-label="Default select example" onchange='if(this.value != 0) { this.form.submit(); }'>
                <option value="reset" selected>Silahkan Pilih Status</option>
                <option value="Postpone" {{ session('filter_status') == 'Postpone' ? 'selected' : '' }}>Postpone</option>
                <option value="Follow up" {{ session('filter_status') == 'Follow up' ? 'selected' : '' }}>Follow Up</option>
                <option value="Implementation" {{ session('filter_status') == 'Implementation' ? 'selected' : '' }}>Implementation</option>
                <option value="Payment" {{ session('filter_status') == 'Payment' ? 'selected' : '' }}>Payment</option>
                <option value="Finished" {{ session('filter_status') == 'Finished' ? 'selected' : '' }}>Finished</option>
            </select>
        </div>
        <div class="selector-pelanggan">
            <h6>Pelanggan</h6>
            <select name="filter_pelanggan" class="form-select" aria-label="Default select example" onchange='if(this.value != 0) { this.form.submit(); }'>
                <option value="reset" selected>Silahkan Pilih Pelanggan</option>
                @foreach($projects as $project)
                <option value="{{ $project->nama_pelanggan }}" {{ session('filter_pelanggan') == $project->nama_pelanggan ? 'selected' : '' }}>
                {{ $project->nama_pelanggan }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="selector-accountMarketing">
            <h6>Account Marketing</h6>
            <select name="filter_accountMarketing" class="form-select" aria-label="Default select example" onchange='if(this.value != 0) { this.form.submit(); }'>
                <option value="reset">Pilih Account Marketing</option>
                <optgroup label="Administrator">
                    <option value="Ahmad Gunawan" {{ session('filter_accountMarketing') == 'Ahmad Gunawan' ? 'selected' : '' }}>Ahmad Gunawan</option>
                    <option value="Sugih Permana" {{ session('filter_accountMarketing') == 'Sugih Permana' ? 'selected' : '' }}>Sugih Permana</option>
                    <option value="Yana Nugraha" {{ session('filter_accountMarketing') == 'Yana Nugraha' ? 'selected' : '' }}>Yana Nugraha</option>
                </optgroup>
                <optgroup label="Busdev">
                    <option value="Admin Sales" {{ session('filter_accountMarketing') == 'Admin Sales' ? 'selected' : '' }}>Admin Sales</option>
                    <option value="Alia Almitra" {{ session('filter_accountMarketing') == 'Alia Almitra' ? 'selected' : '' }}>Alia Almitra</option>
                    <option value="Aufa Putra" {{ session('filter_accountMarketing') == 'Aufa Putra' ? 'selected' : '' }}>Aufa Putra</option>
                    <option value="Desiana Latief" {{ session('filter_accountMarketing') == 'Desiana Latief' ? 'selected' : '' }}>Desiana Latief</option>
                    <option value="Greyta Sarah" {{ session('filter_accountMarketing') == 'Greyta Sarah' ? 'selected' : '' }}>Greyta Sarah</option>
                    <option value="Hadi Mustofa" {{ session('filter_accountMarketing') == 'Hadi Mustofa' ? 'selected' : '' }}>Hadi Mustofa</option>
                    <option value="Harry Fitriana" {{ session('filter_accountMarketing') == 'Harry Fitriana' ? 'selected' : '' }}>Harry Fitriana</option>
                    <option value="Isma Soraya" {{ session('filter_accountMarketing') == 'Isma Soraya' ? 'selected' : '' }}>Isma Soraya</option>
                    <option value="Johanes B. Indra" {{ session('filter_accountMarketing') == 'Johanes B. Indra' ? 'selected' : '' }}>Johanes B. Indra</option>
                    <option value="Mulyana Santosa" {{ session('filter_accountMarketing') == 'Mulyana Santosa' ? 'selected' : '' }}>Mulyana Santosa</option>
                    <option value="Olley Mosye" {{ session('filter_accountMarketing') == 'Olley Mosye' ? 'selected' : '' }}>Olley Mosye</option>
                    <option value="Ramdani Apriansyah" {{ session('filter_accountMarketing') == 'Ramdani Apriansyah' ? 'selected' : '' }}>Ramdani Apriansyah</option>
                    <option value="Ryan Apriantho" {{ session('filter_accountMarketing') == 'Ryan Apriantho' ? 'selected' : '' }}>Ryan Apriantho</option>
                    <option value="Sarah Thoharhatunissa" {{ session('filter_accountMarketing') == 'Sarah Thoharhatunissa' ? 'selected' : '' }}>Sarah Thoharhatunissa</option>
                    <option value="Topan Permata" {{ session('filter_accountMarketing') == 'Topan Permata' ? 'selected' : '' }}>Topan Permata</option>
                    <option value="Winda Sundayani" {{ session('filter_accountMarketing') == 'Winda Sundayani' ? 'selected' : '' }}>Winda Sundayani</option>
                </optgroup>
                <optgroup label="Direksi">
                    <option value="Bayu Mahendra" {{ session('filter_accountMarketing') == 'Bayu Mahendra' ? 'selected' : '' }}>Bayu Mahendra</option>
                    <option value="Burhanuddin -" {{ session('filter_accountMarketing') == 'Burhanuddin -' ? 'selected' : '' }}>Burhanuddin -</option>
                    <option value="Ruly Fasri" {{ session('filter_accountMarketing') == 'Ruly Fasri' ? 'selected' : '' }}>Ruly Fasri</option>
                </optgroup>
                <optgroup label="Manager Keuangan">
                    <option value="Elsa Marina" {{ session('filter_accountMarketing') == 'Elsa Marina' ? 'selected' : '' }}>Elsa Marina</option>
                    <option value="Oki Satrya" {{ session('filter_accountMarketing') == 'Oki Satrya' ? 'selected' : '' }}>Oki Satrya </option>
                    <option value="Taufik Munandar" {{ session('filter_accountMarketing') == 'Taufik Munandar' ? 'selected' : '' }}>Taufik Munandar</option>
                </optgroup>
                <optgroup label="Manager Ophar">
                    <option value="Dadang Sutriaman" {{ session('filter_accountMarketing') == 'Dadang Sutriaman' ? 'selected' : '' }}>Dadang Sutriaman</option>
                </optgroup>  
                <optgroup label="Ophar">
                    <option value="Asep Nugroho" {{ session('filter_accountMarketing') == 'Asep Nugroho' ? 'selected' : '' }}>Asep Nugroho</option>
                    <option value="Dadang Sutriaman" {{ session('filter_accountMarketing') == 'Dadang Sutriaman' ? 'selected' : '' }}>Dadang Sutriaman</option>
                    <option value="Fauzy Dalil Mutaqin" {{ session('filter_accountMarketing') == 'Fauzy Dalil Mutaqin' ? 'selected' : '' }}>Fauzy Dalil Mutaqin</option>
                    <option value="M. Hafila Hardenera" {{ session('filter_accountMarketing') == 'M. Hafila Hardenera' ? 'selected' : '' }}>M. Hafila Hardenera</option>
                    <option value="Umi Kencanawati" {{ session('filter_accountMarketing') == 'Umi Kencanawati' ? 'selected' : '' }}>Umi Kencanawati</option>
                </optgroup>
                <optgroup label="Sat Kinerja">
                    <option value="Hernowo Hardono" {{ session('filter_accountMarketing') == 'Hernowo Hardono' ? 'selected' : '' }}>Hernowo Hardono</option>
                </optgroup>      
                <optgroup label="SDM">
                    <option value="Agus Salam" {{ session('filter_accountMarketing') == 'Agus Salam' ? 'selected' : '' }}>Agus Salam</option>
                    <option value="Teddy R. Asmara" {{ session('filter_accountMarketing') == 'Teddy R. Asmara' ? 'selected' : '' }}>Teddy R. Asmara</option>
                </optgroup>                
            </select>
        </div>
    </div>
</form>
<div class="calendar">
    <form action="{{ route('project.index') }}" method="GET">
        @csrf
        <div class="filters">
            <label for="start-date">Start Date:</label>
            <input type="date" id="start-date" value="{{ request('date_range_start') }}">
    
            <label for="end-date">End Date:</label>
            <input type="date" id="end-date" value="{{ request('date_range_end') }}">
    
            <button class="filter_cal" onclick="filterCalendar()" style="width:50px">Filter</button>
        </div>
        <div class="searchBar">
            <form action="{{ route('project.index') }}" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                    <button class="btn-search" type="submit">
                        <i class='bx bx-search' style="margin-top: 8px;"></i>
                    </button>
                </div>
            </form>
            <!-- Display search results or other content here -->
        </div>
    </form>
    <form action="/monitoring/add-data" method="POST">
        @csrf
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
                                        <input name="nama_pekerjaan" type="text" class="form-control" id="">
                                    </div>
                                    <!-- form untuk jenis layanan -->
                                    <div class="form-group">
                                        <label for="nama_service">Jenis Layanan:</label>
                                        <select name="nama_service" id="nama_service" class="form-control" required>
                                            <option selected >Silahkan Pilih Layanan</option>
                                            <option value="Data Center">Data Center</option>
                                            <option value="E-Payment">E-Payment</option>
                                            <option value="ERP">ERP</option>
                                            <option value="GesPay">GesPay</option>
                                            <option value="IT Service">IT Service</option>
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
                                    <div class="form-group">
                                        <label for="">Nilai Pekerjaan RKAP:</label>
                                        <input name="nilai_pekerjaan_rkap" type="text" class="form-control" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nilai Pekerjaan Aktual:</label>
                                        <input name="nilai_pekerjaan_aktual" type="text" class="form-control" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nilai Pekerjaan Kontrak:</label>
                                        <input name="nilai_pekerjaan_kontrak_tahun_berjalan" type="text" class="form-control" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama Pelanggan:</label>
                                        <input name="nama_pelanggan" type="text" class="form-control" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="start-date">Plan Start Date:</label>
                                        <input name="plan_start_date" type="date" id="plan-start-date" style="width: 440px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="end-date">Plan End Date:</label>
                                        <input name="plan_end_date" type="date" id="plan-end-date" style="width: 440px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="start-date">Actual Start Date:</label>
                                        <input name="actual_start_date" type="date" id="actual-start-date" style="width: 440px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="start-date">Actual End Date:</label>
                                        <input name="actual_end_date" type="date" id="actual-end-date" style="width: 440px;">
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
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
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
                        <div class="container-button">
                            <div class="con-edit">
                                <form action="{{ route('update', $project->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <!-- Button Edit modal -->
                                    <button type="button" class="btn btn-warning" id="edit-button-{{$project->id}}" data-bs-toggle="modal" data-bs-target="#editModal-{{$project->id}}">
                                        <i class='bx bxs-edit'></i>
                                    </button>
                                    
                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="editModal-{{$project->id}}" tabindex="-1" aria-labelledby="editModalLabel-{{$project->id}}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="editModalLabel">Edit Data</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('update', $project->id) }}" method="POST">
                                                        @csrf
                                                        <nav>
                                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                                <button class="nav-link active" id="nav-form-edit-tab" data-bs-toggle="tab" data-bs-target="#nav-form-edit" type="button" role="tab" aria-controls="nav-form-edit" aria-selected="true">Input Pekerjaan</button>
                                                                <button class="nav-link" id="nav-rasci-edit-tab" data-bs-toggle="tab" data-bs-target="#nav-rasci-edit" type="button" role="tab" aria-controls="nav-rasci-edit" aria-selected="false">RASCI</button>
                                                            </div>
                                                        </nav>
                                                        <div class="tab-content" id="nav-tabContent">
                                                            <div class="tab-pane fade show active" id="nav-form-edit" role="tabpanel" aria-labelledby="nav-form-edit-tab" tabindex="0">
                                                                <div class="form-group">
                                                                    <label for="nama_pekerjaan-{{$project->id}}" class="form-label">Nama Pekerjaan:</label>
                                                                    <input name="nama_pekerjaan" type="text" class="form-control" id="nama_pekerjaan-{{$project->id}}" value="{{ $project->nama_pekerjaan }}">
                                                                </div>
                                                                <!-- form untuk jenis layanan -->
                                                                <div class="form-group">
                                                                    <label for="nama_service-{{$project->id}}">Jenis Layanan:</label>
                                                                    <select name="nama_service" id="nama_service-{{$project->id}}" class="form-control" value="{{ $project->nama_service }}">
                                                                        <option selected >{{ $project->nama_service }}</option>
                                                                        <option value="Data Center">Data Center</option>
                                                                        <option value="E-Payment">E-Payment</option>
                                                                        <option value="ERP">ERP</option>
                                                                        <option value="GesPay">GesPay</option>
                                                                        <option value="IT Service">IT Service</option>
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
                                                                <div class="form-group">
                                                                    <label for="">Nilai Pekerjaan RKAP:</label>
                                                                    <input name="nilai_pekerjaan_rkap" type="text" class="form-control" id="" value="{{ $project->nilai_pekerjaan_rkap }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Nilai Pekerjaan Aktual:</label>
                                                                    <input name="nilai_pekerjaan_aktual" type="text" class="form-control" id="" value="{{ $project->nilai_pekerjaan_aktual }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Nilai Pekerjaan Kontrak:</label>
                                                                    <input name="nilai_pekerjaan_kontrak_tahun_berjalan" type="text" class="form-control" id="" value="{{ $project->nilai_pekerjaan_kontrak_tahun_berjalan }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Nama Pelanggan:</label>
                                                                    <input name="nama_pelanggan" type="text" class="form-control" id="" value="{{ $project->nama_pelanggan }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="start-date">Plan Start Date:</label>
                                                                    <input name="plan_start_date" type="date" id="plan-start-date" style="width: 440px;" value="{{ $project->plan_start_date }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="end-date">Plan End Date:</label>
                                                                    <input name="plan_end_date" type="date" id="plan-end-date" style="width: 440px;" value="{{ $project->plan_end_date }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="start-date">Actual Start Date:</label>
                                                                    <input name="actual_start_date" type="date" id="actual-start-date" style="width: 420px;" value="{{ $project->actual_start_date }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="start-date">Actual End Date:</label>
                                                                    <input name="actual_end_date" type="date" id="actual-end-date" style="width: 440px;" value="{{ $project->actual_end_date }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="status">Status:</label>
                                                                    <select name="status" id="status" class="form-control" required>
                                                                        <option value="" selected >{{ $project->status }}</option>
                                                                        <option value="Postpone">Postpone</option>
                                                                        <option value="Follow Up">Follow Up</option>
                                                                        <option value="Implementasi">Implementasi</option>
                                                                        <option value="Payment">Payment</option>
                                                                        <option value="Finished">Finished</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="account_marketing">Account Marketing:</label>
                                                                    <select name="account_marketing" id="account_marketing" class="form-control" required>
                                                                        <option value="">{{ $project->account_marketing }}</option>
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
                                                            <div class="tab-pane fade" id="nav-rasci-edit" role="tabpanel" aria-labelledby="nav-rasci-edit-tab" tabindex="0">
                                                                <!-- Radio buttons for DIRUT -->
                                                                <div class="form-group">
                                                                    <label for="dirut">DIRUT:</label>
                                                                    <div class="radio-buttons">
                                                                        <input type="radio" id="rasci_dirut_responsible" name="dirut" value="Responsible" {{ $project->dirut == 'Responsible' ? 'checked' : '' }}>
                                                                        <label for="rasci_dirut_responsible">Responsible</label>
                                                                        <input type="radio" id="rasci_dirut_accountable" name="dirut" value="Accountable" {{ $project->dirut == 'Accountable' ? 'checked' : '' }}>
                                                                        <label for="rasci_dirut_accountable">Accountable</label>
                                                                        <input type="radio" id="rasci_dirut_support" name="dirut" value="Support" {{ $project->dirut == 'Support' ? 'checked' : '' }}>
                                                                        <label for="rasci_dirut_support">Support</label>
                                                                        <input type="radio" id="rasci_dirut_consulted" name="dirut" value="Consulted" {{ $project->dirut == 'Consulted' ? 'checked' : '' }}>
                                                                        <label for="rasci_dirut_consulted">Consulted</label>
                                                                        <input type="radio" id="rasci_dirut_informed" name="dirut" value="Informed" {{ $project->dirut == 'Informed' ? 'checked' : '' }}>
                                                                        <label for="rasci_dirut_informed">Informed</label>
                                                                    </div>
                                                                </div>
                                                                <!-- Radio buttons for DIROP -->
                                                                <div class="form-group">
                                                                    <label for="dirop">DIROP:</label>
                                                                    <div class="radio-buttons">
                                                                        <input type="radio" id="rasci_dirop_responsible" name="dirop" value="Responsible" {{ $project->dirop == 'Responsible' ? 'checked' : '' }}>
                                                                        <label for="rasci_dirop_responsible">Responsible</label>
                                                                        <input type="radio" id="rasci_dirop_accountable" name="dirop" value="Accountable" {{ $project->dirop == 'Accountable' ? 'checked' : '' }}>
                                                                        <label for="rasci_dirop_accountable">Accountable</label>
                                                                        <input type="radio" id="rasci_dirop_support" name="dirop" value="Support" {{ $project->dirop == 'Support' ? 'checked' : '' }}>
                                                                        <label for="rasci_dirop_support">Support</label>
                                                                        <input type="radio" id="rasci_dirop_consulted" name="dirop" value="Consulted" {{ $project->dirop == 'Consulted' ? 'checked' : '' }}>
                                                                        <label for="rasci_dirop_consulted">Consulted</label>
                                                                        <input type="radio" id="rasci_dirop_informed" name="dirop" value="Informed" {{ $project->dirop == 'Informed' ? 'checked' : '' }}>
                                                                        <label for="rasci_dirop_informed">Informed</label>
                                                                    </div>
                                                                </div>
                                                                <!-- Radio buttons for DIRKE -->
                                                                <div class="form-group">
                                                                    <label for="dirke">DIRKE:</label>
                                                                    <div class="radio-buttons">
                                                                        <input type="radio" id="rasci_dirke_responsible" name="dirke" value="Responsible" {{ $project->dirke == 'Responsible' ? 'checked' : '' }}>
                                                                        <label for="rasci_dirke_responsible">Responsible</label>
                                                                        <input type="radio" id="rasci_dirke_accountable" name="dirke" value="Accountable" {{ $project->dirke == 'Accountable' ? 'checked' : '' }}>
                                                                        <label for="rasci_dirke_accountable">Accountable</label>
                                                                        <input type="radio" id="rasci_dirke_support" name="dirke" value="Support" {{ $project->dirke == 'Support' ? 'checked' : '' }}>
                                                                        <label for="rasci_dirke_support">Support</label>
                                                                        <input type="radio" id="rasci_dirke_consulted" name="dirke" value="Consulted" {{ $project->dirke == 'Consulted' ? 'checked' : '' }}>
                                                                        <label for="rasci_dirke_consulted">Consulted</label>
                                                                        <input type="radio" id="rasci_dirke_informed" name="dirke" value="Informed" {{ $project->dirke == 'Informed' ? 'checked' : '' }}>
                                                                        <label for="rasci_dirke_informed">Informed</label>
                                                                    </div>
                                                                </div>
                                                                <!-- Radio buttons for KSKMR -->
                                                                <div class="form-group">
                                                                    <label for="kskmr">KSKMR:</label>
                                                                    <div class="radio-buttons">
                                                                        <input type="radio" id="rasci_kskmr_responsible" name="kskmr" value="Responsible" {{ $project->kskmr == 'Responsible' ? 'checked' : '' }}>
                                                                        <label for="rasci_kskmr_responsible">Responsible</label>
                                                                        <input type="radio" id="rasci_kskmr_accountable" name="kskmr" value="Accountable" {{ $project->kskmr == 'Accountable' ? 'checked' : '' }}>
                                                                        <label for="rasci_kskmr_accountable">Accountable</label>
                                                                        <input type="radio" id="rasci_kskmr_support" name="kskmr" value="Support" {{ $project->kskmr == 'Support' ? 'checked' : '' }}>
                                                                        <label for="rasci_kskmr_support">Support</label>
                                                                        <input type="radio" id="rasci_kskmr_consulted" name="kskmr" value="Consulted" {{ $project->kskmr == 'Consulted' ? 'checked' : '' }}>
                                                                        <label for="rasci_kskmr_consulted">Consulted</label>
                                                                        <input type="radio" id="rasci_kskmr_informed" name="kskmr" value="Informed" {{ $project->kskmr == 'Informed' ? 'checked' : '' }}>
                                                                        <label for="rasci_kskmr_informed">Informed</label>
                                                                    </div>
                                                                </div>
                                                                <!-- Radio buttons for KSHAM -->
                                                                <div class="form-group">
                                                                    <label for="ksham">KSHAM:</label>
                                                                    <div class="radio-buttons">
                                                                        <input type="radio" id="rasci_ksham_responsible" name="ksham" value="Responsible" {{ $project->ksham == 'Responsible' ? 'checked' : '' }}>
                                                                        <label for="rasci_ksham_responsible">Responsible</label>
                                                                        <input type="radio" id="rasci_ksham_accountable" name="ksham" value="Accountable" {{ $project->ksham == 'Accountable' ? 'checked' : '' }}>
                                                                        <label for="rasci_ksham_accountable">Accountable</label>
                                                                        <input type="radio" id="rasci_ksham_support" name="ksham" value="Support" {{ $project->ksham == 'Support' ? 'checked' : '' }}>
                                                                        <label for="rasci_ksham_support">Support</label>
                                                                        <input type="radio" id="rasci_ksham_consulted" name="ksham" value="Consulted" {{ $project->ksham == 'Consulted' ? 'checked' : '' }}>
                                                                        <label for="rasci_ksham_consulted">Consulted</label>
                                                                        <input type="radio" id="rasci_ksham_informed" name="ksham" value="Informed" {{ $project->ksham == 'Informed' ? 'checked' : '' }}>
                                                                        <label for="rasci_ksham_informed">Informed</label>
                                                                    </div>
                                                                </div>
                                                                <!-- Radio buttons for MSDMU -->
                                                                <div class="form-group">
                                                                    <label for="msdmu">MSDMU:</label>
                                                                    <div class="radio-buttons">
                                                                        <input type="radio" id="rasci_msdmu_responsible" name="msdmu" value="Responsible" {{ $project->msdmu == 'Responsible' ? 'checked' : '' }}>
                                                                        <label for="rasci_msdmu_responsible">Responsible</label>
                                                                        <input type="radio" id="rasci_msdmu_accountable" name="msdmu" value="Accountable" {{ $project->msdmu == 'Accountable' ? 'checked' : '' }}>
                                                                        <label for="rasci_msdmu_accountable">Accountable</label>
                                                                        <input type="radio" id="rasci_msdmu_support" name="msdmu" value="Support" {{ $project->msdmu == 'Support' ? 'checked' : '' }}>
                                                                        <label for="rasci_msdmu_support">Support</label>
                                                                        <input type="radio" id="rasci_msdmu_consulted" name="msdmu" value="Consulted" {{ $project->msdmu == 'Consulted' ? 'checked' : '' }}>
                                                                        <label for="rasci_msdmu_consulted">Consulted</label>
                                                                        <input type="radio" id="rasci_msdmu_informed" name="msdmu" value="Informed" {{ $project->msdmu == 'Informed' ? 'checked' : '' }}>
                                                                        <label for="rasci_msdmu_informed">Informed</label>
                                                                    </div>
                                                                </div>
                                                                <!-- Radio buttons for MKAKT -->
                                                                <div class="form-group">
                                                                    <label for="mkakt">MKAKT:</label>
                                                                    <div class="radio-buttons">
                                                                        <input type="radio" id="rasci_mkakt_responsible" name="mkakt" value="Responsible" {{ $project->mkakt == 'Responsible' ? 'checked' : '' }}>
                                                                        <label for="rasci_mkakt_responsible">Responsible</label>
                                                                        <input type="radio" id="rasci_mkakt_accountable" name="mkakt" value="Accountable" {{ $project->mkakt == 'Accountable' ? 'checked' : '' }}>
                                                                        <label for="rasci_mkakt_accountable">Accountable</label>
                                                                        <input type="radio" id="rasci_mkakt_support" name="mkakt" value="Support" {{ $project->mkakt == 'Support' ? 'checked' : '' }}>
                                                                        <label for="rasci_mkakt_support">Support</label>
                                                                        <input type="radio" id="rasci_mkakt_consulted" name="mkakt" value="Consulted" {{ $project->mkakt == 'Consulted' ? 'checked' : '' }}>
                                                                        <label for="rasci_mkakt_consulted">Consulted</label>
                                                                        <input type="radio" id="rasci_mkakt_informed" name="mkakt" value="Informed" {{ $project->mkakt == 'Informed' ? 'checked' : '' }}>
                                                                        <label for="rasci_mkakt_informed">Informed</label>
                                                                    </div>
                                                                </div>
                                                                <!-- Radio buttons for MBILP -->
                                                                <div class="form-group">
                                                                    <label for="mbilp">MBILP:</label>
                                                                    <div class="radio-buttons">
                                                                        <input type="radio" id="rasci_mbilp_responsible" name="mbilp" value="Responsible" {{ $project->mbilp == 'Responsible' ? 'checked' : '' }}>
                                                                        <label for="rasci_mbilp_responsible">Responsible</label>
                                                                        <input type="radio" id="rasci_mbilp_accountable" name="mbilp" value="Accountable" {{ $project->mbilp == 'Accountable' ? 'checked' : '' }}>
                                                                        <label for="rasci_mbilp_accountable">Accountable</label>
                                                                        <input type="radio" id="rasci_mbilp_support" name="mbilp" value="Support" {{ $project->mbilp == 'Support' ? 'checked' : '' }}>
                                                                        <label for="rasci_mbilp_support">Support</label>
                                                                        <input type="radio" id="rasci_mbilp_consulted" name="mbilp" value="Consulted" {{ $project->mbilp == 'Consulted' ? 'checked' : '' }}>
                                                                        <label for="rasci_mbilp_consulted">Consulted</label>
                                                                        <input type="radio" id="rasci_mbilp_informed" name="mbilp" value="Informed" {{ $project->mbilp == 'Informed' ? 'checked' : '' }}>
                                                                        <label for="rasci_mbilp_informed">Informed</label>
                                                                    </div>
                                                                </div>
                                                                <!-- Radio buttons for MPPTI -->
                                                                <div class="form-group">
                                                                    <label for="mppti">MPPTI:</label>
                                                                    <div class="radio-buttons">
                                                                        <input type="radio" id="rasci_mppti_responsible" name="mppti" value="Responsible" {{ $project->mppti == 'Responsible' ? 'checked' : '' }}>
                                                                        <label for="rasci_mppti_responsible">Responsible</label>
                                                                        <input type="radio" id="rasci_mppti_accountable" name="mppti" value="Accountable" {{ $project->mppti == 'Accountable' ? 'checked' : '' }}>
                                                                        <label for="rasci_mppti_accountable">Accountable</label>
                                                                        <input type="radio" id="rasci_mppti_support" name="mppti" value="Support" {{ $project->mppti == 'Support' ? 'checked' : '' }}>
                                                                        <label for="rasci_mppti_support">Support</label>
                                                                        <input type="radio" id="rasci_mppti_consulted" name="mppti" value="Consulted" {{ $project->mppti == 'Consulted' ? 'checked' : '' }}>
                                                                        <label for="rasci_mppti_consulted">Consulted</label>
                                                                        <input type="radio" id="rasci_mppti_informed" name="mppti" value="Informed" {{ $project->mppti == 'Informed' ? 'checked' : '' }}>
                                                                        <label for="rasci_mppti_informed">Informed</label>
                                                                    </div>
                                                                </div>
                                                                <!-- Radio buttons for MOPTI -->
                                                                <div class="form-group">
                                                                    <label for="mopti">MOPTI:</label>
                                                                    <div class="radio-buttons">
                                                                        <input type="radio" id="rasci_mopti_responsible" name="mopti" value="Responsible" {{ $project->mopti == 'Responsible' ? 'checked' : '' }}>
                                                                        <label for="rasci_mopti_responsible">Responsible</label>
                                                                        <input type="radio" id="rasci_mopti_accountable" name="mopti" value="Accountable" {{ $project->mopti == 'Accountable' ? 'checked' : '' }}>
                                                                        <label for="rasci_mopti_accountable">Accountable</label>
                                                                        <input type="radio" id="rasci_mopti_support" name="mopti" value="Support" {{ $project->mopti == 'Support' ? 'checked' : '' }}>
                                                                        <label for="rasci_mopti_support">Support</label>
                                                                        <input type="radio" id="rasci_mopti_consulted" name="mopti" value="Consulted" {{ $project->mopti == 'Consulted' ? 'checked' : '' }}>
                                                                        <label for="rasci_mopti_consulted">Consulted</label>
                                                                        <input type="radio" id="rasci_mopti_informed" name="mopti" value="Informed" {{ $project->mopti == 'Informed' ? 'checked' : '' }}>
                                                                        <label for="rasci_mopti_informed">Informed</label>
                                                                    </div>
                                                                </div>
                                                                <!-- Radio buttons for MBSAR -->
                                                                <div class="form-group">
                                                                    <label for="mbsar">MBSAR:</label>
                                                                    <div class="radio-buttons">
                                                                        <input type="radio" id="rasci_mbsar_responsible" name="mbsar" value="Responsible" {{ $project->mbsar == 'Responsible' ? 'checked' : '' }}>
                                                                        <label for="rasci_mbsar_responsible">Responsible</label>
                                                                        <input type="radio" id="rasci_mbsar_accountable" name="mbsar" value="Accountable" {{ $project->mbsar == 'Accountable' ? 'checked' : '' }}>
                                                                        <label for="rasci_mbsar_accountable">Accountable</label>
                                                                        <input type="radio" id="rasci_mbsar_support" name="mbsar" value="Support" {{ $project->mbsar == 'Support' ? 'checked' : '' }}>
                                                                        <label for="rasci_mbsar_support">Support</label>
                                                                        <input type="radio" id="rasci_mbsar_consulted" name="mbsar" value="Consulted" {{ $project->mbsar == 'Consulted' ? 'checked' : '' }}>
                                                                        <label for="rasci_mbsar_consulted">Consulted</label>
                                                                        <input type="radio" id="rasci_mbsar_informed" name="mbsar" value="Informed" {{ $project->mbsar == 'Informed' ? 'checked' : '' }}>
                                                                        <label for="rasci_mbsar_informed">Informed</label>
                                                                    </div>
                                                                </div>
                                                                <!-- Radio buttons for MSADB -->
                                                                <div class="form-group">
                                                                    <label for="msadb">MSADB:</label>
                                                                    <div class="radio-buttons">
                                                                        <input type="radio" id="rasci_msadb_responsible" name="msadb" value="Responsible" {{ $project->msadb == 'Responsible' ? 'checked' : '' }}>
                                                                        <label for="rasci_msadb_responsible">Responsible</label>
                                                                        <input type="radio" id="rasci_msadb_accountable" name="msadb" value="Accountable" {{ $project->msadb == 'Accountable' ? 'checked' : '' }}>
                                                                        <label for="rasci_msadb_accountable">Accountable</label>
                                                                        <input type="radio" id="rasci_msadb_support" name="msadb" value="Support" {{ $project->msadb == 'Support' ? 'checked' : '' }}>
                                                                        <label for="rasci_msadb_support">Support</label>
                                                                        <input type="radio" id="rasci_msadb_consulted" name="msadb" value="Consulted" {{ $project->msadb == 'Consulted' ? 'checked' : '' }}>
                                                                        <label for="rasci_msadb_consulted">Consulted</label>
                                                                        <input type="radio" id="rasci_msadb_informed" name="msadb" value="Informed" {{ $project->msadb == 'Informed' ? 'checked' : '' }}>
                                                                        <label for="rasci_msadb_informed">Informed</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="con-del">
                                <form action="monitoring/data/delete/{{$project->id}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class='bx bxs-trash' ></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        
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