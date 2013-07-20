<?php include('./includes/header.php');?>
<?php include('./map-user.js.php');?> 
</head>
<body>
	<script type="text/javascript">
		$(document).ready(function(){
		});
	</script>
	<div id="panel">
      <input id="target" type="text" placeholder="Search for a place here" size="50">
    </div>
	<div id="googleMap"></div>
	<div id="topbar">
	    <img src="./Capture.JPG">

	</div>

	<div id="leftbar">
		<form><ul>
			<p>Click on the map and add</p>
		</ul>
		<input type="submit" value="Submit">
		</form>
	</div>
<?php include('./includes/footer.php');?>