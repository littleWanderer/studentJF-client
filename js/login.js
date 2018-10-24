/* LOGIN */

$(document).ready(function(){

	//
	const URLlogin="http://cv.brain.rs/api/login";

	$("#login_form").submit(function(e){

		e.preventDefault();
        e.stopPropagation();

		var user=$('#email').val().trim();
		var pass=$('#password').val().trim();

		
		var jsonData = {};
		jsonData["email"]=user;
		jsonData["password"]=pass;
		
		console.log(jsonData);

		

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

			  	if(resp.message=="Not a student"){
			  		alert("Registrujte se kao student!");
			  		var form=document.getElementById('login_form');
				  	form.reset();
			  	}

			  	else {
				  	var form=document.getElementById('login_form');
				  	form.reset();
				  	
				  	sessionStorage.setItem('email', resp.data.email);
				  	sessionStorage.setItem('token', resp.data.token);


		  			window.location.href = "home.php";
			  	}
	
			  },
			  error: function(XMLHttpRequest, textStatus, errorThrown){

			  	var status=XMLHttpRequest.status;

			  	if(status==401) {
			  		alert('Neodgovarajući kredencijali!');
				  	var form=document.getElementById('login_form');

				  	form.reset();


			  	}
			  	else {
			  		alert("Greška, molimo pokusajte ponovo");
				  	var form=document.getElementById('login_form');
			  		
				  	form.reset();


			  	}
			  	

			 
			}


		});



	});




})