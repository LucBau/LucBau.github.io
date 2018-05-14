<?php

function printPseudo()
{
	if(isset($_SESSION['prenom']) && isset($_SESSION['nom']))
		echo($_SESSION['prenom']." ".$_SESSION['nom']);
	else
		echo("Espace Client");
}

function setDefaultVariables()
{
	if(!isset($_SESSION['isConnected']))
		$_SESSION['isConnected'] = false;
	if(!isset($_SESSION['page']))
		$_SESSION['page'] = '';
	if(!isset($_SESSION['produit']))
		$_SESSION['produit'] = '';
	if(!isset($_SESSION['pageUser']))
		$_SESSION['pageUser'] = '';
	if(!isset($_SESSION['refresh']))
		$_SESSION['refresh'] = null;
	if(!isset($_SESSION['message']))
		$_SESSION['message'] = null;
	if(!isset($_SESSION['error']))
		$_SESSION['error'] = null;
}

function getCurrentPage()
{
	return $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}
?>