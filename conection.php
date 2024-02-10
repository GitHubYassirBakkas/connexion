<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST["email"];
    $pass = $_POST["psd"];
   
    

    // Vous devriez utiliser des requêtes préparées pour éviter les attaques par injection SQL
    $sql = "INSERT INTO  utilisateur  (email,psd) VALUES ('$email','$psd')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Nouvel utilisateur ajouté avec succès";
    } else {
        echo "Erreur lors de l'ajout de l'utilisateur : " . $conn->error;
    }
}

$conn->close();

?>