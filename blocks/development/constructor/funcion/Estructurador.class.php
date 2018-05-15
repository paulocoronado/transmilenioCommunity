<?php

namespace development\constructor\funcion;


class Estructurador {
	var $miConfigurador;
	var $miSql;
        var $opcion;
	var $conexion;
	var $rutaNuevoBloque;
	var $rutaFrontera;
	var $rutaScript;
	var $rutaCss;
	var $rutaControl;
	var $rutaEntidad;
	var $rutaLocale;
	var $rutaIdioma;
	var $namespace;
	function __construct($sql) {
		$this->miConfigurador = \Configurador::singleton ();
		$this->miConfigurador->fabricaConexiones->setRecursoDB ( 'principal' );
		$this->miSql = $sql;}
        
        function estructurarPagina(){
            
            
            // 1. Obtner ID de página y el arreglo de bloques
                
            
            $this->conexion = $this->miConfigurador->fabricaConexiones->getRecursoDB ( 'estructura' );
            if (! $this->conexion) {
                    error_log ( "No se conectó" );
                    $resultado = false;
                    exit;
            }		
            $cadenaSql = $this->miSql->getCadenaSql ( 'consultarPaginas' );
            
            
            
            
            
        }
        
        
       
}

$miEstructurador = new Estructurador ( $this->sql);

$resultado = $miEstructurador->estructurarPagina();

?>