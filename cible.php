<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            background-color: antiquewhite;
            text-align: left;
            font-family: Arial;
        }
    </style>
</body>
</html>
<?php
    $Nom= htmlspecialchars($_POST['Nom']);
    $Prenom= htmlspecialchars($_POST["Prenom"]);
    $Email= htmlspecialchars($_POST["Email"]);
    echo"<h1>Les informations saisis :</h1>  <br>"; 
    if(empty($Nom)){
        echo"Il manque votre nom<br>";
    }
    if(empty($Prenom)){
        echo"Il manque votre Prenom<br>";
    }
    if(empty($Email)){
        echo"Il manque votre Email<br>";
    }   
    if(!empty($Nom) && !empty($Prenom) && !empty($Email)){
        echo"<br> Nom : " . $Nom . "<br>";
        echo"Prenom : " . $Prenom . "<br>";
        echo"Email : " . $Email . "<br>";
    }    
?>
