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
    <script type="module" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
          <a href="/monitoring">
            <i class="bx bx-table"></i>
            <span class="link_name" style="margin-left:30px;">Monitoring Pekerjaan</span>
          </a>
          <span class="tooltip">Monitoring Pekerjaan</span>
        </li>
        <li>
          <a href="/dataPel">
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
      <div class="main-menu">
        <div class="section-one">
          <div class="card">
            <div class="card-body">
              <canvas id="myChart"></canvas>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <canvas id="myChart2"></canvas>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <canvas id="myChart3"></canvas>
          </div>
        </div>
        <div class="card">
          <div class="card-body" style="margin: 40px 40px 20px 20px;">
            
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!-- js -->
  
    <script>

      const statusProyek = document.getElementById('myChart');
      const persentaseProyek = document.getElementById('myChart2');

      const labels = [
          "Postpone",
          "Follow Up",
          "Implementasi",
          "Pembayaran",
          "Selesai",
      ];
      new Chart(statusProyek, {
        type: "bar",
        data: {
          labels: labels,
          datasets: [
              {
                axis: "y",
                fill: false,
                label: "Status Proyek",
                data: [{{$count_postpone}}, {{$count_followUp}}, {{$count_implementasi}}, {{$count_pembayaran}}, {{$count_selesai}}],
                backgroundColor: [
                    "rgba(255, 99, 132, 0.2)",
                    "rgba(255, 159, 64, 0.2)",
                    "rgba(255, 205, 86, 0.2)",
                    "rgba(75, 192, 192, 0.2)",
                    "rgba(54, 162, 235, 0.2)",
                    "rgba(153, 102, 255, 0.2)",
                    "rgba(201, 203, 207, 0.2)",
                ],
                borderColor: [
                    "rgb(255, 99, 132)",
                    "rgb(255, 159, 64)",
                    "rgb(255, 205, 86)",
                    "rgb(75, 192, 192)",
                    "rgb(54, 162, 235)",
                    "rgb(153, 102, 255)",
                    "rgb(201, 203, 207)",
                ],
                borderWidth: 1,
              },
            ],
        },
        options: {
          indexAxis: "y",
          scales: {
            y: {
                beginAtZero: true,
            },
          },
          maintainAspectRatio: false, // Set to false to allow resizing
        },
      });
      new Chart(persentaseProyek, {
        type: "doughnut",
        data: {
          labels: labels,
          datasets: [
              {
                fill: false,
                label: "Persentase Proyek",
                data: [{{$percentage_postpone}},{{$percentage_followUp}},{{$percentage_implementasi}},{{$percentage_pembayaran}},{{$percentage_selesai}}],
                backgroundColor: [
                    "rgba(255, 99, 132, 0.2)",
                    "rgba(255, 159, 64, 0.2)",
                    "rgba(255, 205, 86, 0.2)",
                    "rgba(75, 192, 192, 0.2)",
                    "rgba(54, 162, 235, 0.2)",
                    "rgba(153, 102, 255, 0.2)",
                    "rgba(201, 203, 207, 0.2)",
                ],
                borderColor: [
                    "rgb(255, 99, 132)",
                    "rgb(255, 159, 64)",
                    "rgb(255, 205, 86)",
                    "rgb(75, 192, 192)",
                    "rgb(54, 162, 235)",
                    "rgb(153, 102, 255)",
                    "rgb(201, 203, 207)",
                ],
                borderWidth: 1,
              },
            ],
        },
        options: {
          indexAxis: "y",
          scales: {
            y: {
                beginAtZero: true,
            },
          },
          maintainAspectRatio: false, // Set to false to allow resizing
        },
      });
    </script>
  </body>
</html>