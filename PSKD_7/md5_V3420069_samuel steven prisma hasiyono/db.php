<?php 
    $db = mysqli_connect("localhost","root","","prak_md5");

    if (mysqli_connect_error()) {
        echo "koneksi database gagal". mysqli_connect_error();
    }
