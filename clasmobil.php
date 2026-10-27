<?php
class Mobil1 {
    
    Public function nyalakan ($model) {
        echo "Mobil $model dinyalakan. <br>";
    }
}

$mobil = new Mobil1 ();

$mobil->nyalakan("Pakjero" .  "Fortuner"); // Output Mobil Pakjero dinyaalakan
$mobil->nyalakan("Wuling" .  "AirEV"); // Output Mobil Wuling dinyalakan
?> 