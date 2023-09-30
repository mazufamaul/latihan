<?php

require 'konversi.php';

// Membuat objek-objek KonversiSuhu
$dataKonversiSuhu1 = new KonversiSuhu("Celcius", 25, "Fahrenheit");
$dataKonversiSuhu2 = new KonversiSuhu("Fahrenheit", 98, "Celcius");
$dataKonversiSuhu3 = new KonversiSuhu("Celcius", 30, "Rheamur");
$dataKonversiSuhu4 = new KonversiSuhu("Rheamur", 24, "Celcius");

// Memanggil fungsi cetak untuk seluruh objek
$dataKonversiSuhu1->cetak();
$dataKonversiSuhu2->cetak();
$dataKonversiSuhu3->cetak();
$dataKonversiSuhu4->cetak();

?>
