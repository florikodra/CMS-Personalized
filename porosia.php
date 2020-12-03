
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

		<title>DuarArtat | Porosit</title>

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

			<?php include('header.php');?>
			
		

				<main>

					<!-- END PADDING -->


					<div class="padding">
						<div class="container">
							<div class="row">

								<div class="col-md-8 col-md-offset-2">

									<form
										class="contact-form"
										id="contact-form"
										action="send_email.html"
										method="post"
										data-all-fields-required-msg="All fields are required"
										data-ajax-fail-msg="Ajax could not set the request"
										data-success-msg="Email successfully sent.">
										<div class="row">
											<div class="col-sm-6">
												<div class="field-list">
													<label>Emri Mbiemri:</label>
													<input class="contact-form field" type="text" name="name">
												</div>
											</div>

											<div class="col-sm-6">
												<div class="field-list">
													<label>Numri I Celularit:</label>
													<input class="contact-form field" type="number" name="phone">
												</div>
											</div>
											<div class="col-sm-12">
												<div class="field-list">
													<label>Adressa:</label>
													<input class="contact-form field" type="text" name="adres">
												</div>
											</div>
											<div class="col-sm-12">
												<div class="field-list">
													<label>Kodi i Produktit:</label>
													<input class="contact-form field" type="text" name="code">
												</div>
											</div>
											
											<div class="col-sm-12">

												<div class="field-list">

													<label>Sasia:</label>
													<input class="contact-form field" type="number" name="sasia">
													
												</div>

												<p class="return-msg clearfix"></p>

												<button class="button button-black button-block" type="submit" name="Submit2">
													Send
													<i
														class="fa fa-spin fa-spinner ajax-loader"
														style="display: none; margin-left: 5px;"></i>

												</button>

											</div>

										</div>

									</form>
									<!-- END CONTACT-FORM -->

								</div>
							</div>

						</div>
					</div>
					<!-- END PADDING -->

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
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

		<!-- CUSTOM SCRIPT -->
		<script src="scripts/script.js"></script>

	</body>
</html>