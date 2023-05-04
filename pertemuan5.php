<?php
//koreksi quiz (percabangan)
$username = 123;
$password = 123;
$tipe = "admin";

if (!($username == $password)){  //! = NOT
    echo "aman";
} else if($tipe == "admin"){
    echo "bahaya";
}
?>

<br>
<br>
<br>

<?php

$bangundatar = "segitiga";

switch($bangundatar){
    case 'segitiga':
        echo 'sisi jumlahnya 3 <br>';
        echo 'besarnya setiap sudut 60 derajat <br>';
        echo ' memiliki alas dan tinggi';
        // break;
    case 'persegi':
        echo'sisi jumlahnya 4 <br>';
        echo 'besar sudutnya 90 derajat <br>';
        echo 'memiliki 4 sisi yang sama panjang';
        break;
    default:
        echo'bangun datar belum terdaftar';
}

?>

<br>
<br>
<br>

<?php

$bulan = 13;

switch($bulan){
    case 1:
        echo "Bulan ke $bulan adalah Januari";
        break;
    case 2:
        echo 'Bulan ke '.$bulan.' adalah Februari';
        break;
    case 3:
        echo "Bulan ke $bulan adalah Maret";
        break;
    case 4:
        echo 'Bulan ke '.$bulan.' adalah April';
        break;
    case 5:
        echo "Bulan ke $bulan adalah Mei";
        break;
    case 6:
        echo 'Bulan ke '.$bulan.' adalah Juni';
        break;
    case 7:
        echo "Bulan ke $bulan adalah Juli";
        break;
    case 8:
        echo 'Bulan ke '.$bulan.' adalah Agustus';
        break;
    case 9:
        echo "Bulan ke $bulan adalah September";
        break;
    case 10:
        echo 'Bulan ke '.$bulan.' adalah Oktober';
        break;
    case 11:
        echo "Bulan ke $bulan adalah November";
        break;
    case 12:
        echo 'Bulan ke '.$bulan.' adalah Desember';
        break;
    default:
        echo "Bulan ke $bulan Belum terdaftar di data anda ";
        break;

}

?>

<!-- if else digunakan jika punya bnyk kondisi dan bisa flexsibel
untuk kasus yg cocokan angka bisa memakai switch case -->

<br>
<br>

<?php
$namaHari = "senin";

switch ($namaHari){
    case "senin";
        echo "Kuliah";
        break;
    case "selasa";
        echo "Kuliah";
        break;
    case "rabu";
        echo "Kuliah";
        break;
    case "kamis";
        echo "Kerja";
        break;
    case "jumat";
        echo "Kerja";
        break;
    case "sabtu";
        echo "Kerja";
        break;
    default:
        echo "saat nya pacaran";
}
?>