<?php
        // Rescatar los datos de este bloque
        $esteBloque = $this->miConfigurador->getVariableConfiguracion ( "esteBloque" );
        
        // ---------------- SECCION: Parámetros Generales del Formulario ----------------------------------
        $esteCampo = $esteBloque ['nombre'];
        $atributos ['id'] = $esteCampo;
        $atributos ['nombre'] = $esteCampo;
        // Si no se coloca, entonces toma el valor predeterminado 'application/x-www-form-urlencoded'
        $atributos ['tipoFormulario'] = '';
        // Si no se coloca, entonces toma el valor predeterminado 'POST'
        $atributos ['metodo'] = 'POST';
        // Si no se coloca, entonces toma el valor predeterminado 'index.php' (Recomendado)
        $atributos ['action'] = 'index.php';
        $atributos ['titulo'] = $this->lenguaje->getCadena ( $esteCampo );
        // Si no se coloca, entonces toma el valor predeterminado.
        $atributos ['estilo'] = '';
        $atributos ['marco'] = true;
        $tab = 1;
        // ---------------- FIN SECCION: de Parámetros Generales del Formulario ----------------------------
        
        // ----------------INICIAR EL FORMULARIO ------------------------------------------------------------
        $atributos ['tipoEtiqueta'] = 'inicio';
        echo $this->miFormulario->formulario ( $atributos );
        
        division('divEstructura',$this->miFormulario);        
        $divisiones=array('A','B','C','D','E');
        foreach ($divisiones as $valor){
            division('div'.$valor,$this->miFormulario);            
            encabezado('Sección '.$valor, $this->miFormulario);              
            division('',$this->miFormulario);
        }
        division('',$this->miFormulario);
            
        
        // ---------------- FIN SECCION: Controles del Formulario -------------------------------------------
        
        // ----------------FINALIZAR EL FORMULARIO ----------------------------------------------------------
        // Se debe declarar el mismo atributo de marco con que se inició el formulario.
            $atributos ['marco'] = true;
        $atributos ['tipoEtiqueta'] = 'fin';
        echo $this->miFormulario->formulario ( $atributos );
        
        
        function encabezado($texto, $formulario){
            
            // ---------------- SECCION: Header ----------------------------------------------------------
            unset ( $atributos );
            $atributos ['nivel'] = '4';
            $atributos ['estilo'] = 'ui-widget-header';
            $atributos ['estiloEnLinea'] = 'margin:0';
            $atributos ['texto'] = $texto;
            echo $formulario->encabezado($atributos );            
            // ---------------- FIN SECCION: Header ----------------------------------------------------------            
            
        }
        
        
        function division($texto, $formulario ){            
            if($texto!=''){
            // ---------------- SECCION: División ----------------------------------------------------------
            unset ( $atributos );
            $esteCampo = $texto;
            $atributos ['id'] = $esteCampo;
            echo $formulario->division ( "inicio", $atributos );           
            
            }else{
                   // ---------------- FIN SECCION: División ----------------------------------------------------------
                    echo $formulario->division ( 'fin' );
            }
        }