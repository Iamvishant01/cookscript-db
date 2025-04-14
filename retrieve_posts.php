<?php
// Database connection
$servername = "localhost";
$username = "root"; // replace with your database username
$password = ""; // replace with your database password
$dbname = "cookscript-recipes"; // your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data
$sql = "SELECT id, name, description FROM recipes";
$result = $conn->query($sql);

// Display posts
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='post' onclick='window.location.href=\"post_details.php?id=" . $row["id"] . "\"'>";
        echo "<div class='post-content'>";
        echo "<h2>" . $row["name"] . "</h2>";
        echo "<p>" . substr($row["description"], 0, 100) . "...</p>";
        echo "<a href='post_details.php?id=" . $row["id"] . "'>Read More</a>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "No posts found";
}

$conn->close();
?>
