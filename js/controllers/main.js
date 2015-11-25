/*SIrve para la actualización del perfil de usuario*/
var startSearchPeriod = function(){
	$("#sendProfile").click(function(){
		var formProfile = $("#formProfile").serialize();
		$.ajax({
			type:"POST",
			url:"models/save_profile.php",
			data: formProfile
		}).done(function(info){
				alert("Datos actualizados. " + info);
		})
	});
}
/*SIrve para la actualización del perfil de usuario*/