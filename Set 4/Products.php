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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Products</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: linear-gradient(to right, #2c3e50, #3498db);
      margin: 0;
      padding-top: 80px; /* space for navbar */
      color: white;
      font-size: 1.1rem;
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
      margin: 2rem 0;
      font-size: 3rem;
      font-weight: bold;
      text-transform: uppercase;
      color: #f39c12;
      letter-spacing: 2px;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(6px);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
      border-radius: 12px;
      margin-bottom: 2rem;
      overflow: hidden;
    }

    th, td {
      padding: 15px;
      text-align: center;
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }

    th {
      background-color: rgba(0, 0, 0, 0.2);
      color: #f1c40f;
      font-size: 1.1rem;
    }

    tr:hover {
      background-color: rgba(255, 255, 255, 0.1);
      transform: scale(1.01);
      transition: all 0.3s ease;
    }

    td {
      color: #ecf0f1;
      font-size: 1.1rem;
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

  <h1>Product List</h1>

  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price</th>
    </tr>
    <?php
    $sql = "SELECT * FROM products";
    $details = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($details)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
        echo "<td>$" . htmlspecialchars($row["price"]) . "</td>";
        echo "</tr>";
    }

    mysqli_close($conn);
    ?>
  </table>

</body>
</html>
