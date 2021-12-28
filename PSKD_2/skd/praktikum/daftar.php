<?php
    require 'functions.php';
    if(isset($_POST["daftar"])){
        if(registrasi($_POST)>0){
            echo "
            <script>
                alert('User berhasil di tambahkan');
            </script>
             ";
             echo '<script>window.location="../praktikum/login.php"</script>';
        }
        else {
            echo mysqli_error($conn);
        }
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Daftar</title>
</head>

<body>

    
    <div class="container">
        <div class="container-fluid">
    <h4>Signup</h4>
    <form action="" method="post">
        <table>
            <tr>
                <td><input type="text" name="username" id="username" placeholder="Username"></td>
            </tr>
            <tr>
                <td><input type="text" name="email" id="email" placeholder="Email"></td>
            </tr>
            <tr>
                <td><input type="password" name="password" id="password" placeholder="Password"></td>
            </tr>
            <tr>
                <td><input type="password" name="password2" id="password2" placeholder="Konfirmasi Password"></td>
            </tr>
            <tr>
                <td><input type="text" name="nama" id="nama" placeholder="Nama anda"></td>
            </tr>
            <tr>
                <td><input type="text" name="hp" id="hp" placeholder="Nomor seluler"></td>
            </tr>
            <tr>
                <td><input type="text" name="alamat" id="alamat" placeholder="Alamat"></td>
            </tr>
            <tr>
                <!-- <td>role</td> --><td>
                <select class="form-control" name="role" id="">
                    <option value="">--role--</option>
                    <option value="admin" >Admin</option>
                    <option value="member">Member</option>
                </select>
                </td>
            </tr>
            <tr>
                <!-- <td></td> -->
                <td>
                    <button type="submit" name="daftar">Daftar</button>
                </td>
            </tr>
        </table>
        <p>Sudah punya akun ? <a href="../praktikum/login.php">Login</a></p>
    </form>
    </div>
    </div>


</body>

</html>