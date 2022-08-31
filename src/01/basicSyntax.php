<h3>basic syntax</h3>
오늘의 날짜 :
<?php echo date('Y-m-d H:i:s') ?>
<hr>

<h3>Variables</h3>
<?php
  $txt = "php text";
  $x = 5;
  $y = 10.5;
  echo "txt: $txt, x: $x, y: $y"
?>
<hr>

<h3>Variables Scope - Global</h3>
<?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>
<hr>

<h3>Variables Scope - Local</h3>
<?php
function myTest2() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest2();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>
<hr>

<h3>PHP The global Keyword - global</h3>
<?php
$x = 5;
$y = 10;

function myTest3() {
  global $x, $y;
  $y = $x + $y;
}

myTest3();
echo $y; // outputs 15
?>
<hr>

<h3>PHP The global Keyword - $GLOBALS[index]</h3>
<?php
$x = 5;
$y = 10;

function myTest4() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest4();
echo $y; // outputs 15
?>
<hr>

<h3>PHP The static Keyword</h3>
<?php
function myTest5() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest5();
echo "<br>";
myTest5();
echo "<br>";
myTest5();
?>