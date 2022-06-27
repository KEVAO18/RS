<?php

/**
 * 
 */

include_once 'dbController.php';

class login extends dbController{
	
	private $user;
	private $pass;
	private $dbController;

	function __construct(){
		$this->dbController = new dbController();
	}

    /**
     * @return mixed
     */
    public function getUser(){
        return $this->user;
    }


    /**
     * @return mixed
     */
    public function getPass(){
        return $this->pass;
    }


    /**
     * @return mixed
     */
    public function getDbController(){
        return $this->dbController;
    }

    /**
     * @param mixed $user
     *
     * @return self
     */
    public function setUser($user){
        $this->user = $user;

        return $this;
    }

    /**
     * @param mixed $pass
     *
     * @return self
     */
    public function setPass($pass){
        $this->pass = $pass;

        return $this;
    }

    /**
     * @param mixed $dbController
     *
     * @return self
     */
    public function setDbController($dbController){
        $this->dbController = $dbController;

        return $this;
    }

    public function login(){
        session_start();
    	$user = $this->getUser();
    	$pass = $this->getPass();
        
        if (!isset($user) || !isset($pass)) {
            $msg = array("msg" => 'one or more empty fields');
            return json_encode($msg);
        }

    	$query = $this->getDbController()->where("usuarios", "NomUsu", $user);

    	foreach ($query as $dato) {
    		if (password_verify($pass, $dato['pass'])) {
    			$msg = array("msg" => 'login success', "status" => 1);
                $_SESSION['user'] = password_hash($user, PASSWORD_BCRYPT, ["cost" => 5]);
                $_SESSION['status'] = 1;

    			return json_encode($msg);
    		}else{
    			$msg = array("msg" => 'login failed', "status" => 2);

    			return json_encode($msg);
    		}
    	}
        $msg = array("msg" => 'login failed', "status" => 2);

        return json_encode($msg);
    }
}

$login = new login();

$login->setUser($_POST['user']);

$login->setPass($_POST['pass']);

echo $login->login();

?>