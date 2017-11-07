<?php 

require_once 'Vendor/db.php';
/**
* 
*/
class UserModel
{
	private $_db;

	function __construct($db)
	{
		$this->_db = &$db;
	}

	public function add(User $user){

	}

	public function update(User $user){

	}

	public function delete(User $user){

	}

	public function get($id){

	}

	public function login($username, $password){

	}
}
 ?>