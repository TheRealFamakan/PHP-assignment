<?php
    $Nom= htmlspecialchars($_POST['Nom']);
    $Prenom= htmlspecialchars($_POST["Prenom"]);
    $Email= htmlspecialchars($_POST["Email"]);
    echo"<h2>Les informations saisis :</h2>  <br>";
    echo"Nom : " . $Nom . "<br>";
    echo"Prenom : " . $Prenom . "<br>";
    echo"Email : " . $Email . "<br>";
?>