/*SIrve para la actualización del perfil de usuario*/
var registerNewUser = function(){
	$("#newUser").click(function(){
		var registryNewUserAccount = $("#registryNewUserAccount").serialize();
		$.ajax({
			type:"POST",
			url:"models/create_user.php",
			data: registryNewUserAccount
		}).done(function(info){
			alert("Datos insertados.");
		})
	});
}
/*SIrve para la actualización del perfil de usuario*/

/*SIrve para la actualización del perfil de usuario*/
var updateProfile = function(){
	$("#sendProfile").click(function(){
		var formProfile = $("#formProfile").serialize();
		$.ajax({
			type:"POST",
			url:"models/update_profile.php",
			data: formProfile
		}).done(function(info){
			$("#mensaje").show(300);
			$("#mensaje").html(info);
		})
	});
}
/*SIrve para la actualización del perfil de usuario*/