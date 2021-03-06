var myCenter=new google.maps.LatLng(23.7607647,90.4351604,19.54);

 function initialize()
 {
 var mapProp = {
 center:myCenter,
 scrollwheel: false,
 zoom:15,
 zoomControl:false,
 mapTypeControl:false,
 streetViewControl:false,
 mapTypeId:google.maps.MapTypeId.ROADMAP,
 styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{ "color": "#ffffff" }, {"visibility": "on"} ]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{ "color": "#ffffff" },{"visibility":"off"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{ "color": "#ffffff" }]},{"featureType":"water","elementType":"geometry","stylers":[{ "color": "#e6e6e6" }, {"visibility": "on"} ]}]
   };

 var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

 }

 google.maps.event.addDomListener(window, 'load', initialize);
