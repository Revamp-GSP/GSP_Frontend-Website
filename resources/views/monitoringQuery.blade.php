<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Monitoring</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/monitoring.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script type="module" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js" integrity="sha512-L0Shl7nXXzIlBSUUPpxrokqq4ojqgZFQczTYlGjzONGTDAcLremjwaWv5A+EDLnxhQzY5xUZPWLOLqYRkY0Cbw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<div class="sidebar">
      <div class="logo_details">
      <img src="{{ asset('img/gsp.png') }}" width="25px">
        <div class="logo_name">Dashboard Monitoring</div>
        <i class="bx bx-menu" id="btn"></i>
      </div>
      <ul class="nav-list">
        <li>
          <a href="/dashboard">
            <i class="bx bx-grid-alt"></i>
            <span class="link_name" style="margin-left:30px;">Dashboard</span>
          </a>
          <span class="tooltip">Dashboard</span>
        </li>
        <li>
          <a href="/user">
            <i class="bx bx-user"></i>
            <span class="link_name" style="margin-left:30px;">User</span>
          </a>
          <span class="tooltip">User</span>
        </li>
        <li>
          <a href="{{ route('project.index') }}">
            <i class="bx bx-table"></i>
            <span class="link_name" style="margin-left:30px;">Monitoring Pekerjaan</span>
          </a>
          <span class="tooltip">Monitoring Pekerjaan</span>
        </li>
        <li>
          <a href="{{ route('customers.index') }}">
            <i class="bx bx-folder"></i>
            <span class="link_name" style="margin-left:30px;">Data Pelanggan</span>
          </a>
          <span class="tooltip">Data Pelanggan</span>
        </li>
        <li>
          <a href="/service">
            <i class="bx bx-wrench"></i>
            <span class="link_name" style="margin-left:30px;">Services</span>
          </a>
          <span class="tooltip">Services</span>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-cog"></i>
            <span class="link_name" style="margin-left:30px;">Settings</span>
          </a>
          <span class="tooltip">Settings</span>
        </li>
        <li class="profile">
          <div class="profile_details">
            <img src="img/mainProfile.png" alt="profile image">
            <div class="profile_content">
              <div class="name" style="color:black;">Park-Ri Zky</div>
              <div class="designation" style="color:black;">Business Development</div>
            </div>
          </div>
          <i class="bx bx-log-out" id="log_out"></i>
        </li>
      </ul>
    </div>

    <div class="home-section">

      <div class="main-menu">
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
            <option value="" selected>Silahkan Pilih Status</option>
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
            <option value="" selected>Silahkan Pilih Pelanggan</option>
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
            <option value="" selected>Pilih Account Marketing</option>
            <option value="Administrator" {{ session('filter_accountMarketing') == 'Administrator' ? 'selected' : '' }}>Administrator</option>
            <option value="Busdev" {{ session('filter_accountMarketing') == 'Busdev' ? 'selected' : '' }}>Busdev</option>
            <option value="Direksi" {{ session('filter_accountMarketing') == 'Direksi' ? 'selected' : '' }}>Direksi</option>
            <option value="Manager Keuangan" {{ session('filter_accountMarketing') == 'Manager Keuangan' ? 'selected' : '' }}>Manager Keuangan</option>
            <option value="Manager Opha" {{ session('filter_accountMarketing') == 'Manager Opha' ? 'selected' : '' }}>Manager Opha</option>
            <option value="Ophar" {{ session('filter_accountMarketing') == 'Ophar' ? 'selected' : '' }}>Ophar</option>
            <option value="Satuan Kinerja" {{ session('filter_accountMarketing') == 'Satuan Kinerja' ? 'selected' : '' }}>Satuan Kinerja</option>
            <option value="SDM" {{ session('filter_accountMarketing') == 'SDM' ? 'selected' : '' }}>SDM</option>
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
      </div>
    </div>
</body>
</html>