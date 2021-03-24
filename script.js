$(document).ready(function() 
{
$.getJSON(("https://api.openweathermap.org/data/2.5/weather?id=2641673&appid=6990be4ff6ad19d0f8834279cf920567"), function(result) { //gets OpenWeatherMap API JSON
        var weatherJSON = result.weather[0];
        var coordJSON = result.coord;
        var nameJSON = result.name;
        $('#weatherDesc').text(weatherJSON.main);
        $('#clouds').text(weatherJSON.description);
        $('#city').text(nameJSON);
        $('#latitude').text(coordJSON.lat);
        $('#longitude').text(coordJSON.lon);
    })
    
    $('#getDistance').click(function() 
        { //Click html with id 'getDistance'
            var currentLocation = $('#currentLocation').val();
            var service = new google.maps.DistanceMatrixService();
                if ($('#currentLocation').val().length == 0) 
                    {
                        alert("Please enter a current location");
                    } 
                else 
                    {
                        console.log(currentLocation);
                    }
        service.getDistanceMatrix({
            origins: [$("#currentLocation").val()],
            destinations: [$("#destination").val()],
            unitSystem: google.maps.UnitSystem.IMPERIAL,
            travelMode: google.maps.TravelMode.DRIVING
            //when the service responds run the callback function
        }, callback);

        function callback(response, status) 
            {
                if (status == google.maps.DistanceMatrixStatus.OK) 
                    { //if status = ok then proceed
                    //get the origin and destination information from the service.
                        var origins = response.originAddresses;
                        var destinations = response.destinationAddresses;
                        $.each(origins, function(originIndex) 
                            {
                                var results = response.rows[originIndex].elements;
                                $.each(results, function(resultIndex) 
                                    {
                                        var element = results[resultIndex];
                                        var distance = element.distance.text;
                                        var duration = element.duration.text;
                                        var from = origins[originIndex];
                                        var to = destinations[resultIndex];
                                        $("#distance-info").html("<div class='distanceMatrix'><h1>Gym Finder</h1></div><div class='distanceMatrix'><h2>Distance Information</h2></div><div class='distanceMatrix'>[Distance:" + distance + ".] [Duration (Car) :" + duration + ".]</div> <div class='distanceMatrix'>[From:" + from + ".] [To: " + to + ".]</div>");
                                    });
                            });
                    }

            }
        });
});





function initMap() 
    {
        var newcastle = new google.maps.LatLng(54.977775, -1.604488);
        map = new google.maps.Map(document.getElementById('map'), 
                                {
                                    center: newcastle,
                                    zoom: 8
                                });
        var currentLocationSearch = document.getElementById('currentLocation');
        var destinationSearch = document.getElementById('destination');
        var autocomplete = new google.maps.places.Autocomplete(currentLocationSearch);
        var autocomplete = new google.maps.places.Autocomplete(destinationSearch);
        var centreMarker = new google.maps.Marker(
            {
                position: newcastle,
                map: map,
                animation: google.maps.Animation.DROP,
                draggable: true,
                icon: 
                    {
                        url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                    }
            });
    centreMarker.addListener('click', function() 
                             {
                                var lat = centreMarker.getPosition().lat(); //variable lat
                                var lon = centreMarker.getPosition().lng(); //variable lon
                                console.log("Marker has been clicked. Current LatLng is: " + lat, lon);
                                $.getJSON("https://api.openweathermap.org/data/2.5/weather?" + "lat=" + lat + "&lon=" + lon + "&appid=6990be4ff6ad19d0f8834279cf920567", function(result) 
                                            { //Retrieve JSON File, pass lat and lon variable into JSON
                                                var weatherJSON = result.weather[0];
                                                var coordJSON = result.coord;
                                                var nameJSON = result.na
                                                $('#weatherDescMarker').text(weatherJSON.main);
                                                $('#cloudsMarker').text(weatherJSON.description);
                                                $('#cityMarker').text(nameJSON);
                                                $('#latitudeMarker').text(coordJSON.lat);
                                                $('#longitudeMarker').text(coordJSON.lon);
                                            })
                                $("#destination").val(lat + " " + lon); //pass parameter into  html with id 'destination'*/
                            });
        var service = new google.maps.places.PlacesService(map);
        var infowindow = new google.maps.InfoWindow();
        var searchBox = new google.maps.places.SearchBox(document.getElementById('locationSearch'));
        google.maps.event.addListener(searchBox, 'places_changed', function()
                                        {
                                            var places = searchBox.getPlaces();
                                            var bounds = new google.maps.LatLngBounds();
                                            var i, place;
                                            for(i=0; place=places[i];i++)
                                                {
                                                    console.log(place.geometry.location);
                                                    bounds.extend(place.geometry.location);
                                                    centreMarker.setPosition(place.geometry.location);
                                                }
                                            var lat = centreMarker.getPosition().lat(); //variable lat
                                            var lon = centreMarker.getPosition().lng();
                                            var request = 
                                                {
                                                    location: 
                                                        {
                                                            lat: lat,
                                                            lng: lon
                                                        },
                                                    radius: 5000,
                                                    types: ['gym']
                                                };
    
    function callback(results, status) {
  if (status == google.maps.places.PlacesServiceStatus.OK) {
    console.log(results)
    for (var i = 0; i < results.length; i++) {
      createMarker(results[i]);
    }
  }
}
    
    
    
    function createMarker(place) {
  var placeLoc = place.geometry.location;
  var marker = new google.maps.Marker({
    map: map,
    animation: google.maps.Animation.DROP,  
    position: place.geometry.location
  });
  marker.addListener('click', function() {




        var lat = marker.getPosition().lat(); //variable lat
        var lon = marker.getPosition().lng(); //variable lon
        console.log("Marker has been clicked. Current LatLng is: " + lat, lon);
        $.getJSON("https://api.openweathermap.org/data/2.5/weather?" + "lat=" + lat + "&lon=" + lon + "&appid=6990be4ff6ad19d0f8834279cf920567", function(result) { //Retrieve JSON File, pass lat and lon variable into JSON
            var weatherJSON = result.weather[0];
            var coordJSON = result.coord;
            var nameJSON = result.name;


            $('#weatherDescMarker').text(weatherJSON.main);
            $('#cloudsMarker').text(weatherJSON.description);
            $('#cityMarker').text(nameJSON);
            $('#latitudeMarker').text(coordJSON.lat);
            $('#longitudeMarker').text(coordJSON.lon);
        })

        $("#destination").val(lat + " " + lon); //pass parameter into  html with id 'destination'*/
      
  });
      
      
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.setContent("<h1 style='color:#2b2d2f'>" + place.name + "</h1>" + "<br><h2 style='color:#2b2d2f'>Type of Establishment: </h2>" 
                          + "<p style='color:#167cb9'>" + place.types + "</p>" + "<br><h2 style='color:#2b2d2f'>Location: </h2>" + "<p style='color:#167cb9'>" + place.vicinity + "</p>");
    infowindow.open(map, this);
  });
}
        
        
        service.nearbySearch(request, callback);
        map.fitBounds(bounds);
        map.setZoom(13);
    });



}




