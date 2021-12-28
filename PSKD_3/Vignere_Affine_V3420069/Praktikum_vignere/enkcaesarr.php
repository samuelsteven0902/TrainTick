<?php
$kalimat = $_GET["kata"];
$key = $_GET["key"];
for($i=0;$i<strlen($kalimat);$i++){
    $kode=ord($kalimat[$i]);
    // $b[$i]=($kode[$i]+$key)%256;
    for($j=0;$j<$key;$j++){
        $kode++;
    }
    $c[$i]=chr($kode);
    // $c[$i]=chr($b[$i]);
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
//simpan data di file
$fp = fopen("enkripsi.txt","w");
fputs($fp,$hsl);
fclose($fp);


?>