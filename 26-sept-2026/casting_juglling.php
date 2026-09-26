<h2>Type Casting</h2>
<?php 
    $score = (float) "13.50";

    echo $score;
    echo "<br>";
    var_dump($score);

    echo "<br>";

    $x = (array) "Touhid";
    var_dump($x);
    echo "<pre>";

    $arr =(object) [10,20,30];
    var_dump($arr);


?>

<h2>Type Juglling</h2>
<?php 
    $total = 5;
    $count = "15";
    $total = $total + $count;
    var_dump ($total);


?>

<?php 
$val1 = "1.2e3";
$val2 = 2;
echo $val1 * $val2;

?>