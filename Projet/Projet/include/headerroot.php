<header>
	<!-- Logo -->
	<div id="logo"> 
	   <a href="index.php"><img src="images/logo.png" id="logo"/></a>
	</div>

	<!-- bouton panier -->
        <div id="blockpanier">
           <a href="index.php?page=espaceroot&pageUser=panier"><img src="images/panier.png"/></br>Panier</a> 
        </div>

	<!-- bouton paramètres -->
        <div id="parametres">
           <a href="index.php?page=espaceroot&pageUser=parametres"><img src="images/parametres.png"/></br>Paramètres</a>  
        </div>

	<!-- bouton deconnexion -->
        <div id="deconnexion">
            <form action="index.php" method="post">
                <input name="action" type="hidden" value="deconnexion">
                <button type="submit" value="Valider"><img src="images/deconnexion.png"/></br>Se Déconnecter</button>
            </form>
        </div>

    <!--bouton ajout -->
        <div id="ajout">
            <a href="index.php?page=espaceroot&pageUser=ajoutproduit"><img src="images/ajout.png"/></br>Ajouter</a>
        </div>
        <div id="modif">
            <a href="index.php?page=espaceroot&pageUser=modifproduit"><img src="images/modification.png"/></br>Modifier</a>
        </div>

	<!-- barre de recherche-->
        <div id="recherche">
             <form  method="post" action="recherche.php">
             <input name="recherche" type="text" placeholder="Rechercher..." required />
             <input class="loupe" type="submit" value="" />
             </form>
        </div>
</header>