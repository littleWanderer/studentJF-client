<?php $token = $_GET['token'] ?>
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
		    	<h1 style="padding:10px 20px 10px 20px;">Promena lozinke</h1>
		    </div>
	  	</div>
		
		
		<div class="content_wrapper">
			<div class="container">
				<div class="row align-items-center" >
					<div class="col-6 login_form_wrapper">
						<form id="reset_password_form">
							<div class="form-group">
								<input type="password" id="reset_pswd"  required="required" placeholder="Lozinka"  class="form-control">
							</div>

							<div class="form-group">					
								<input type="password"  id="reset_pswd_confirm" required="required" placeholder="Ponovite lozinku" class="form-control">
							</div>
							
							<input type="hidden"  id="token_reset" class="form-control" value="<?php echo $token ?> " >
							
							<button type="submit" form="reset_password_form" class="btn btn-primary btn-block" id="reset_button">Promeni lozinku</button>

							
						</form>
						
					</div>
				</div>

			</div>

			<div id="footerWrapper" class="container-fluid" >
			  <?php include("components/footer.php"); ?>
		    </div>

		</div>

    </div>



	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/passwordReset.js"></script>



</body>
</html>