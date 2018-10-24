



<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>JobFair18</title>

	<link rel="stylesheet" type="text/css" href="style/index.css">
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/profile.css">
	<link rel="stylesheet" type="text/css" href="style/skeleton_screen.css">



	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">



</head>
<body style="overflow-x: hidden;">

<div class="skeleton"></div>

<div class="container-fluid" id="hidden-content">


	<div id="headerWrapper" class="row">
		  <header id="header" class="col-12">
		    <div id="headerLogo" class="col-4">
		    	<a href="../"><img id="logo" src="assets/images/logo18.png"></a>
		    </div>
		    <nav id="headerMenu" class="col-8">
		      <ul>
		        <li  ><a href="../student">Početna</a></li>
		        <li > <a href="o_projektu.php">O projektu</a>
		          <ul>
		            <li class="navFirst"><a href="o_projektu.php">Šta je JobFair?</a></li>
		            <li>
		            	<a href="o_projektu.php?goto=organizatori">Organizatori</a>
		            </li>
		            <li>
		            	<a href="o_projektu.php?goto=nacionalni">Nacionalni karakter</a>
		            </li>
		            <li>
		            	<a href="o_projektu.php?goto=prethodni">Prethodni sajmovi</a>
		            </li>
		            <li>
		            	<a href="o_projektu.php?goto=cvbrowser">CV browser</a>
		            </li>
		            <li>
		            	<a href="o_projektu.php?goto=podrske">Podrške</a>
		            </li>
		            <li>
		            	<a href="o_projektu.php?goto=reklisu">Rekli su o nama</a>
		            </li>
		            <li>
		            	<a href="o_projektu.php?goto=pclipping">Press clipping</a>
		            </li>
		            <li>
		            	<a href="o_projektu.php?goto=social">Društvene mreže</a>
		            </li>
		          </ul>
		        </li>
		        <li > <a href="kompanije.php">Učesnici</a>
		          <ul>
		            <li class="navFirst"><a href="kompanije.php">Kompanije</a></li>
		            <li><a href="mediji.php">Mediji</a></li>
		            <li><a href="prijatelji.php">Prijatelji</a></li>
		          </ul>
		        </li>
		        <li > <a href="o_projektu.php?goto=edukacija">Edukacija</a>
		          <ul>
		            <li class="navFirst"><a href="levelup.php">Level Up</a></li>
					<li><a href="../student/casestudy.php">Case Study</a></li>  
		            <li><a href="panel.php">Panel diskusija</a></li>
		            <li><a href="interview_main.php">Razgovor za posao</a></li>
		            <li class="navLast" style="border-bottom: 0px;"><a href="tribine.php">Tribine</a></li>
		          </ul>
		        </li>
		        
		        <li ><a href="">Ostavi CV</a></li>

				<li ><a href="oglasi.php">Oglasi</a></li>
		        <li ><a href="galerija.php">Galerija</a></li>
		        <li ><a href="kontakt.php">Kontakt</a></li>

		      </ul>
		    </nav>
		  </header>
	</div>

	<div id="template_header">
		    <div id="template_headline">
		    	<h1 style="padding:10px 20px 10px 20px;">Profil</h1>
		    </div>
	  	</div>

	<div class="content_wrapper">
		
		
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!--<h5 id="logout" style="display: inline">Logout</h5> -->
					<div>
						<button type="button" class="btn dark-button button-large" data-toggle="modal" data-target="#cvModal" id="upload_cv">Otpremanje CV-a</button>
						<button type="button" style="display:none" id="download_cv_button" class="btn dark-button button-large">
						<a id="download_cv" style="text-decoration: none; color:white">Preuzimanje CV-a</a>
						</button>

						<button type="button" class="btn dark-button button-large" id="update_info_button" id="change_info">Izmena profila</button>
						<button type="button" class="btn dark-button button-large" data-toggle="modal" data-target="#passwordModal" id="change_pass">Promena lozinke</button>
					</div>
				</div>
				<!-- basic info -->

				<div class="col-12 basic-info">
					<div class="container">
						<div class="row">
							
							<div class="col-12" >
								<div id="profile-img">
									<image id="img" />
									<button type="button" id="img-button"data-toggle="modal" data-target="#imageModal">
										<i class="fas fa-camera fa-2x"></i>
									</button>
								</div>
							</div>
							<div class="col-12">
								<div>
									<h5 class="basic-info-text" id="nameSurname"></h5>
									<h5 class="basic-info-text" id="email-info"></h5>
									<h5 class="basic-info-text" id="date-info"></h5>
									<h5 class="basic-info-text" id="sex-info"></h5>

									<a id="linkedin-info" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<!-- education and other info -->
				<div class="col-12 education">
					<div class="container">
						<div class="row">
							<div class="col-6 left" style="margin-bottom: 20px">
								<h5 class="orange">Obrazovanje</h5>
								<div class="container">
									<div class="row">
										<div class="col-12 horizontal-line">
											
											<h6 class="basic-info-text" id="university-info"></h6>
											<h6 class="basic-info-text" id="faculty-info"> </h6>
											<h6 class="basic-info-text" id="degree-of-studies-info"></h6>
											<h6 class="basic-info-text" id="module-info"></h6>
											<h6 class="basic-info-text" id="year-info"></h6>
											<h6 class="basic-info-text hidden" id="status-info"></h6>
											<h6 class="basic-info-text" id="grade-info"></h6>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-6 left">
								<h5 class="orange">Ostale informacije</h5>
								<div class="container">
									<div class="row">
										<div class="col-12 horizontal-line">
											<h6 class="basic-info-text" id="languages-info"></h6>
											<h6 class="basic-info-text" id="licence-info"></h6>
										</div>
										
									</div>
								</div>
								

							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div> 

		<div id="footerWrapper" class="container-fluid" >
	  		<footer id="footer" class="row">
		   <nav id="footerMenu">
		      <ul>
		        <li><a href="../student">Početna</a></li>
		        <li><a href="o_projektu.php">O projektu</a></li>
		        <li><a href="kompanije.php">Učesnici</a></li>
		        <li><a href="o_projektu.php?goto=edukacija">Edukacija</a></li>
		        
		        <li><a href="../cv">Ostavi CV</a></li>		        
		        <li><a href="galerija.php">Galerija</a></li>
		        <li><a href="kontakt.php">Kontakt</a></li>
		      </ul>
		    </nav>
		    <div id="footerContact">
		      <h3>Kontaktirajte nas</h3>
		      <ul>
		        <li><a href="mailto:info@jobfair.rs" class="footer_ic" id="footer_ic_m"></a></li>
		        <li><a target="_blank" href="https://www.facebook.com/jobfairrs" class="footer_ic" id="footer_ic_fb"></a></li>
		        <li><a target="_blank" href="https://twitter.com/jobfairrs" class="footer_ic" id="footer_ic_tw"></a></li>
		        <li><a target="_blank" href="https://www.linkedin.com/company-beta/2281748/" class="footer_ic" id="footer_ic_ln"></a></li>
		        <li><a target="_blank" href="https://www.youtube.com/user/jobfairrs" class="footer_ic" id="footer_ic_yt"></a></li>
		      </ul>
		    </div>
		    <span id="footerCopyright">Copyright © JobFair 2018 - All Rights Reserved</span> 



		    </footer>
		</div>
	</div>

	
