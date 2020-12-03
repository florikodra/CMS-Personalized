<?php include ('dbcon.php');
$id=$_GET['id'];
 mysql_query("delete from porosi where porosi_id='$id'")or die (mysql_error());
?>
 <script>
	 window.location='dashboard.php';
 </script>
 
 