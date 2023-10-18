<?php
	class Fecha {
		private $meses = array(
			1 => array('Enero', 31),
			2 => array('Febrero', 28),
			3 => array('Marzo', 31),
			4 => array('Abril', 30),
			5 => array('Mayo', 31),
			6 => array('Junio', 30),
			7 => array('Julio', 31),
			8 => array('Agosto', 31),
			9 => array('Septiembre', 30),
			10 => array('Octubre', 31),
			11 => array('Noviembre', 30),
			12 => array('Diciembre', 31)
		);

		public function mostrarFecha($fecha) {
			$fechaPartes = explode('-', $fecha); 
			$anio = $fechaPartes[0];
			$mes = $fechaPartes[1];
			$dia = $fechaPartes[2];

			if ($this->esBisiesto($anio)) {
				$this->meses[2][1] = 29;
			}
			
			$nombreMes = $this->meses[(int)$mes][0];
			$diasDelMes = $this->meses[(int)$mes][1];

			$fechaBarra = $dia.' / '.$nombreMes.' / '.$anio.'<br>'.'El mes de '.$nombreMes.' tiene '.$diasDelMes.' días';
			
			return $fechaBarra;
		}

		private function esBisiesto($anio) {
			return ($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0);
		}
	}