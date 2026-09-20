<?php include_once('dbconfig.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $data = $conn->query("SELECT * FROM students");
        
        #var_dump($row);

        while($row = $data->fetch_object()){
           echo $row->name . "<br>";     
           echo $row->email . "<br>";     
           echo $row->phone . "<br>";     
        }
        
    
    ?>
</body>
</html>