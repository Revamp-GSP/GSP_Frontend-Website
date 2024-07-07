<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
  </head>
  <body>
    <div class="layout">
      <div class="regisBox">
        <div class="brand">
          <img src="img/gsp.png" alt="gsp" width="70">
          <a style="margin: 10px; color:rgb(0, 0, 0); font-weight:700; font-size:20px;">Monitoring Management System</a>
        </div>
        <div class="title">
          <a>Create your Account</a>
        </div>
        <form class="register-form">
          <div class="input-box">
            <label for="exampleInputUsername" class="form-label">Username :</label>
            <input name="username" type="username" class="form-control" id="username" placeholder="enter username" required>
          </div>
          <div class="input-box" style="margin-top: 15px">
            <label for="exampleInputEmail" class="form-label">Email :</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="enter email" required>
          </div>
          <div class="input-box" style="margin-top: 15px">
            <label for="exampleInputPassword" class="form-label">Password :</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="enter email" required>
          </div>
          <div class="input-box" style="margin-top: 15px">
            <label for="exampleInputRole" class="form-label">Jabatan :</label>
            <input name="role" type="role" class="form-control" id="role" placeholder="masukkan jabatan anda" required>
          </div>
          <div class="d-grid gap-2" style="margin-top: 15px">
            <button class="btn registerButton" type="submit">Register</button>
          </div>

        </form>
      </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>