<div class="pageformulaire">
        <div class="formulaire">
            <h1>Supprimer un produit</h1>
            <form action="index.php?page=espaceroot" method="post"> 
            <fieldset>
                <label for="nom">Quel est le nom du produit?</label></br>
                
              <input name="nom" type='text' autofocus=""><br>
                <label for="type">Son Type ?</br></label>
              <input name="type" type='text' pattern="[A-Z]{3}" autofocus="" ><br>

            </fieldset>
            <input name="action" type="hidden" value="supprimerproduit">
            <button type="submit" value="Valider">supprimer le produit</button>
            </form>
        </div>
</div>