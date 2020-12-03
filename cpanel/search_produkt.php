<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>Duarartat | Kerko Produkt</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="vendor/select2-3.5.2/select2.css" />
    <link rel="stylesheet" href="vendor/select2-bootstrap/select2-bootstrap.css" />
    <link rel="stylesheet" href="vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" />
    <link rel="stylesheet" href="vendor/bootstrap-datepicker-master/dist/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="vendor/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" />

    <!-- App styles -->
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="styles/style.css">



</head>
<body class="fixed-navbar fixed-sidebar">
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>DuarArtat - Kerko Produkte</h1><p>Loading... Please Wait!</p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header -->
<?php include ('header.php');
include ('aside.php');?>
<?php include ('dbcon.php');?>
<div id="wrapper">

<div class="normalheader transition animated fadeIn">
    <div class="hpanel">
        <div class="panel-body">
            <a class="small-header-action" href="">
                <div class="clip-header">
                    <i class="fa fa-arrow-up"></i>
                </div>
            </a>
            <h2 class="font-light m-b-xs">
                Kerko Produkt
            </h2>
        </div>
    </div>
</div>

<div class="content animate-panel">

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hpanel">
					<form method="post">
                        <div class="panel-body">
                            <div class="input-group">
                                <input class="form-control" type="text" name="produkt" placeholder="Shkruaj emrin e produktit..." >
                                <div class="input-group-btn">
                                    <button class="btn btn-default" name="search" type="submit"><i class="fa fa-search"></i></button>
							
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			</form>
            <div class="row">

                <div class="col-lg-12">
           <?php  if (isset ($_POST['search'])){
					$search=mysql_query("SELECT * FROM produkt WHERE emer LIKE '%".$_POST["produkt"]."%'")or die (mysql_error());
					while ($insta=mysql_fetch_array($search)){ ?>
                    <div class="hpanel filter-item active">
                        <a >
                        <div class="panel-body">
                            <h4 class="m-b-xs">Emri i Produktit : <?php echo $insta['emer'];?><br> Vendodhje : <?php echo $insta['vendodhje'];?> <br> Cmimi : <?php echo $insta['cmim'];?></h4>
                            <p class="small">Kategoria: <?php echo $insta['kategori'];?> Prodhuesi: <?php echo $insta['prodhuesi'];?> Gjendja: <?php echo $insta['gjendja'];?></p>
                        </div>
                        </a>
                    </div>
			  <?php } } ?>



                </div>



            </div>


        </div>
    </div>


</div>
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
<script src="vendor/moment/moment.js"></script>
<script src="vendor/select2-3.5.2/select2.min.js"></script>
<script src="vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
<script src="vendor/bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>

<!-- App scripts -->
<script src="scripts/homer.js"></script>

<script>

    $(function(){

        $('.input-group.date').datepicker();

        $("#demo1").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10
        });

        $("#demo2").TouchSpin({
            verticalbuttons: true
        });

        $(".select2").select2();

    });

</script>


</body>
</html>