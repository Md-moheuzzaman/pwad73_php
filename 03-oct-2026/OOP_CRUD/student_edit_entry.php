<?php include_once("dbconfig.php"); //Databage Connection ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Student Update Form</h3>
    <?php 
    //Display Student Record
       $id = $_GET ['id'];
       
    //Update Student Record
    if($_SERVER['REQUEST_METHOD']=='POST'){
        
    //Data recived form entry form
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

       //Update data in DB
        //$conn->query("INSERT INTO students (id,name,address,email,phone) VALUES (NULL, '$name','$address','$email','$phone')");
        $conn->query("UPDATE students SET name= '$name',address='$address',email= '$email',phone= '$phone' WHERE id = '$id' ");



        if($conn->affected_rows){
            echo "Updated Successfully";
        }
        
    }
      $data = $conn->query("SELECT * FROM students WHERE id = '$id' ");
     $row = $data->fetch_object();
    ?>
    

    <form action="" method="post">
    
    <input type="text" placeholder="Enter Your Name" name="name" value="<?php echo $row->name;  ?>" id=""> <br>
    <input type="text" placeholder="Enter Your Address" name="address" id="" value="<?php echo $row->address;  ?>" > <br>
    <input type="email" placeholder="Enter Your Email" name="email" id="" value="<?php echo $row->email;  ?>" > <br>
    <input type="text" placeholder="Enter Your Phone" name="phone" value="<?php echo $row->phone;  ?>" id=""> <br>
    <input type="submit" name="submit" value="Update" id="">

    </form> <br>

    <a href="index.php">Back To Student List</a>
</body>
</html>