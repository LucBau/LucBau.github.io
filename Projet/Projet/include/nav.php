<nav id="nav">
	<ul id="menu">
		       <li class="menu"><a href="index.php">Cyclisme</a>
			      <ul>
				     <li><a href="index.php?page=produits&produit=VTT">VTT</a></li>
				     <li><a href="index.php?page=produits&produit=VTC">VTC </a></li>
				     <li><a href="index.php?page=produits&produit=VDR">Vélo de route</a></li>
				     <li><a href="index.php?page=produits&produit=VAC">Accessoires</a></li>
	             </ul>
		       </li>
		       <li class="menu"><a href="index.php">Football</a>
			      <ul>
				     <li><a href="index.php?page=produits&produit=FMA">Maillot</a></li>
				     <li><a href="index.php?page=produits&produit=FCH">Chaussures</a></li>
				     <li><a href="index.php?page=produits&produit=FGA">Gardien</a></li>
				     <li><a href="index.php?page=produits&produit=FSA">Accessoires</a></li>
			      </ul>
		       </li>
		       <li class="menu"><a href="index.php">Rugby</a>
			      <ul>
				     <li><a href="index.php?page=produits&produit=RVE">Vêtements</a></li>
				     <li><a href="index.php?page=produits&produit=RCH">Chaussures</a></li>
				     <li><a href="index.php?page=produits&produit=RBA">Ballons</a></li>
				     <li><a href="index.php?page=produits&produit=RAC">Accessoires</a></li>
			      </ul>
		       </li>
		       <li class="menu"><a href="index.php">Basket</a>
			      <ul>
				     <li><a href="index.php?page=produits&produit=BMA">Maillots</a></li>
				     <li><a href="index.php?page=produits&produit=BCH">Chaussures</a></li>
				     <li><a href="index.php?page=produits&produit=BBA">Ballons</a></li>
				     <li><a href="index.php?page=produits&produit=BAC">Accessoires</a></li>
			      </ul>
		       </li>
	        </ul>
    
    <?php 
    	if($_SESSION['refresh'] == null)
    	{
    		if($_SESSION['error'] != null)
    		{
                echo("<script> alert('{$_SESSION['error']}')</script>");
    			$_SESSION['error'] = null;
    		}
    		if($_SESSION['message'] != null)
    		{
    			echo("<div id='message'>{$_SESSION['message']}</div>");
    			$_SESSION['message'] = null;
    		}
    	}
    ?>
    </nav>
