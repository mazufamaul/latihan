<?php

include_once 'top.php';
include_once 'menu.php';

?>

<div>
    <div class="container-fluid px-4">
     <!-- <h1>selamat datang di halaman admin</h1> -->

    <?php
 
    //membuat login sederhana untuk mengerahkan url ke file yang mempunya extension php


    $url = $_GET['url'];
    if($url == 'dashboard.php'){
        include_once 'dashboard.php';
    } else if(!empty($url)){
        include_once ''.$url.'.php';
    } else {
        include_once 'dashboard.php';
    }

    ?>
    </div>
</div>

<?php
include_once 'bottom.php';
?>