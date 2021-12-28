<?php

$conn = mysqli_connect ('localhost','root','','prakskd');

            

#fungsi registrasi web
function registrasi($data){
    global $conn;
    $username = strtolower ($data["username"]);
    $email =  $data["email"];
    $password = mysqli_escape_string ($conn, $data["password"]);
    $password2 = mysqli_escape_string ($conn, $data["password2"]);
    $nama =  $data["nama"];
    $hp =  $data["hp"];
    $alamat =  $data["alamat"];
    $role =  $data["role"];
    
#username
        $user_name = mysqli_query($conn, " SELECT username FROM db_user WHERE username = '$username'");
    
        if (mysqli_fetch_assoc($user_name)){
            echo "
            <script>
                alert('username sudah terdaftar');
            </script>
            ";
            return false;
        }    
#email
        $email_user = mysqli_query($conn, "SELECT email FROM db_user
                            WHERE email = '$email
                            '");


        
        global $conn;
        if ($password != $password2){
            echo "
            <script>
                alert('konfirmasi tidak sama');
            </script>
            ";
            return false;
        } else {

            $password = password_hash($password, PASSWORD_DEFAULT); 
            mysqli_query ($conn, "INSERT INTO db_user VALUES ('','$username','$email','$password','$nama','$hp','$alamat','$role')");

           return mysqli_affected_rows($conn);
        }
}


?>