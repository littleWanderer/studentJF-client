/* UPLOAD CV */

$(document).ready(function(){


	$("#cv_upload_form").submit(function(e){

		e.preventDefault();
        e.stopPropagation();

        
		const URLlogin="http://127.0.0.1:8000/api/student/cvUpload";

		var token=sessionStorage.getItem('token');
		
        var form_data = new FormData();
        form_data.append('document', $('input[type=file]')[0].files[0] );
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

			  	//if it is not the pdf format
			  	if(resp.message!=null && resp.message.document=="The document must be a file of type: pdf.") {
			  		alert("Postavljeni dokument nije u pdf formatu!");
			  	}


			  	else {
			  		//all good
				  	var form=document.getElementById('cv_upload_form');
				  	form.reset();
		  			var link = resp.link;
				  	//dodaj button za download cv-a
		  			
		  			$('#download_cv_button').css('display','inline-block');
				  	$('#download_cv').attr('href', link);

		  			alert("Dokument uspešno sačuvan!");
			  	}
			  	


			  },
			  complete: function(xhr){
			  	sessionStorage.removeItem('token');

	  			sessionStorage.setItem('token', xhr.getResponseHeader('Authorization').split(' ')[1]);
	  			console.log(sessionStorage.getItem('token'));
			  		
			  },
			  error: function(){
			  	alert('Greška prilikom čuvanja dokumenta!');
			  }



		});



	});




})
