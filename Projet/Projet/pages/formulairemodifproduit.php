<div class="pageformulaire">
        <div class="formulaire">
            <h1>Modification d'un produit</h1>
            <form action="index.php?page=espaceroot" method="post"> 
            <fieldset>
                <label for="nom">Quel est le nom du produit ?</label></br>
              <input name="nom" type='text' autofocus=""><br>
                </br>Les modifications que vous voulez apporter :</br></br>
              <label for="nouveaunom">Nom :</label></br>
              <input name="nouveaunom" type='text' autofocus=""><br>
                <label for="type">Type :</br></label>
              <input name="type" type='text' pattern="[A-Z]{3}" autofocus="" ><br>
              <label for="description">Description :</label>
                <textarea name="description"  autofocus=""></textarea><br>
              <label for="caracteristique">Caracteristiques :</label>
                <textarea name="caracteristique" type='text' autofocus=""></textarea><br> 
              <label for="marque">Marque :</label>
              <input name="marque" type='text' autofocus=""><br>
              <label for="prix">Prix :</label>
              <input name="prix" type='text' autofocus="" pattern="[0-9]{,10}"><br>
              <label for="image">URL image :</label>
              <input name="image" type='text' autofocus="" placeholder="images/" ><br>    
            </fieldset>
            <input name="action" type="hidden" value="modifproduit">
            <button type="submit" value="Valider">Modifier le produit</button>
            </form>
        </div>
</div>