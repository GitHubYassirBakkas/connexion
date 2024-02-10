<?php
session_start();

// Check if user is logged in, if not redirect to login page
if (!isset($_SESSION['email'])) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style 2.css">
    <title>Page 3</title>
</head>
<body>
    <h2>Welcome to Page 3, <?php echo $_SESSION['email']; ?>!</h2>
    <p>This is Page 3 content.</p>
    <a href="profile.php">Back to Profile</a>
</body>
</html>
