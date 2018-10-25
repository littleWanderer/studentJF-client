$(document).ready(function(){


function confirmPassword(password, confirmed_password){
	if(password==confirmed_password){
		return true;
	}

	else{
		return false;
	}
}

	$('#reset_password_form').submit(function(e){

		e.preventDefault();
        e.stopPropagation();

        if(confirmPassword($("#reset_pswd").val().trim(), $("#reset_pswd_confirm").val().trim())) {

        	const URLlogin="http://cv.brain.rs/api/password/create";
			var token = $("#token_reset").val();

			var pass=$("#reset_pswd").val().trim();
			var jsonData = {};
			jsonData["password"]=pass;
			

			

			$.ajax({
				  headers: { 
			        'Accept': 'application/json',
			        'Content-Type': 'application/json' 
	    		  },
	    		  
				  type: "POST",
				  url: URLlogin,
				  dataType: "json",
				  data: JSON.stringify(eval(jsonData)),

				  success: function(resp){ 
				  		console.log(resp.password);
				  		alert('Lozinka je uspešno resetovana!');
				  		window.location.href="login.php";

				  },
				  error: function(resp){

				  	if(resp.message!=null && resp.message=="Token invalid."){
				  		alert("Link za reset nije ispravan!");
				  	}

				  	if(resp.message!=null && resp.message=="Token expired.") {
				  		alert("Link za reset je istekao!");
				  		window.location.href="login.php";
				  	}

				  	else {
				  		alert("Greska!");
				  	}
				  	
				 
				}


			});
        }

        else {
        	alert("Lozinke se ne poklapaju!");
        }

		


	});

})