<?php 
	include 'newsletter.php';
	include 'sendemail.php';
?>
<!DOCTYPE html> 

<head> 
<meta http-equiv="content-type" content="text/html;charset=utf-8" /> 
<title>Newsletters de Oser</title> 
<link rel="stylesheet" type="text/css" href="css/style.css">
</head> 

<body> 
  <h2>Inscrivez-vous afin de recevoir les dernières nouvelles de Oser par mail .</h2>
	
	<form method="POST" name="monform"> 
	<input type="text" name="email" id="email"><br /> 
 
	<input type="submit" name="submit" value="Envoyer"></p> 
</form>

</body> 
</html> 
