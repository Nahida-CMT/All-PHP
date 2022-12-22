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
    
    // propertice
    class Computer {
         public $RAM;
         public $processor;
         public $mouse;
         public $keyboard;

         function SetRAM($v){
            $this->RAM = $v;
         }

         function Setprocessor($v){
            return $this->processor =$v;
         }
         function Setmouse($v){
            return $this->mouse =$v;
         }
         function Setkeyboard($v){
            return $this->keyboard =$v;
         }
         
         function GetRAM(){
            return $this->RAM;
         }
         function Getprocessor(){
            return $this->processor;
         }
         function Getmouse(){
            return $this->$mouse;
         }
         
         function Getkeyboard(){
            return $this->keyboard;
         }
    }
    
    // object 
    $HP6400 = new Computer();
    $HP6400->SetRAM("4GB");
    $HP6400->Setprocessor("2.5GHz");
    $HP6400->Setmouse("A4TECH");
    $HP6400->Setkeyboard("A4TECH");

    // another object
    $Dell3211 = new Computer();
    $Dell3211->SetRAM("8");
    $Dell3211->Setprocessor("3GHz");
    $Dell3211->Setmouse("Dell");
    $Dell3211->Setkeyboard("Dell");

    // object function call

    echo $Dell3211->GetRAM()."<br>";
    echo $Dell3211->Getkeyboard()."<br>";

    
    ?>
    
</body>
</html>