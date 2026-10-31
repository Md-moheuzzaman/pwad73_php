<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email_Validator</title>
</head>
<body>
    <h3>Ques 1:</h3>
    
    <form method="post" action="">
        <input type="text" name="email" id=""> <br> <br>
        <input type="submit" name="submit" value="SUBMIT" id=""> <br> <br>
    </form>

    <?php 
    if(isset($_POST['submit'])){
        $email = ($_POST['email']);

        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo ("Email is valid");
        }else{
            echo ("Email is not valid");
        }


    }
    
    ?>
</body>
</html>