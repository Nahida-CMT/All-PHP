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
    // function
    function fullName($fname,$lname){
        echo $fname . "  " . $lname . "<br>";
    }
    fullName("Nahida","Sultana". "<br>");

    // Associative Array
    $person = array("Nahida" => 600, "Emu" => 500, "Tania" => 700, "Maksuda" => 800);
    echo $person["Emu"];
    echo $person["Nahida"] . "<br>";

    // Array length count
    $cars = array("Volvo","Toyota","BMW");
    echo count($cars) . "<br>";
    for ($x = 0; $x < count($cars); $x++){
        echo $cars[$x] . "<br>";
    }

    // Super Global
    var_dump($_SERVER);
    echo "<br>";
    echo $_SERVER["HTTP_HOST"];

    


    ?>
    
</body>
</html>