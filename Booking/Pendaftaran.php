<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Booking - Zahrarental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Zahrarental</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Zahrarental</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="test.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Aboutrental/About.html">About rental</a>
          </li>
            <a class="nav-link" href="Login/loginnew.php">Login</a>
          </li>
          </li>
            <a class="nav-link" href="Login/register.php">Sign up</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

    <!-- Formulir Pendaftaran Booking -->
    <div class="container mt-5 pt-5">
        <h2 class="text-center mb-4">Pendaftaran Booking</h2>
        <form action="booking.html" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Tempat Tinggal</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="mb-3">
                <label for="datetime" class="form-label">Tanggal & Waktu</label>
                <input type="datetime-local" class="form-control" id="datetime" name="datetime" min="<?php echo date('Y-m-d\TH:i', strtotime('+1 day')); ?>" required>
            </div>
            <div class="mb-3">
                <label for="payment" class="form-label">Pembayaran</label>
                <select class="form-select" id="payment" name="payment" required>
                    <option value="dana">Pembayaran via Dana</option>
                    <option value="dana">Pembayaran via bank mandiri</option>
                    <option value="dana">Pembayaran via gopay</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">Daftar Booking</button>
        </form>
    </div>
    <!-- javascript -->
    <script src="booking.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
