<?php
function hitungnilaiakhir($tugas, $uts, $uas) {
    $nilai_akhir = ($tugas * 0.30) + ($uts * 0.30)  + ($uas * 0.40);
    if ($nilai_akhir >= 70) {
        $status = "lulus";
    } else {
        $status = "tidak lulus";
    }
    echo "Output : <br>";
    echo "Nilai akhir : " . $nilai_akhir . "<br>";
    echo "Status : " . $status . "<br>";
}
hitungnilaiakhir(80, 80, 87.5);
?>