/* REGISTER */


function yearFieldData() {
	if($('#finished option:selected').val()=="U toku") {
		return $('#year option:selected').text().trim();
	}

	else return "";
}


function facultyFieldData(){
	if($('#university option:selected').val()=="Ostalo") {
		return $('#faculty_other').val().trim();
	}

	else return $('#faculty option:selected').text();
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

$(document).ready(function(){


	$("#register_form").submit(function(e){

		e.preventDefault();
        e.stopPropagation();

		const URLlogin="http://127.0.0.1:8000/api/student/register";
		
		
		var jsonData = {};
		jsonData["email"]=$('#emailAddress').val().trim();;
		jsonData["password"]=$('#pass').val().trim();;
		jsonData["name"]=$('#name').val().trim();
		jsonData["surname"]=$('#surname').val().trim();
		jsonData["sex"]=$('#sex option:selected').text();
		jsonData["birthDate"]=$('#birthDate').val().trim();
		jsonData["university"]=$('#university option:selected').text();

		// check for faculty - is it select or text field

		jsonData["faculty"]=facultyFieldData();
		jsonData["module"]=$('#module').val().trim();
		jsonData["degree_of_studies"]=$('#degree_of_studies option:selected').text();
		jsonData["finished"]=$('#finished option:selected').text();
		// check if there is a year field
		jsonData["year"]=yearFieldData();

		jsonData["grade"]=$('#grade option:selected').text().trim();
		jsonData["linkedin"]=$('#linkedin').text().trim();
		jsonData["licence"]=$('#licence option:selected').text().trim(); 

		languages=languagesFieldData();
		jsonData["languages"]=languages;

	
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

			  	if(resp.message!=null && resp.message.email=="The email has already been taken."){
			  		console.log(resp.message.email);
			  		alert("Email je već zauzet, molimo unesite drugi");
			  	}

			  	else {
			  		var form=document.getElementById('register_form');
			  		form.reset();
					//close modal
					alert("Uspešna registracija");
			  	}

			  	

			  		
			  },
			  error: function(resp){
			  	if(resp.message!=null && resp.message.email=="The email has already been taken."){
			  		alert("Email je već zauzet");
			  	}
			  	else {
			  		alert('Greška prilikom registrovanja!');

			  	}
			  }



		}); 



	});




})