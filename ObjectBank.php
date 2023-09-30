<?php

require 'class.php';

$n1 = new Bank('001','Andi','60000');
$n2 = new Bank('002','Aji','70000');
$n3 = new Bank('003','Rinaldi','80000');
$n4 = new Bank('004','depo','90000');
$n5 = new Bank('005','sianag','100000');


echo '<h3 align="center">'.bank::BANK.'</h3>';

$n1->cetak();
$n2->cetak();
$n3->cetak();
$n4->cetak();
$n5->cetak();





?>