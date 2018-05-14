<div class="pageformulaire">
        <div class="formulaire">
            <h1>Ajout d'un produit</h1>
            <form action="index.php?page=espaceroot" method="post"> 
            <fieldset>
              <label for="nom">Nom du produit :</label>
              <input name="nom" type='text' autofocus="" required=""><br>
              <label for="type">Type :</label>
              <input name="type" type='text' pattern="[A-Z]{3}" autofocus="" required=""><br>
              <label for="description">Description :</label>
                <textarea name="description"  autofocus="" required=""></textarea><br>
              <label for="caracteristique">Caracteristiques :</label>
                <textarea name="caracteristique" type='text' autofocus="" required=""></textarea><br> 
              <label for="marque">Marque :</label>
              <input name="marque" type='text' autofocus="" required=""><br>
              <label for="prix">Prix :</label>
              <input name="prix" type='text' autofocus="" pattern="[0-9]{,10}" required=""><br>
              <label for="image">URL image :</label>
              <input name="image" type='text' autofocus="" required="" placeholder="images/"><br>    
            </fieldset>
            <input name="action" type="hidden" value="ajoutproduit">
            <button type="submit" value="Valider">Ajouter le produit</button>
            </form>
        </div>
</div>