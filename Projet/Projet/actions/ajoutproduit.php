<?php

	$_SESSION['refresh'] = 0;
	
	    $nom = $_POST['nom'];
	    $type = $_POST['type']; 
	    $description=$_POST['description'];
	    $caracteristique = $_POST['caracteristique']; 
	    $marque = $_POST['marque'];  
	    $prix = $_POST['prix'];  
	    $image = $_POST['image']; 

$req = $bdd->query("SELECT * FROM ficheproduit WHERE nom='$nom' AND type='$type' AND description= '$description' AND caracteristique= '$caracteristique' AND marque= '$marque' AND prix= '$prix' AND image= '$image'");

$donnees = $req->fetch();
    
    if(empty($donnees)){
    
	    $req = $bdd->prepare('INSERT INTO ficheproduit(nom, type, description, caracteristique, marque, prix, image) VALUES(:nom, :type, :description, :caracteristique, :marque, :prix, :image )');
	     
	$req->execute(array(
	    'nom' => $nom,
	    'type'=> $type,
	    'description'=> $description,
	    'caracteristique' => $caracteristique,
	    'marque' => $marque,
	    'prix' => $prix,
	    'image' => $image
		));

	$_SESSION['message'] = $_SESSION['message'].'Produit ajouté avec succès ! ';
    }
else {
    $_SESSION['error'] = $_SESSION['error'].'Ce produit existe déjà. ';
}
?>
