/* SELECT FIELDS */

function populateSelect(id, array) {
	var option='';
	for(var i=0; i<array.length; i++){
		option+='<option value="'+ array[i] + '" class="forRemoving">' + array[i] + '</option>';
	}

	$(id).append(option);
}


function clearExistingOptions(id) {
	var select = id+" option";
	$(select).each(function() {
	    if ( $(this).hasClass('forRemoving')) {
	        $(this).remove();
	    }
	});
}



$(document).ready(function(){

	// university and faculty input fields

	$('select#university').on('change', function(){
		var value = $('#university option:selected').val();
		console.log(value);
		switch(value){
			case "Univerzitet u Beogradu":
				// bg
				clearExistingOptions('#faculty');
				
				var faculty = ['Arhitektonski fakultet', 'Biološki fakultet', 'Ekonomski fakultet',
								'Elektrotehnički fakultet', 'Fakultet za specijalnu edukaciju i rehabilitaciju',
								'Fakultet sporta i fizičkog vaspitanja', 'Fakultet bezbednosti',
								'Fakultet organizacionih nauka', 'Fakultet političkih nauka',
								'Fakultet za fizičku hemiju', 'Farmaceutski fakultet',
								'Filološki fakultet', 'Filozofski fakultet', 'Fizički fakultet',
								'Geografski fakultet', 'Građevinski fakultet', 'Hemijski fakultet',
								'Mašinski fakultet', 'Matematički fakultet', 'Medicinski fakultet',
								'Pravoslavni bogoslovski fakultet', 'Poljoprivredni fakultet','Pravni fakultet', 
								'Rudarsko-geološki fakultet', 'Saobraćajni fakultet' ,'Stomatološki fakultet',
								'Šumarski fakultet', 'Tehnički fakultet u Boru','Tehnološko-metalurški fakultet',
								'Učiteljski fakultet', 'Fakultet veterinarske medicine'];
								
				populateSelect('#faculty', faculty);
				$('#faculty_field').css('display', 'block');

				$('#faculty_field').css('required', 'required');
				$('#faculty_other_field').attr('required', 'disabled');
				$('#faculty_other_field').css('display', 'none');
				

				break;
			case "Univerzitet u Novom Sadu": 
				// ns
				clearExistingOptions('#faculty');
				var faculty = ['Akademija umetnosti', 'Ekonomski fakultet',
								'Fakultet fizičke kulture', 'Filozofski fakultet',
								'Građevinski fakultet', 'Medicinski fakultet',
								'Pedagoški fakultet','Pravni fakultet', 
								'Prirodno-matematički fakultet',
								'Rudarsko-geološki fakultet',  'Tehnološki fakultet',
								'Tehnički fakultet Mihajlo Pupin',
								'Učiteljski fakultet na mađarskom nastavnom jeziku',
								'Fakultet veterinarske medicine'];
								
				populateSelect('#faculty', faculty);
				$('#faculty_field').css('display', 'block');

				$('#faculty_field').css('required', 'required');
				$('#faculty_other_field').attr('required', 'disabled');
				$('#faculty_other_field').css('display', 'none');

				break;
			case "Univerzitet u Nišu":
				// nis
				clearExistingOptions('#faculty');
				var faculty = [ 'Građevinsko-arhitektonski fakultet', 'Ekonomski fakultet',
								'Elektronski fakultet','Mašinski fakultet', 'Medicinski fakultet',
								'Pravni fakultet', 'Prirodno-matematički fakultet',
								'Tehnološki fakultet u Leskovcu',
								'Učiteljski fakultet u Vranju',
								'Fakultet umetnosti', 'Fakultet zaštite na radu',
								'Fakultet sporta i fizičkog vaspitanja', 'Filozofski fakultet'];
								
				populateSelect('#faculty', faculty);
				$('#faculty_field').css('display', 'block');

				$('#faculty_field').css('required', 'required');
				$('#faculty_other_field').attr('required', 'disabled');
				$('#faculty_other_field').css('display', 'none');


				break;
			case "Univerzitet u Kragujevcu":
				//kragujevac
				clearExistingOptions('#faculty');
				var faculty = [ 'Agronomski fakultet', 'Ekonomski fakultet',
								'Fakultet za mašinstvo i građevinarstvo', 'Fakultet medicinskih nauka',
								'Fakultet pedagoških nauka', 'Pravni fakultet', 'Prirodno-matematički fakultet',
								'Fakultet tehničkih nauka', 'Učiteljski fakultet', 'Fakultet za hotelijerstvo i turizam',
								'Fakultet inženjerskih nauka', 'Filološko-umetnički fakultet'];
								
				populateSelect('#faculty', faculty);
				$('#faculty_field').css('display', 'block');

				$('#faculty_field').css('required', 'required');
				$('#faculty_other_field').attr('required', 'disabled');
				$('#faculty_other_field').css('display', 'none');


				break;
			case "Univerzitet u Novom Pazaru":
				// novi pazar
				clearExistingOptions('#faculty');
				var faculty = [ 'Departman za pravne nauke', 'Departman za ekonomske nauke',
								'Departman za filozofske nauke', 'Departman za filološke nauke',
								'Departman za matematičke nauke', 'Departman za tehničke nauke',
								'Departman za hemijsko-tehnološke nauke', 'Departman za biomedicinske nauke',
								'Departman za umetnost', 'Departman za multidisciplinarne nauke'];
								
				populateSelect('#faculty', faculty);
				$('#faculty_field').css('display', 'block');

				$('#faculty_field').css('required', 'required');
				$('#faculty_other_field').attr('required', 'disabled');
				$('#faculty_other_field').css('display', 'none');


				break;
			case "Univerzitet u Prištini":
				// pristina
				clearExistingOptions('#faculty');
				var faculty = [ 'Ekonomski fakultet', 'Pravni fakultet', 'Medicinski fakultet',
								'Učiteljski fakultet', 'Filozofski fakultet', 'Poljoprivredni fakultet',
								'Prirodno-matematički fakultet', 'Fakultet tehničkih nauka', 'Fakultet umetnosti',
								'Fakultet za fizičku kulturu'];
								
				populateSelect('#faculty', faculty);
				$('#faculty_field').css('display', 'block');

				$('#faculty_field').css('required', 'required');
				$('#faculty_other_field').attr('required', 'disabled');
				$('#faculty_other_field').css('display', 'none');


				break;
			case "Univerzitet umetnosti u Beogradu":
				// fak umetosti
				clearExistingOptions('#faculty');
				var faculty = ['Fakultet muzičke umetnosti', 'Fakultet muzičke umetnosti',
								'Fakultet dramskih umetnosti', 'Fakultet primenjenih umetnosti'];
								
				populateSelect('#faculty', faculty);
				$('#faculty_field').css('display', 'block');
				$('#faculty_field').css('required', 'required');
				$('#faculty_other_field').attr('required', 'disabled');

				$('#faculty_other_field').css('display', 'none');



				break;
			case "Ostalo":
				$('#faculty_field').css('display', 'none');
				$('#faculty_field').css('required', 'disabled');
				$('#faculty_other_field').css('display', 'block');
				$('#faculty_other_field').attr('required', 'required');


				break;


		}
	})

	// status - degree of studies

	$('select#finished').on('change', function(){
		var value = $('#finished option:selected').val();
		console.log(value);
		switch(value){
			case "Završene":
				// finished studies
				
				$('#year_field').css('display', 'none');
				$('#year_field').attr('required', 'false');
				break;
			case "U toku":
				// not finished displays year field
				$('#year_field').css('display', 'block');
				$('#year_field').attr('required', 'required');

				break;
			}
		})


	

})