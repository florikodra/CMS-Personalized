
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>DuarArtat | Ndrysho Passwordin</title>

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
<body class="blank">

<!-- Simple splash screen-->
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>DuarArtat - Change Password</h1><p>Loading... Please Wait!</p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="color-line"></div>
<div class="back-link">
    <a href="dashboard.php" class="btn btn-primary">Back to Dashboard</a>
</div>
<?php include ('dbcon.php');
include ('session.php');?>
<div class="register-container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center m-b-md">
                <h3>Llogaria Ime</h3>
                <small>Ketu mund te ndryshohet passwordi </small>
            </div>
            <div class="hpanel">
                <div class="panel-body">
				<?php $query=mysql_query("select * from users where user_id='$session_id'")or die (mysql_error());
				$row=mysql_fetch_array($query);?>
                        <form method="post" id="loginForm">
                            <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Username</label>
                                <input type="text"  class="form-control" name="username" value="<?php echo $row['username'];?>">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Repeat Password</label>
                                <input type="password" class="form-control"  name="pass1">
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-success">Update</button>
                            </div>
							 <?php
						if (isset($_POST['submit'])){
						$username=$_POST['username'];
						$np = $_POST['password'];
						$rp = $_POST['pass1'];			
						if($np!=$rp){
						?>
						<div class="alert alert-danger">Password Dont Match</div>
						<?php
						}else{
						mysql_query("update users set username='$username',password = '$np' where user_id = '$session_id' ")or die(mysql_error); ?>
						<div class="alert alert-success">Password Change</div>
						<?php } } ?>
                        </form>
                </div>
            </div>
        </div>
    </div>
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