<div id="lesproduits">  	
		<?php
			$requete = htmlspecialchars($_SESSION['requete']); // on crée une variable $requete pour faciliter l'écriture de la requête SQL, mais aussi pour empêcher les éventuels malins qui utiliseraient du PHP ou du JS, avec la fonction htmlspecialchars().
			$reponse = $bdd->query("SELECT * FROM ficheproduit WHERE nom LIKE '%$requete%' ORDER BY prix DESC") or die (mysql_error()); 
			while ($donnees = $reponse->fetch())
			{
		?>
			<div class="produit">
			<h1><?php echo $donnees['nom']; ?></h1>
				<div class="content">	
						<?php echo '<img class="photo" src="'.$donnees['image'].'"/>';?>
					<div class="description">
						<div class="texte">
							<table class="texteProduit">
								<tbody>
									<tr>
										<td class="colonne1">Decription</td>
										<td class="colonne2"><?php echo $donnees['description'];?></td>
									</tr>
									<tr>
										<td class="colonne1">La Marque</td>
										<td class="colonne2"><?php echo $donnees['marque'];?></td>
									</tr>
									<tr>
										<td class="colonne1">Caractéristiques</td>
										<td class="colonne2"><?php echo $donnees['caracteristique'];?></td>
									</tr>
									<tr>
										<td class="colonne1">Prix</td>
										<td class="colonne2" id="prix"> <?php echo $donnees['prix'];?></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="bouttonAchat">
						<form method="post" action=<?php getCurrentPage();?>>
							<input name="action" type="hidden" value="ajoutpanier">
							<input  type="hidden" name="name" value="<?php echo $donnees['nom']; ?>"/>
							<button type="submit" value="Valider">Acheter</button>
						</form>
					</div>
				</div>
			</div>
			<?php
				}
				$reponse->closeCursor();
				?>
</div>