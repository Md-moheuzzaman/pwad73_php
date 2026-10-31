<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrimeNumber</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter a number" id=""> <br> <br>
        <input type="submit" name="submit" value="SUBMIT" id="">
    </form>

    <?php 
        if(isset($_POST['submit'])){
            $num = $_POST['number'];


            if($num == 1){
                echo "Not a prime number";
            }elseif($num == 2){
                echo "Prime Number";
            }else{
                for($i = 2; $i<$num; $i++){
                    if($num%$i == 0){
                        echo "Not a Prime Number";
                        return;
                    }
                }
                echo "Prime number";
            }
        }
    ?>
</body>
</html>