<?php
require 'db.php';
global $conn;
if (isset($_POST['ubah'])) {
    $string1 = md5($_POST['teks1']);
    $string2 = md5($_POST['teks2']);
    mysqli_query($conn, "INSERT INTO `tt_md5` (`teks1`, `teks2`) VALUES ('$string1', '$string2');");
}
?>

<!doctype html>
<html lang="en">
<form method="post">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <title>FORM</title>
    </head>

    <body>
        <h1>Form Mengubah MD5</h1>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

        <style type="text/css">
            h1 {
                margin-top: 50px;
                margin-left: 480px;
            }

            .daftar {
                margin-top: 50px;
                margin-left: 480px;
                width: 400px;
                padding: 10px;
                border: 1px solid #fff;
                background: cyan;
            }

            .hasil {
                margin-top: 50px;
                margin-left: -150px;
            }

            input[type=teks] {
                margin: 5px auto;
                width: 100%;
                padding: 10px;
            }

            input[type=submit] {
                margin: 35px auto;
                float: left;
                padding: 5px;
                width: 380px;
                border: 1px solid #fff;
                color: #fff;
                background: cyan;
                cursor: pointer;
            }
        </style>
        <div class="daftar">
            <div class="mb-3">
                <label for="" class="form-label">Masukkan TEKS</label>
                <input type="text" class="form-control" id="" name="teks1" placeholder="Masukkkan Teks Pertama">
                <br>
                <input type="text" class="form-control" id="" name="teks2" placeholder="Masukkkan Teks Kedua">
                <div class="form-group">
                    <input type="submit" name="ubah" value="UBAH" class="btn btn-primary btn-block">
                </div>

            </div>

        </div>
        <br>
        <br>
        <H1>HASIL MD5</H1>
        <div class="hasil">

            <table border="1" cellspacing="0" cellpadding="5" align="center">
                <tr>
                    <td>TEKS PERTAMA : <?php echo ($string1); ?></td>
                </tr>
                <tr>
                    <td>TEKS KEDUA : <?php echo ($string2); ?></td>
                </tr>
            </table>
        </div>
    </body>

</html>