<?php

class config{
	
	private $autor;

	private $name;

	private $email;

	private $date;

	private $icoName;

	private $keys;

	private $serve;

	function __construct(){
		$this::setName("RedSocial");
		$this::setAutor("Kevin Orrego");
		$this::setEmail("kevin100orrego@gnail.com");
		$this::setDate(date("Y-m-d"));
		$this::setIcoName("favicon");
		$this::setKeys("");
        $this::setServe("http://localhost/nuevosProyectos/redSocial");
	}

    /**
     * @return mixed
     * get the author
     */
    public function getAutor(){
        return $this->autor;
    }

    /**
     * @return mixed
     * get the name
     */
    public function getName(){
        return $this->name;
    }

    /**
     * @return mixed
     * get the e-mail
     */
    public function getEmail(){
        return $this->email;
    }

    /**
     * @return mixed
     * get the date
     */
    public function getDate(){
        return $this->date;
    }

    /**
     * @return mixed
     * get the ico name
     */
    public function getIcoName(){
        return $this->icoName;
    }

    /**
     * @return mixed
     * get the keywords of the page
     */
    public function getKeys(){
        return $this->keys;
    }

    /**
     * @return mixed
     * get the serve
     */
    public function getServe(){
        return $this->serve;
    }

    /**
     * @param mixed $autor
     *
     * @return self
     * 
     * set the code
     */
    public function setAutor($autor){
        $this->autor = $autor;

        return $this;
    }

    /**
     * @param mixed $name
     *
     * @return self
     * 
     * set the name
     */
    public function setName($name){
        $this->name = $name;

        return $this;
    }

    /**
     * @param mixed $email
     *
     * @return self
     * 
     * set the e-mail
     */
    public function setEmail($email){
        $this->email = $email;

        return $this;
    }

    /**
     * @param mixed $date
     *
     * @return self
     * 
     * set the date
     */
    public function setDate($date){
        $this->date = $date;

        return $this;
    }

    /**
     * @param mixed $icoName
     *
     * @return self
     * 
     * set the icon name
     */
    public function setIcoName($icoName){
        $this->icoName = $icoName;

        return $this;
    }

    /**
     * @param mixed $keys
     *
     * @return self
     * 
     * set the keywords
     */
    public function setKeys($keys){
        $this->keys = $keys;

        return $this;
    }

    /**
     * @param mixed $serve
     *
     * @return self
     * 
     * set the serve
     */
    public function setServe($serve){
        $this->serve = $serve;

        return $this;
    }
}

?>