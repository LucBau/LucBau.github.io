<article>
	<div class="pageformulaire">
		<div class="formulaire">
			<h1>Modification de mot de passe</h1>
			<form action="index.php?page=espaceclient" method="post">
				<fieldset>
					<legend>Informations</legend>
					<label for="pseudo">Pseudo </label>
          			<input name="pseudo" placeholder="Entrez votre pseudo" autofocus="" required=""><br>
					<label for="nom">Nom </label>
			        <input name="nom" placeholder="Entrez votre nom" autofocus="" required=""><br>
			        <label for="prenom">Prénom </label>
			        <input name="prenom" placeholder="Entrez votre prénom" required=""><br>
			        <label for="telephone">Portable</label>
			        <input name="telephone" type="tel" placeholder="06xxxxxxxx" pattern="06[0-9]{8}"><br>
			        <label for="email">Email </label>
			        <input name="email" type="email" placeholder="prenom.nom@..." required=""><br>
			    </fieldset>

			    <fieldset>
			    	<legend>Nouveau mot de passe</legend>
			    	<label for="nouveaumdp">Nouveau mot de passe</label>
			        <input name="nouveaumdp" placeholder="**********" type="password"></br>

			        <label for="confirmationmdp">Confirmez le nouveau mot de passe</label>
			        <input name="confirmationmdp" placeholder="**********" type="password"></br>
			    </fieldset>

			    <input name="action" type="hidden" value="reinitmdp">

		        <button type="submit" value="Valider">Valider</button>
		    </form>
        </div>
    </div>
</article>
