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
        
        // ---------------- SECCION: Controles del Formulario -----------------------------------------------
        
        // ---------------- CONTROL: Cuadro Texto --------------------------------------------------------
            unset ( $atributos );
            $esteControl = 'pagina';
            $atributo['name']=$esteControl;
            $atributo['id']=$esteControl;
            $atributo['valor']='';
            $atributo['deshabilitado']=false;
            $atributo['tamanno']=50;
            $atributo['estilo'] ='';
            //$atributo['marco']='';
            //$atributo['estiloMarco']='';
            $atributo['columnas']=1;
            $atributo['etiqueta']=$this->lenguaje->getCadena ($esteControl);
            //$atributo['anchoEtiqueta']='';
            //$atributo['estiloEtiqueta']='';
            $atributo['dobleLinea']=false;
            $atributo['tipo']='text';
            $atributo['maximoTamanno']=100;
            //$atributo['data-validate']='';
            //$atributo['validar']='';
            //$atributo['evento']='';
            $atributo['textoFondo']=$this->lenguaje->getCadena ($esteControl.'TextoFondo');
            $atributo['tabIndex']=$tab;
            $tab ++;
            // Aplica atributos globales al control
            //$atributos = array_merge ( $atributos, $atributosGlobales );
            echo $this->miFormulario->campoCuadroTexto ( $atributo );
        
        // --------------- FIN CONTROL : Cuadro Texto --------------------------------------------------
        
        // ---------------- SECCION: División ----------------------------------------------------------
        $esteCampo = 'division1';
        $atributos ['id'] = $esteCampo;
        $atributos ['estilo'] = 'general';
        echo $this->miFormulario->division ( "inicio", $atributos );
        
        // ---------------- FIN SECCION: División ----------------------------------------------------------
        echo $this->miFormulario->division ( 'fin' );
        
        // ---------------- FIN SECCION: Controles del Formulario -------------------------------------------
        
        // ----------------FINALIZAR EL FORMULARIO ----------------------------------------------------------
        // Se debe declarar el mismo atributo de marco con que se inició el formulario.
        $atributos ['marco'] = true;
        $atributos ['tipoEtiqueta'] = 'fin';
        echo $this->miFormulario->formulario ( $atributos );
    
    
