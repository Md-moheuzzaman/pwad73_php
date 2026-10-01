<?php 
class Myclass{
//property Public, protected, private    
    Public $name;
    public $age;


        //Method
        function welcome (){
            echo "Hello ".$this ->name. "<br>";
            

        }

}

$obj1 = new MyClass;
$obj1->name = "Rokon";
$obj1->age = "23";




//echo "<pre>";
//var_dump($obj1);





?>