<?php include ('dbcon.php');
$id=$_GET['id'];
 mysql_query("delete from home where home_id='$id'")or die (mysql_error());
?>
 <script>
	 window.location='home.php';
 </script>
 
 