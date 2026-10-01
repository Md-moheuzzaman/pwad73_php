<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Login form</h3>
<?php
    if(isset($_POST['submit'])){
        extract($_POST);
        $password = md5($password);

        include_once('dbconfig.php');
        //echo "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $conn->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
        if($result->num_rows>0){
            header("location: dashboard.php");
        }else{
            echo "<h1>Login Failed</h1>";
        }
    }
?>
    <form action="" method="post">

    <input type="email" placeholder="Enter your Email" name="email" id=""> <br> <br>
    <input type="password" placeholder="Enter Password" name="password" id=""> <br> <br>
    <input type="submit" name="submit" value="LOGIN" id="">
    </form>
</body>
</html>





