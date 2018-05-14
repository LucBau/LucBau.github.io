<header id="header">
            <div id="logo"> 
               <a href="index.php"><img src="images/logo.png" id="logo"/></a>
            </div>

<?php 
	if($_SESSION['isConnected'])
	{	
    ?> <div id="blockconnexion"> 
    <?php if($_SESSION['droits']==1){
	     ?>  
        <a href="index.php?page=espaceroot"> 
    <?php } else { ?>
        <a href="index.php?page=espaceclient"> 
    <?php } ?>
         <img src="images/espaceclient.png"/></br><?php echo(  ucfirst($_SESSION['prenom'])." ".ucfirst($_SESSION['nom'])); ?></a>  
</div>

<!-- bouton deconnexion -->
        <div id="deconnexion">
            <form action="index.php" method="post">
            	<input name="action" type="hidden" value="deconnexion">
                <button type="submit" value="Valider"><img src="images/deconnexion.png"/><br />Se Déconnecter</button>
            </form>
        </div>
<?php
	}
	else
	{
		?>
            <div id="blockconnexion">
                 <a href="index.php?page=espaceclient"><img src="images/espaceclient.png"/><br />Connexion</a>  
            </div>
<?php
	}
 ?>
       <div id="recherche">
               <form  method="get" action = "index.php?page=recherche">
				
                 <input name="requete" type="text" placeholder="Rechercher..." required />
                 <input class="loupe" type="submit" value="" />
               </form>
        </div>

</header>