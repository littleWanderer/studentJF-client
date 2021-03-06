/* UPDATE PROFILE INFO */


function yearShow() {
	if( $('#finished').val()=="U toku"){
		$('#year_field').css('display', 'block');
	}
}



function languagesFieldData(){
	var languages = {};
	if($('#english_lang').prop('checked')){
		languages['engleski']="engleski";
	}
	if($('#french_lang').prop('checked')){
		languages['francuski']="francuski";
	}
	if($('#italian_lang').prop('checked')){
		languages['italijanski']="italijanski";
	}
	if($('#spanish_lang').prop('checked')){
		languages['španski']="španski";
	}
	if($('#german_lang').prop('checked')){
		languages['nemački']="nemački";
	}
	if($('#russian_lang').prop('checked')){
		languages['ruski']="ruski";
	}

	return languages;

}

function checkLanguages() {
	var languages=$('#languages-info').text().split(':')[1].split(',');
	for(var i=0; i<languages.length; i++){
		if(languages[i].trim()=="engleski"){
		
		$('#english_lang').prop('checked', true);
		}
		if(languages[i].trim()=="francuski"){
			
			$('#french_lang').prop('checked', true);
		}
		if(languages[i].trim()=="italijanski"){
			
			$('#italian_lang').prop('checked', true);
		}
		if(languages[i].trim()=="španski"){
			
			$('#spanish_lang').prop('checked', true);
		}
		if(languages[i].trim()=="nemački"){
			$('#german_lang').prop('checked', true);
		}
		if(languages[i].trim()=="ruski"){
			
			$('#russian_lang').prop('checked', true);
		}
	}
}



$(document).ready(function(){


	$('#update_info_button').click(function(e){
		e.preventDefault();
        e.stopPropagation();

        $('#name').val($('#nameSurname').text().split(' ')[0]);
        $('#surname').val($('#nameSurname').text().split(' ')[1]);
        $('#sex').val($('#sex-info').text());
        
        
	    var date=document.querySelector('input[type="date"]');
	    date.value=$('#date-info').text();


        $('#module').val($('#module-info').text().split(':')[1]);
        $('#university').val($('#university-info').text()).change();
        $('#degree_of_studies').val($('#degree-of-studies-info').text());

        if($('#year-info').text()!=""){
        	$('#year').val($('#year-info').text().split(':')[1].trim());

        }

        $('#grade').val($('#grade-info').text().split(':')[1].trim());
        
        $('#linkedin').val($('#linkedin-info').attr('src'));
        $('#licence').val($('#licence-info').text().split(':')[1].trim());
        $('#finished').val($('#status-info').text().split(':')[1].trim());

        yearShow();

        $('#faculty').val($('#faculty-info').text());
        checkLanguages();
        $('#updateModal').modal('show');

	})




	$("#update_form").submit(function(e){

		e.preventDefault();
        e.stopPropagation();


		const URLlogin="http://cv.brain.rs/api/student/updateInfo";
		
		
		var jsonData = {};
		jsonData["name"]=$('#name').val().trim();
		jsonData["surname"]=$('#surname').val().trim();
		jsonData["sex"]=$('#sex').val().trim();
		jsonData["birthDate"]=$('#birthDate').val().trim();
		jsonData["university"]=$('#university').val().trim();
		jsonData["faculty"]=$('#faculty').val().trim();
		jsonData["module"]=$('#module').val().trim();
		jsonData["degree_of_studies"]=$('#degree_of_studies').val().trim();
		jsonData["year"]=$('#year').val();
		jsonData["finished"]=$('#finished').val().trim();
		jsonData["grade"]=$('#grade').val().trim();
		jsonData["linkedin"]=$('#linkedin').val().trim();
		jsonData["licence"]=$('#licence').val().trim(); 
		jsonData["languages"]=languagesFieldData();



		var token = sessionStorage.getItem('token');
		var email = sessionStorage.getItem('email');
		jsonData["email"]=email;



	  	console.log("token before"+sessionStorage.getItem('token'));
		



		$.ajax({
			  headers: { 
		        'Accept': 'application/json',
		        'Content-Type': 'application/json' 
    		  },
			  type: "PUT",
			  url: URLlogin,
			  beforeSend: function (xhr) {
				    xhr.setRequestHeader('Authorization', 'Bearer '+token);
			  },
			  dataType: "json",
			  data: JSON.stringify(eval(jsonData)),

			  success: function(resp){ 

			  	var form=document.getElementById('update_form');
			  	
	  			alert("Informacije uspesno izmenjene!");

	  			$('#nameSurname').text(jsonData["name"]+" "+jsonData['surname']);
				
				$('#sex-info').text(jsonData["sex"]);
				$('#date-info').text(jsonData["birthDate"]);
				$('#university-info').text(jsonData["university"]);
				$('#faculty-info').text(jsonData["faculty"]);
				$('#module-info').text("Smer: "+jsonData["module"]);
				$('#degree-of-studies-info').text(jsonData["degree_of_studies"]);
				$('#grade-info').text("Prosečna ocena: "+jsonData["grade"]);
				$('#licence-info').text("Posedujem vozačku dozvolu B kategorije: "+jsonData["licence"]); 
			  	$('#languages-info').text("Jezici koje govorim: "+jsonData["languages"]);
				
				yearField(jsonData["finished"],jsonData["year"]);
				linkedin(jsonData["linkedin"]);

	  			
			  },
			  complete: function(xhr){
			  	sessionStorage.removeItem('token');

	  			sessionStorage.setItem('token', xhr.getResponseHeader('Authorization').split(' ')[1]);
	  			console.log(sessionStorage.getItem('token'));
			  },
			  error: function(XMLHttpRequest, textStatus, errorThrown){
			  	sessionStorage.removeItem('token');

	  			sessionStorage.setItem('token', XMLHttpRequest.getResponseHeader('Authorization').split(' ')[1]);
	  			
			  	alert('Greška prilikom izmene informacija!');
			  }



		});



	});




})