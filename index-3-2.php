<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

// class
class Car{
    public $name;

    function __construct($value){
        $this->name =$value;
    }
    function getName(){
        return $this->name ;
    }


    function __destruct(){
        echo "<br>";
        echo " This is destruct Function";
    }
}

// object
$BMW =new Car ("x-Colorra");
echo $BMW->getName();


class Fruit {
    public $name;
    protected $color;
    private $weight;
  }
  
    $mango = new Fruit();
    $mango->name = 'Mango'; // OK
    // $mango->color = 'Yellow'; // ERROR
    $mango->weight = '300'; // ERROR
    

?>

</body>
</html>