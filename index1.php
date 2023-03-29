<?php
echo "<h1> Hello World!</h1>";
echo "Hello World! <br>";
$txt = "Hello World! <br>";
$txt2 = "Learning PHP";
echo $txt;
// define ("Hello World!");
define ("txt3", "Hello World! <br>");
$txt2 = txt3;
echo $txt2;
$hello = "Hello";
$world = " World!";
$prints ="<html> <h1> $hello, $world</h1> </html>";
echo $prints;

$array = array("+", "-", "/", "*");

$num1 =rand(1,25);
$num2 =rand(1,25);


foreach ($array as $value){
    switch ($value){
        case "+":
            $som = $num1 + $num2;
            break;
        case "-":
            $som = $num1 -$num2;
            break;
        case "/":
            $som = $num1 /$num2;
            break;
        case "*":
            $som = $num1 * $num2;
            break;
        default:
            $som = "Kan niet berekenen";
            break;
    }
    echo $num1,$value,$num2,"=",$som,"<br>";
};


?>