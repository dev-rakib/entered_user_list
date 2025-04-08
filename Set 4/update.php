<?php
$host = "localhost";
$user = "root";
$pass = 'ShoJack(120)';
$db = "products";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Product</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: linear-gradient(to right, #2c3e50, #3498db);
      margin: 0;
      padding-top: 100px; /* Space for navbar */
      color: white;
    }

    /* NAVBAR */
    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 1rem;
      z-index: 999;
    }

    .navbar a {
      margin: 0 15px;
      padding: 12px 24px;
      border-radius: 30px;
      text-decoration: none;
      font-weight: bold;
      color: white;
      font-size: 1.1rem;
      transition: all 0.3s ease;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .navbar a:hover {
      transform: scale(1.1);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    }

    .navbar .add {
      background: linear-gradient(45deg, #00c9a7, #1abc9c);
    }

    .navbar .update {
      background: linear-gradient(45deg, #f39c12, #e67e22);
    }

    .navbar .delete {
      background: linear-gradient(45deg, #e74c3c, #c0392b);
    }

    h1 {
      text-align: center;
      margin-bottom: 2rem;
      font-size: 2.5rem;
      font-weight: bold;
      text-transform: uppercase;
      color: #f39c12;
    }

    form {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(6px);
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
      max-width: 450px;
      margin: auto;
    }

    label {
      font-size: 1rem;
      color: #ecf0f1;
    }

    input[type="number"], input[type="text"] {
      width: 100%;
      padding: 12px;
      margin: 10px 0 20px;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      background-color: rgba(255, 255, 255, 0.2);
      color: white;
      outline: none;
    }

    input::placeholder {
      color: #ccc;
    }

    button {
      padding: 12px 20px;
      width: 100%;
      border: none;
      border-radius: 8px;
      background: linear-gradient(45deg, #00c9a7, #1abc9c);
      color: white;
      font-size: 1.1rem;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    button:hover {
      background: linear-gradient(45deg, #00b493, #16a085);
      transform: scale(1.03);
    }

    .message {
      text-align: center;
      margin-top: 20px;
      font-size: 1.2rem;
      font-weight: bold;
      color: #ecf0f1;
    }

    .cta {
      text-align: center;
      margin-top: 30px;
    }

    .cta a {
      text-decoration: none;
      background-color: #3498db;
      padding: 12px 25px;
      border-radius: 8px;
      color: white;
      font-weight: bold;
      font-size: 1.1rem;
      transition: background-color 0.3s ease;
    }

    .cta a:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <div class="navbar">
    <a href="upload.php" class="add">➕ Add Product</a>
    <a href="update.php" class="update">✏️ Update Product</a>
    <a href="delete.php" class="delete">🗑️ Delete Product</a>
  </div>

  <h1>Update Product</h1>

  <form method="post">
    <label for="id">Enter Product ID:</label>
    <input type="number" name="id" placeholder="Product ID" required>
    
    <label for="name">New Name:</label>
    <input type="text" name="name" placeholder="Updated Name" required>
    
    <label for="price">New Price:</label>
    <input type="number" name="price" placeholder="Updated Price" required>
    
    <button type="submit">🔁 Update Product</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $id = $_POST["id"];
      $name = $_POST["name"];
      $price = $_POST["price"];

      $sql = "UPDATE products SET name = '$name', price = '$price' WHERE id = '$id'";
      if (mysqli_query($conn, $sql)) {
          echo "<div class='message'>✅ Product Updated Successfully!</div>";
      } else {
          echo "<div class='message'>❌ Error: " . mysqli_error($conn) . "</div>";
      }
  }

  mysqli_close($conn);
  ?>

  <div class="cta">
    <h2>Check all Products</h2>
    <a href="Products.php">View Products</a>
  </div>

</body>
</html>
