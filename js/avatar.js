$(buscarAvatar());
function buscarAvatar(consulta){
$.ajax({
	url: 'php/buscarAvatar.php',
	type: 'POST',
	dataType:'html',
	data: {consulta: consulta},
	beforeSend:function(){
      $("#avatar").html("<img src='imagenes/loading.gif' alt='Avatar' class='avatar'>");
   }
})
.done(function(respuesta) {
	$("#avatar").html(respuesta);
})
.fail(function(respuesta) {
	console.log("error");
})
}
$(document).on('keyup','#nickname',function(){
		var nombreN =$(this).val();
		if (nombreN != "") {
			buscarAvatar(nombreN);
		}
});


