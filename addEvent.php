<?php
	$mydb = mysql_connect("sql.mit.edu", "alanma", "daBrav3s") or die(mysql_error());
	mysql_select_db("alanma+dates") or die(mysql_error());
	
	$person=$_POST['txtPerson'];
	$occasion=$_POST['txtOccasion'];
	$date=$_POST['txtDate'];
	$sql="INSERT INTO Dates VALUES (NULL,'$person','$occasion','$date')";
	#echo $sql;
	$results=mysql_query($sql) or die(mysql_error());
	header("Location: index.php");
?>