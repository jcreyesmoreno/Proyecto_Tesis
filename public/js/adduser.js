$(document).on('ready', inicio);
function inicio(){
	$('#add_user').on('submit',function(evt){
		evt.preventDefault();
		var email = $('#num_control').val();
		var contraseña = $('#passwuser').val();
		var usuario = $('#type_user').val();
		var nombre = $('#first_name').val();
		var apellido = $('#last_name').val();
		var permissions = $('#permissions').val();
		var datos = {
			email:email, 
			password:contraseña,
			first_name:nombre,
			last_name:apellido,
			permissions:permissions
		};

		
		$.post('/update/user', datos, function (res){
			var status = res.status;
			if (status == 200 ) {
				location.reload();
				alert('Alumno Agregado correctamente');
			} else if (status == 400) {
				var message = res.message;
				alert(message);
			} else if (status == 401) {
				location.reload();
			}
		});
		
	});
}