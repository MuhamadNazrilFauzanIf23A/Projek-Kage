<?php
require 'DB/Dbcard.php';
$result = $conn->query("SELECT * FROM list_mobil"); 
$list_mobil = $result->fetch_all();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="foto/logo.jpg" />
    <title>Zahrarental</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css?v=<?= time(); ?>" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container">
    <a class="navbar-brand fs-4 " href="#">Zahrarental</a>
    <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Sidebar -->
    <div class="sidebar offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header" style="border-bottom: 1px solid black;">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Zahrarental</h5>
        <button type="button" class="btn-close btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <!-- sidebar body -->
      <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
        <ul class="navbar-nav justify-content-center align-items-center fs-6 flex-grow-1 pe-3">
          <li class="nav-item mx-2">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="AboutRental/About.php">About rental</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="AboutRental/About.php">Contact</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="AboutRental/About.php">Apa ya</a>
          </li>
        </ul>
        <!-- Login/sign up -->
         <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
          <a href="Login/loginnew.php" class="text-black">Login</a>
          <a href="Login/register.php" class="text-white text-decoration-none px-3 py-1 bg-primary rounded-4">Sign up</a>
        </div>
      </div>
    </div>
  </div>
</nav>

    <!-- Background -->
    <div style="height: 70vh; background: url('Foto/rawr.jpg') no-repeat center center/cover;">
    </div>

    <!-- Card List -->
    <div class="container mt-5">
    <div class="row">
        <?php foreach ($list_mobil as $Lm) : ?>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="Foto/<?= $Lm[0]; ?>" class="card-img-top" alt="Mobil">
                    <div class="card-body text-center">
                    <h5 class="card-title"><?= $Lm[2]; ?></h5>
                    <p class="card-text"><?= $Lm[3]; ?></p>
                    <p class="card-text"><?= $Lm[4]; ?></p>
                        <a href="Booking/Pendaftaran.php" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>
