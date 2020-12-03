
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
<?php include ('cpanel/dbcon.php'); 
	
$id=$_GET['id'];
$query=mysql_query("select * from produkt where produkt_id='$id'")or die (mysql_error());
$row=mysql_fetch_array($query);
?>
		<title>DuarArtat | <?php echo $row['emer'];?></title>

		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

		<!-- BOOTSTRAP -->
		<link rel="stylesheet" href="css/bootstrap.css">

		<!-- PLUGINS -->
		<link rel="stylesheet" href="css/vlthemes.css">

		<!-- CUSTOM CSS -->
		<link rel="stylesheet" href="css/style.css">

	</head>
	
	<body>
				<main>
					<div class="single-post-wrap clearfix">
						<div class="container">
							<div class="row">
								<div class="col-md-8 content-fixed">

									<article class="post single-post">
										<div class="post-thumb clearfix">
											<img src="cpanel/<?php echo $row['location'];?>" alt="">

										</div>

										

									</article>
									<!-- END SINGLE-POST -->

									


								</div>

								<div class="col-md-4 sidebar-fixed">
									<div class="sidebar">

										<div class="post-content">
											<div class="post-date">
												<?php echo $row['data'];?>
											</div>
											<h2 class="post-title">
												<?php echo $row['emer'];?>
											</h2>

											<p><?php echo $row['pershkrim'];?></p>
											
										

											

											<div class="entry-tags clearfix">
												<h1>Cmimi: &nbsp;
												<?php echo $row['cmim'];?><br></h1><h4>
												Vendodhja: &nbsp;
												<?php echo $row['vendodhje'];?><br>
												Kategoria: &nbsp;
												<?php echo $row['kategori'];?><br>
												Prodhuesi: &nbsp;
												<?php echo $row['prodhuesi'];?><br>
												Gjendja: &nbsp;
												<?php echo $row['gjendja'];?><br>
												
												
												
												</h4>

												<div class="entry-footer clearfix">
													

													
												</div>

											</div>

										</div>
										

									</div>
									<!-- END SIDEBAR -->
								</div>
							</div>
						</div>
					</div>
					<!-- END SINGLE-POST-WRAP -->

				</main>
				<!-- END MAIN -->



			</div>
			<!-- END CONTENT -->

		</div>
		<!-- END ANIMSITION -->

		<!-- SCRIPTS -->
		<script src="vendors/jquery-1.12.0.min.js"></script>
		<script src="scripts/plugins.min.js"></script>

		<!-- CUSTOM SCRIPT -->
		<script src="scripts/script.js"></script>

	</body>
</html>