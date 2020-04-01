<?php
include("../clasedb.php");
extract($_REQUEST);

class PersonasControlador
{
	public function index(){
		$db=new clasedb();
		$conex=$db->conectar();

		$sql="SELECT * FROM datos_personales";

		$res=mysqli_query($conex,$sql);
		$campos=mysqli_num_fields($res);
		$filas=mysqli_num_rows($res);
		$i=0;
		$datos[]=array();

		while($data=mysqli_fetch_array($res)){
			for ($j=0; $j < $campos; $j++){
				$datos[$i][$j]=$data[$j];
			}
			$i++;
		}
		mysqli_close($conex);
			header("Location: index.php?filas=".$filas."&campos=".$campos."&data=".serialize($datos));
	}


	static function controlador($operacion){
		$persona=new PersonasControlador();
	switch ($operacion) {
		case 'index':
			$persona->index();
			break;
		case 'registrar':
			$persona->registrar();
			break;
		case 'guardar':
			$persona->modificar();
			break;
		case 'modificar':
			$persona->modificar();
			break;
		case 'actualizar':
			$persona->actualizar();
			break;
		case 'eliminar':
			$persona->eliminar();
			break;
		default:
			?>
				<script type="text/javascript">
					alert("No existe la ruta");
					window.location="PersonasControlador.php?operacion=index";
				</script>
			<?php
			break;
	}//switch
}//funcion controlador
}//class
PersonasControlador::controlador($operacion);
