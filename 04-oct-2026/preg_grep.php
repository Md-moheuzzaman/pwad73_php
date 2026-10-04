<?php
    $foods = array("pasta", "steak", "fish", "potatoes", "fruit");
    $food = preg_grep("/f/", $foods);
    print_r($food);
?>