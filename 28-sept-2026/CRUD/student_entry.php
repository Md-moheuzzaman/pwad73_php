<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Student Entry Form</h3>
    <?php 
    if($_SERVER['REQUEST_METHOD']=='POST'){
        //Data recived form entry form
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        include_once("dbconfig.php"); //Databage Connection
        $conn->query("INSERT INTO students (id,name,address,email,phone) VALUES (NULL, '$name','$address','$email','$phone')");

        if($conn->affected_rows){
            echo "Data Added";
        }
    }
    ?>
    

    <form action="" method="post">
    
    <input type="text" placeholder="Enter Your Name" name="name" id=""> <br>
    <input type="text" placeholder="Enter Your Address" name="address" id=""> <br>
    <input type="email" placeholder="Enter Your Email" name="email" id=""> <br>
    <input type="text" placeholder="Enter Your Phone" name="phone" id=""> <br>
    <input type="submit" name="submit" value="SAVE" id="">

    </form> <br>

    <a href="index.php">Back To Student List</a>
</body>
</html>