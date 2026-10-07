<?php 
    #connection with mySQL

     $host = "localhost";
     $user = "root";
     $pass = "";
     $db = "php_project_ai_db";

    $conn = mysqli_connect($host,$user,$pass,$db);
    //$conn = new mysqli("localhost","root","php_project_manual");
    
    if(!$conn){
        die("Database connection failed: " . mysqli_connect_error());
    }

?>