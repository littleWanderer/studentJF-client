<!-- Register modal -->

	<div class="modal fade" role="dialog" id="registerModal">
        <div class="modal-dialog">
            <form id="register_form" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Registruj se</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="container" >
                        <div class="row align-items-center">
                            <div class="form-group col-8">
								<label>Ime *</label>
								<input type="text" name="name" id="name"  required="required" class="form-control">
							</div>
							<div class="form-group col-8">
								<label>Prezime *</label>
								
								<input type="text" name="surname" id="surname"  required="required" class="form-control">
							</div>
							<div class="form-group col-8 ">
								<label>Pol *</label>
								
								<select class="custom-select" id="sex" required="required">
									<option value="" disabled selected>Izaberi pol</option>
								    <option value="1">Muški</option>
								    <option value="2">Ženski</option>
								    <option value="3">Drugo</option>
								</select>
							</div>

							<div class="form-group col-8 ">
								<label>Email *</label>
								
								<input type="email" name="email" id="emailAddress"  required="required" class="form-control">
							</div>
							<div class="form-group col-8">
								<label>Lozinka *</label>
								
								<input type="password" name="pass" id="pass"  required="required" class="form-control">
							</div>

							<div class="form-group col-8">
								<label>Datum rođenja *</label>
								
								<input type="date" name="birthDate" id="birthDate"  required="required" class="form-control">
							</div>
							<div class="form-group col-8">
								<label>Univerzitet *</label>
								
								<select class="custom-select" id="university" required="required">
									<option value="" disabled selected>Izaberi univerzitet</option>
								    <option value="Univerzitet u Beogradu">Univerzitet u Beogradu</option>
								    <option value="Univerzitet u Novom Sadu">Univerzitet u Novom Sadu</option>
								    <option value="Univerzitet u Nišu">Univerzitet u Nišu</option>
								    <option value="Univerzitet u Kragujevcu">Univerzitet u Kragujevcu</option>
								    <option value="Univerzitet u Novom Pazaru">Univerzitet u Novom Pazaru</option>
								    <option value="Univerzitet u Prištini">Univerzitet u Prištini</option>
								    <option value="Univerzitet umetnosti u Beogradu">Univerzitet umetnosti u Beogradu</option>
								    <option value="Ostalo">Ostalo</option>
								</select>
							</div>
							<div class="form-group col-8 hidden" id="faculty_field">
								<label>Fakultet *</label>
								<select class="custom-select" id="faculty">
								</select>
								
							</div>
							<div class="form-group col-8 hidden" id="faculty_other_field">
								<label>Fakultet *</label>
								<input type="text" id="faculty_other" class="form-control hidden">
							</div>

							<div class="form-group col-8">
								<label>Smer *</label>
								
								<input type="text" name="module" id="module"  required="required" class="form-control">
							</div>
							<div class="form-group col-8">
								<label>Stepen studija *</label>
								
								<select class="custom-select" id="degree_of_studies" required="required">
									<option value="" disabled selected>Izaberi stepen studija</option>
								    <option value="1">Osnovne studije</option>
								    <option value="2">Master studije</option>
								    <option value="3">Doktorske studije</option>
								</select>
							</div>
							
							<div class="form-group col-8">
								<label>Status studija *</label>
								<select class="custom-select" id="finished">
								    <option value="" disabled selected>Izaberi status studija</option>
								    <option value="Završene">Završene</option>
								    <option value="U toku">U toku</option>
								</select>
							</div>
							<div class="form-group col-8 hidden" id="year_field" >
								<label>Godina studija *</label>
								<select class="custom-select" id="year">
									<option value="" disabled selected>Izaberi godinu studija</option>
								    <option value="1">Prva</option>
								    <option value="2">Druga</option>
								    <option value="3">Treća</option>
								    <option value="4">Četvrta</option>
								    <option value="5">Peta</option>
								    <option value="6">Šesta</option>
								</select>
							</div>
							<div class="form-group col-8">
								<label>Prosečna ocena tokom studija *</label>
								<select class="custom-select" id="grade"  required="required">
									<option value="" disabled selected>Izaberi prosečnu ocenu</option>
								    <option value="1">6.0-6.5</option>
								    <option value="2">6.5-7.0</option>
								    <option value="3">7.0-7.5</option>
								    <option value="4">7.5-8.0</option>
								    <option value="5">8.0-8.5</option>
								    <option value="6">8.5-9.0</option>
								    <option value="7">9.0-9.5</option>
								    <option value="7">9.5-10</option>

								</select>
							</div>

							<div class="form-group col-8">
								<label>Linkedin profil</label>
								<input type="text" name="linkedin" id="linkedin"  class="form-control">
							</div>

							<div class="form-group col-8">
								<label>Strani jezici *</label>
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" value="" id="english_lang">
								  <label class="form-check-label" for="english_lang">Engleski jezik</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" value="" id="french_lang">
								  <label class="form-check-label" for="french_lang">Francuski jezik</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" value="" id="italian_lang">
								  <label class="form-check-label" for="italian_lang">Italijanski jezik</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" value="" id="spanish_lang">
								  <label class="form-check-label" for="spanish_lang">Španski jezik</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" value="" id="russian_lang">
								  <label class="form-check-label" for="russian_lang">Ruski jezik</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" value="" id="german_lang">
								  <label class="form-check-label" for="german_lang">Nemački jezik</label>
								</div>
																
							</div>

							<div class="form-group col-8">
								<label>Vozačka dozvola B kategorije*</label>

								<select class="custom-select" id="licence"  required="required">
									<option value="" disabled selected>Izaberi opciju</option>
								    <option value="1">Da</option>
								    <option value="2">Ne</option>
								</select>
								
							</div>  
                        </div>
                    </div>

                    <div class="modal-footer" >
                        <button type="submit" class="btn button-orange" form="register_form">Sačuvaj</button>
                        <button type="button" class="btn button-orange" data-dismiss="modal">Zatvori</button>
                    </div>

                </div>

            </form>
        </div>

    </div>