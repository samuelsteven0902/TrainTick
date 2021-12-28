<?php
$key = $_GET["key"];
$nmfile = "enkripsi.txt";
$fp = fopen($nmfile, "r"); //buka file hasil enkripsi
$isi = fread($fp, filesize($nmfile));

for($i=0; $i<strlen($isi); $i++){
    $kode[$i]=ord($isi[$i]); //menunjukan huruf atau lambang itu urutan keberapa dalam ASCII
    $b[$i]=($kode[$i] - $key) % 256; //proses dekripsi Caesar
    $c[$i]=chr($b[$i]); //rubah desimal ke ASCII
}
echo "kalimat ciphertext : ";
for ($i=0; $i<strlen($isi); $i++){
    echo $isi[$i];
}
echo "<br>";
echo "hasil deskripsi = ";
for ($i=0; $i<strlen($isi); $i++){
    echo $c[$i];
}
echo "<br>"
?>