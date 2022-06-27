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

	public function where($tabla, $columna, $val, $oper = '='){
		$q = $this->consultaSQL("SELECT * FROM $tabla WHERE $columna $oper '$val'");

		return $q;
	}

	public function insert($tabla, $columnas, $valores){
		$q = $this->consultaSQL("INSERT INTO $tabla ($columnas) VALUES ($valores)");
	}

}

?>