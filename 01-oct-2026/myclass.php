<?php 
class Myclass{
//Public    
    Public $name;
    public $age;
    public $height;

        //Method
        function welcome (){
            echo "Hello ".$this ->name. "<br>";
            

        }

}

$obj1 = new MyClass;
$obj1->name = "Rokon";
$obj1->age = "23";
$obj1->height = "5.7";

$obj1->welcome();


//echo "<pre>";
//var_dump($obj1);

$obj2 = new MyClass;
$obj2->name = "Touhid";
$obj2->age = "24";
$obj2->height = "5.6";

$obj2->welcome();

//echo "<pre>";
//var_dump($obj2);



?>