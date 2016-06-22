<?php  

class Equipo{

	private $id_equipo ="";
	private $nombre ="";
	private $descripcion="";

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo, $valor){

		$this->$atributo = $valor;
	}

	function guardar(){

		if($this->id_equipo >0){

			//Actualizar
			$sql = " UPDATE `equipos`
			SET
			 nombre = '{$this->nombre}', 
			 descripcion = '{$this->descripcion}'
			WHERE 
			id_equipo = '{$this->id_equipo}' ";

			mysqli_query(conexion::obtenerInstancia(), $sql);

		}else{
			//guardar
			$sql= " INSERT INTO `equipos`
						  ( `nombre`,
						  	`descripcion`) 

						VALUES ('{$this->nombre}',
							'{$this->descripcion}') ";

			mysqli_query(conexion::obtenerInstancia(), $sql);

		}




	} function cargar(){

		$consulta = " SELECT * from equipos where id_equipo='{$this->id_equipo}'";
		$rs= mysqli_query(conexion::obtenerInstancia(), $consulta);

		if(mysqli_num_rows($rs)>0){
			$fila = mysqli_fetch_assoc($rs);
			$this->nombre = $fila['nombre'];
			$this->descripcion = $fila['descripcion'];	

		}


	}

	static function lista(){

		$data = array();
		$consulta = "SELECT * from equipos";
		$rs = mysqli_query(Conexion::obtenerInstancia(), $consulta);
		if(mysqli_num_rows($rs) >0)
		{
			while($fila = mysqli_fetch_assoc($rs)){

				$data[] = $fila;
			}
		}

		return $data;
	}
	static function borrar($id_persona){
		$sql = "DELETE from equipos where id_equipo='{$id_equipo}'";
		mysqli_query(conexion::obtenerInstancia(), $sql);
	}


}

?>

