<?php
	if($_SESSION['droits'] == 1)    
	{
        
        include("include/navespaceclient.php");
        
		switch($_SESSION['pageUser'])
		{
			case "ajoutproduit":	include("pages/formulaireajoutproduit.php");	break;
			case "modifproduit":	include("pages/formulairemodifproduit.php");	break;
            case "suppressionproduit": include("pages/formulairesuppressionproduit.php"); break;
			case "parametres":	include("pages/formulaireparametres.php");	break;
			 
		}
	}
?> 