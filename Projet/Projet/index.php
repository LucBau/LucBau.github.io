<?php
	include("actions/functions.php");

	//connecting to the BDD
	try 
	{
		$bdd = new PDO('mysql:host=localhost;dbname=mybdd;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}

	session_start();

	//générating variables needed at all time
	setDefaultVariables();

	//updating variables
	if(isset($_GET['page']))
		$_SESSION['page'] = $_GET['page'];
	else
		$_SESSION['page'] = '';

	if(isset($_GET['produit']))
		$_SESSION['produit'] = $_GET['produit'];
	else
		$_SESSION['produit'] = '';

	if(isset($_GET['pageUser']))
		$_SESSION['pageUser'] = $_GET['pageUser'];
	else
		$_SESSION['pageUser'] = '';

    if(isset($_GET['requete']))
	{
		$_SESSION['requete'] = $_GET['requete'];
		$_SESSION['page'] = 'recherche';
	}
	else
		$_SESSION['requete'] = '';


	//executing actions 
	if(isset($_POST['action']))
	{
		include("actions/".$_POST['action'].".php");
		unset($_POST['action']);
	}
?>

<html>
<head>
	<title>Sport 3000</title>
	<link rel="stylesheet" href="styles/style.css")/>
	<meta charset="utf-8"/>
	<?php 
		if($_SESSION['refresh'] != null)		//setting a refresh after x seconds, set by the refresh parameter itself
		{
			echo("<meta http-equiv='refresh' content='{$_SESSION['refresh']}'");
		}
			
	?>
</head>

<body>

	<?php include("include/header.php"); ?>

	<?php include("include/nav.php"); ?>

	<?php

		switch($_SESSION['page'])
		{
			case "produits": 		include("pages/produits.php"); 		break;
			case "espaceclient": 	include("pages/espaceclient.php"); 	break;
			case "espaceroot":		include("pages/espaceroot.php");	break;
			default: 				include("pages/main.php"); 			break;
		}

	 ?>

	 <?php include("include/footer.php"); ?>
</body>

</html>

<?php
	//executing actions needed after charging every page

	if($_SESSION['refresh'] != null)
		$_SESSION['refresh'] = null;
?>