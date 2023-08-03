$(document).ready(function(){
	$("#btn-acessar").click(validateUser);		
});



function validateUser() {
	event.preventDefault();

	var email = $("#email").val();
	var password = $("#password").val();

	$.ajax({
	url: "/validate-user",
	type: "get",
	data: {email: email, password: password},
	dataType: "json",
	success: function(response){

		if (response.success === true) {
			window.location.href = "/login-valid";
		} else {
			alert(response.response);
			//window.location.href = "/";
		}

	},

	
});

	// $.post("/validate-user", {email: email, password: password}, function(result){
	// 	console.log(result);
	// });
}
