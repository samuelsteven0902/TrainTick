<?php
$kunci1=7;
$kunci2=10;
$isi = "CZOLNE";
$a_inv = 0;
$flag = 0;
$batas = 65;
for($i=0;$i<26;$i++){
    $flag = ($kunci1*$i)%26;

    if($flag == 1){
        $a_inv = $i;
    }
}
for($i=0; $i<strlen($isi); $i++){
    $kode[$i]=ord($isi[$i]); //menunjukan huruf atau lambang itu urutan keberapa dalam ASCII
    $b[$i]=(($a_inv*(($kode[$i] -$batas)- $kunci2))% 26); //proses dekripsi Caesar
    if($b[$i]<0){
        $b[$i] = 26 - abs($b[$i]);
    }
    $hasil = $b[$i]+$batas;
    echo chr($hasil);
    echo '</br>';
    //$c[$i]=chr($b[$i]); //Tak MAtiin yaa bund ntar diutek2 sendiri
}
// echo $a_inv;
echo "kalimat ciphertext : ";
for ($i=0; $i<strlen($isi); $i++){
    echo $isi[$i];
}
echo "<br>";
echo "hasil deskripsi = ";
//for ($i=0; $i<strlen($isi); $i++){
    //echo $c[$i];
//}
echo "<br>"


?>