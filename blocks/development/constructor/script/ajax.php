<?php
/**
 * 
 * Los datos del bloque se encuentran en el arreglo $esteBloque.
 */
// URL base
$url = $this->miConfigurador->getVariableConfiguracion("host");
$url .= $this->miConfigurador->getVariableConfiguracion("site");
$url .= "/index.php?";

// Variables para Codificar
$cadenaACodificar = "pagina=" . $this->miConfigurador->getVariableConfiguracion("pagina");
$cadenaACodificar .= "&procesarAjax=true";
$cadenaACodificar .= "&action=index.php";
$cadenaACodificar .= "&bloqueNombre=" . $esteBloque["nombre"];
$cadenaACodificar .= "&bloqueGrupo=" . $esteBloque["grupo"];
$cadenaACodificar .= "&funcion=consultarPagina";

$cadenaACodificar2 = $cadenaACodificar . "&funcion=consultarBloques";

// Codificar las variables
$enlace = $this->miConfigurador->getVariableConfiguracion("enlace");
$cadena = $this->miConfigurador->fabricaConexiones->crypto->codificar_url($cadenaACodificar, $enlace);

$cadena2 = $this->miConfigurador->fabricaConexiones->crypto->codificar_url($cadenaACodificar2, $enlace);

// URL definitiva que procesará las peticiones Ajax

$url2 = $url . $cadena2;

$url = $url . $cadena;
?>
<script type='text/javascript'>
    $("#paginaMaestra").devbridgeAutocomplete({
        minChars: 3,
        serviceUrl: '<?php echo $url; ?>',
        onSelect: function (suggestion) {
            $("#paginaMaestra").val(suggestion.value);
            $("#paginaMaestra").attr("id_pagina",suggestion.data);
            $("#divEstructura").show();
            $("#divNavegador").show();
            rescatarBloques('<?php echo $url2; ?>');

        }
    });


    function rescatarBloques(url) {
    
        var page = $("#paginaMaestra").attr("id_pagina");
       
        $.ajax({
            url: url,
            data: {
                paginaMaestra:page
            },
            dataType: 'json',
            success: function (data) {
                
                console.log(data);
            },
            error: function () {
                
            }
        });

        
    }
</script>

