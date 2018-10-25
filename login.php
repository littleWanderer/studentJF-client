
<html>
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>JobFair18</title>

	<link rel="stylesheet" type="text/css" href="style/index.css">
	<link rel="stylesheet" type="text/css" href="style/header.css">

	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">

</head>
<body style="overflow-x:hidden">

	<div class="container-fluid">

		<div id="headerWrapper" class="row">
		    <?php include("components/header.php"); ?>
		</div>

		<div id="template_header">
		    <div id="template_headline">
		    	<h1 style="padding:10px 20px 10px 20px;">Registracija </h1>
		    </div>
	  	</div>
		
		
		<div class="content_wrapper">
			<div class="container">
				<div class="row align-items-center" >
					<div class="col-6 login_form_wrapper">
						<form id="login_form">
							<div class="form-group">
								<input type="email" name="email" id="email"  required="required" placeholder="Email adresa"  class="form-control">
							</div>

							<button type="button" id="forgot_pswd">Zaboravio/la si lozinku?</button>

							<div class="form-group">					
								<input type="password" name="password" id="password" required="required" placeholder="Lozinka" class="form-control">
							</div>
							
							<button type="submit" form="login_form" class="btn btn-primary btn-block" id="login_button">Uloguj se</button>

							<p style="margin-top: 10px">Nemaš nalog? <button type="button" data-toggle="modal" data-target="#registerModal" id="register_button">Registruj se</button></p>
						</form>
						<form id="send_reset_link_form">
		
							<div class="form-group">
								<input type="email" name="email" id="email_reset"  required="required" placeholder="Email adresa"  class="form-control">
							</div>

							<button type="submit" form="send_reset_link_form" class="btn btn-primary btn-block" id="send_link_button">Pošalji link za resetovanje lozinke</button>

						</form>
					</div>
				</div>

			</div>

			<div id="footerWrapper" class="container-fluid" >
			  <?php include("components/footer.php"); ?>
		    </div>

		</div>

    </div>


	<!-- Register modal -->
	<?php include('components/registerModal.php'); ?>


	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/login.js"></script>
	<script type="text/javascript" src="js/register.js"></script>
	<script type="text/javascript" src="js/selectFields.js"></script>
	<script type="text/javascript" src="js/passwordResetLink.js"></script>


</body>
</html>