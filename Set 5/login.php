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
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hp = password_hash($password, PASSWORD_DEFAULT);

    $s = "SELECT * FROM user WHERE email = '$email'";
    $r = mysqli_query($c,$s);

    if(mysqli_num_rows($r)>0){
        $user = mysqli_fetch_assoc($r);

        if(password_verify($password,$user["password"])){
            echo "Logged In Successfully!";
            
            session_start();
            $_SESSION["email"] = $user["email"];
            $_SESSION["password"] = $user["password"];
            header("Location: users.php");
        } else {
            echo "Password Does Not Math";
        }
    } else {
        echo "No user Found. Please Signup First.";
    }
}

mysqli_close($c);
?>