</div>

<!-- Get user info button -->

<button type="button" style="background-color:transparent;border:none" id="getUserInfo"></button> 

<!-- Modal for CV upload -->

	<div class="modal fade" role="dialog" id="cvModal">
        <div class="modal-dialog">
            <form id="cv_upload_form" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Ostavi svoj CV</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="container" >
                        <div class="row align-items-center">
                            <div class="col-12" style="padding: 2%; margin-left: 1.3%;">
                                  <div class="form-group">
								
									<input type="file" name="cv" id="cv"  required="required" class="form-control">

								  </div> 
								  <p>* Postavite CV u PDF formatu veličine do 2MB</p>
                            </div>   
                        </div>
                    </div>

                    <div class="modal-footer" >
                        <button type="submit" class="btn button-orange" form="cv_upload_form">Sačuvaj</button>
                        <button type="button" class="btn button-orange" data-dismiss="modal">Zatvori</button>
                    </div>

                </div>

            </form>
        </div>

    </div>

<!-- Modal for profile picture -->  
	<div class="modal fade" role="dialog" id="imageModal">
        <div class="modal-dialog">
            <form id="image_upload_form" method="post" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Postavi profilnu sliku</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="container" >
                        <div class="row align-items-center">
                            <div class="col-12" style="padding: 2%; margin-left: 1.3%;">
                                  <div class="form-group">
								
									<input type="file" name="image" id="image"  required="required" class="form-control">

								  </div> 
								  <p>* Postavite sliku u .jpg, .jpeg ili .png formatu</p>
                            </div>   
                        </div>
                    </div>

                    <div class="modal-footer" >
                        <button type="submit" class="btn button-orange" form="image_upload_form">Sačuvaj</button>
                        <button type="button" class="btn button-orange" data-dismiss="modal">Zatvori</button>
                    </div>

                </div>

            </form>
        </div>

    </div>  
