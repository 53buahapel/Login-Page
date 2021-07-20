<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Welcome</title>
    <link rel="shortcut icon" href="Image\logo.png" />
    <link rel="stylesheet" href="styles.css" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
  </head>
  <body>
    <div class="contain">
      <!-- Nav bar -->
      <div class="navbar">
        <div class="kiri">
          <a href="index.html"><img src="Image\logo.png" height="30px" /></a>
          <h4 style="padding-left: 1rem; text-transform: uppercase">welcome page</h4>
        </div>

        <div class="kanan">
          <div class="link">
            <a href="logout.php" style="border-bottom: 2px white solid; color: white">LOGOUT</a>
          </div>
          <div class="link">
            <a href="about.html" style="color: white"></a>
          </div>
        </div>
      </div>
      <!-- Heading -->
      <section class="jumbotron">
        <img src="Image/user.png" alt="Logo" style="width: 200px" class="rounded-circle"/>
        <br />
        <br />
        <h1 class="display-4" style="font-weight: bold; color: white">Selamat Datang</h1>
        <h3 style="font-weight: bold; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size: 50px; text-transform: uppercase;"><?php echo $_SESSION['username'] ?></h3>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#fff"
            fill-opacity="1"
            d="M0,96L60,90.7C120,85,240,75,360,96C480,117,600,171,720,181.3C840,192,960,160,1080,149.3C1200,139,1320,149,1380,154.7L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
          ></path>
        </svg>
      </section>
      <!-- Information -->
      <div class="information text-center">
        <p style="font-size: 30px;">Selamat datang di Welcome Page</p>
        <p>Selalu Jaga Kesehatan di Masa Pandemi</p>
        <p>Semoga Sehat Selalu</p>

      </div>
<!-- Footer -->
<footer class="bg-info text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/oiinirafi/" target="_blank" role="button"
        ><img src="Image/instagram.png" height="20px">
      </a>
      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/RafiNurArdiansyah/" target="_blank" role="button"
        ><img src="Image/github.png" height="20px">
      </a>
    </section>
    <!-- Section: Social media -->
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Rafi Nur Ardiansyah
  </div>
</footer>
<!-- Footer -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
