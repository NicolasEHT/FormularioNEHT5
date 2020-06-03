<?php

	class Computadoras{

		public $modelo;
		public $marca;
		public $ram;
		public $hdd;
		public $pantalla;

		function __construct($modelo,$marca,$ram,$hdd,$pantalla)
		{
			$this->modelo=$modelo;
			$this->marca=$marca;
			$this->ram=$ram;
			$this->hdd=$hdd;
			$this->pantalla=$pantalla;
		}

		public function mensaje()
		{
			return 'Ha entrado a la función';
		}

	}

	class GPU extends Computadoras
	{
		public $marca;
		public $modelo;
		public $precio;
		public $vRam;

		function __construct($marca,$modelo,$precio,$vRam)
		{
			$this->marca=$marca;
			$this->modelo=$modelo;
			$this->precio=$precio;
			$this->vRam=$vRam;
		}
	}
?>