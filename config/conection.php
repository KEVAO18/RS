<?php 

/**
 * 
 */


class conection{

	private $host;
	private $user;
	private $pass;
	private $db;
	private $charset;


	Public function __construct(){
		$this->host = "localhost";
		$this->user = "root";
		$this->pass = "";
		$this->db = "fisica";
		$this->charset = "utf8mb4";
	}

	public function con(){
		try {
			$con = "mysql:host=".$this->host.";dbname=".$this->db.";charset=".$this->charset;

			$dns = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  PDO::ATTR_EMULATE_PREPARES => false];

			$pdo = new PDO($con, $this->user, $this->pass, $dns);

			return $pdo;
		} catch (PDOException $e) {
			print_r("Error en codigo: ". $e);
		}
	}
}

?>