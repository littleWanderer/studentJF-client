
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
		  <?php include("components/header.php");  ?>
	</div>

	<div id="template_header">
		    <div id="template_headline">
		    	<h1 style="padding:10px 20px 10px 20px;">Profil</h1>
		    </div>
	  	</div>

	<div class="content_wrapper">
		
		
		<div class="container" >
			<div class="row">
				<div class="col-12" id="buttons" style="margin-top:20px">
					<!--<h5 id="logout" style="display: inline">Logout</h5> -->
					<div>
						<button type="button" class="btn dark-button button-large" data-toggle="modal" data-target="#cvModal" id="upload_cv">Otpremanje CV-a</button>
						<button type="button" style="display:none" id="download_cv_button" class="btn dark-button button-large">
						<a id="download_cv" style="text-decoration: none; color:white" download target="_blank">Preuzimanje CV-a</a>
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
	  		<?php include("components/footer.php"); ?>
		</div>
	</div>

	
</div>

<!-- Get user info button -->

<button type="button" style="background-color:transparent;border:none" id="getUserInfo"></button> 

<!-- Modal for CV upload -->

	<?php include("components/cvModal.php"); ?>

<!-- Modal for profile picture -->  

	<?php include("components/profilePicModal.php"); ?>

<!-- Modal for changing password --> 

    <?php include("components/changePassModal.php"); ?>

<!-- Modal for updating info -->
	<?php include("components/updateInfoModal.php"); ?>

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