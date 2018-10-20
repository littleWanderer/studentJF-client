/* LOGIN */

$(document).ready(function(){

	//
	const URLlogin="http://127.0.0.1:8000/api/login";

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

			  	var form=document.getElementById('login_form');
			  	form.reset();
			  	
			  	sessionStorage.setItem('email', resp.data.email);
			  	sessionStorage.setItem('token', resp.data.token);

			  	console.log(sessionStorage.getItem('token'));

	  			window.location.href = "home.html";
			  		
			  },
			  error: function(XMLHttpRequest, textStatus, errorThrown){

			  	var status=XMLHttpRequest.status;

			  	if(status==401) {
			  		alert('Neodgovarajući kredencijali!');

			  	}
			  	else {
			  		alert("Greška, molimo pokusajte ponovo");

			  	}
			  	

			 
			}


		});



	});




})