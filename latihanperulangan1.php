<?php
function hitungGrade($nilai) {
    if ($nilai >= 90) {
        return "A";
    } elseif ($nilai >= 80) {
        return "B";
    } elseif ($nilai >= 70) {
        return "C";
    } elseif ($nilai >= 60) {
        return "D";
    } else {
        return "E";
    }
}

$nilaiMhs = 90; 
$gradeMhs = hitungGrade($nilaiMhs);

echo "Nilai: " . $nilaiMhs . "<br>";
echo "Grade: " . $gradeMhs;
?> 