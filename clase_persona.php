<?php  

class Persona{

	private $id_persona ="";
	private $nombre ="";
	private $dni ="";	
	private $email ="";
	private $comentario ="";

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo, $valor){

		$this->$atributo = $valor;
	}

	function guardar(){

		if($this->id_persona >0){

			//Actualizar
			$sql = " UPDATE `persona`
			SET
			 nombre = '{$this->nombre}', 
			 dni = '{$this->dni}', 			 
			 email = '{$this->email}', 
			 comentario = '{$this->comentario}'
			WHERE 
			id_persona = '{$this->id_persona}' ";

			mysqli_query(conexion::obtenerInstancia(), $sql);

		}else{
			//guardar
			$sql= " INSERT INTO `persona`
						  ( `nombre`,
						  	`dni`, 							 
							`email`, 
							`comentario`) 

						VALUES ('{$this->nombre}',
							'{$this->dni}',							 
							'{$this->email}', 
							'{$this->comentario}') ";

			mysqli_query(conexion::obtenerInstancia(), $sql);

		}




	} function cargar(){

		$consulta = " SELECT * from persona where id_persona='{$this->id_persona}'";
		$rs= mysqli_query(conexion::obtenerInstancia(), $consulta);

		if(mysqli_num_rows($rs)>0){
			$fila = mysqli_fetch_assoc($rs);
			$this->nombre = $fila['nombre'];
			$this->dni = $fila['dni'];			
			$this->email= $fila['email'];
			$this->comentario = $fila['comentario'];

		}


	}

	static function lista(){

		$data = array();
		$consulta = "SELECT * from persona";
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
		$sql = "DELETE from persona where id_persona='{$id_persona}'";
		mysqli_query(conexion::obtenerInstancia(), $sql);
	}


}

?>

