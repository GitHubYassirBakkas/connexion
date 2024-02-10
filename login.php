<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
</head>
<body>
    <h2>Registration</h2>
    <?php if (isset($_GET['error'])) { ?>
        <p><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <form action="connexion.php" method="post">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="psd" required><br><br>
        <input type="submit" value="Register" name="register">
    </form>
</body>
</html>
