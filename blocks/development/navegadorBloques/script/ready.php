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

$('.navegadorBloques li').draggable({
    opacity: .8,
    addClasses: false,
    revert: "invalid",
    zIndex: 100
});


$( "#divA,#divB,#divC,#divD,#divE" ).droppable({
  drop: function( event, ui ) {
    $( this )
      .addClass( "ui-state-highlight" )
      .find( "p" )
        .html( "Dropped!" );
  }
});


