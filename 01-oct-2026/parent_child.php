<?php 
//Parent Class
class Myclass{
//property Public, protected, private    
    public $name;
    protected $age;


        //Method
        function welcome (){
            echo "Hello ".$this ->name. "<br>";
            

        }

}

class child_one extends Myclass {
    public $age = 30;
}

$obj1 = new MyClass;
$obj1->name = "Rokon";


//echo "<pre>";
var_dump($obj1);





?>