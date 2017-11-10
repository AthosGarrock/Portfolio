<?php

require_once 'Controller.php';

/**
* 
*/
class DefaultController extends Controller
{

	function __construct(array $params){
		//Action appelée dans le layout.html(section main)
		$action = $params['action'];
		//Nom de la page
		$aName = str_replace('Action', '', $params['action']);

		//Si l'on essaie d'utiliser une méthode non déclarée dans le controller, stoppe l'execution.
		if (!method_exists($this, $action) OR $aName == "error") {
			echo "Action invalide!";
			exit();
		}
		include('Views/layout.php');
	}

	public function indexAction(){
		include('Views/Default/accueil.html');
	}

	public function servicesAction(){
		include('Views/Default/services.html');
	}

	public function CVAction(){
		include('Views/Default/cv.html');
	}
}
?>