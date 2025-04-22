<?php
$servername = "localhost";
$username = "root";
$password = "Thereal15699";
$dbname = "DB";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Récupération de l'utilisateur à modifier
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM Personne WHERE id = ?");
    $stmt->execute([$id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Mise à jour après soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];

    $stmt = $conn->prepare("UPDATE Personne SET nom = ?, email = ? WHERE id = ?");
    $stmt->execute([$nom, $email, $id]);

    header("Location: users.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un user</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Modifier un utilisateur</h2>

<form method="post" action="">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">

    <label>Nom :</label><br>
    <input type="text" name="nom" value="<?= htmlspecialchars($user['nom']) ?>" required><br><br>

    <label>Email :</label><br>
    <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required><br><br>

    <button type="submit">Enregistrer</button>
</form>

<a href="users.php">Retour à la liste</a>
</body>
</html>

