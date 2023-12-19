<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php

    session_start();
    if ($_SESSION["status"] != "login") {
        header("Location:../index.php?pesan=blumlogineuy");
    }
    ?>

    <?php
    $navbar = " <header>
       <nav class='navbar navbar-expand-lg bg-dark  '>
           <div class='container '>
               <a class='navbar-brand fw-bold text-light' href='admin.php'>Laundrymu</a>
               <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                   <span class='navbar-toggler-icon'></span>
               </button>
               <div class='collapse navbar-collapse' id='navbarNav'>
                   <ul class='navbar-nav ms-auto'>
                       <li class='nav-item'>
                           <a class='nav-link active text-light' aria-current='page' href='admin.php'>Home</a>
                       </li>
                       <li class='nav-item'>
                           <a class='nav-link text-light' href='pelanggan.php'>Pelanggan</a>
                       </li>
                       <li class='nav-item'>
                           <a class='nav-link btn btn-danger active text-light' href='logout.php'>Logout</a>
                       </li>

                   </ul>
               </div>
           </div>
       </nav>

   </header>'";

    echo $navbar;

    echo  "<h1 class='fw-bold container'>hallo, " . $_SESSION['username'] . "!</h1>";

    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>