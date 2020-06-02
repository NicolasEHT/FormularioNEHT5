<?php

	class jugador {

		var $nombre;
			protected function set_nombre($nuevo_nombre){
				$this->nombre = $nuevo_nombre;

			}
		function get_name() {
			return $this->nombre
		}
	}
?>