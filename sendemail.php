<?php

// if ($_POST['mailing'] == true)  {}
$query ="SELECT * FROM addres (mail)
VALUES('$email')"; // selec dans la bdd

$preparedStatement = $connexion->prepare($query); //connect 
$preparedStatement->bindParam(":id", $id); // colonne
$preparedStatement->execute(); // exécuter - lire
$result = $preparedStatement->fetch(); //retourne le 1er résultat


if(count($errors) == 0) {
$message = 'OSER est maintenant sorti. Vous pouvez le consulter via cette adresse :
			http://lauramelard.be/tfe/oser';   
$sujet = 'OSER, mainteant sur vos écrans';
    $resultEmail = mail($email, $sujet, $message);
   
}


?>
