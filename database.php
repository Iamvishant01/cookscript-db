<?php
$UserName = $_POST['username'];
$UserMail = $_POST['useremail'];

$conn = new mysqli('localhost', 'root', '', 'cookscript');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO usersignups(UserName, UserEmail) VALUES (?, ?)");
    $stmt->bind_param("ss", $UserName, $UserMail);
    
    if ($stmt->execute()) {
        echo "<script>window.location.href = 'create.html';</script>";
    } else {
        echo "<script>alert('Registration failed! Please try again.');</script>";
    }
    
    $stmt->close();
    $conn->close();
}
?>
