<?php 
include_once("dbconfig.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Student List</h3>
    <a href="student_entry.php">New Entry</a> <br> <br>
    
    <?php 
       $rawData = $conn->query("SELECT * FROM students"); ?>

    <table border="1" cellpadding="20" cellspacing="0">
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Emial</th>
        <th>Phone</th>
        <th>Action</th>
        
    <?php
       while($row = $rawData->fetch_assoc()){ ?>
    
    <tr>
       <td> <?php echo $row['id']. "<br>";?></td>
       <td> <?php echo $row['name']. "<br>";?></td>
       <td> <?php echo $row['address']. "<br>";?></td>
       <td> <?php echo $row['email']. "<br>";?></td>
       <td> <?php echo $row['phone']. "<br>";?></td>
       <td class="action">
         <a href="#">Edit</a>
          | 
         
         <a onclick="return confirm('Sure to Delete')" class="danger" 
         
         href="student_delete.php?id=<?php echo $row['id'] ?>" >Delete</a>
         </td>

       </tr>
       
      
    <?php 

       }
    ?>
    <a href="index.php">Back To Student List</a>
    </table>
</body>
</html>