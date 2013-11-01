var expr = /^[a-zA-z0-9_\.\-]+@[a-zA-z0-9\-]+\.[a-zA-z0-9\-\.]+$/;

$(document).ready(function(){
	$("#envio").click(function(){
		var nombre = $("#name");.val();
		var correo = $("#email").val();
		var mensaje = $("#tfmensaje").val();

		if (nombre == ""){
			$("#mensaje1").fadeIn();
			return false;
		}else{
			$("#mensaje1").fadeOut();
			if(correo == "" || !expr.test(correo)){
				$("#mensaje2").fadeIn();
				return false;

			}
		}

		

	});
});