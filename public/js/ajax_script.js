$("#boton").button();
$("#boton").click(function(){
$( "#dialogo" ).dialog("open");
 	});
$( "#dialogo" ).dialog({
   	autoOpen: false, // no abrir automáticamente
	resizable: true, //permite cambiar el tamaño
	height:220, // altura
	modal: true, //capa principal, fondo opaco
	buttons: { //crear botón de cerrar
	"Cerrar": function() {
$( this ).dialog( "close" );
}
   }

    });