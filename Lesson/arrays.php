<?php

$country = array("bangladeh","india");
echo $country[0]."<br>";

$cities = [
    "first" => "Dhaka",
    "second" => "Chittagong"
];

echo $cities["first"]."<br>";

foreach($cities as $serial => $city){
    echo "$serial: $city<br>";
}

$multi = [
    ["s1",234,"A"],
    ["s2",122,"B"],
    ["s3",344,"A+"]
];

echo $multi[0][1]."<br>";
foreach($multi as $m){
    echo $m[0]."  ",$m[1]." ",$m[2]."<br>";
}

$af = [24,234,2];
array_push($af, 4);
array_unshift($af, 6);
print_r($af);

$prdct = [
    "p1" => [
        "Name" => "Denim",
        "Price" => 5000,
        "Stock" => 1233
    ],
    "p2" => [
        "Name" => "Jeans",
        "Price" => 2100,
        "Stock" => 2340
    ],
    "p3" => [
        "Name" => "Watch",
        "Price" => 36000,
        "Stock" => 50
    ],
];


?>