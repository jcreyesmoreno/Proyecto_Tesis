var expr = /^[a-zA-z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

$(document).ready(function(){
	$("#contacto").on("submit",function(){

		$("#mensaje1").fadeOut();
		$("#mensaje2").fadeOut();
		$("#mensaje3").fadeOut();

		var nombre = $("#name").val();
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
			}else{
				$("#mensaje2").fadeOut();
				if(asunto == ""){
					$("#mensaje3").fadeIn();
					return false;
				}
			}
		}

		

	});
});