<?php 

	$_SESSION['refresh'] = 0;
	$_SESSION['isConnected'] = false;
	$login = $_POST['pseudo'] ;
	$mdp = $_POST['mdp'] ;
	if (isset($_POST) && (!empty($_POST['pseudo'])) && (!empty($_POST['mdp'])) )
	{
		
		$reponse = $bdd->query("SELECT * FROM fichierclient WHERE pseudo='$login' ");
		$donnees = $reponse->fetch();
		
		if(!empty($donnees)){
			if(password_verify($mdp, $donnees['mdpHash'])){
				$_SESSION['prenom'] = $donnees['prenom'];
				$_SESSION['nom'] = $donnees['nom'];
				$_SESSION['pseudo'] = $donnees['pseudo'];
				$_SESSION['mdpHash'] = $donnees['mdpHash'];
				$_SESSION['droits'] = $donnees['droits'];
				$_SESSION['isConnected'] = true;
				$_SESSION['message'] = $_SESSION['message'].'Vous êtes bien connecté ! ';
			}
			else
			{ 
				$_SESSION['error'] = $_SESSION['error'].'Mot de passe incorrect. ';
			}
		}
		else 
		{ 
			$_SESSION['error'] = $_SESSION['error'].'Identifiant inconnu. ';
		}
	}
	else 
	{  
		$_SESSION['error'] = $_SESSION['error'].'Données incorrectes. ';
	}
?>