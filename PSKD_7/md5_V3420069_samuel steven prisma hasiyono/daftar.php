<?php
session_start();
include 'db.php';
global $db;

if (isset($_POST['register'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password_md5 = md5($password);
    $email = $_POST["email"];
    $nama = $_POST["nama"];

    $sql = mysqli_query($db, "INSERT INTO `user` (`username`, `password`, `email`, `nama`) VALUES ('$username', '$password_md5', '$email', '$nama');");

    echo "<script>window.alert('Data berhasil di tambahkan  ')
          window.location='daftar.php'</script>";
    // $cek = mysqli_num_rows($sql);

    // if ($cek > 0) {
    //     $_SESSION['status'] = "login";
    //     header("location: index.php");
    // } else {
    //     echo "<script>window.alert('Kesalahan login')
    //     window.location='daftar.php'</script>";
    // }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style type="text/css">
        body {
            font-family: sans-serif;
            background-color: aqua;
        }

        .register {
            padding: 2em;
            margin: 6em auto;
            width: 17em;
            background: #fff;
            border-radius: 3px;
        }

        input {
            border-radius: 5px;
            padding: 5px;
            background: #efefef;
        }
    </style>
</head>

<body>

    <div class="register">
        <h2>Register Akun</h2>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>
                        Username
                    </td>
                    <td>
                        <input type="text" name="username" placeholder="Username" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        <input type="password" name="password" placeholder="Password" required>
                    </td>
                <tr>
                    <td>
                        email
                    </td>
                    <td>
                        <input type="email" name="email" placeholder="Email" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        nama
                    </td>
                    <td>
                        <input type="text" name="nama" placeholder="nama" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="register" value="register">
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>

</html>