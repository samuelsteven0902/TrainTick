<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require "vendor/autoload.php";
$mail = new PHPMailer(true);
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
//ganti dengan email dan password yang akan di gunakan sebagai email pengirim
$mail->Username = 'samuelhasiyono11@gmail.com';
$mail->Password = 'Samuel11';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
//ganti dengan email yg akan di gunakan sebagai email pengirim
$mail->setFrom('samuelhasiyono11@gmail.com', 'Samuel Steven');
$mail->addAddress($_POST['email'], $_POST['nama']);
$mail->isHTML(true);
$mail->Subject = "Aktivasi pendaftaran";
$mail->Body = "Selemat, anda berhasil membuat akun. Untuk mengaktifkan akun anda silahkan klik link dibawah ini.
 <a href='http://localhost/skd/Tugas2/activation.php?t=".$token."'>http://localhost/pskd_Tugas2/activation.php?t=".$token."</a>  ";
$mail->send();


