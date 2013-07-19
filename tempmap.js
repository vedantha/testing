function initialize() {
  var map = new google.maps.Map(document.getElementById('googleMap'), {
    zoom : 7,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  var defaultBounds = new google.maps.LatLngBounds(
      new google.maps.LatLng(-33.8902, 151.1759),
      new google.maps.LatLng(-33.8474, 151.2631));
  map.fitBounds(defaultBounds);

  var input = /** @type {HTMLInputElement} */(document.getElementById('target'));
  var searchBox = new google.maps.places.SearchBox(input);
  var markers = [];

  google.maps.event.addListener(searchBox, 'places_changed', function() {
    var places = searchBox.getPlaces();

    for (var i = 0, marker; marker = markers[i]; i++) {
      marker.setMap(null);
    }

    markers = [];
    var bounds = new google.maps.LatLngBounds();
    for (var i = 0, place; place = places[i]; i++) {
      var image = {
        url: place.icon,
        size: new google.maps.Size(5, 5),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(5, 5)
      };

      var marker = new google.maps.Marker({
       zoom:5,
        map: map,
        icon: image,
        title: place.name,
        position: place.geometry.location
      });

      markers.push(marker);

      bounds.extend(place.geometry.location);
    }

    map.fitBounds(bounds);
  });

  google.maps.event.addListener(map, 'bounds_changed', function() {
    var bounds = map.getBounds();
    searchBox.setBounds(bounds);
    map.setZoom(10);
  });
  google.maps.event.addListener(map, 'click', function(event) {
    new google.maps.InfoWindow({
      position : event.latLng,
      //content: event.latLng.toString()
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