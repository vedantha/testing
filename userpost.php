<?php 
	require_once('./includes/dbconn.php');
	$projectname = $_POST['projectname'];
	$description = $_POST['description'];
	$latlng = $_POST['latlng'];

	$sql = "INSERT INTO `projects` (`projectname`, `description`, `latlng`) VALUES ('$projectname', '$description', '$latlng')";
	if($result= mysql_query($sql)){
		//echo "Success";
		header("location:loggedin.php");
	}
	else{
		echo "Erm, that didn't quite work out did it?";
	}
?>