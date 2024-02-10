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
    
    <title>User Profile</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

ul {
    list-style-type: none;
    padding: 0;
    margin-bottom: 20px;
}

ul li {
    margin-bottom: 10px;
}

a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

a:hover {
    background-color: #0056b3;
}

.logout-form {
    text-align: center;
}

.logout-form input[type="submit"] {
    padding: 10px 20px;
    background-color: #dc3545;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.logout-form input[type="submit"]:hover {
    background-color: #c82333;
}
    </style>
</head>
<body>
    <h2>Hello, <?php echo $_SESSION['email']; ?>!</h2>
    
    <!-- Links to Page 1, Page 2, and Page 3 -->
    <ul>
        <li><a href="page1.php">Page 1</a></li>
        <li><a href="page2.php">Page 2</a></li>
        <li><a href="page3.php">Page 3</a></li>
    </ul>

    <!-- Logout Form -->
    <form action="deconection.php" method="post">
        <input type="submit" value="Logout">
    </form>
</body>
</html>
