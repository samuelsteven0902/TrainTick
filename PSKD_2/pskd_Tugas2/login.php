<?php 
session_start();
require 'function.php';
if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $cek = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    //Cek username
    if ( mysqli_num_rows($cek) === 1 ){
        //Cek password
        $row = mysqli_fetch_assoc($cek);    
        if (password_verify($password, $row["password"])){
            //Mengatur session
            $_SESSION["login"] = true;
            header("Location: index.php");
            exit;
        }
    }else{
        //data tidak di temukan
         echo '<div class="alert alert-warning">
             Username dan Password anda salah!
            </div>';
       }
    $error = true;
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
          <h1>Login</h1>
            <form class="form-horizontal" action="index3.php">

                <!-- tipe hidden tidak akan tampil pada website --> 
                <input name="tujuan" type="hidden" value="LOGIN" >

                <label for="username" class="sr-only">Username</label>
                <br>
                <input name="username" type="text" id="username">
                <br>
                <label for="password" class="sr-only">Password</label>
                <br>
                <input name="password" type="password" id="password">
                <br>

                <button type="submit" class="btn btn-outline-primary mt-4" name="login">Log In</button>
                
                <p> Belum punya akun?
                  <a href="daftar.php">Daftar di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>