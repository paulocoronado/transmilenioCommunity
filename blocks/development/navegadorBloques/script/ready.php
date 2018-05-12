<?php 
$_REQUEST['tiempo']=time();
?>

$("ul > li > ul").hide();

$("ul > li").click(function(e) {
	e.stopPropagation();
	
	$(this).children().toggle(function(e) {
		if (!$(this).is(":visible")) {
			$(this).find("ul").hide();
			$(this).find("sub").show();
		};
	});
	
	$(this).siblings().each(function(i) {
		if ($(this).children("ul").length > 0) {
			if ($(this).children("ul").css("display").toLowerCase() == "block") {
				$(this).children().toggle(function(e) {
					if (!$(this).is(":visible")) {
						$(this).find("ul").hide();
						$(this).find("sub").show();
					};
				});
			}
		}
	});
});

$('.bloque').draggable({
    opacity: .8,
    addClasses: false,
    helper: 'clone',
    revert: "invalid",
    cursor:"move",
    zIndex: 100
});

$('.navegadorBloques').droppable({
    drop: function( event, ui ) {
    removerItem(this, ui.draggable);
    }
});


$( "#divA,#divB,#divC,#divD,#divE" ).droppable({
  drop: function( event, ui ) {
    moverItem(this, ui.draggable);
  }
});


function moverItem( $contenedor,$item ) {
  
    var $list = $( "ul", $contenedor ).length ?
    $( "ul", $contenedor) :
    $( "<ul id='bloques" + $contenedor.id + "' class='listaBloques'/>" ).appendTo( $contenedor );
    
    $copia=$item.clone()
    $copia.removeClass("bloque"); 
    $copia.addClass("ui-state-default sinLista");
    $copia.removeAttr( 'style' );
    $copia.appendTo( $list ).fadeIn(function() {
      $copia
        .animate();
    });
    
    $copia.draggable({
        opacity: .8,
        addClasses: false,
        helper: 'clone',
        revert: "invalid",
        cursor:"move",
        zIndex: 100
    });
    
    division=$(document.getElementById($contenedor.id));    
        
    if(division.height()<=$('#bloques'+$contenedor.id+' li').length*60 && $contenedor.id!='divA'&& $contenedor.id!='divE' ){
       $('#'+$contenedor.id).height(($('#bloques'+$contenedor.id+' li').length+1)*60) ;
    }
};

function removerItem( $contenedor,$item ) {
  
    $item.fadeOut();
    $item.remove();    

}


