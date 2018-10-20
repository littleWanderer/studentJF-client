/* GET PROFILE INFO */

function yearField(resp) {
	if(resp.finished=="U toku"){
					$('#year-info').text("Godina: "+resp.year);
					$('#status-info').text("Status studija: U toku");
	}
	else {
		$('#year-info').addClass('hidden');
	    $('#status-info').text("Status studija: Završene");
	    $('#status-info').removeClass("hidden");


	}
}


function cvDownloadButton(resp){
	if(resp.hasCV){
		$('#download_cv_button').css('display','inline-block');

		$('#download_cv').attr('href', resp.cv_link);
		$('#download_cv').attr('download', true);
	}
}

function getUser (){

		var token = sessionStorage.getItem('token');
		var email = sessionStorage.getItem('email');
		const URLlogin="http://127.0.0.1:8000/api/student/getInfo/"+email;

		$.ajax({
			  
			  type: "GET",
			  url: URLlogin,
			  beforeSend: function (xhr) {
				    xhr.setRequestHeader('Authorization', 'Bearer '+token);
			  },
			  
			  success: function(resp){ 

			  	$('#img').attr('src', resp.img);
			  	console.log(resp.img);
			  	$('#email-info').text(resp.email);
				$('#nameSurname').text(resp.name+" "+resp.surname);
				
				$('#sex-info').text(resp.sex);
				$('#date-info').text(resp.date);
				$('#university-info').text(resp.university);
				$('#faculty-info').text(resp.faculty);
				$('#module-info').text("Smer: "+resp.module);
				$('#degree-of-studies-info').text(resp.degree);
				
				yearField(resp);
				cvDownloadButton(resp);

				$('#grade-info').text("Prosečna ocena: "+resp.grade);
				$('#linkedin-info').attr('href', resp.linkedin);
				$('#licence-info').text("Posedujem vozačku dozvolu B kategorije: "+resp.licence); 
			  	$('#languages-info').text("Jezici koje govorim: "+resp.languages);

			  	
			 	
			  },
			  error: function(){
			  	alert('Greška prilikom učitavanja informacija, morate biti ulogovani!');
			  	window.location.href='login.html';

			  }



		});



	}



$(document).ready(function(){

	getUser();
	



})