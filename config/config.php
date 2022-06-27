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

    public function isLogged($user, $status, $page){
        if ($user == "" || $status == 0) {
            $_SESSION['status'] = 0;
            $_SESSION['user'] = "";
        }elseif ($_SESSION['user'] != "" && $status == 1 && ($page == "Home" || $page == "LogIn" || $page == "SingUp")) {
            ?>
            <script>
                window.location.href = '<?=$this->getServe()?>/dashboard';
            </script>
            <?php
        }
    }

    public function navbar($status){
        if ($status == 0) {
            ?>
            <nav class="navbar navbar-expand-lg navbar-light bg-blanco shadow">
              <div class="container-fluid">
                <a class="navbar-brand color-negro" href="<?=$this->getServe()?>/Home"><?=$this->getName()?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link color-negro" aria-current="page" href="<?=$this->getServe()?>/LogIn">LogIn</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link color-negro" href="<?=$this->getServe()?>/SingUp">SingUp</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <?php
        }elseif ($status == 1) {
            ?>
            <nav class="navbar navbar-expand-lg navbar-light bg-blanco shadow">
              <div class="container-fluid">
                <a class="navbar-brand color-negro" href="<?=$this->getServe()?>/dashboard"><?=$this->getName()?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link color-negro" aria-current="page" href="<?=$this->getServe()?>/profile">Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link color-negro" aria-current="page" href="<?=$this->getServe()?>/close">Close</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <?php
        }
    }
}

?>