<?php
session_start();

if(!isset($_SESSION["email"])){
    header("location: login.html");
    exit();
}


$h = "localhost";
$u = "root";
$p = "ShoJack(120)";
$d = "login";


try{
    $c = mysqli_connect($h,$u,$p,$d);
    if($c){
        echo "<br>";
    } else {
        echo "Something's wrong";
    }
    
} catch(Exception $e){
    echo "Error: $e";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Users</title>
  <link rel="stylesheet" href="users.css" />
</head>
<body>
  <div class="bg-image"></div>
  <nav>
    <a href="login.html">Logout</a>
  </nav>
  <div class="container">
    <table>
      <tr>
        <th>Name</th>
        <th>Email</th>
      </tr>
      <?php
        $s = "SELECT * FROM user";
        $r = mysqli_query($c,$s);
        while($user = mysqli_fetch_assoc($r)){
            echo "<tr>";
            echo "<td>".htmlspecialchars($user['name'])."</td>";
            echo "<td>".htmlspecialchars($user['email'])."</td>";
            echo "</tr>";
        }
      ?>
    </table>
  </div>
</body>
</html>
