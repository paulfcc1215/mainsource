<?php
    
    require 'config.php';
    echo 'helper';

    var_dump(class_exists('Helpers'));

    $h = new Helpers();
    
    var_dump($h);
    die();