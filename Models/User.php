<?php 
/**
* 
*/
class User
{
	private $id;
	private $username;
	private $password;

	function __construct(array $data)
	{
		foreach($data as $key => $value) {
			$method = 'set'.ucfirst($key);
			if (method_exists($this, $method)) {
				$this->$method($value);
			}
		}
	}

	//G&S
	    /**
	     * @return mixed
	     */
	    public function getId()
	    {
	        return $this->id;
	    }

	    /**
	     * @param mixed $id
	     *
	     * @return self
	     */
	    public function setId($id)
	    {
	        $this->id = $id;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getUsername()
	    {
	        return $this->username;
	    }

	    /**
	     * @param mixed $username
	     *
	     * @return self
	     */
	    public function setUsername($username)
	    {
	        $this->username = $username;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getPassword()
	    {
	        return $this->password;
	    }

	    /**
	     * @param mixed $password
	     *
	     * @return self
	     */
	    public function setPassword($password)
	    {
	        $this->password = password_hash($password, PASSWORD_DEFAULT);

	        return $this;
	    }
}
 ?>