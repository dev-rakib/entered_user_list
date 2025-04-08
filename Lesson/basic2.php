<?php
function Greeting($name){
    echo "Hello $name<br>";
}
function Hey(){
    echo "Hello <br>";
}
function returnn($x,$y){
    return $x + $y;
}
function Math($x,$y){
    echo $x + $y;
    echo $x - $y;
    echo $x * $y;
    echo $x / $y;
}


Greeting('Rakib');
Hey();
Math(20,10);
$sum = returnn(20,10);
echo $sum;

echo 'hi<br>';


function asum($s){
    echo array_sum($s)."<br>";
}
$num = [23,123,13];
asum($num);



?>