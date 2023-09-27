<?php
$str = 'Belajar PHP di kampus merdeka';
echo $str;

$str = strtoupper($str);
echo '<br>'.$str;
$str = strtolower($str);
echo '<br>'.$str;


$ar_buah = ['apel','jambu','mangga','jambu','apel'];
sort($ar_buah);
foreach($ar_buah as $buah){
    echo '<br>'.$buah;
}
echo '<br>';
arsort($ar_buah as $buah){
    echo '<br>'.$buah;
}
?>