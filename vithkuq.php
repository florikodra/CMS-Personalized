
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

		<title>Produkte Shqiptare | Vithkuqit</title>

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
							<h1>Produkte Te Vithkuqit</h1>
							<p></p>
						</div>
					</div>
				</section>
				<!-- END SECTION -->

				<main>
					<div class="padding">

						<div class="container">
							<div class="text-center">

								<div class="toggle-filter">
									Kategorite
								</div>
								<!-- END TOGGLE-FILTER --><div class="filters-wrap"><a class="active" href="#" data-filter="*">
										<span>Te Gjitha</span>
									</a>
<?php $katg=mysql_query("select kategori from produkt ")or die (mysql_error());
				while($katgr=mysql_fetch_array($katg)){ ?>
								
									
									
									<a href="#" data-filter=".<?php echo $katgr['kategori'];?>">
										<span><?php echo $katgr['kategori'];?></span>
									</a>
<?php }?>
								</div>

								<!-- END FILTERS-WRAP -->

							</div>
				</div>
						<div class="container">

							<div class="portfolio-masonry-wrapper" data-col="three" data-gutter="60">
								<div class="portfolio-list">
								<?php							
								$search=mysql_query("SELECT * FROM produkt WHERE vendodhje LIKE '%vithkuq%'")or die (mysql_error());
					while ($row=mysql_fetch_array($search)){ ?>

									<article class="portfolio-item <?php echo $row['kategori'];?>">
										<a class="fancybox" href="cpanel/<?php echo $row['location'];?>">

											<div class="portfolio-img">
												<img
													src="cpanel/<?php echo $row['location'];?>"
													class="wow fadeIn"
													data-wow-duration="1s"
													data-wow-delay="0.2s"
													alt="">
											</div>

											<div class="portfolio-content-wrap">
												<div class="potfolio-content">
													<h4 class="portfolio-title">
														Cmimi: <?php echo $row['cmim'];?>
													</h4>

													<div class="portfolio-categories">
														<?php echo $row['kategori'];?> &nbsp; <?php echo $row['emer'];?>
													</div>
												</div>
											</div>

										</a><a href="order.php?id=<?php echo $row['produkt_id'];?>" class="button button-default">Porosit Tani</a>
									</article>
									<!-- END PORTFOLIO-ITEM -->
									
										
				<?php } ?>

								</div>

							</div>
							<!-- END PORTFOLIO-MASONRY-WRAPPER -->

						</div>

					</div>

				</main>
				<!-- END MAIN -->

<?php include('footer.php'); ?>

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