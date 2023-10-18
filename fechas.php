<!--ISAAC MOYA-->
<?php
	include 'clase.php';
	if(!empty($_POST["fecha"])){
		$fecha = $_POST["fecha"];
		$fechaObj = new Fecha();
		$resultado = $fechaObj->mostrarFecha($fecha);
		echo $resultado;
	}else{
		echo "Has mandado la fecha vacía";
	}
?>
