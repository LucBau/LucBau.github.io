<?php 
	$_SESSION['refresh'] = 0;
	if(!$_SESSION['isConnected'])
	{
		$_SESSION['message'] = $_SESSION['message'].'Connectez-vous pour ajouter des produits au panier. ';
		$_SESSION['page'] = 'espaceclient';
	}
	else
	{
		$productName = $_POST['name'];
		$pseudo = $_SESSION['pseudo'];

		$req = $bdd->prepare('INSERT INTO panier(ID, NomP) VALUES(:pseudo, :nom)');

		$req->execute(array(
			'pseudo' => $pseudo,
			'nom' => $productName
		));
		$_SESSION['message'] = $_SESSION['message'].'Produit ajouté au panier avec succès ! ';
	}
