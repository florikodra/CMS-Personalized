<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>DuarArtat | Edito Blogun</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css" />

    <!-- App styles -->
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="styles/style.css">

</head>
<body class="fixed-navbar fixed-sidebar">
<!-- Simple splash screen-->
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>DuarArtat - Edito Blog</h1><p>Loading... Please Wait!</p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header -->
<?php include ('header.php');
include ('aside.php');?>
<?php include ('dbcon.php');
$id=$_GET['id'];
$query=mysql_query("select * from blog where blog_id='$id'")or die (mysql_error());
$row=mysql_fetch_array($query);
?>

<!-- Main Wrapper -->
<div id="wrapper">
<div class="small-header transition animated fadeIn">
    <div class="hpanel">
        <div class="panel-body">
            <h2 class="font-light m-b-xs">
                <?php echo $row['titulli'];?>
            </h2>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-lg-12">

            <div class="hpanel">
				<div class="panel-body">
					<form action="update_blog.php" method="post" enctype="multipart/form-data" class="form-horizontal">

								 <div class="form-group">
								   <label class="col-sm-2 control-label">Imazhi i Blogut</label>
                                  <div class="col-sm-10">
					<input type="file" name="image" class="form-control" value="<?php echo $row['location'];?>">
					</div>
                </div>
				                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                        <a href="blog.php" class="btn btn-default">Cancel</a>
                        <button name="update2" class="btn btn-primary" type="submit">Update</button>
                    </div>
                </div>
				
				</form>
				<form method="post" class="form-horizontal">
				                                  <div class="form-group">
								   <label class="col-sm-2 control-label">Titulli I Blogut</label>
                                  <div class="col-sm-10">
					<input type="text" name="titulli" class="form-control" value="<?php echo $row['titulli'];?>">
					</div>
                </div>
                                  <div class="form-group">
								   <label class="col-sm-2 control-label">Pershkrimi i Blogut</label>
                                  <div class="col-sm-10">
					<input type="textarea" name="pershkrimi" class="form-control" value="<?php echo $row['pershkrimi'];?>">
					</div>
                </div>
				
					<div class="form-group">
								   <label class="col-sm-2 control-label">Autori i Blogut</label>
                                  <div class="col-sm-10">
					<input type="text" name="autor" class="form-control" value="<?php echo $row['autor'];?>">
					
					</div>
                </div>
				
				<div class="form-group">
								   <label class="col-sm-2 control-label">Data e Postimit</label>
                                  <div class="col-sm-10">
					<input type="date" name="data" class="form-control" value="<?php echo $row['data'];?>">
					
					</div>
                </div>
								<div class="form-group">
								   <label class="col-sm-2 control-label">Linku</label>
                                  <div class="col-sm-10">
					<input type="text" name="link" class="form-control" value="<?php echo $row['link'];?>">
					
					</div>
                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <input type="submit" name="update" class="btn btn-primary" value="Update">
									

                                </div></div>
								<?php if (isset($_POST['update'])){        
$titulli=$_POST['titulli'];									  
									  $pershkrimi=$_POST['pershkrimi'];
									  $autor=$_POST['autor'];
									  $data=$_POST['data'];
									  $link=$_POST['link'];
			
			 mysql_query("update blog set titulli='$titulli',pershkrimi='$pershkrimi',autor='$autor',data='$data',link='$link' where blog_id='$id'") or die (mysql_error());              								
	 ?>
	 <script>
	 window.location='blog.php';
	 </script>
	 <?php
									}
	 ?>
			 
								</form>
					
                </div>
            </div>
        </div>
		 </div>

    <!-- Footer-->
<?php include ('footer.php');?>

</div>

<!-- Vendor scripts -->
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="vendor/iCheck/icheck.min.js"></script>
<script src="vendor/sparkline/index.js"></script>

<!-- App scripts -->
<script src="scripts/homer.js"></script>

</body>
</html>