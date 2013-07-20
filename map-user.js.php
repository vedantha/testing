<script type="text/javascript">
<?php include('./map.js') ?>
google.maps.event.addListener(map, 'click', function(event) {
    new google.maps.InfoWindow({
      position : event.latLng,
      //content: event.latLng.toString(),
      content:"<input type=\"text\"><button id=\"iw\">Add</button>"
    }).open(map);
      var position1= event.latLng;
      var content= event.latLng.toString() ;
      var marker2 = new google.maps.Marker({
        position : position1,
        map:map
      });
      $('#latlng').val(content)
      });
}

google.maps.event.addDomListener(window, 'load', initialize);


</script>