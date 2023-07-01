<?php
session_start();
require 'config.php';

// Cek apakah pengguna sudah login, jika ya, alihkan ke halaman admin
if(isset($_SESSION['username'])){
    header("location: index_admin.php");
    exit;
}

// Menangkap data yang dikirim dari form login
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Menyeleksi data pada tabel login_admin dengan username dan password yang sesuai
    $data = mysqli_query($db, "SELECT * FROM login_admin WHERE username='$username' AND password='$password'");

    // Menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);

    if ($cek > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        header("location: index_admin.php");
        exit;
    } else {
        $pesan = "Login gagal! Periksa kembali username dan password Anda.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        .container {
            width: 300px;
            margin: 0 auto;
            margin-top: 100px;
            text-align: center;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .message {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Login Admin</h3>
        <?php if(isset($pesan)): ?>
        <p class="message"><?php echo $pesan; ?></p>
        <?php endif; ?>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="login" value="Login">
        </form>
    </div>
</body>
</html>
