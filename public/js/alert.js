$(document).on('ready', inicio);
function inicio(){
	$('.boton_delete').on('click',function(){
		var id = $(this).val();
		if(confirm('¿seguro que deseas eliminar la Tesis?')){
			$.post('/thesis/delete', {id: id }, function (res){
				var status = res.status;
				if (status == 200 ) {
					location.reload();
					alert('La Tesis ha sido eliminada correctamente.');
				} else if (status == 400) {
					var message = res.message;
					alert(message);
				} else if (status == 401) {
					location.reload();
				}
			});
		}	
	});
}