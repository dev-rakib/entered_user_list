<?php
$file = fopen("F:/XAMPP/htdocs/PHP RAKIB/Lesson 1/files.txt", "r");
$contents = fread($file, filesize("F:/XAMPP/htdocs/PHP RAKIB/Lesson 1/files.txt"));
fclose($file);
echo $contents."<br>";

echo file_get_contents("F:/XAMPP/htdocs/PHP RAKIB/Lesson 1/files.txt")."<br>";
file_put_contents("F:/XAMPP/htdocs/PHP RAKIB/Lesson 1/files.txt", "Hey")."<br>";


if (file_exists("hi.txt")){
    echo "exist";
} else {
    echo "doesnt exist";
}
?>