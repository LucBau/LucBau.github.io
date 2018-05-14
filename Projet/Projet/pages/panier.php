<div>
	<table class="clientPanier">
		<tbody>
			<tr>
				<td class="tab">Images</td>
				<td class="tab">Nom</td>
				<td class="tab">Marques</td>
				<td class="tab">Prix</td>
			</tr>
<?php
	$total = 0;
	$pseudo = $_SESSION['pseudo'];
	$reponse1 = $bdd->query("SELECT * FROM panier WHERE ID ='$pseudo'");

	while ($element = $reponse1->fetch())
		{
		$produit = $element['NomP'];
		$reponse2 = $bdd->query("SELECT * FROM ficheproduit WHERE nom = '$produit'");
		$donnees = $reponse2->fetch();
		$total = $total + $donnees['prix'];
	?>
			<tr>
				<td class="tab"><?php echo '<img class="photo" src="'.$donnees['image'].'"/>';?></td>
				<td class="tab"><?php echo $donnees['nom']?></td>
				<td class="tab"><?php echo $donnees['marque']?></td>
				<td class="tab" id="prix"> <?php echo ($donnees['prix']." €")?></td>
			</tr>
  <?php } ?>
			<tr>
				<td class="null"></td>
				<td class="null"></td>
				<td class="tab"><button> Payer </button></td>
				<td class="tab"><?php echo("Total : ".$total." €");?></td>
			</tr>
		</tbody>
	</table>
</div>