<!-- Modal for changing password --> 
    <div class="modal fade" role="dialog" id="passwordModal">
        <div class="modal-dialog">
            <form id="change_password_form" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Promena lozinke</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="container" >
                        <div class="row align-items-center">
                            <div class="col-8" style="padding: 2%; margin-left: 1.3%;">
                                  <div class="form-group">
									<label>Stara lozinka</label>
									<input type="password" id="old_password"  required="required" class="form-control">
								  </div> 
								  <div class="form-group">
									<label>Nova lozinka</label>
									<input type="password" id="new_password"  required="required" class="form-control">
								  </div>
								  <div class="form-group">
									<label>Potvrdi novu lozinku</label>
									<input type="password" id="confirmed_password"  required="required" class="form-control">
								  </div>
                            </div>   
                        </div>
                    </div>

                    <div class="modal-footer" >
                        <button type="submit" class="btn button-orange" form="change_password_form">Sačuvaj</button>
                        <button type="button" class="btn button-orange" data-dismiss="modal">Zatvori</button>
                    </div>

                </div>

            </form>
        </div>

    </div>

<!-- Modal for updating info -->
	<div class="modal fade" role="dialog" id="updateModal">
        <div class="modal-dialog">
            <form id="update_form" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Izmeni informacije</h4>
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
								    <option value="Muški">Muški</option>
								    <option value="Ženski">Ženski</option>
								    <option value="Drugo">Drugo</option>
								</select>
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
								    <option value="Osnovne studije">Osnovne studije</option>
								    <option value="Master studije">Master studije</option>
								    <option value="Doktorske studije">Doktorske studije</option>
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
								    <option value="Prva">Prva</option>
								    <option value="Druga">Druga</option>
								    <option value="Treća">Treća</option>
								    <option value="Četvrta">Četvrta</option>
								    <option value="Peta">Peta</option>
								    <option value="Šesta">Šesta</option>
								</select>
							</div>
							<div class="form-group col-8">
								<label>Prosečna ocena tokom studija *</label>
								<select class="custom-select" id="grade"  required="required">
									<option value="" disabled selected>Izaberi prosečnu ocenu</option>
								    <option value="6.0-6.5">6.0-6.5</option>
								    <option value="6.5-7.0">6.5-7.0</option>
								    <option value="7.0-7.5">7.0-7.5</option>
								    <option value="7.5-8.0">7.5-8.0</option>
								    <option value="8.0-8.5">8.0-8.5</option>
								    <option value="8.5-9.0">8.5-9.0</option>
								    <option value="9.0-9.5">9.0-9.5</option>
								    <option value="9.5-10">9.5-10</option>

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
								    <option value="Da">Da</option>
								    <option value="Ne">Ne</option>
								</select>
								
							</div>  
                        </div>
                    </div>

                    <div class="modal-footer" >
                        <button type="submit" class="btn button-orange" form="update_form">Sačuvaj</button>
                        <button type="button" class="btn button-orange" data-dismiss="modal">Zatvori</button>
                    </div>

                </div>

            </form>
        </div>

    </div>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/logout.js"></script>
<script type="text/javascript" src="js/updateInfo.js"></script>
<script type="text/javascript" src="js/uploadCV.js"></script>
<script type="text/javascript" src="js/uploadProfilePic.js"></script>
<script type="text/javascript" src="js/changePassword.js"></script> 
<script type="text/javascript" src="js/getUserInfo.js"></script> 
<script type="text/javascript" src="js/selectFields.js"></script>




</body>
</html>