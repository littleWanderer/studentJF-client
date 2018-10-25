$(document).ready(function(){



	$('#forgot_pswd').click(function(){

		$('#send_reset_link_form').css('display', 'block');
		$('#login_form').css('display', 'none');
		$('#template_headline h1').text("Zaboravljena lozinka");


	})


	$('#send_reset_link_form').submit(function(e){

		e.preventDefault();
        e.stopPropagation();

		const URLlogin="http://cv.brain.rs/api/password/create";
		//const URLlogin="http://127.0.0.1:8000/api/password/create";

		var email=$('#email_reset').val().trim();
		var jsonData = {};
		jsonData["email"]=email;
		
		

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

			  		var form=document.getElementById('send_reset_link_form');
				  	form.reset();
			  		alert('Mejl sa linkom za reset lozinke je poslat!');
			  		$('#send_reset_link_form').css('display', 'none');
					$('#login_form').css('display', 'block');
					$('#template_headline h1').text("Registracija");



			  },
			  error: function(XMLHttpRequest, textStatus, errorThrown){

			  	var status=XMLHttpRequest.status;
			  	if(status=="404"){
			  		if(textStatus=="Nepostojeca email adresa!"){
			  			alert("Nepostojeća email adresa!");

			  		}
			  		else {
			  			alert("Link za promenu lozinke je već poslat.");

			  		}
			  	}
			  	

			  	else {
			  		alert("Greska, probajte ponovo!");
			  	}
			  	
			  	
			 
			}


		});


	});

})