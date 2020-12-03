<?php include ('dbcon.php');
$id=$_GET['id'];
 mysql_query("delete from produkt where produkt_id='$id'")or die (mysql_error());
?>
 <script>
	 window.location='produkte.php';
 </script>
 
 