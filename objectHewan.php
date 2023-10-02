<?php
    require_once 'Kucing.php';
    require_once 'Anjing.php';
    require_once 'Kambing.php';
    
    $h1 = new Kucing(); 
    $h2 = new Anjing();
    $h3 = new Kambing();

    $suara_hewan = [$h1, $h2, $h3];

    foreach($suara_hewan as $hewan){
        echo '<br/>'.$hewan->bersuara();
    }

?>
