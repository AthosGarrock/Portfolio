<?php 

require_once 'Controller.php';
require_once 'Models/UserModel.php';

class UserController extends Controller{

	private $_um;
	private $login;

	function __construct($params, UserModel $um){
		//Action appelée dans le layout.html(section main)
		$action = $params['action'];
		//Nom de la page
		$aName = str_replace('Action', '', $params['action']);

		//Récupération des données du formulaire:
			if (key_exists('POST', $params))
				$this->login = $params['POST'];

		//Si l'on essaie d'utiliser une méthode non déclarée dans le controller, stoppe l'execution.
		if (!method_exists($this, $action) OR $aName == "error") {
			echo "$aName n'est pas une méthode valide!";
			exit();
		}

		include ('Views/layout.php');
		$this->_um = &$um;
	}

	public function loginAction(){
		if (!empty($this->login)){
			var_dump($this->login);
			// if (!empty($this->login['username']) && !empty($login['password'])) {
				var_dump($this->_um->login($this->login));
			// }
			exit();
		}

		include 'Views/User/login.php';
	}

}

 ?>