
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>Duarartat | Porosite</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="vendor/datatables.net-bs/css/dataTables.bootstrap.min.css" />

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
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>DuarArtat - Porosite</h1><p>Loading... Please Wait!</p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>

<!-- Header -->
<?php include ('header.php');
include ('aside.php');?>
<?php include ('dbcon.php');?>

<!-- Main Wrapper -->
<div id="wrapper">

<div class="content animate-panel">



    <div class="row">
        <div class="col-lg-12">

            <div class="hpanel">
                <div class="panel-heading">
                    <div class="panel-tools">
                    </div>
                    Lista e Porosive
                </div>
                <div class="panel-body">
                <table id="example2" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
					<th>Veprime</th>
                    <th>Emri Mbiemri</th>
                    <th>Numri</th>
                    <th>Adresa</th>
					<th>Sasia</th>
					<th>Data</th>
					<th>Produkti</th>
					
                </tr>
                </thead>
                <tbody>
				<?php $query=mysql_query("select * from porosi")or die (mysql_error());
				while($row=mysql_fetch_array($query)){ ?>
                <tr>
				
                          <td><a href="#" class="btn btn-danger2 btn-xs" data-toggle="modal" data-target="#delete_porosi<?php echo $row['porosi_id'];?>" ><i class="fa fa-trash"></i></a></td>
				 <div class="modal fade hmodal-danger" id="delete_porosi<?php echo $row['porosi_id'];?>" tabindex="-1" role="dialog"  aria-hidden="true">
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
                                <a href="delete_porosi2.php?id=<?php echo $row['porosi_id'];?>" type="button" class="btn btn-primary">Po</a>
								
								
                            </div>
                        </div>
                    </div>
                </div>
                    <td><?php echo $row['kl_emr'];?></td>
                    <td><?php echo $row['kl_nr'];?></td>
                    <td><?php echo $row['kl_adr'];?></td>
					<td><?php echo $row['kl_sasi'];?></td>
					<td><?php echo $row['data'];?></td>
					<td><a href="../view.php?id=<?php echo $row['produkt_id'];?>">Shiko Produktin</a></td>




                </tr>
				<?php } ?>
                </tbody>
                </table>

                </div>
            </div>
        </div>

    </div>
    </div>

    <!-- Right sidebar -->


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
<!-- DataTables -->
<script src="vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="vendor/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- DataTables buttons scripts -->
<script src="vendor/pdfmake/build/pdfmake.min.js"></script>
<script src="vendor/pdfmake/build/vfs_fonts.js"></script>
<script src="vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="vendor/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<!-- App scripts -->
<script src="scripts/homer.js"></script>


<script>

    $(function () {

        // Initialize Example 1
        $('#example1').dataTable( {
            "ajax": 'api/datatables.json',
            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
            "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
            buttons: [
                {extend: 'copy',className: 'btn-sm'},
                {extend: 'csv',title: 'ExampleFile', className: 'btn-sm'},
                {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                {extend: 'print',className: 'btn-sm'}
            ]
        });

        // Initialize Example 2
        $('#example2').dataTable();

    });

</script>

</body>
</html>