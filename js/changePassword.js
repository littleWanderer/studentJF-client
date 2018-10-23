/* CHANGE PASSWORD */

function confirmPassword(password, confirmed_password){
	if(password==confirmed_password){
		return true;
	}

	else{
		return false;
	}
}
 



$(document).ready(function(){



	$("#change_password_form").submit(function(e){

		e.preventDefault();
        e.stopPropagation();

        var old_password=$('#old_password').val().trim();
		var password=$('#new_password').val().trim();
        var confirmed_password=$('#confirmed_password').val().trim();
        
        if(confirmPassword(password, confirmed_password)){
        	var token=sessionStorage.getItem('token');
			var email=sessionStorage.getItem('email');

			jsonData={};
			jsonData['new_password']=password;
			jsonData['old_password']=old_password;


			const URLlogin="http://127.0.0.1:8000/api/student/changePassword/"+email;

			$.ajax({
				  headers: { 
			        'Accept': 'application/json',
			        'Content-Type': 'application/json' 
	    		  },
	    		  beforeSend: function (xhr) {
					    xhr.setRequestHeader('Authorization', 'Bearer '+token);
				  },
				  type: "POST",
				  url: URLlogin,
				  dataType: "json",
				  data: JSON.stringify(eval(jsonData)),

				  success: function(resp){ 

				  	
				  	if(resp.message!=null && resp.message=="Pogrešno uneta stara lozinka"){
				  		alert("Netačna stara lozinka!");
				  	}

				  	else{
				  		var form=document.getElementById('change_password_form');
					  	form.reset();
					  	alert("Lozinka uspesno promenjena");

				  	}
				  	
		  			//window.location.href = "home.html";
				  		
				  },
				  complete: function(xhr){
			  		sessionStorage.removeItem('token');

		  			sessionStorage.setItem('token', xhr.getResponseHeader('Authorization').split(' ')[1]);
		  			console.log(sessionStorage.getItem('token'));	
				  },
				  error: function(XMLHttpRequest, textStatus, errorThrown){

				  	alert("Greška prilikom izmene lozinke!");
			
				}


			});
        }

        else {
        	alert("Ponovo potvrdite novu lozinku!");
        }

		



	});




})