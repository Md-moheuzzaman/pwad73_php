<?php
    $path = 'D:\Work\xampp8.2\htdocs\pwad73_php\myfile.php';

    $info = pathinfo($path);

    echo "<pre>";

    print_r($info);

    echo $info ['basename'];
    echo "<br>";
    echo $info ['dirname'];
    ?>