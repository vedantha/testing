 function initialize(){

 	var mapProp = {center:new google.maps.LatLng(12.8533,b=77.6733), zoom:10,mapTypeId : google.maps.MapTypeId.ROADMAP,disableDefaultUI : true,noClear:true};
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

    var a=12.8533,b=77.5733;
 	//var a=[12.8533,12.8633,12.8733];
 	//var b=[77.6733,77.5733,77.7733];

 		for(var i=0;i<10;i++){
	    var myCenter = new google.maps.LatLng(  (a+(i/50.0)),  (b+(i/50.0))  );
	  	var marker = new google.maps.Marker({
        position : myCenter,
        animation : google.maps.Animation.DROP,
        map : map
      });
  }
      
	  
    }
google.maps.event.addDomListener(window,'load',initialize);