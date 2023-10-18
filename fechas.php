<!--ISAAC MOYA-->
<?php
	include 'clase.php';
	if(!empty($_POST["fecha"])){
		$fecha = $_POST["fecha"];
		$fechaObj = new Fecha();
		$fecha = $fechaObj->mostrarFecha($fecha);
		$dias = $fechaObj->diasDelMes;
		echo $fecha;
		echo "<br>El mes tiene ".$dias." días";
	}else{
		echo "Has mandado la fecha vacía";
	}
?>
