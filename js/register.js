/* LOGIN */

$(document).ready(function(){


	const URLlogin="http://127.0.0.1:8000/api/register/student";

	$("#register_form").submit(function(e){

		e.preventDefault();
        e.stopPropagation();

		
		
		var jsonData = {};
		jsonData["email"]=$('#email').val().trim();;
		jsonData["password"]=$('#pass').val().trim();;
		jsonData["name"]=$('#name').val().trim();
		jsonData["surname"]=$('#surname').val().trim();
		jsonData["sex"]=$('#sex').val().trim();
		jsonData["birthDate"]=$('#birthDate').val().trim();
		jsonData["university"]=$('#university').val().trim();
		jsonData["faculty"]=$('#faculty').val().trim();
		jsonData["module"]=$('#module').val().trim();
		jsonData["degree_of_studies"]=$('#degree_of_studies').val().trim();
		jsonData["year"]=$('#year').val().trim();
		jsonData["finished"]=$('#finished').val().trim();
		jsonData["grade"]=$('#grade').val().trim();
		jsonData["linkedin"]=$('#linkedin').val().trim();
		jsonData["licence"]=$('#licence').val().trim(); 

		
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

			  	var form=document.getElementById('register_form');
			  	console.log(resp);
			  	
	  			window.location.href = "index.html";
			  		
			  },
			  error: function(){
			  	alert('Greška prilikom registrovanja!');
			  }



		});



	});




})