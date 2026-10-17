<?php
function hitungluaslingkaran($jari) {
    $luas = 3.14 * $jari * $jari;
    return $luas; 
}
$jari_jari = 7;
$hasil_luas = hitungluaslingkaran($jari_jari);
echo "luas lingkaran denan jari-jari " . $jari_jari .  " adalah " . $hasil_luas;
?>