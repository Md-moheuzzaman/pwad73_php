<?php
$cities = array("Dhaka","Bogura","Rangpur","Naogaon","Jaipurhat");
echo "<pre>";
print_r($cities);

?>

<?php
$cities = array("Dhaka","Bogura","Rangpur","Naogaon","Jaipurhat");
echo "<pre>";
array_push($cities, "Faridpur","Manikgang");
print_r($cities);
?>

<?php
$cities = array("Dhaka","Bogura","Rangpur","Naogaon","Jaipurhat");
echo "<pre>";
array_unshift($cities);
print_r($cities);

?>

<?php 
    $cities = array("Dhaka","Bogura","Rangpur","Naogaon","Jaipurhat");

    for($i=0; $i<count($cities); $i++){
        echo $cities[$i] ."<br>";
    }


    ?>

    <?php 
    $cities = array("Dhaka","Bogura","Rangpur","Naogaon","Jaipurhat");

        $i = 0;
        while($i<count($cities)){
           echo $cities[$i]."<br>";
        $i++;
       
        }
    


