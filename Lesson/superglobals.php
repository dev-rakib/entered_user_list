<?php
// echo "Url name: ". $_GET["name"]."<br>";
// echo "URL age: ". $_GET["age"]."<br>";

// echo "Hello, ". $_POST["username"]."<br>";
// echo "Hello, ". $_SERVER["PHP_SELF"]."<br>";
// echo "Hello, ". $_SERVER["SERVER_NAME"]."<br>";
// echo "Hello, ". $_SERVER["HTTP_HOST"]."<br>";
// echo "Hello, ". $_SERVER["REMOTE_ADDR"]."<br>";
// echo "Hello, ". $_REQUEST["username"]."<br>";


// Ensure the form is submitted via POST and contains a file
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["myfile"])) {
    $file = $_FILES["myfile"];
    $uploadDir = "uploads/";

    // Check for upload errors
    if ($file["error"] !== UPLOAD_ERR_OK) {
        echo "<div class='alert alert-danger text-center mt-4'>Error uploading file. Please try again.</div>";
    } else {
        // Ensure the uploads folder exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Validate file type (only images allowed)
        $allowedTypes = ["image/jpeg", "image/png", "image/gif", "image/webp"];
        if (!in_array($file["type"], $allowedTypes)) {
            echo "<div class='alert alert-warning text-center mt-4'>Invalid file type. Only JPG, PNG, GIF, and WEBP are allowed.</div>";
        }

        // Validate file size (max 5MB)
        if ($file["size"] > 5 * 1024 * 1024) {
            echo "<div class='alert alert-warning text-center mt-4'>File is too large! Maximum size is 5MB.</div>";
        }

        // Generate a unique filename to prevent overwriting
        $filename = time() . "_" . basename($file["name"]);
        $destination = $uploadDir . $filename;

        // Move file to the uploads directory
        if (move_uploaded_file($file["tmp_name"], $destination)) {
            echo "<div class='alert alert-success text-center mt-4'>
                    File uploaded successfully! <br>
                    <a href='$destination' target='_blank' class='btn btn-info mt-2'>View Uploaded File</a>
                  </div>";
        } else {
            echo "<div class='alert alert-danger text-center mt-4'>Failed to move uploaded file! Please try again.</div>";
        }
    }
} else {
    echo "<div class='alert alert-warning text-center mt-4'>No file uploaded! Please select a file.</div>";
}

?>


<!-- HTML to show the form and the results -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGlobals - File Upload</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('https://png.pngtree.com/thumb_back/fh260/background/20200714/pngtree-modern-double-color-futuristic-neon-background-image_351866.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }
        .btn-upload {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px 18px;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
            transition: background 0.3s, transform 0.2s;
        }
        .btn-upload:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<div class="container text-center">
    <h3 class="mb-4">Upload Your File</h3>
    <form action="superglobal.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input type="file" name="myfile" class="form-control-file" required>
        </div>
        <button type="submit" class="btn-upload">Upload File</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>