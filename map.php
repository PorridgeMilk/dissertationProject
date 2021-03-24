<?php
/*
 * map PHP.
 * Author: Richie Liu, w17020293.
 */
require_once"functions.php";
ini_set("session.save_path", "/home/unn_w17020293/sessionData");
session_start();
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Maps</title>
            <link rel="stylesheet" type="text/css" href="stylesheetMap.css">
            <link rel="stylesheet" type="text/css" href="stylesheet.css">
        </head>
        <body>
<?php
    echo makeLogoAndNavBar();
    echo makeHeader();
    echo validateLogin(); //functions startMain, endMain, and makeHeader breaks map api.
?>
    <div id="distance-info">
        <div class='distanceMatrix'>
            <h1>Gym Finder</h1>
        </div>
    </div>
    <div class="box">
        <div class="weatherBox">
            <div class="Weather">
                <h2 class="mapHeader">Newcastle Upon Tyne Weather Information</h2><br>
                    <p>Description: <span id="weatherDesc"></span></p>
                    <p>Cloud Description: <span id="clouds"></span></p>
                    <p>Location: <span id="city"></span></p>
                    <p>Latitude: <span id="latitude"></span></p>
                    <p>Longitude: <span id="longitude"></span></p>
                    <br>
                    <hr>
                    <br>
                    <h2 class="mapHeader">Marker Weather Information</h2>
                    <p>Click on a map marker to view weather information.</p><br>
                    <p>Description: <span id="weatherDescMarker"></span></p>
                    <p>Cloud Description: <span id="cloudsMarker"></span></p>
                    <p>Location: <span id="cityMarker"></span></p>
                    <p>Latitude: <span id="latitudeMarker"></span></p>
                    <p>Longitude: <span id="longitudeMarker"></span></p>
            </div>
        </div>   
    </div>
    <div id="map">
    </div>
    <div class="locationBox">   
        <div class="locationForm">
            <h2 class="mapHeader">Distance Calculator</h2>
            <form id="currentLocationForm">
                <label>Current Location</label>
                <input type="text" placeholder="Current Location (Postcode, Street)" id="currentLocation">
                <label>Destination (Postcode, coordinates, Street, country, marker click)</label>
                <input type="text" placeholder="Destination" id="destination">
                <input class="submit" type="button" value="Get Distance" id="getDistance">
            </form>
            <h2 class="mapHeader">Search Gyms By Location Radius (5KM)</h2>
            <form id="currentLocationForm">
                <input type="text" placeholder="Search" id="locationSearch">
            </form>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="script.js" type="text/javascript"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCMOpcxXu2ABpdr_ntFhxkV5kH7ZZbqLBA&callback=initMap&libraries=places" async defer></script>
<?php 
    echo makePageEnd();
    echo makeFooter();
?>