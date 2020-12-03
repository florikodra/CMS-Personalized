
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

		<title>DuarArtat | Blog</title>

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
				include('cpanel/dbcon.php');
				?>

				<main>

					<div class="blog-post blog-modern">
					<?php $post=mysql_query("select * from blog order by data desc")or die (mysql_error());					
					while ($row=mysql_fetch_array($post)){ ?>
						<article class="post">
						

							<div class="post-thumb clearfix">
								<a href="blog_post.php?id=<?php echo $row['blog_id'];?>" class="animsition-link">
									<center><img class="image" src="cpanel/<?php echo $row['location'];?>" alt=""></center>
								</a>
							</div>
							<div class="container">
								<div class="col-md-8 col-md-offset-2">

									<div class="post-content">
										<div class="container">
											<div class="post-date">
												<a href="blog_post.php?id=<?php echo $row['blog_id'];?>"><?php echo $row['data'];?></a>
											</div>
											<h2 class="post-title">
												<a href="blog_post.php?id=<?php echo $row['blog_id'];?>" class="animsition-link"><?php echo $row['titulli'];?></a>
											</h2>
											<div class="post-meta">
												<span class="post-author">Posted by
													<a href="blog_post.php?id=<?php echo $row['blog_id'];?>"><?php echo $row['autor'];?></a>
												</span>
												<span class="post-cat">in
													<a href="blog_post.php?id=<?php echo $row['blog_id'];?>">Branding</a>
												</span>
											</div>
											<p></p>
											<a href="blog_post.php?id=<?php echo $row['blog_id'];?>" class="link animsition-link">Read More</a>
										</div>
									</div>
								</div>
							</div>

						</article>
						<!-- END POST -->

					<?php } ?>
					</div>

					<div class="padding">
						<div class="container">
							<div class="text-center">
								<ul class="pagination">
									<li class="disabled">
										<a href="#">Prev</a>
									</li>
									<li class="active">
										<a href="#">1</a>
									</li>
									<li>
										<a href="#">2</a>
									</li>
									<li>
										<a href="#">3</a>
									</li>
									<li>
										<a href="#">4</a>
									</li>
									<li>
										<a href="#">Next</a>
									</li>
								</ul>
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

		<script src="vendors/tiltfx.js"></script>

		<!-- CUSTOM SCRIPT -->
		<script src="scripts/script.js"></script>

	</body>
</html>