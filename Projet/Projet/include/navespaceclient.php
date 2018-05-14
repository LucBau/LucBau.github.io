
 <div class="navespaceclient">
	<!-- bouton panier -->
        
    <?php if(!$_SESSION['droits']==1){ ?>
     <div class="blockUtilitaireEspaceClient">
	    <a href="index.php?page=espaceclient&pageUser=panier">
    
          <img src="images/panier.png"/></br>Panier</a> 
        </div>
 <?php } ?>
       
	<!-- bouton preferences -->
        
    <?php if(!$_SESSION['droits']==1){ ?>
     <div class="blockUtilitaireEspaceClient">
	    <a href="index.php?page=espaceclient&pageUser=preferences">
    
          <img src="images/preferences.png"/></br>Préférences</a> 
        </div>
 <?php } ?>

	<!-- bouton paramètres -->
        <div class="blockUtilitaireEspaceClient">
    <?php if($_SESSION['droits']==1){
	     ?>  
        <a href="index.php?page=espaceroot&pageUser=parametres">
    <?php } else { ?>
        <a href="index.php?page=espaceclient&pageUser=parametres"> 
    <?php } ?>
           <img src="images/parametres.png"/></br>Paramètres</a>  
        </div>
<?php
          if ($_SESSION['droits'] == "1"){
          ?> 
<!--bouton ajout -->
        <div class="blockUtilitaireEspaceClient">
            <a href="index.php?page=espaceroot&pageUser=ajoutproduit"><img src="images/ajout.png"/></br>Ajouter</a>
        </div>
<!--bouton modification -->
        <div class="blockUtilitaireEspaceClient">
            <a href="index.php?page=espaceroot&pageUser=modifproduit"><img src="images/modification.png"/></br>Modifier</a>
        </div>
<!--bouton suppression -->
        <div class="blockUtilitaireEspaceClient">
            <a href="index.php?page=espaceroot&pageUser=suppressionproduit"><img src="images/suppression.png"/></br>Supprimer</a>
        </div>

<?php } ?>
	
</div>

	

    

	