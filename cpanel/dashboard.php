
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>DuarArtat | Dashboard</title>

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

<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header -->
<?php include ('header.php');
include ('aside.php');
?>
<!-- Main Wrapper -->
<div id="wrapper">

<div class="content animate-panel">
        <div class="row">
            <div class="col-md-3">
                <div class="hpanel">
                    <div class="panel-body">
                        <div class="stats-title pull-left">
                            <h4>Postime Blog Total</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="pe-7s-display1 fa-4x"></i>
                        </div>
                        <div class="m-t-xl">
						<?php $blog=mysql_query("select * from blog")or die (mysql_error());
						$cnstu=mysql_num_rows($blog);?>
                            <h1 class="text-success"><?php echo $cnstu;?></h1>
                            <small>
                                Numri Total I Postimeve Ne Blog
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hpanel">
                    <div class="panel-body">
                        <div class="stats-title pull-left">
                            <h4>Produkte Total</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="pe-7s-box1 fa-4x"></i>
                        </div>
                        <div class="m-t-xl">
						<?php $prdk=mysql_query("select * from produkt")or die (mysql_error());
						$cnpr=mysql_num_rows($prdk);?>
                            <h1 class="text-info"><?php echo $cnpr;?></h1>
                            <small>
                                Numri Total I Produkteve Ne Faqen Tone
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hpanel">
                    <div class="panel-body">
                        <div class="stats-title pull-left">
                            <h4>Kontakte Total</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="pe-7s-phone fa-4x"></i>
                        </div>
                        <div class="m-t-xl">
						<?php $run=mysql_query("select * from kontakt")or die (mysql_error());
						$cnt=mysql_num_rows($run);?>
                            <h1 class="text-warning"><?php echo $cnt;?></h1>
                            <small>
                                Numri total i Kontakteve
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hpanel">
                    <div class="panel-body">
                        <div class="stats-title pull-left">
                            <h4>Porosi Total</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="pe-7s-cash fa-4x"></i>
                        </div>
                        <div class="m-t-xl">
						<?php $prs=mysql_query("select * from porosi")or die (mysql_error());
						$cnprs=mysql_num_rows($prs);?>
                            <h1 class="text-danger"><?php echo $cnprs;?></h1>
                            <small>
                                Numri total i Porosive 
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="row">
    <div class="col-lg-12">
        <div class="hpanel">
            <div class="panel-heading">
Porosite            </div>
            <div class="panel-body">
                <div class="table-responsive">
                <table cellpadding="1" cellspacing="1" class="table">
                    <thead>
                    <tr>
					<th>Data</th>
                    <th>Emri Mbiemri</th>
                    <th>Numri</th>
                    <th>Adresa</th>
					<th>Sasia</th>
					<th>Produkti</th>
					<th>Veprime</th>
                    </tr>
                    </thead>
                    <tbody>
                   <?php $porosi=mysql_query("select * from porosi where month(data)=month(now()) order by data asc")or die (mysql_error());
					$nr=mysql_num_rows($porosi);
					while ($rw=mysql_fetch_array($porosi)){ ?>
                    <tr>
					<td><?php echo $rw['data'];?></td>
                    <td><?php echo $rw['kl_emr'];?></td>
                    <td><?php echo $rw['kl_nr'];?></td>
                    <td><?php echo $rw['kl_adr'];?></td>
					<td><?php echo $rw['kl_sasi'];?></td>	
					<td><a href="../view.php?id=<?php echo $rw['produkt_id'];?>">Shiko Produktin</a></td>
                          <td><a href="#" class="btn btn-danger2 btn-xs" data-toggle="modal" data-target="#delete_porosi<?php echo $rw['porosi_id'];?>" ><i class="fa fa-trash"></i></a></td>
				 <div class="modal fade hmodal-danger" id="delete_porosi<?php echo $rw['porosi_id'];?>" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="color-line"></div>
                            <div class="modal-header">
                                <h4 class="modal-title" style="text-align : center">Mesazh</h4>
                            </div>
                            <div class="modal-body">
                                <p>Deshironi te fshini kete porosi nga database?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Jo</button>
                                <a href="delete_porosi.php?id=<?php echo $rw['porosi_id'];?>" type="button" class="btn btn-primary">Po</a>
								
								
                            </div>
                        </div>
                    </div>
                </div>
                    </tr>
					<?php } ?>
                    </tbody>
                </table>
</div>

            </div>
            <div class="panel-footer">
               Numri i rekordeve - <?php echo $nr;?>
            </div>
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
<script src="vendor/jquery-flot/jquery.flot.js"></script>
<script src="vendor/jquery-flot/jquery.flot.resize.js"></script>
<script src="vendor/jquery-flot/jquery.flot.pie.js"></script>
<script src="vendor/flot.curvedlines/curvedLines.js"></script>
<script src="vendor/jquery.flot.spline/index.js"></script>
<script src="vendor/iCheck/icheck.min.js"></script>
<script src="vendor/sparkline/index.js"></script>

<!-- App scripts -->
<script src="scripts/homer.js"></script>

</body>
</html>