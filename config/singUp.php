<?php

/**
 * 
 */

include_once 'dbController.php';

class singUp extends dbController{
	
	private $name;
    private $last;
    private $user;
	private $pass;
    private $repass;
    private $email;
	private $dbController;

	function __construct(){
		$this->dbController = new dbController();
	}

    /**
     * @return mixed
     */
    public function getName(){
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getLast(){
        return $this->last;
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
    public function getRepass(){
        return $this->repass;
    }

    /**
     * @return mixed
     */
    public function getEmail(){
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getDbController(){
        return $this->dbController;
    }

    /**
     * @return mixed
     */
    public function getAll(){
        return '"'.$this->user.'", "'.$this->email.'", "'.password_hash($this->pass, PASSWORD_BCRYPT, ['cost' => 10]).'", NULL, "'. $this->name.'", "'.$this->last.'", 0';
    }

    /**
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name){
        $this->name = $name;

        return $this;
    }

    /**
     * @param mixed $last
     *
     * @return self
     */
    public function setLast($last){
        $this->last = $last;

        return $this;
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
     * @param mixed $repass
     *
     * @return self
     */
    public function setRepass($repass){
        $this->repass = $repass;

        return $this;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email){
        $this->email = $email;

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

    public function singUp(){
        $name = $this->getName();
        $last = $this->getLast();
        $user = $this->getUser();
        $pass = $this->getPass();
        $repass = $this->getRepass();
        $email = $this->getEmail();
        $dbController = $this->getDbController();

        if ($pass == $repass) {
            $query = $this->getDbController()->insert("usuarios", "NomUsu, email, pass, Date, name, lastName, gender", $this->getAll());

            $msg = array("msg" => 'singUp complete', "status" => 1);

            return json_encode($msg);
        }else{
            $msg = array("msg" => 'singUp failed', "status" => 2);

            return json_encode($msg);
        }
    }
}

$singUp = new singUp();

$singUp->setName($_POST['name']);

$singUp->setLast($_POST['last']);

$singUp->setUser($_POST['user']);

$singUp->setPass($_POST['pass']);

$singUp->setRepass($_POST['repass']);

$singUp->setEmail($_POST['email']);

echo $singUp->singUp();

?>