<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cookscript-recipes";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$post_id = isset($_GET['id']) ? $_GET['id'] : 0;

$sql = "SELECT name, description FROM recipes WHERE id = $post_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<html>";
    echo "<head>
        <link rel='icon' href='./images/logo.jpeg' type='image/x-icon'>
        <title>" . $row["name"] . "</title>
        <link href='https://fonts.googleapis.com/css2?family=Lexend:wght@500;700&family=Poppins&display=swap' rel='stylesheet'>
        <style>
            body {
                font-family: 'Poppins', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f9f9f9;
            }
            .post {
                width: 80%;
                margin: 20px auto;
                background-color: white;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            }
            .post h1 {
                font-family: 'Lexend', sans-serif;
            }
            .post p {
                font-family: 'Poppins', sans-serif;
                font-size: 1.1em;
                line-height: 1.6;
                color: #444;
            }
            .button-container {
                position: fixed;
                bottom: 20px;
                right: 20px;
                z-index: 1000;
            }
            .btn {
                background-color: #2d87f0;
                color: white;
                border: none;
                padding: 10px 18px;
                border-radius: 5px;
                font-size: 1em;
                font-family: 'Poppins', sans-serif;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }
            .btn:hover {
                background-color: #1a6edb;
            }
        </style>
        </head>";
    echo "<body>";
    echo "<div class='post'>";
    echo "<h1>" . $row["name"] . "</h1>";
    echo "<p>" . nl2br($row["description"]) . "</p>";
    echo "</div>";

    // Floating Back Button
    echo "<div class='button-container'>
            <a href='./explore.php'>
                <button type='button' class='btn'>← Back </button>
            </a>
          </div>";

    echo "</body>";
    echo "</html>";
} else {
    echo "Post not found";
}

$conn->close();
?>
