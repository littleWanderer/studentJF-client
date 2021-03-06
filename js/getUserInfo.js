/* GET PROFILE INFO */

function yearField(finished, year) {
	if(finished=="U toku"){
					$('#year-info').text("Godina: "+year);
					$('#status-info').text("Status studija: U toku");
	}
	else {
		$('#year-info').addClass('hidden');
	    $('#status-info').text("Status studija: Završene");
	    $('#status-info').removeClass("hidden");


	}
}

function linkedin (linkedin) {
	if(linkedin!=null){
		$('#linkedin-info').attr('href', linkedin);

	}

}


function cvDownloadButton(resp){
	if(resp.hasCV){
		$('#download_cv_button').css('display','inline-block');
		$('#download_cv').attr('href', resp.cv_link);
	}
}

function getUser (){

		var token = sessionStorage.getItem('token');
		var email = sessionStorage.getItem('email');
		const URLlogin="http://cv.brain.rs/api/student/getInfo/"+email;

		$.ajax({
			  
			  type: "GET",
			  url: URLlogin,
			  beforeSend: function (xhr) {
				    xhr.setRequestHeader('Authorization', 'Bearer '+token);
			  },
			  
			  success: function(resp){ 

			  	$('#img').attr('src', resp.img);
			  	
			  	$('#email-info').text(resp.email);
				$('#nameSurname').text(resp.name+" "+resp.surname);
				
				$('#sex-info').text(resp.sex);
				$('#date-info').text(resp.date);
				$('#university-info').text(resp.university);
				$('#faculty-info').text(resp.faculty);
				$('#module-info').text("Smer: "+resp.module);
				$('#degree-of-studies-info').text(resp.degree);
				
				yearField(resp.finished, resp.year);
				cvDownloadButton(resp);

				$('#grade-info').text("Prosečna ocena: "+resp.grade);
				linkedin(resp.linkedin);
				$('#licence-info').text("Posedujem vozačku dozvolu B kategorije: "+resp.licence); 
			  	$('#languages-info').text("Jezici koje govorim: "+resp.languages);

			  	
			  	$('.skeleton').css('display', 'none');

			  	$('#hidden-content').css('display', 'block');
			 	
			  },
			  error: function(){
			  	alert('Greška prilikom učitavanja informacija, morate biti ulogovani!');
			  	window.location.href='login.php';

			  }



		});



	}



$(document).ready(function(){

	getUser();
	



})