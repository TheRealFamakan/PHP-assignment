<?php
$servername = "localhost";
$username = "root";
$password = "Thereal15699";
$dbname = "DB"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $nom = $_POST['nom'];
        $email = $_POST['email'];

        $stmt = $conn->prepare("INSERT INTO Personne (nom, email) VALUES (?, ?)");
        $stmt->execute([$nom, $email]);

        header("Location: PHPSQL.users.php"); 
        exit();
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="PHPSQL.style.css">
</head>
<body>
<form method="post" action="">
    <label>Nom :</label><br>
    <input type="text" name="nom" required><br><br>

    <label>Email :</label><br>
    <input type="email" name="email" required><br><br>

    <button type="submit">Ajouter</button>
</form>

<a href="PHPSQL.users.php">Voir les utilisateurs</a>
</body>
</html>
