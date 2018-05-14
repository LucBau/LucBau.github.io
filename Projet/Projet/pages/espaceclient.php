<?php 

	if(!$_SESSION['isConnected']){
		if($_SESSION['pageUser'] == 'mdpoublie')
		{
			include("pages/formulairemdpoublie.php");
		}
		else
		{
			include("pages/formulaireconnexion.php");
		}}
	else
	{
        
     include("include/navespaceclient.php");
        
		switch($_SESSION['pageUser'])
		{
			case "parametres": include("pages/formulaireparametres.php");	break;
            case "panier": include("pages/panier.php");	break;
            case "preferences": include("pages/formulairepreferences.php"); break;
		}
    
	}
?>