<?php
require 'function.php';
if (isset($_POST["daftar"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>alert('Pendaftaran akun telah berhasil ditambahkan');  
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Daftar</h1>
        <form method="POST" action="" style="max-width:480px; margin:auto;">

            <input type="hidden" name="tujuan" value="DAFTAR">

            <div class="form-floating mb-3">
                <label for="floatingInput">Nama</label>
                <input name="nama" type="text" id="nama" id="floatingInput" class="form-control">
            </div>

            <div class="form-floating mb-3">
                <label for="username">Username </label>
                <input type="text" class="form-control" id="username" onkeypress="return event.charCode != 32" name="username">

            </div>

            <div class="form-floating mb-3">
                <label for="Email">Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="form-floating mb-3">
                <label for="password">Password </label>
                <input type="password" class="form-control" name="password" id="password" 
                pattern="(?=.*\d)(?=.*[a-z])(?=.*?[#?!@$%^&*-])(?=.*[A-Z]).{8,}" title="Password harus berisi setidaknya satu angka, satu huruf besar, satu huruf kecil, 
                satu huruf spesial dan minimal 8 huruf">
            </div>

            <div class="form-floating mb-3">
            <label for="password2">Konfirmasi Password </label>
                <input type="password" class="form-control" name="password2" id="password2" >
            </div>

            <div class="form-floating mb-3">
            <label for="alamat">Alamat </label>
                <input  class="form-control"  name="alamat" id="alamat"> 
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success" name="register">Daftar!</button>
            </div>
            <p> Sudah punya akun?
                <a href="login.php">Login di sini</a>
            </p>
        </form>
    </div>
    <script language="javascript" src="./java   .js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
  <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
</body>

</html>