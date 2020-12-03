
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
	include('header.php');
$id=$_GET['id'];
$query=mysql_query("select * from blog where blog_id='$id'")or die (mysql_error());
$row=mysql_fetch_array($query);
?>
		<title>DuarArtat | <?php echo $row['titulli'];?></title>

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


							<div class="clearfix"></div>

						</div>
					</div>
					<!-- END HEADER-INNER -->
				</header>
				<!-- END HEADER-WRAP -->

				<main>
					<div class="single-post-wrap clearfix">
						<div class="container">
							<div class="row">
								<div class="col-md-8 content-fixed">

									<article class="post single-post">
										<div class="post-thumb clearfix">
											<img src="cpanel/<?php echo $row['location'];?>" alt="">
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57ad999c3aacc22f"></script>

										</div>

										<div class="post-content">
											<div class="post-date">
												<?php echo $row['data'];?>
											</div>
											<h2 class="post-title">
												<?php echo $row['titulli'];?>
											</h2>

											<p><?php echo $row['pershkrimi'];?></p>
											
										

											

											<div class="entry-tags clearfix">
												<h5>Autori:</h5>
												<a href="#"><?php echo $row['autor'];?></a><br>
												<h5>Link:</h5>
												<a href="<?php echo $row['link'];?>"><?php echo $row['link'];?></a>

												<div class="entry-footer clearfix">
													

													
												</div>

											</div>

										</div>

									</article>
									<!-- END SINGLE-POST -->

									


								</div>

								<div class="col-md-4 sidebar-fixed">
									<div class="sidebar">

										<aside class="widget-wrap widget-search">
											<h6 class="widget-title">
												<span>Lost Something?</span>
											</h6>
											<form class="search-form">
												<input type="text">
												<i class="ti-search"></i>

											</form>
										</aside>
										<!-- END WIDGET-WRAP -->

										

										<aside class="widget-wrap widget-recent-posts">

											<h6 class="widget-title">
												<span>Recent Posts</span>
											</h6><?php $rec=mysql_query("select * from blog where day(data)=day(now()) order by data desc")or die (mysql_error());
					
					while ($rw=mysql_fetch_array($rec)){ ?>

											<ul class="recent-posts">

												<li>
													<figure>
														<a class="animsition-link" href="blog_post.php?id=<?php echo $rw['blog_id'];?>">
															<img src="cpanel/<?php echo $rw['location'];?>" alt="">
														</a>
													</figure>
													<div class="recent-post-content">
														<a class="animsition-link" href="blog_post.php?id=<?php echo $rw['blog_id'];?>">Creative Revolution</a>
														<span><?php echo $rw['data'];?></span>
													</div>
												</li>

												

					<?php } ?>

											</ul>

										</aside>
										<!-- END WIDGET-WRAP -->
										
										<!-- END WIDGET-WRAP -->

									</div>
									<!-- END SIDEBAR -->
								</div>
							</div>
						</div>
					</div>
					<!-- END SINGLE-POST-WRAP -->

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

		<!-- CUSTOM SCRIPT -->
		<script src="scripts/script.js"></script>

	</body>
</html>