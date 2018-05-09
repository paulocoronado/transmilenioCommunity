<?php

namespace development\constructor\funcion;


class AdministradorPagina {
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
        
        function administrarPagina($opcion){
            
            switch ($opcion){
                
                case 'consultar':
                    $this->consultarPaginas();
                    break;
                }
        }
        
        
        function consultarPaginas() {
            
            $this->conexion = $this->miConfigurador->fabricaConexiones->getRecursoDB ( 'estructura' );
            if (! $this->conexion) {
                    error_log ( "No se conectó" );
                    $resultado = false;
                    exit;
            }		
            $cadenaSql = $this->miSql->getCadenaSql ( 'consultarPaginas' );
            $this->resultadoItems = $this->conexion->ejecutarAcceso ( $cadenaSql, 'busqueda' );
            if($this->resultadoItems){
                foreach ($this->resultadoItems as $key => $values) {
                    $keys = array('value','data');
                    
                    $resultado[$key] = array_intersect_key($this->resultadoItems[$key], array_flip($keys));
                }                
            }else{
                
            }
            
            
            echo '{"suggestions":' . json_encode($resultado) . '}';
	}

        
       
}

$miRegistrador = new AdministradorPagina ( $this->sql);

$resultado = $miRegistrador->administrarPagina($opcion);

?>