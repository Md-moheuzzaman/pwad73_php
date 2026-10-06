<?php
class Goodbye {
  const MESSAGE = "Thank you for visiting W3Schools.com!";
  public function bye(){
    echo self::MESSAGE; //Access constructor
  }
}

$goodbye = new Goodbye();
$goodbye->bye();
?>