<?php

require 'gempa.php';

$g1 = new Gempa('Banten',1);
$g2 = new Gempa('Banten2',2);
$g3 = new Gempa('Banten3',3);
$g4 = new Gempa('Banten4',4);



$g1->cetak();
$g2->cetak();
?>