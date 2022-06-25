<?php

/**
 * 
 */

include_once 'conection.php';

class dbController extends conection{
	
	private $conection;

	function __construct(){
		$this->conection = new conection();
	}

	public function getConection(){
		return $this->conection->con();
	}

	public function setConection($con){
		$this->conection = $con;
	}

	public function consultaSQL($consulta){

		$query = $this->getConection()->prepare($consulta);
		$query->execute();
		return $query;
	}

	public function All($tabla){
		return $this->consultaSQL("SELECT * FROM $tabla");
	}

	public function AnyColumn($tabla, $columna){
		return $this->consultaSQL("SELECT $columna FROM $tabla");
	}

}

$datos = new dbController();

$data = $datos->AnyColumn("usuarios", "NomUsu, pass");

foreach ($data as $dato) {
	echo $dato[0]."<br>";
}

?>