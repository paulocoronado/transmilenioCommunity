<?php

namespace constructor;

use development\constructor\Lenguaje;

class procesarAjax {
    
    var $miConfigurador;
    var $lenguaje;
    var $miFormulario;
    var $sql;
    
    function __construct($lenguaje,$sql) {$this->miConfigurador = \Configurador::singleton ();
		
		$this->sql = $sql;
              
		switch ($_REQUEST ['funcion']) {
			
			case 'consultarPagina' :				
				$opcion='consultar';
				include ('AdministradorPagina.php');
				break;
		}
	}

}

$miProcesarAjax = new procesarAjax ( $this->lenguaje,$this->sql);


?>