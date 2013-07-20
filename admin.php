<?php include('./includes/header.php');?>
<?php include('./map-admin.js.php');?>
</head>
<body>
	<div id="panel">
      <input id="target" type="text" placeholder="Search for a place here" size="50">
    </div>
	<div id="googleMap"></div>
	<div id="topbar">
	    <img src="./Capture.JPG">
	</div>

	<div id="leftbar">
		<p>Enter a brief project description below :</p><br>
		<form method="POST" action="projectpost.php">
		<label>Project Title</label><br>
		<input type="text" style="width:95%;border-radius:5px;" name="projectname"><br>
		<label>Description</label><br>
		<input type="text" style="height:200px;width:95%;border-radius:5px;" name="description">
		<label>Latitude Longitude</label><br>
		<input id="latlng" type="input" name="latlng"><br>
		<button>Add more coordinates</button><br>
		<input type="submit" value="Submit">
		</form>
	</div>
<?php include('./includes/footer.php');?>