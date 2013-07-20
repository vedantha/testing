<script type="text/javascript">
<?php include('./map.js') ?>

google.maps.event.addListener(map, 'click', function(event) {
	
    /*infoWindow[i] = new google.maps.InfoWindow({
      position : event.latLng,
      //content: event.latLng.toString()
     //content:"<input type=\"text\" placeholder='Short Description' id=txtbox><button id=\"iw\">Add</button>"
    });infoWindow.open(map); 
    google.maps.event.addListener(infoWindow, 'domready', function() {
      // whatever you want to do once the DOM is ready
      $('#iw').click(function(){
      	$('ul').append($(txtboxid).val());
    
		}); 
      });*/
		
      var position1= event.latLng;
      var content= event.latLng.toString() ;
      var marker2 = new google.maps.Marker({
        position : position1,
        map:map
      });
      $('ul').append("<li>"+content+"<input type='text' placeholder='Enter Note'></li><br>");
      });
}
		
google.maps.event.addDomListener(window, 'load', initialize);



</script>