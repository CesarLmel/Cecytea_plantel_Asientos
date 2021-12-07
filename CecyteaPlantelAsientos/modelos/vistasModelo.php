<?php
	
	class vistasModelo{

		protected static function obtener_vistas_modelo($vistas){
			$listaBlanca=["home","almno","almno-new","almno-search","almno-update","company","docente-list","docente-new","docente-search","docente-update","horario","horario-new","horario-pending","reservacion-cita","reservacion-search","reservacion-update","admin-list","admin-new","admin-search","admin-update"];
			if (in_array($vistas, $listaBlanca)) {
				if (is_file("./vistas/contenidos/".$vistas."-view.php")) {
					$contenido="./vistas/contenidos/".$vistas."-view.php";
				} else {
					$contenido="404";
				}
				
			}elseif ($vistas=="login" || $vistas=="index") {
				$contenido="login";
			}else{
				$contenido="404";
			}
			return $contenido;
		}
	}