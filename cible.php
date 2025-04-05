<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Nom = isset($_POST["Nom"]) ? htmlspecialchars($_POST["Nom"]) : "";
        $Prenom = isset($_POST["Prenom"]) ? htmlspecialchars($_POST["Prenom"]) : "";
        $Email = isset($_POST["Email"]) ? htmlspecialchars($_POST["Email"]) : "";
    } else {
        header("Location: index.php");
        exit();
    }
?>
    <form action="cible.php" method="post"><br>
        <h1>Les inforamation saisis</h1>
        <div class="input-box">
        <input type="text" name="Nom" value="<?=$Nom?>" ><br>
        </div>
        <div class="input-box">
        <input type="text"  name="Prenom" value="<?=$Prenom?>" ><br>
        </div>
        <div class="input-box">
        <input type="text"  name="Email"  value="<?=$Email?>" ><br>
        </div>
        <div class="input-box">
        <input class="sirr-btn" type="submit" value="Update">
        </div>
    </form>
</body>
</html>

