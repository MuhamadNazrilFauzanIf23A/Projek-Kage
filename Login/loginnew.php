<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_or_phone = $_POST['email_or_phone'];
    $password = $_POST['password'];

    if (isset($_SESSION['user']) && $_SESSION['user']['email_or_phone'] === $email_or_phone && $_SESSION['user']['password'] === $password) {
        $success = "Login berhasil!";
    } else {
        $error = "Email/nomor HP atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css"> 
</head>
<!-- Form login -->
<body class="class-page">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px;">
            <h1 class="text-center mb-4">Login</h1>
            <?php if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
            <?php if (!empty($success)) echo "<div class='alert alert-success'>$success</div>"; ?>
            <form method="POST" action="">
                <div class="mb-3">
                    <input type="text" name="email_or_phone" class="form-control" placeholder="Nomor HP atau email" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                <button type="submit" class="btn btn-primary w-100 mt-3">Log In</button>
            </form>
            <p class="mt-3 text-center">Belum memiliki akun? <a href="register.php">Daftar dulu</a></p>
        </div>
    </div>
<!-- bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
