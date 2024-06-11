<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Link CSS -->
    <link rel="stylesheet" href="css/form.css">

    <!-- Link Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Script Chart.js -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js" integrity="sha512-L0Shl7nXXzIlBSUUPpxrokqq4ojqgZFQczTYlGjzONGTDAcLremjwaWv5A+EDLnxhQzY5xUZPWLOLqYRkY0Cbw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </head>
  <body>
    <div class="sidebar">
      <div class="logo_details">
        <img src="img/gsp.png" width="25px">
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
            <i class='bx bxs-bell-ring'></i>
            <span class="link_name" style="margin-left:30px;">Notifications</span>
          </a>
          <span class="tooltip">Notifications</span>
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
      @guest
        @if (Route::has('login'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
        @endif
      @endguest
      <div class="main-menu">
        @yield('container')
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    
    <!-- js -->
    <script src="js/sidebar.js"></script>

    <!-- Include Bootstrap JS (including Popper) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
  </body>
</html>