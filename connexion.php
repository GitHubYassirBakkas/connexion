<?php
session_start();

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the registration form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['psd'];

    // Insert user into database
    $sql = "INSERT INTO utilisateur (email, psd) VALUES ('$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        // Registration successful, automatically log in the user
        $_SESSION['email'] = $email;
        // Redirect to profile page
        header("location: profile.php");
        exit;
    } else {
        // If registration fails, display an error message
        $error = "Error registering user: " . $conn->error;
        header("location: registration.php?error=" . urlencode($error));
        exit;
    }
}

$conn->close();
?>