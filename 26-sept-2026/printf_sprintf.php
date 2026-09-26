<?php 

//printf("Bar inventory: %d bottles of tonic ", 1000);
printf("Learning Web development you have to learn %s,%s,", "HTML", "CSS");

echo "<br>";

printf("$ %.2f", 100, 200);
?> 

<h3>Sprintf</h3>
<?php

$cost = sprintf("$%.2f", 43.2);
echo $cost;

?>