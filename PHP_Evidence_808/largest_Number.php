<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Ques 3:</h3>
    
    <form method="post" action="">
        Enter First Number:
        <input type="number" name="num1" id=""> <br> <br>
        Enter Second Number:
        <input type="number" name="num2" id=""> <br> <br>
        Enter Third Number:
        <input type="number" name="num3" id=""> <br> <br>
        Enter Forth Number:
        <input type="number" name="num4" id=""> <br> <br>
        Enter Fifth Number:
        <input type="number" name="num5" id=""> <br> <br>
        <input type="submit" name="submit" value="SUBMIT" id=""> <br>

        <?php 
        if (isset($_POST['submit'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
            $num4 = $_POST['num4'];
            $num5 = $_POST['num5'];

            if($num1 >= $num2 && $num1 >= $num3 && $num1 >= $num4 && $num1 >= $num5 ){
                $largest = $num1;
            }elseif($num2 >= $num1 && $num2 >= $num3 && $num2 >= $num4 && $num2 >= $num5 ){
                $largest = $num2;
            }elseif($num3 >= $num2 && $num3 >= $num1 && $num3 >= $num4 && $num3 >= $num5 ){
                $largest = $num3;
            }elseif($num4 >= $num1 && $num4 >= $num2 && $num4 >= $num3 && $num4 >= $num5 ){
                $largest = $num4;
            }else{
                $largest = $num5;
            }

            echo "<h3> Largest Number is : $largest </h3>";
        }
        ?>


    </form>
</body>
</html>