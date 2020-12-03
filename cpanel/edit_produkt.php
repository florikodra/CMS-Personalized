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
$query=mysql_query("select * from produkt where produkt_id='$id'")or die (mysql_error());
$row=mysql_fetch_array($query);
?>

<!-- Main Wrapper -->
<div id="wrapper">
<div class="small-header transition animated fadeIn">
    <div class="hpanel">
        <div class="panel-body">
            <h2 class="font-light m-b-xs">
                <?php echo $row['emer'];?>
            </h2>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-lg-12">

            <div class="hpanel">
				<div class="panel-body">
					<form  method="post" enctype="multipart/form-data" class="form-horizontal">

								 <div class="form-group">
								   <label class="col-sm-2 control-label">Emrin e Produktit</label>
                                  <div class="col-sm-10">
					<input type="text" name="emer" class="form-control" value="<?php echo $row['emer'];?>">
					</div>
                </div>
                                  <div class="form-group">
								   <label class="col-sm-2 control-label">Vendodhjen e Produktit</label>
                                  <div class="col-sm-10">
					<input type="text" name="vendodhje" class="form-control" value="<?php echo $row['vendodhje'];?>">

					
					</div>
                </div>
				<div class="form-group">
								   <label class="col-sm-2 control-label">Kodi i Vendodhjes</label>
                                  <div class="col-sm-10">
					<input type="number" name="nr" class="form-control" value="<?php echo $row['nr'];?>">
					
					</div>
                </div>
				
					<div class="form-group">
								   <label class="col-sm-2 control-label">Pershkrimi i Produktit</label>
                                  <div class="col-sm-10">
					<textarea type="text" name="pershkrim" class="form-control" value="<?php echo $row['pershkrim'];?>"></textarea>
					
					</div>
                </div>
				
					<div class="form-group">
								   <label class="col-sm-2 control-label">Cmimi i Produktit</label>
                                  <div class="col-sm-10">
					<input type="text" name="cmim" class="form-control" value="<?php echo $row['cmim'];?>">
					
					</div>
                </div>
				
                <div class="form-group">
					<label class="col-sm-2 control-label">Kategoria e Produktit</label>
                             <div class="col-sm-10">
					<input type="text" name="kategori" class="form-control" value="<?php echo $row['kategori'];?>">

					
					</div>
                </div>
								<div class="form-group">
								   <label class="col-sm-2 control-label">Data e Publikimit</label>
                                  <div class="col-sm-10">
					<input type="date" name="data" class="form-control" value="<?php echo $row['data'];?>">
					
					</div>
                </div>

								<div class="form-group">
								   <label class="col-sm-2 control-label">Prodhuesi I Produktit</label>
                                  <div class="col-sm-10">
					<input type="text" name="prodhuesi" class="form-control" value="<?php echo $row['prodhuesi'];?>">
					
					</div>
                </div>
				
				<div class="form-group">
								   <label class="col-sm-2 control-label">Gjendja E Produktit</label>
                                  <div class="col-sm-10">
					<input type="text" name="gjendja" class="form-control" value="<?php echo $row['gjendja'];?>">
					
					</div>
                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <input type="submit" name="update" class="btn btn-primary" value="Update">
									

                                </div></div>
								<?php if (isset($_POST['update'])){        
									  $emer=$_POST['emer'];									  
									  $vendodhje=$_POST['vendodhje'];
									  $pershkrim=$_POST['pershkrim'];
									  $cmim=$_POST['cmim'];
									  $kategori=$_POST['kategori'];
									  $data=$_POST['data'];
									  $prodhuesi=$_POST['prodhuesi'];
									  $gjendja=$_POST['gjendja'];
									  
			
			 mysql_query("update produkt set emer='$emer',vendodhje='$vendodhje',pershkrim='$pershkrim',cmim='$cmim',kategori='$kategori',data='$data',prodhuesi='$prodhuesi',gjendja='$gjendja' where produkt_id='$id'") or die (mysql_error());              								
	 ?>
	 <script>
	 window.location='produkte.php';
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