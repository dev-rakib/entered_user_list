<?php
$fname = "Rakib";
$sname = "Islam";

echo $fname." ".$sname."<br>";
$flname = $fname." ".$sname."<br>";
$length = strlen($flname);
echo $length."<br>";
echo str_word_count($flname)."<br>";
echo strpos($flname, "Islam")."<br>";
echo str_replace("Rakib","Sakib",$flname)."<br>";


$coment = "hey  i   am with Them";
echo strtoupper($coment)."<br>";
echo strtolower($coment)."<br>";
echo ucfirst($coment)."<br>";
echo ucwords($coment)."<br>";
echo substr($coment, 7,10)."<br>";
echo trim($coment)."<br>";
?>