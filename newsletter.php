<?php 

// CONNEXION

$host = 'localhost'; 
$dbname = 'inscris';
$user = 'root'; 
$password = 'root'; 

try{ 
	$connexion = new PDO("mysql:host=$host;dbname=$dbname", $user, $password); 
}catch(PDOException $e){
	echo $e->getMessage();
}


if($_POST['submit'] == true) {

$email = $_POST['email'];

$query ="INSERT INTO addres (mail)" . 
"VALUES('$email')"; // insérer dans la bdd

$preparedStatement = $connexion->prepare($query); 
$preparedStatement->bindParam(":id", $id); 
$preparedStatement->execute(); 
$result = $preparedStatement->fetch(); //retourne le 1er résultat var_dump($result);;

// echo '<p>Félicitation, vous êtes maintenant inscris</p>';
//REDIRECTION 
function redir($url){ 
echo "<script language=\"javascript\">"; 
echo "window.location='$url';"; 
echo "</script>"; 
} 
redir("confirmation.html"); 


if(count($errors) == 0) {

$message = 'Vous êtes bien inscris à la newsletter';   
$sujet = 'Message de confirmation';
    $resultEmail = mail($email, $sujet, $message);

}

}



?> 