<?php
$kalimat = $_GET["kata"];
$kunci1 = $_GET["key1"];
$kunci2 = $_GET["key2"];

// $kunci1=7;
// $kunci2=10;
// $kalimat ="SHALLOM";

for($i=0;$i<strlen($kalimat);$i++){
    $kode[$i]=ord($kalimat[$i]);//mengubah plainteks ke decimall
    $b[$i]=((($kunci1*($kode[$i]-65) ) + $kunci2) % 26)+65; //perhitungan kunci dan plainteks
    $c[$i]=chr($b[$i]);//mengubah decimal ke ASCII
}
echo "kalimat ASLI : ";
for($i=0;$i<strlen($kalimat);$i++){
    echo $kalimat[$i];
}
echo "<br>";
echo "hasil enkripsi : ";
$hsl='';
for ($i=0;$i<strlen($kalimat);$i++)
{
    echo $c[$i];
    $hsl = $hsl . $c[$i];
}
echo "<br>";
echo "<br>";
//simpan data di file
$fp = fopen("enkripsi.txt","w");
fputs($fp,$hsl);
fclose($fp);


?>