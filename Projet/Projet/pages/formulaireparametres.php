<div class="pageformulaire">
    <div class="formulaire">

        <h1>Modifier son compte</h1>
        <form action="index.php?page=espaceclient&pageUser=parametres" method="post"> 
        <fieldset>
          <legend>Mot de passe</legend>
            
        <label for="ancienmdp">Ancien mot de passe</label>
        <input name="ancienmdp" placeholder="**********" type="password"></br>
          
        <label for="nouveaumdp">Nouveau mot de passe</label>
        <input name="nouveaumdp" placeholder="**********" type="password"></br>

        <label for="confirmationmdp">Confirmez le nouveau mot de passe</label>
        <input name="confirmationmdp" placeholder="**********" type="password"></br>
        </fieldset>

        <fieldset>
          <legend>Autres informations</legend>
          <label for="nom">Nom </label>
          <input name="nom" placeholder="Entrez votre nom" autofocus=""><br>
          <label for="prenom">Prénom </label>
          <input name="prenom" placeholder="Entrez votre prénom"><br>
          <label for="telephone">Portable</label>
          <input name="telephone" type="tel" placeholder="06xxxxxxxx" pattern="06[0-9]{8}"><br>
          <label for="email">Email </label>
          <input name="email" type="email" placeholder="prenom.nom@..."><br>
        </fieldset>

        <input name="action" type="hidden" value="modificationcompte">
        <button type="submit" value="Valider">Valider les modifications</button>
        </form>
    </div>
</div>