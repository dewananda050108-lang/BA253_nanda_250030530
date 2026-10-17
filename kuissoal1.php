<?php
$daftarangka = range(1, 20);
foreach ($daftarangka as $angka){
    if ($angka % 3 == 0) {
        echo " angka " . $angka . " habis di bagi 3 <br> ";
    }
}
?>