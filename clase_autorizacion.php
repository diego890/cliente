<?php 

	class Autorizacion{

	private $id_autorizado ="";
	private $id_persona ="";
	private $fecha ="";	
	private $horaen ="";
	private $horasa ="";

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo, $valor){

		$this->$atributo = $valor;
	}


	static function lista(){

		$data = array();
		$consulta = "SELECT a.id_autorizado,p.dni,p.nombre,a.fecha,a.hora_en,a.hora_sa FROM autorizados a join persona p on a.id_persona=p.id_persona";
		$rs = mysqli_query(Conexion::obtenerInstancia(), $consulta);
		if(mysqli_num_rows($rs) >0)
		{
			while($fila = mysqli_fetch_assoc($rs)){

				$data[] = $fila;
			}
		}

		return $data;
	}

	static function borrar($id_autorizado){
		$sql = "DELETE from autorizados where id_autorizado='{$id_autorizado}'";
		mysqli_query(conexion::obtenerInstancia(), $sql);
	}
	}
 ?>