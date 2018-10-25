/* UPLOAD CV */

$(document).ready(function(){


	$("#image_upload_form").submit(function(e){

		e.preventDefault();
        e.stopPropagation();

        
		const URLlogin="http://cv.brain.rs/api/student/imageUpload";

		var token=sessionStorage.getItem('token');
		
        var form_data = new FormData();
        form_data.append('image', $('#image[type=file]')[0].files[0] );
        form_data.append('email', sessionStorage.getItem('email'));
		

		$.ajax({
			  type: "POST",
			  url: URLlogin,
			  data: form_data,
			  processData: false,  
       		  contentType: false,
			  beforeSend: function (xhr) {
				    xhr.setRequestHeader('Authorization', 'Bearer '+token);
			  },

			  success: function(resp){ 

			  	//if it is the right format
			  	if(resp.message!==null && resp.message.image=="The image must be a file of type: jpg, jpeg, png.") {
			  		alert("Postavljena slika nije u ispravnom formatu!");
			  	}

			  	else {
			  		//all good
				  	var form=document.getElementById('image_upload_form');
				  	form.reset();
		  			alert("Slika uspešno sačuvana!");
		  			$('#img').attr('src', resp.link);
		  			console.log('deleted img path:'+resp.deleted);

			  	}


			  },
			  complete: function(xhr){
			  	sessionStorage.removeItem('token');

	  			sessionStorage.setItem('token', xhr.getResponseHeader('Authorization').split(' ')[1]);
			  },
			  error: function(XMLHttpRequest, textStatus, errorThrown){
			  	sessionStorage.removeItem('token');

	  			sessionStorage.setItem('token', XMLHttpRequest.getResponseHeader('Authorization').split(' ')[1]);
			 
			  	alert('Greška prilikom čuvanja slike!');
			  }



		});



	});




})
