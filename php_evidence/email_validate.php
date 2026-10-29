<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="email" placeholder="Enter your Email" id=""> <br> <br>
        <!-- <input type="password" name="pasword" placeholder="Enter Password" id=""> <br> <br> -->
        <input type="submit" name="submit" value="Submit" id="">
    </form>

    <?php 
        if (isset($_POST['submit'])){
            $email = ($_POST['email']);
            
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo ("email is valid");
            } else {
                echo ("email is not valid");
            }
        }
    ?>

</body>
</html>