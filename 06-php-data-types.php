<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Integer
$integer_x = 5;
var_dump($integer_x);

// String
$string_x = "Hello world!";
$string_y = "Hello world!";

var_dump($string_x);
echo "<br>";
var_dump($string_y);

// Float
$float_x = 10.365;
var_dump($float_x);

// Boolean
$bool_x = true;
var_dump($x);

// Array
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);

// Object
Class Car {
    public $color;
    public $model;

    public function __construct($color, $model) {
        // check string values
        if (empty($color)) {
            throw new InvalidArgumentException("Color cannot be empty.");
        }

        if (empty($model)) {
            throw new InvalidArgumentException("Model cannot be empty.");
        }

        // initialize properties
        $this->color = $color;
        $this->model = $model;
    }

    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$my_car = new Car("red", "Volvo");
echo "message: " . $my_car->message();
/*
    $my_car2 = new Car("", "Volvo");
    $my_car3 = new Car("red", "");
    echo "message: " . $my_car2->message();
    echo "message: " . $my_car3->message();
*/

// Null
$x = "Hello world!";
$x = null;
var_dump($x);

// Casting
$casting_x = 5;
$casting_x = (string) $casting_x;
var_dump($casting_x);

?>   
    
</body>
</html>