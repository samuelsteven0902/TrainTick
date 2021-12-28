<?php
$key = $_GET["key"];
$nmfile = "enkripsi.txt";
$fp = fopen($nmfile, "r"); //buka file hasil enkripsi
$isi = fread($fp, filesize($nmfile));
$enk_text = str_split($isi);
$n = count($enk_text);
$kunci = str_split($key);
$m = count($kunci);
$bataskode = 65;
$bataslow = 97;

for ($i = 0; $i < $n; $i++) {
    $dek[$i] = ord($enk_text[$i]);
    if ( $dek[$i] >= 65 &&  $dek[$i] <= 90) {
        $dek_text[$i] =(($dek[$i]-(ord($kunci[$i % $m])))%26)+$bataskode;
        if($dek_text[$i]<65){
            $dek_text[$i]+=26;
        }
    } else if ($dek[$i]>= 97 &&  $dek[$i] <= 122) {
         $dek_text[$i] =(($dek[$i]-(ord($kunci[$i % $m])))%26)+$bataslow;
         if($dek_text[$i]<97){
            $dek_text[$i]+=26;
        }
    }
}
echo "kalimat ciphertext : ";
for ($i=0; $i<strlen($isi); $i++){
    echo $isi[$i];
}
echo "<br>";
echo "hasil deskripsi = ";
for ($i=0; $i<strlen($isi); $i++){
    echo chr($dek_text[$i]);
    // echo ($dek_text[$i]);
}
echo "<br>"

?>
