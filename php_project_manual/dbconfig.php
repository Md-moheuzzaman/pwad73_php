<?php 
    #connection with mySQL

     $host = "localhost";
     $user = "root";
     $pass = "";
     $db = "cleaning_service";

    $conn = mysqli_connect($host,$user,$pass,$db);
    //$conn = new mysqli("localhost","root","php_project_manual");
    
    if(!$conn){
        die("Database connection failed: " . mysqli_connect_error());
    }

?>