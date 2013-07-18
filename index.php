<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Testing</title>
  <link rel="stylesheet" type="text/css" href="./reset.css">
  <link rel="stylesheet" type="text/css" href="./styles.css">
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script>
    function initialize(){
      var myCenter = new google.maps.LatLng(12.9833,77.5833);
      var mapProp = {center:myCenter, zoom:15,mapTypeId : google.maps.MapTypeId.ROADMAP,disableDefaultUI : true};
      var map=new google.maps.Map(document.getElementById("googleMap")
  ,mapProp);

      var marker = new google.maps.Marker({
        position : myCenter,
      })
      marker.setMap(map);
    }
google.maps.event.addDomListener(window,'load',initialize);
</script>
</head>
<body>

  <div id="googleMap"></div>
</body>
</html>