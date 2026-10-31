<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime_Number</title>
</head>
<body>
    <h3>Ques 3:</h3>
    
    <form action="" method="post">
        <input type="text" name="number" id=""> <br> <br>
        <input type="submit" name="submit" value="SUBMIT" id=""> <br> <br>
    </form>

    <?php 
    if(isset($_POST['submit'])){
        $num = ($_POST['number']);

        if($num == 1){
            echo ("Not a prime Number");
        }elseif($num == 2){
            echo ("Prime Number");
        }else{
            for($i = 2; $i<$num; $i++){
                if($num%$i == 0){
                    echo ("Not a prime Number");
                    return;
                }
            }
            echo ("Prime Number");
        }
    }
    ?>
</body>
</html>