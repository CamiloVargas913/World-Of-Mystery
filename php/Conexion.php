<?php 
/**
* 
*/
class Conexion{
	private $db='mysql:host=localhost;dbname=dbworldmystery';
	private $user='root';
	private $pass='';
	/*metodos*/
	public function Conectar(){
		$base= new PDO($this->db,$this->user,$this->pass);
		return $base;
	}
}
 ?>