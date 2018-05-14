<?php 
    
    $_SESSION['refresh'] = 0;

    $nom=$_POST['nom'];
    $type=$_POST['type'];

   
    $req = $bdd->prepare('DELETE FROM ficheproduit  WHERE nom = :nom AND type= :type');

    $req->execute(array(
         'nom' => $nom,
         'type'=> $type
    ));
        $_SESSION['message'] = $_SESSION['message'].'Le produit est supprimé. ';

?>
