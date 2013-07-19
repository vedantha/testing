<?php 
	require_once('./includes/dbconn.php');
	$projectname = $_POST['projectname'];
	$description = $_POST['description'];

	$sql = "INSERT INTO `projects` (`projectname`, `description`, `latlng`) VALUES ('$projectname', '$description', 'x,y')";
	if($result= mysql_query($sql)){
		echo "Success";
	}
	else{
		echo "dayumn nigga";
	}
?>