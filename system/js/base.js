function LoadGmaps(x,y,dx,dy) {
	var directionsService = new google.maps.DirectionsService();
	var directionsDisplay = new google.maps.DirectionsRenderer();
	var myLatlng = new google.maps.LatLng(x,y);
	var myOptions = {
		zoom: 16,
		center: myLatlng,
		disableDefaultUI: true,
		panControl: true,
		zoomControl: true,
		zoomControlOptions: {
			style: google.maps.ZoomControlStyle.DEFAULT
		},

		mapTypeControl: true,
		mapTypeControlOptions: {
			style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
		},
		streetViewControl: false,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	$("#map").css({
		height:$("#map").width()*0.75
	})
	var map = new google.maps.Map(document.getElementById("map"), myOptions);
	directionsDisplay.setMap(map);
	

	var request = {
		origin: x+","+y, 
		destination: dx+","+dy,
		travelMode: google.maps.DirectionsTravelMode.WALKING
	};
	directionsService.route(request, function(response, status) {
		if (status == google.maps.DirectionsStatus.OK) {

         // Display the distance:
         document.getElementById('distance').innerHTML += 
         response.routes[0].legs[0].distance.value + " meters";

         // Display the duration:
         document.getElementById('duration').innerHTML += 
         response.routes[0].legs[0].duration.value + " seconds";

         directionsDisplay.setDirections(response);
     }
 });
}
function getGPS(){
	navigator.geolocation.getCurrentPosition(showPosition);
}
function showPosition(position){
	x=position.coords.latitude;
	y=position.coords.longitude;
	dx=27.710453;
	dy=85.348687;
	LoadGmaps(x,y,dx,dy);
  //var gps = 'GPS ('+x+','+y+')';   
  //console.log(gps);
  //LoadGmaps(x,y)
}
$(function(){
	$("#workspace").click(function(){
		$("#sidebar").removeClass("sb_show");
	})
	/*$("#routes").click(function(){
		$("#map-main").addClass("mapfs");
		$(".mapclose").show();
		v=$(".map").height;
		h=$(window).height;
		$("#map-main").css("height",h);
		$("#workspace").css("z-index","500")
	})
	$(".mapclose").click(function(){
		$("#map-main").removeClass("mapfs");
		$(".mapclose").hide();
		$("#map-main").css("height","100%");
		$("#workspace").css("z-index","100")
	})*/
})