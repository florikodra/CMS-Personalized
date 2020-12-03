
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="keywords" content="">
		<meta name="theme-color" content="#272727">

		

		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

		<!-- BOOTSTRAP -->
		<link rel="stylesheet" href="css/bootstrap.css">

		<!-- PLUGINS -->
		<link rel="stylesheet" href="css/vlthemes.css">

		<!-- CUSTOM CSS -->
		<link rel="stylesheet" href="css/style.css">

	</head>

	<body>

		<!-- FRAMES -->
		<span class="frame-line top-frame"></span>
		<span class="frame-line right-frame"></span>
		<span class="frame-line bottom-frame"></span>
		<span class="frame-line left-frame"></span>

		<div class="animsition">
			<div class="content">

			<?php include('header.php');
			include('cpanel/dbcon.php');?>
			
			
				<section>
					<div class="container">
						<div class="page-title text-center">
							<h1>Contact</h1>
							<p>Get in Touch</p>
						</div>
						<!-- END PAGE-TITLE -->
					</div>
				</section>
				<!-- END SECTION -->

				<main>

					<!-- END PADDING -->


					<div class="padding">
						<div class="container">
							<div class="row">

								<div class="col-md-8 col-md-offset-2">

									<form method="post" action="cpanel/up_contact.php">
										<div class="row">
											<div class="col-sm-6">
												<div>
													<label>Name:</label>
													<input class="contact-form-name field" type="text" name="emer" required>
												</div>
											</div>

											<div class="col-sm-6">
												<div >
													<label>Email:</label>
													<input class="contact-form-email field" type="text" name="email" required>
												</div>
											</div>
											<div class="col-sm-12">

												<div>

													<label>Message:</label>
													<textarea  name="mesazh" required></textarea>
												</div>

												<p class="return-msg clearfix"></p>

												<input type="submit" name="submit"/>
													</div>
											

											

										</div>

									</form>
									<!-- END CONTACT-FORM -->

								</div>
							</div>

						</div>
					</div>
					<!-- END PADDING -->
										<div class="padding">
						<div class="container">
							<div class="row">

								<div class="col-sm-4">
									<div class="contact-box text-center">
										<i class="ti-thought"></i>
										<p>
											<a href="mail-to:plafon89@gmail.com">plafon89@gmail.com</a>
										</p>
									</div>
									<!-- END CONTACT-BOX -->
								</div>

								<div class="col-sm-4">
									<div class="contact-box text-center">
										<i class="ti-map-alt"></i>
										<p>St. Elevrin No.105 Cromvel, Canada
										</p>
									</div>
									<!-- END CONTACT-BOX -->
								</div>

								<div class="col-sm-4">
									<div class="contact-box text-center">
										<i class="ti-headphone-alt"></i>
										<p>N:+380668666413</p>
									</div>
									<!-- END CONTACT-BOX -->
								</div>

							</div>
						</div>
					</div>
				</main>
				<!-- END MAIN -->

<?php include('footer.php');?>

			</div>
			<!-- END CONTENT -->

		</div>
		<!-- END ANIMSITION -->


		<!-- SCRIPTS -->
		<script src="vendors/jquery-1.12.0.min.js"></script>
		<script src="scripts/plugins.min.js"></script>

		<!-- GMAPS API -->

		<!-- CUSTOM SCRIPT -->
		<script src="scripts/script.js"></script>

	</body>
</html>