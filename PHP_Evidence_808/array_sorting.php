<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Ques 6:</h3>
</body>
</html>

<?php

$countries = array(
    "Bangladesh" => "Dhaka",
    "Japan" => "Tokyo",
    "India" => "New Delhi",
    "Pakistan" => "Islamabad",
    "Afghanistan" => "Kabul"

);

rsort($countries);

foreach($countries as $key => $values){
    echo $key . ":" . $values . "<br>" . "<br>";
}

?>