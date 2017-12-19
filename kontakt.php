<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Madskribent & Foodstylist med fokus på udvikling af Madopskrifter, ernæring og styling">
	<meta name="page-topic" content="Madskribent & Foodstylist">
<meta name="keywords" content="Madskribent, Foodstylist, Mad, Food, Kogebøger, sundhed, opskrifter, Gitte, Heidi, Gitte Heidi, Rasmussen, Gitte Rasmussen, Gitte Heidi Rasmussen, kager, slankekure, kogebogsforfatter, udvikling af opskrifter, udvikling af tips og ideer, inspiration til middagsbordet">
<meta name="author" content="Gitte Heidi Rasmussen ">

	<link rel="icon" href="img/green-logo-lille.png">
	<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">
	
	<!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	
<link rel="stylesheet" type="text/css" href="css/stylesheet2.css">
	<link rel="stylesheet" type="text/css" href="css/stylesheet_hf2.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">

	<style>
		.konknap{
			display: none;
		}
	</style>
</head>

<body>
	<?php
	require('header.php');?>
	
	<section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Kontakt</h2>
            
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto kontaktskrift">
              <h2 class="section-heading ">Gitte Heidi Rasmussen</h2>
            <p class="text-muted mb-0">Madskribent & Foodstylist <br>  
				CEO af Gh Garniture </p>
            
            </div>
          </div>
   
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-phone green mb-3 sr-icons"></i>
              
              <p class="text-muted mb-0">+45 21 74 67 05</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-envelope-o green mb-3 sr-icons"></i>
              
              <p class="text-muted mb-0"><a href="mailto:gh@ghgarniture.dk?Subject=Hej%20Gitte Heidi" target="_top">Gh@ghgarniture.dk</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
	
	
	
	
  
		
     
	<div id="map"></div>
    <script>
      function initMap() {
	var image = new google.maps.MarkerImage('img/green-logo-lille.png');
	var myLatLng = {lat: 55.794525, lng: 12.516367}
        // Create a new StyledMapType object, passing it an array of styles,
        // and the name to be displayed on the map type control.
        var styledMapType = new google.maps.StyledMapType(
            [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
],
            {name: 'Styled Map'});

        // Create a map object, and include the MapTypeId to add
        // to the map type control.
		  
		var map = new google.maps.Map(document.getElementById('map'), {	
		zoom: 10,
		center: myLatLng,
          mapTypeControlOptions: {
            mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                    'styled_map']
          }
        });
      var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
	 icon: image
    
  });
        
      

        //Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('styled_map', styledMapType);
        map.setMapTypeId('styled_map');
      }
		
    </script>
	
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASY486mYqF4FycvmZuEzAlqv5RTbKl47Q&callback=initMap">
    </script> 

	<?php
	require('Footer.php');?>
	
	<!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

</body>
</html>