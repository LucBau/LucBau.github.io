<?php
	if (!empty($_SESSION)){
    $pseudo=$_SESSION['pseudo'];
    $mdpHash=$_SESSION['mdpHash'];
    $ancienmdp=$_POST['ancienmdp'];
    $nouveauMdpHash=password_hash($_POST['nouveaumdp'], PASSWORD_DEFAULT);
    $confirmationmdp=$_POST['confirmationmdp'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $telephone=$_POST['telephone'];
    $email=$_POST['email'];

	if ($ancienmdp != '' && $nouveaumdpHash != '' && $confirmationmdp != '') {
	    
	    if (password_verify($confirmationmdp, $nouveauMdpHash) && password_verify($ancienmdp, $mdpHash)){
	        
	        $req = $bdd->prepare('UPDATE fichierclient SET mdpHash = :nouveaumdpHash WHERE pseudo = :pseudo');

	        $req->execute(array(
	        'nouveaumdpHash' => $nouveaumdpHash,
	        'pseudo'=> $pseudo
	        ));
	        $_SESSION['message'] = $_SESSION['message'].'Votre mot de passe a bien été changé. ';
	    }
	    elseif($mdpHash != $ancienmdp) {
	        $_SESSION['error'] = $_SESSION['error'].'Votre ancien mot de passe est incorrect. ';
	    }
	    elseif($nouveaumdpHash != $confirmationmdp){
	    	$_SESSION['error'] = $_SESSION['error'].'Votre confirmation de mot de passe est incorrecte. ';
	    }
	}
	    
    if ($nom !=''){
        $req = $bdd->prepare('UPDATE fichierclient SET nom = :nom WHERE pseudo = :pseudo');

         $req->execute(array(
        'nom' => $nom,
        'pseudo'=> $pseudo
        ));
        $_SESSION['message'] = $_SESSION['message'].'Votre nom a bien été changé. ';
    }
    
    if ($prenom !=''){
        $req = $bdd->prepare('UPDATE fichierclient SET prenom = :prenom WHERE pseudo = :pseudo');

         $req->execute(array(
        'prenom' => $prenom,
        'pseudo'=> $pseudo
        ));
        $_SESSION['message'] = $_SESSION['message'].'Votre prénom a bien été changé. ';
    }
    
    if ($telephone !=''){
        $req = $bdd->prepare('UPDATE fichierclient SET telephone = :telephone WHERE pseudo = :pseudo');

         $req->execute(array(
        'telephone' => $telephone,
        'pseudo'=> $pseudo
        ));
        $_SESSION['message'] = $_SESSION['message'].'Votre numéro de téléphone a bien été changé. ';
    }
    
    if ($email !=''){
        $req = $bdd->prepare('UPDATE fichierclient SET email = :email WHERE pseudo = :pseudo');

         $req->execute(array(
        'email' => $email,
        'pseudo'=> $pseudo
        ));
        $_SESSION['message'] = $_SESSION['message'].'Votre email a bien été changé. ';
    }
}