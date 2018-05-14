<?php 
	
	$_SESSION['refresh'] = 0;

	$nom=$_POST['nom'];
    $nouveaunom=$_POST['nouveaunom'];
    $type = $_POST['type']; 
    $description=$_POST['description'];
    $caracteristique = $_POST['caracteristique']; 
    $marque = $_POST['marque'];  
    $prix = $_POST['prix'];  
    $image = $_POST['image']; 

    
    if ($nouveaunom !=''){
        $req = $bdd->prepare('UPDATE ficheproduit SET nom = :nouveaunom WHERE nom = :nom');

         $req->execute(array(
        'nouveaunom' => $nouveaunom,
        'nom' => $nom
        ));
        $_SESSION['message'] = $_SESSION['message'].'Le nom a bien été changé. ';
    }
    
    if ($type !=''){
        $req = $bdd->prepare('UPDATE ficheproduit SET type = :type WHERE nom = :nom');

         $req->execute(array(
        'type' => $type,
        'nom' => $nom
        ));
        $_SESSION['message'] = $_SESSION['message'].'Le type a bien été changé. ';
    }

    if ($description !=''){
            $req = $bdd->prepare('UPDATE ficheproduit SET description = :description WHERE nom = :nom');

             $req->execute(array(
            'description' => $description,
            'nom' => $nom
            ));
            $_SESSION['message'] = $_SESSION['message'].'La description a bien été changée. ';
        }

    if ($caracteristique !=''){
            $req = $bdd->prepare('UPDATE ficheproduit SET caracteristique = :caracteristique WHERE nom = :nom');

             $req->execute(array(
            'caracteristique' => $caracteristique,
            'nom' => $nom
            ));
            $_SESSION['message'] = $_SESSION['message'].'Les caractéristiques ont bien été changées. ';
        }

    if ($marque !=''){
        $req = $bdd->prepare('UPDATE ficheproduit SET marque = :marque WHERE nom = :nom');

         $req->execute(array(
        'marque' => $marque,
        'nom' => $nom
        ));
        $_SESSION['message'] = $_SESSION['message'].'La marque a bien été changée. ';
    }

    if ($prix !=''){
            $req = $bdd->prepare('UPDATE ficheproduit SET prix = :prix WHERE nom = :nom');

             $req->execute(array(
            'prix' => $prix,
            'nom' => $nom
            ));
            $_SESSION['message'] = $_SESSION['message'].'Le prix a bien été changé. ';
        }

    if ($image !=''){
            $req = $bdd->prepare('UPDATE ficheproduit SET image = :image WHERE nom = :nom');

             $req->execute(array(
            'image' => $image,
            'nom' => $nom
            ));
            $_SESSION['message'] = $_SESSION['message']."l'image a bien été changée. ";
        }
?>