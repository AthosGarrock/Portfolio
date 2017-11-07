<?php 

require_once 'Controller.php';
require_once 'UserModel.php';

$um = new UserModel();

class UserController extends Controller{

	function __construct($params){
		$action = $params['action'];
		$aName = str_replace('Action', '', $params['action']);
		include 'layout.php';
	}

	public function loginAction(array $post = NULL){
		if (!empty($post))
			if (!empty($post['username']) && !empty($post['password'])) {
				
			}
		include '..Views/User/login.php';
	}

}

 ?>