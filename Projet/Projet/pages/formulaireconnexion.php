<article>
  <div class="pageformulaire">
    <div class="formulaire">

      <h1>Créer un compte</h1>
      <form action="index.php?page=espaceclient" method="post"> 
        <fieldset>
          <legend>Login</legend>
          <label for="pseudo">Pseudo </label>
          <input name="pseudo" placeholder="Entrez votre pseudo" autofocus="" required=""><br>
          <label for="mdp">Mot de passe</label>
          <input name="mdp" placeholder="**********" required="" type="password"><br>
          <label for="mdp">Confirmez le mot de passe</label>
          <input name="confirmationmdp" placeholder="**********" required="" type="password"><br>
        </fieldset>

        <fieldset>
          <legend>Contact</legend>
          <label for="nom">Nom </label>
          <input name="nom" placeholder="Entrez votre nom" autofocus="" required=""><br>
          <label for="prenom">Prénom </label>
          <input name="prenom" placeholder="Entrez votre prénom" required=""><br>
          <label for="telephone">Portable</label>
          <input name="telephone" type="tel" placeholder="06xxxxxxxx" pattern="06[0-9]{8}"><br>
          <label for="email">Email </label>
          <input name="email" type="email" placeholder="prenom.nom@..." required=""><br>
        </fieldset>

        <input name="action" type="hidden" value="creationcompte">

        <button type="submit" value="Valider">Créer mon compte</button>
      </form>
    </div>

    <div class="formulaire">
        
        <form action="index.php?page=main" method="post">
        <h1> Connexion </h1></br></br>
        <fieldset>
          <legend>Login</legend>
          <label for="pseudo">Pseudo </label>
          <input name="pseudo" placeholder="Entrez votre pseudo" autofocus="" required=""><br>
          <label for="mdp">Mot de passe</label>
          <input name="mdp" placeholder="**********" required="" type="password"><br>
        </fieldset>
        <input name="action" type="hidden" value="connexion">
        <button type="submit" value="Valider">Se connecter</button>
          </br><a href="index.php?page=espaceclient&pageUser=mdpoublie">Mot de passe oublié ?</a>
      </form>
    </div>
  </div>

</article>