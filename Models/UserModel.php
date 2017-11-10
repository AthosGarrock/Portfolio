<?php 

require_once 'Vendor/db.php';
require_once 'User.php';
/**
* 
*/
class UserModel
{
	private $_db;

	public function __construct($db){
		$this->_db = &$db;
	}

	public function add(User $user){
		$req = $this->_db->prepare('INSERT INTO user(username, password) VALUES (:username, :password)');
		$values = [	':username' => $user->getUsername(),
					':password' => $user->getPassword()];
		if($req->execute($values))
			echo "L'inscription s'est déroulée avec succès !";
	}

	public function update(User $user){
		$req = $this->_db->prepare('UPDATE user SET username = :username, password = :password WHERE id = :id ');
		
		$values = [	':username' => $user->getUsername(),
					':password' => $user->getPassword(),
					':id' 		=> $user->getId() ];
		$req->execute($values);

	}

	public function delete(User $user){
		$req = $this->_db->prepare('DELETE FROM user WHERE id = :id');
		$values = [':id' => $user->getId()];

		$req->execute($values);
	}

	public function get($id){
		$req = $this->_db->prepare('SELECT * FROM user WHERE username = :username');
		$values = [	':username' => $post['username']];
		$req->execute($values);
		
		if($data = $req->fetch())
			return new User($data);
	}

	public function login(array $post){
		$req = $this->_db->prepare('SELECT * FROM user WHERE username = :username');
		$values = [	':username' => $post['username']];
		$req->execute($values);
		
		if($data = $req->fetch())
			if (password_verify($post['password'], $data['password'])) {
				$_SESSION['user'] = serialize(new User($data));
				return true;
			}
		
		else
			return false;
	}
}
 ?>