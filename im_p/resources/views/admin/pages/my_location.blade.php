<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AngularJS Geolocation App</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{url('public/angular/css/main.css')}}">
	<link rel="stylesheet" type="text/css" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css">
   
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
    <script type="text/javascript" src="https://code.angularjs.org/1.2.28/angular-route.min.js"></script>
     <script type="text/javascript" src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-leaflet-directive/0.10.0/angular-leaflet-directive.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.js"></script>
</head>
	<body ng-app="geoApp">
		<div class="header">
			<div class="container-fluid">
				<h1 class="pull-left">AngularJS Geolocation App</h1>
				<a class="pull-right" href="#/about">About</a>
			</div>
		</div>
		<div ng-view></div>
		<script type="text/javascript" src="{{url('public/angular/js/app.js')}}"></script>
        <script type="text/javascript" src="{{url('public/angular/js/controllers/AboutController.js')}}"></script>
        <script type="text/javascript" src="{{url('public/angular/js/location.js')}}"></script>
        <script type="text/javascript" src="{{url('public/angular/js/controllers/MainController.js')}}"></script>
        <script type="text/javascript" src="{{url('public/angular/js/helper.js')}}"></script>
	</body>
</html>