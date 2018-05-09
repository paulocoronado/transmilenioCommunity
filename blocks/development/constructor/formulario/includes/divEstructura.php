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
        
       // ---------------- SECCION: División ----------------------------------------------------------
        unset ( $atributos );
        $esteCampo = 'divEstructura';
        $atributos ['id'] = $esteCampo;
        echo $this->miFormulario->division ( "inicio", $atributos );
        
            // ---------------- SECCION: División ----------------------------------------------------------
            unset ( $atributos );
            $esteCampo = 'divA';
            $atributos ['id'] = $esteCampo;
            echo $this->miFormulario->division ( "inicio", $atributos );
            // ---------------- FIN SECCION: División ----------------------------------------------------------
            echo $this->miFormulario->division ( 'fin' );
        
            // ---------------- SECCION: División ----------------------------------------------------------
            unset ( $atributos );
            $esteCampo = 'divB';
            $atributos ['id'] = $esteCampo;
            echo $this->miFormulario->division ( "inicio", $atributos );
            // ---------------- FIN SECCION: División ----------------------------------------------------------
            echo $this->miFormulario->division ( 'fin' );
        
        
            // ---------------- SECCION: División ----------------------------------------------------------
            unset ( $atributos );
            $esteCampo = 'divC';
            $atributos ['id'] = $esteCampo;
            echo $this->miFormulario->division ( "inicio", $atributos );
            // ---------------- FIN SECCION: División ----------------------------------------------------------
            echo $this->miFormulario->division ( 'fin' );
        
            // ---------------- SECCION: División ----------------------------------------------------------
            unset ( $atributos );
            $esteCampo = 'divD';
            $atributos ['id'] = $esteCampo;
            echo $this->miFormulario->division ( "inicio", $atributos );
            // ---------------- FIN SECCION: División ----------------------------------------------------------
            echo $this->miFormulario->division ( 'fin' );
        
            // ---------------- SECCION: División ----------------------------------------------------------
            unset ( $atributos );
            $esteCampo = 'divE';
            $atributos ['id'] = $esteCampo;
            echo $this->miFormulario->division ( "inicio", $atributos );
            // ---------------- FIN SECCION: División ----------------------------------------------------------
            echo $this->miFormulario->division ( 'fin' );
        
        
        
        // ---------------- FIN SECCION: División ----------------------------------------------------------
        echo $this->miFormulario->division ( 'fin' );
        
        // ---------------- FIN SECCION: Controles del Formulario -------------------------------------------
        
        // ----------------FINALIZAR EL FORMULARIO ----------------------------------------------------------
        // Se debe declarar el mismo atributo de marco con que se inició el formulario.
            $atributos ['marco'] = true;
        $atributos ['tipoEtiqueta'] = 'fin';
        echo $this->miFormulario->formulario ( $atributos );
    
    
