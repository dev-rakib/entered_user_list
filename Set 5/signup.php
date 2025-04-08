<?php
$h = "localhost";
$u = "root";
$p = "ShoJack(120)";
$d = "login";


try{
    $c = mysqli_connect($h,$u,$p,$d);
    if($c){
        echo "Connected<br>";
    } else {
        echo "Something's wrong";
    }
    
} catch(Exception $e){
    echo "Error: $e";
}


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hp = password_hash($password, PASSWORD_DEFAULT);

    $s = "INSERT INTO user (name,email,password) VALUES ('$name','$email','$hp')";

    if(mysqli_query($c,$s)){
        echo "User: $name has been signed up successfully!";
        header("location: login.html");
    } else {
        echo "Try Again";
    }
}

mysqli_close($c);
?>