<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grade Calculator</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      margin: 0;
      height: 100vh;
      background: linear-gradient(to right, #6a11cb, #2575fc);
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
    }

    .grade-box {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      padding: 2rem;
      border-radius: 16px;
      width: 300px;
      text-align: center;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
    }

    input[type="number"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
    }

    button {
      padding: 10px;
      width: 100%;
      border: none;
      border-radius: 8px;
      background-color: #00c9a7;
      color: white;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #00b493;
    }

    .result {
      margin-top: 20px;
      font-size: 1.2rem;
      font-weight: bold;
      color: #ffd700;
    }
  </style>
</head>
<body>
  <div class="grade-box">
    <h2>Grade Calculator</h2>
    <form method="post">
      <input type="number" name="marks" placeholder="Enter your marks" required>
      <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mark = $_POST["marks"];

        echo "<div class='result'>";
        if ($mark >= 80) {
            echo "Grade: A";
        } elseif ($mark >= 60) {
            echo "Grade: B";
        } elseif ($mark >= 50) {
            echo "Grade: C";
        } else {
            echo "Grade: F";
        }
        echo "</div>";
    }
    ?>
  </div>
</body>
</html>
