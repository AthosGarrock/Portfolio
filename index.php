<?php 
	//Récupération de fonctions
		require_once('Vendor/autoloader.php');
		require_once('Vendor/getAction.php');
	//Définition du controller utilisé
		$cName = (array_key_exists('c', $_GET))?$_GET(['c']):'Default';
		$cName .= "Controller";
	//Définition de l'action utilisée 
		$aName = getAction($cName); 
		$action = $aName."Action";
	
	//Controller
		$controller = new $cName(['action' => $action, 'controller' => $cName]);
?>