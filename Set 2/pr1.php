<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EOO</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: linear-gradient(to right, #2c3e50, #4ca1af);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      padding: 2rem;
      border-radius: 16px;
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      text-align: center;
      width: 300px;
    }

    input[type="number"] {
      padding: 10px;
      border: none;
      border-radius: 8px;
      margin: 10px 0;
      width: 100%;
      font-size: 1rem;
    }

    button {
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      background-color: #3498db;
      color: white;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #2980b9;
    }

    .result {
      margin-top: 20px;
      font-weight: bold;
      font-size: 1.2rem;
    }
  </style>
</head>
<body>
  <div class="container">
    <form method="post">
      <label for="num">Enter a number:</label>
      <input type="number" name="num" id="num" required>
      <button type="submit">Go</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $n = $_POST["num"];
      if (($n % 2) == 0) {
        echo "<div class='result'>It's an even number.</div>";
      } else {
        echo "<div class='result'>It's an odd number.</div>";
      }
    }
    ?>
  </div>
</body>
</html>
