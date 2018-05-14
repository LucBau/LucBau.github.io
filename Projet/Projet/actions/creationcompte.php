<?php

	$_SESSION['refresh'] = 0;

	$pseudo=$_POST['pseudo'];
    $mdpHash = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
    $confirmationmdp = $_POST['confirmationmdp'];
    $nom = $_POST['nom'];  
    $prenom = $_POST['prenom'];  
    $telephone = $_POST['telephone']; 
    $email = $_POST['email'];
  
  	$reponse = $bdd->query("SELECT * FROM fichierclient WHERE pseudo='$pseudo' OR email='$email'");	//vérification de compte existant
	$donnees = $reponse->fetch();

	if(!empty($donnees))
	{
		if($donnees['pseudo'] == $pseudo)
		{
			$_SESSION['error'] = $_SESSION['error'].'Utilisateur existant. ';
		}
		if($donnees['email'] == $email)
		{
			$_SESSION['error'] = $_SESSION['error'].'Email déjà attribué à un compte. ';
		}
	}
	elseif(password_verify($confirmationmdp, $mdpHash))
	{
		$req = $bdd->prepare('INSERT INTO fichierclient(pseudo,mdpHash,nom,prenom,portable,email) VALUES(:pseudo, :mdpHash, :nom, :prenom, :telephone, :email)');
     

	 	$req->execute(array(
		'pseudo' => $pseudo,
		'mdpHash' => $mdpHash,
		'nom' => $nom,
		'prenom' => $prenom,
		'telephone' => $telephone,
		'email' => $email,
		));

		$_SESSION['message'] = $_SESSION['message'].'Compte créé avec succès ! ';

		include("actions/connexion.php");
	}
	else
	{
		$_SESSION['error'] = $_SESSION['error'].'Confirmation de mot de passe incorrecte. ';
	}
 ?>