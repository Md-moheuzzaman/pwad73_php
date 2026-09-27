<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Subscription Form</h2>
    <?php 
        //print_r($_REQUEST);
       if(isset($_POST['submit'])){
          $name =  $_POST["name"];
         "<br>";
         $email =  $_POST["email"];

        echo "You have submitted: <br>";

        echo "Name :". $name . "<br>";
        echo "Email :". $email . "<br>";
    
       }
    ?>
    <form action="" method="post">
    <input type="text" name="name" placeholder="Enter Name" id=""> <br>
    <input type="email" name="email" placeholder="Enter Email" id=""> <br>
    <input type="submit" name="submit" value="subscribe" id="">
        
    </form>

</body>
</html>