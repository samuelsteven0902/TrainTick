<?php
// $key = $_GET["key"];
$kunci1 = $_GET["key1"];
$kunci2 = $_GET["key2"];
$nmfile = "enkripsi.txt";
$fp = fopen($nmfile, "r"); //buka file hasil enkripsi
$isi = fread($fp, filesize($nmfile));

$a_inv = 0;
$flag = 0;

for($i=0;$i<26;$i++){
    $flag = ($kunci1*$i)%26;

    if($flag == 1){
        $a_inv = $i;
    }
}
// for($i=0; $i<strlen($isi); $i++){
//     $kode[$i]= ord($isi[$i]);
//     $b[$i]=((1/$kunci1)*($kode[$i]-$kunci2))%256;
// }
for($i=0; $i<strlen($isi); $i++){
    $kode[$i]=ord($isi[$i]); //menunjukan huruf atau lambang itu urutan keberapa dalam ASCII
    $b[$i]=($a_inv*($kode[$i] - $kunci2))% 256; //proses dekripsi Caesar
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