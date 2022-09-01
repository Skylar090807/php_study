<h2>Data Types</h2>
<hr>

<h3>String</h3>
<?php
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y,"<br>";
echo "$","x : ", var_dump($x), '<br>';
echo "$","y : ", var_dump($y);
?>
<hr>

<h3>Integer</h3>
<?php
$x = 5985;
var_dump($x);
?>
<hr>

<h3>Float</h3>
<?php  
$x = 10.365;
var_dump($x);
?>
<hr>

<h3>Boolean</h3>
<?php
$x = true;
var_dump($x);
?>
<hr>

<h3>Array</h3>
<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>
<hr>

<h3>Object</h3>
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>
<hr>

<h3>Null</h3>
<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>
<hr>