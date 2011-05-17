$(document).ready(function(){
	
	$("#login span").hide();
	
	var login = $("#UsuarioLogin");
		senha = $("#UsuarioSenha");	
		
	$("#UsuarioLogin, #UsuarioSenha").focus(function(){
		$("#UsuarioLogin, #UsuarioSenha").css("border-color", "#888");
		$(".error-login, .error-senha").fadeOut();
	});
	
	$("#login-form").submit(function(){
		
		if(login.val() == ''){
			login.css("border-color", "#8B1A1A");
			$(".error-login").fadeIn();
			return false;
		}
		
		if(senha.val() == ''){
			senha.css("border-color", "#8B1A1A");
			$(".error-senha").fadeIn();
			return false;
		}
		
	});
	
});