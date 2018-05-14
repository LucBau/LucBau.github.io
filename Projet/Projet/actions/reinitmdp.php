<?php
	
	$_SESSION['refresh'] = 0;

	$pseudo = $_POST['pseudo'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$tel = $_POST['telephone'];
	$email = $_POST['email'];

	$nouveauMdpHash = password_hash($_POST['nouveaumdp'], PASSWORD_DEFAULT);
	$confirmationMdp = $_POST['confirmationmdp'];

	$reponse = $bdd->query("SELECT * FROM fichierclient WHERE pseudo='$pseudo'");	//vérification de compte existant
	$donnees = $reponse->fetch();

	if(!empty($donnees))
	{
		if($nom == $donnees['nom'] && $prenom == $donnees['prenom'] && $tel == $donnees['portable'] && $email == $donnees['email'])
		{
			if(password_verify($confirmationMdp, $nouveauMdpHash))
			{
				$req = $bdd->prepare('UPDATE fichierclient SET mdpHash = :nouveauMdpHash WHERE pseudo = :pseudo');

		        $req->execute(array(
		        'nouveauMdpHash' => $nouveauMdpHash,
		        'pseudo'=> $pseudo
		        ));

		        $_SESSION['message'] = $_SESSION['message']."Votre mot de passe a bien été remplacé. ";
			}
			else
			{
				$_SESSION['error'] = $_SESSION['error']."Vos deux mots de passe sont différents, recommencez. ";
			}
		}
		else
		{
			$_SESSION['error'] = $_SESSION['error']."Vos infos sont incorrectes, recommencez. ";
		}
	}
	else
	{
		$_SESSION['error'] = $_SESSION['error']."Compte non trouvé, c'est pas normal d'avoir ce message, le mec qui a codé ça est nul. ";
	}

