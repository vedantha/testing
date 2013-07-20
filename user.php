<?php include('./includes/header.php');?>
<?php include('./map-user.js.php');?> 
</head>
<body>
	<script type="text/javascript">
		$(document).ready(function(){
			
			$('#submit').click(function(){
                                 
    var answers = [];
    $.each($('.field'), function() {
        answers.push($(this).val());
    });
     
    if(answers.length == 0) {
        answers = "none";
    }  
 
    alert(answers);
     
    return false;
                                 
    });
     

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
		<ul>
			<p>Click on the map and add</p>
		</ul>
		<input type="submit" value="Submit" id="submit">
		
	</div>
<?php include('./includes/footer.php');?>