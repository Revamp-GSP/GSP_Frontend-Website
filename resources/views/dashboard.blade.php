<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Link CSS -->
    <link rel="stylesheet" href="css/dashboard.css">

    <!-- Link Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Script Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
          <a href="#">
            <i class="bx bx-grid-alt"></i>
            <span class="link_name" style="margin-left:30px;">Dashboard</span>
          </a>
          <span class="tooltip">Dashboard</span>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-user"></i>
            <span class="link_name" style="margin-left:30px;">User</span>
          </a>
          <span class="tooltip">User</span>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-chat"></i>
            <span class="link_name" style="margin-left:30px;">Message</span>
          </a>
          <span class="tooltip">Message</span>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-pie-chart-alt-2"></i>
            <span class="link_name" style="margin-left:30px;">Analytics</span>
          </a>
          <span class="tooltip">Analytics</span>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-folder"></i>
            <span class="link_name" style="margin-left:30px;">File Manger</span>
          </a>
          <span class="tooltip">File Manger</span>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-cart-alt"></i>
            <span class="link_name" style="margin-left:30px;">Order</span>
          </a>
          <span class="tooltip">Order</span>
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
            <img src="img/profile.png" alt="profile image">
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
        <div class="card">
          <div class="card-body">
            <canvas id="myChart" width="300" height="100"></canvas>
          </div>
        </div>
        <div class="card">
          <div class ="card-body">
            <canvas id="myChart2" width="20" height="20"></canvas>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!-- js -->
    <script src="js/dashboard.js"></script>
    <script>
      const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
      const data = {
        labels: labels,
        datasets: [{
          label: 'Grafik Status Proyek',
          data: [65, 59, 80, 81, 56, 55, 40],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
          ],
          borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
          ],
          borderWidth: 1
        }]
      };

      const config = {
        type: 'bar',
        data: data,
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        },
      };

      const config2 = {
        type: 'pie',
        data: data,
        options: {
          scales: {
            y: {
              beginAtZero: false
            }
          }
        }
      };

      var myChart = new Chart (
        document.getElementById('myChart'),
        config
      );

      var myChart2 = new Chart (
        document.getElementById('myChart2'),
        config2
      );
    </script>
  </body>
</html>