<?php

//variabel dari fuzzy
$permintaan = ['naik','turun'];

//variabel
$x     = $_GET ['x'];
$nilai = 0;
$naik  = 5000;
$turun = 1000;
$rumus_turun = ($naik - $x)/($naik - $turun);
$rumus_naik = ($x - $turun)/($naik - $turun);
echo "x= ".$rumus_turun;
echo "<br>";
echo "y = ".$rumus_naik;
echo "<br>";
echo "Jadi Nilai x adalah ....";