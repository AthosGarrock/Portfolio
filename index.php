<?php 
	session_start();	
	$Manager = NULL;
	//Permet de récupérer dans un contrôleur les données d'un formulaire.
	$post = (!empty($_POST))?$_POST:NULL;

	//Récupération de fonctions
		require_once('Vendor/autoloader.php');
		require_once('Vendor/getAction.php');
		require_once('Vendor/db.php');
	//Définition du controller utilisé
		$cName = 'Default';
		if (!empty($_GET['c'])) {
			$cName = ucfirst($_GET['c']);
				if ($cName !== 'Default') {
					$mName = $cName.'Model';
					$Manager = new $mName($db);
				}
		}
		$cName .= "Controller";
	//Définition de l'action utilisée 
		$aName = getAction($cName); 
		$action = $aName."Action";
	
	//Controller
		$controller = new $cName(['action' => $action, 'POST' => $post], $Manager);
?>