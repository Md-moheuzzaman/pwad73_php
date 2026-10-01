<?php
    class Employee
    {
        private $name;
        
        // Getter function
        public function getName() {

            return $this->name;
        }
        // Setter function
        public function setName($name) {

            $this->name = $name;
        }
        public function sayHello()
    {
        echo "Hi, my name is {$this ->getName()}.";
    }
} //End of Class
$emp1 = new employee;

$emp1->setName("Rokon");
//echo $emp1->getName();
$emp1->sayHello();

//var_dump($emp1);
?>