<?php 
$countryies = array(
    "Bangladesh" => "Dhaka",
    "India" => "New Delhi",
    "Pakistan" => "Islamabad",
    "Nepal" => "Kathmandu",
    "Japan" => "Tokyo",
);

ksort($countryies);

foreach($countryies as $key => $values){
    echo $key . ":" . $values . "<br>" ;
}

?>