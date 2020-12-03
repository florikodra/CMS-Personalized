

<!DOCTYPE html>
<html >
	<head>
		<meta charset="utf-8">
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="keywords" content="">
		<meta name="theme-color" content="#272727">

		<title>DuarArtat | Kryefaqja</title>

		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

		<!-- BOOTSTRAP -->
		<link rel="stylesheet" href="css/bootstrap.css">

		<!-- PLUGINS -->
		<link rel="stylesheet" href="css/vlthemes.css">

		<!-- REV SLIDER -->
		<link rel="stylesheet" href="public/assets/css/settings.css">

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
				<main><div id="pagepiling">
				<?php $query=mysql_query("select * from home order by numri asc ")or die (mysql_error());
				while($row=mysql_fetch_array($query)){ ?>

					
					


						<!-- END SECTION -->
						
						<div
							class="section animated"
							id="section1"
							style="background-image: url('cpanel/<?php echo $row['location'];?>');" ">
							<div class="container">
								<div class="text-center">
									<div class="piling-content">
										<h2 class="piling-title"><?php echo $row['titulli'];?></h2>
										<p class="piling-description"><?php echo $row['pershkrim'];?></p>
									</div>
								</div>
							</div>
						</div>
						<!-- END SECTION -->
						
						<?php } ?>
					</div>

				</main>

			<!-- END CONTENT -->
			</div>

		</div>
		<!-- END ANIMSITION -->

		<!-- SCRIPTS -->
		<script src="vendors/jquery-1.12.0.min.js"></script>
		<script src="scripts/plugins.min.js"></script>

		<!-- CUSTOM SCRIPT -->
		<script src="scripts/script.js"></script>

	</body>
</html>