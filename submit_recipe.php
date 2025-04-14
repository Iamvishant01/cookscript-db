<?php
$servername = "localhost";
$username = "root"; // default for XAMPP
$password = ""; // default for XAMPP
$dbname = "cookscript-recipes"; // make sure this matches your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['recipe_name'];
$description = $_POST['description'];

// Insert into database
$sql = "INSERT INTO recipes (name, description) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $name, $description);

if ($stmt->execute()) {
  echo "🎉 Recipe submitted successfully!";
} else {
  echo "❌ Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
