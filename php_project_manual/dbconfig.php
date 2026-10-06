<?php 
    #connection with mySQL

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "php_project_manual";

    //$conn = mysqli_connect($host,$user,$pass,$db);
    $conn = new mysqli($host,$user,$pass,$db);


    if(!$conn){
        die("Database connection failed: " . mysqli_connect_error());
    }

?>