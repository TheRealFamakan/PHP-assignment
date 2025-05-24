<?php
$servername = "localhost";
$username = "root";
$password = "Thereal15699";
$dbname = "DB"; 

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Supprimer un utilisateur si un id est passé via GET
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM Personne WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: PHPSQL.users.php");
    exit();
}

// Afficher tous les utilisateurs
$stmt = $conn->query("SELECT * FROM Personne");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
    <link rel="stylesheet" href="PHPSQL.style.css">
</head>
<body>
<h2>Liste des utilisateurs</h2>
<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= htmlspecialchars($user['id']) ?></td>
            <td><?= htmlspecialchars($user['nom']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
            <td>
                <a href="PHPSQL.users.php?delete=<?= $user['id'] ?>" onclick="return confirm('Supprimer cet utilisateur ?')">Supprimer</a>
                <a href="PHPSQL.modifier.php?id=<?= $user['id'] ?>">Modifier</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<br>
<a href="PHPSQL.add_user.php">Ajouter un utilisateur</a>

</body>
</html>
