<?php
    $file = '../myfile.php';
    $timestamp = fileatime($file);

    echo date("d m y:m:i", $timestamp);
?>