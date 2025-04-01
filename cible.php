<?php
     $Nom= htmlspecialchars($_POST['Nom']);
     $Prenom= htmlspecialchars($_POST["Prenom"]);
     $Email= htmlspecialchars($_POST["Email"]);
     echo"<h2>Les informations saisis :</h2>  <br>"; 
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
        echo"Nom : " . $Nom . "<br>";
        echo"Prenom : " . $Prenom . "<br>";
        echo"Email : " . $Email . "<br>";
     }    
 ?>
