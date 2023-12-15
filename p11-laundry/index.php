<!-- @format -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <header>
    <div class="container d-flex justify-content-center mt-5">
      <h1 class="title fw-bold">Sistem Informasi Laundry</h1>
    </div>
  </header>

  <main>

    <div class="container mt-5">
      <div class="form-login mx-auto border border-primary p-5 rounded" style="width: 500px">

        <?php
        $pesan = $_GET["pesan"];

        $wrongPasswordOrUsername = "
              <div class='alert alert-danger' role='alert'>
              Password atau Username Salah
              </div>
           ";

        $blumLogin = "
        <div class='alert alert-warning' role='alert'>
        anda belum login
        </div>
        ";
        $logout = "
        <div class='alert alert-primary' role='alert'>
        anda sudah logout
        </div>
        ";

        if ($pesan == "passwordsalah") {
          echo $wrongPasswordOrUsername;
        } else if ($pesan == "blumlogineuy") {
          echo $blumLogin;
        } else if ($pesan == "logout") {
          echo $logout;
        }
        ?>



        <form action="login.php" method="post">
          <div class="mb-3">
            <label for="username" class="form-label fw-bold">Username</label>
            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username" />
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" />
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>