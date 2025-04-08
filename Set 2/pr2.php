<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      margin: 0;
      height: 100vh;
      background: linear-gradient(to right, #1f4037, #99f2c8);
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
    }

    .login-box {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(12px);
      border-radius: 16px;
      padding: 2rem;
      width: 320px;
      text-align: center;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
    }

    button {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      background-color: #2ecc71;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #27ae60;
    }

    .result {
      margin-top: 20px;
      font-weight: bold;
      font-size: 1.1rem;
      color: #f1c40f;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Login</h2>
    <form method="post">
      <input type="text" name="username" placeholder="Username" required>
      <input type="text" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["username"];
        $pass = $_POST["password"];
        $p = "1234";

        if (strtolower($name) == "admin") {
            if ($pass == $p) {
                echo "<div class='result'>Login Successful</div>";
            } else {
                echo "<div class='result'>Wrong Password.</div>";
            }
        } else {
            echo "<div class='result'>Wrong Username.</div>";
        }
    }
    ?>
  </div>
</body>
</html>
