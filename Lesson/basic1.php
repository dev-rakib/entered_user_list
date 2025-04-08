<?php
    $name = "rakib";
    $age = 19;
    $n = 50;
    $float = 19.6;
    $boolian = True;
    $arrays = array("apple", "banana", "mango");


    echo "Hey I am $name. I am $age years old. Exactly $float. that answer is $boolian. i like $arrays[1]<br>";
    echo "need - age: ", $n - $age ."<br>";

    if ($age>=18){
        echo "you are an adult.<br>";
    } else {
        echo "you are not an adult.<br>";
    }
    
    echo "result:<br>";
    if ($n==100){
        echo "Golden A+";
    } elseif($n>=80) {
        echo "A+";
    } elseif(70<=$n) {
        echo "A";
    } elseif(60<=$n) {
        echo "A-";
    } elseif(50<=$n) {
        echo "B";
    } elseif(40<=$n) {
        echo "C";
    } elseif($n>=33) {
        echo "pass";
    } else {
        echo "Fail";
    }

    $day = "friday";

    switch($day) {
        case "friday":
            echo "<br>Hurray! Holiday.";
            break;
        case "saturday":
            echo "<br>Hurray! Holiday.";
            break;
        default:
            echo "<br>Normal Day.";
    }

    for($i=0;$i<=10;$i++) {
        echo "<br>$i I Love PHP";
    }

    $n = 0;
    while ($n<=10) {
        echo "<br>$n Hi $name";
        $n++;
    }

    do {
        echo "<br>$n Never Give Up.";
        $n++;
    } while ($n<=15);

    foreach ($arrays as $single) {
        echo "<br>$single";
    }

    ?>