<?php

require_once 'Controller.php';

/**
* 
*/
class DefaultController extends Controller
{

	function __construct(array $params){
		//Nom complet de l'action
		$action = $params['action'];
		//Nom de l'action ( sans suffixe -Action )
		$aName = str_replace('Action', '', $params['action']);

		//Si l'on essaie d'utiliser une méthode non déclarée dans le controller, stoppe l'execution.
		if (!method_exists($this, $action) OR $aName == "error") {
			echo "Action invalide!";
			exit();
		}
		include('Views/layout.php');
	}

	public function indexAction(){
		include('Views/Default/accueil.php');
	}

	public function servicesAction(){
		include('Views/Default/services.php');
	}
}
?>