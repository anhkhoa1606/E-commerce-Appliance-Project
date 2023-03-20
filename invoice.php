<?php session_start() ?>
<!DOCTYPE php>
<php lang="en">
    <meta charset="UTF-8">
    <title>Smart Customer Services</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/invoice.css">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqxE1lTQ3YsUjGs9lJpkD1hp8Q_bsi-KA&callback=initMap&libraries=places&v=weekly" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <script type="text/javascript" src="./js/controller.js"></script>
    <script type="text/javascript" src="./js/drag.js"></script>

    <?php require_once('getUserAddress.php'); ?>

    </head>

    <body>
        <?php
        include('bar.php')
        ?>
        <div id="container">
            <h1>Invoice</h1>
            <div id="order"><button onclick="submitOrder('<?php echo $_GET['branch'] ?>', '<?php echo $_GET['shipment-time'] ?>'), window.location.href='./payment.php'" style="font-size: 20px">Place Your Order</button></div>

            
            <div class="cart">
                <div style="display: flex; position: absolute;">

                    <div class='flex-child'>
                        <table id="shopping-cart">

                        </table>
                    </div>

                    <div class="maps-container">
                        <div class="flex-child" id="map"></div>
                        <div id="result">Distance from branch to your location is <b id="distance"></b></div>
                    </div>
                </div>
            </div>
            <div id="results" style="background-color:red"></div>
            <div id="floating-panel">
                <b>Selected Branch: </b>
                <?php 
                    $start = $_GET['branch'];
                    echo $start;
                ?>
                


                <b>Destination: </b>
                <input id="end_loc" placeholder="Enter your Address..."/>
                <input id="destination" name="destination" required="" type="hidden"/>
     
            </div>   
            


            <script>
                $(function () {
                    var origin, destination, map;

                    google.maps.event.addDomListener(window, 'load', function(listener)
                    {
                        setDestination();
                        initMap();
                    });

                    function initMap() {
                        var myLatLng = {lat:43.6532, lng:-79.3832 };
                        map = new google.maps.Map(document.getElementById('map'), {zoom: 16, center: myLatLng});
                    
                    directionsRenderer.setMap(map);

                    const onChangeHandler = function () {
                    calculateAndDisplayRoute(directionsService, directionsRenderer);
                    };

                    document.getElementById("start_loc").addEventListener("change", onChangeHandler);
                    document.getElementById("end_loc").addEventListener("change", onChangeHandler);
                    }
                                    
                    function calculateAndDisplayRoute(directionsService, directionsRenderer) {
                    directionsService
                    .route({
                        origin: {
                        query: document.getElementById("start_loc").value,
                        },
                        destination: {
                        query: document.getElementById("end_loc").value,
                        },
                        travelMode: google.maps.TravelMode.DRIVING,
                    })
                    .then((response) => {
                        directionsRenderer.setDirections(response);
                    })
                    .catch((e) => window.alert("Directions request failed due to " + status));
                    }

                    window.initMap = initMap;
                    function setDestination() {
                        var start_loc = new google.maps.places.Autocomplete(document.getElementById('start_loc'));
                        var end_loc = new google.maps.places.Autocomplete(document.getElementById('end_loc'));

                        google.maps.event.addListener(start_loc, 'place_changed', function () {
                            var start_locs = start_loc.getPlace();
                            var start_address = start_locs.formatted_address;
                            $('#origin').val(start_address)
                        });

                        google.maps.event.addListener(end_loc, 'place_changed', function () {
                            var end_locs = end_loc.getPlace();
                            var end_address = end_locs.formatted_address;
                            $('#destination').val(end_address)
                        });
                    }

                    function displayRoute(travel_mode, origin, destination, directionsService, directionsDisplay) {
                        directionsService.route({
                        origin: start_loc,
                        destination: end_loc,
                        travelMode: DRIVING,
                        avoidTolls: true
                    }, function (response, status) {
                        if (status === 'OK') {
                        directionsDisplay.setMap(map);
                        directionsDisplay.setDirections(response);
                        } 
                        else {
                            directionsDisplay.setMap(null);
                            directionsDisplay.setDirections(null);
                            alert('Could not display directions due to: ' + status);
                        }
                    });
                }

                    // calculate distance , after finish send result to callback function
                    function calculateDistance(travel_mode, origin, destination) {
                        var DistanceMatrixService = new google.maps.DistanceMatrixService();
                        DistanceMatrixService.getDistanceMatrix(
                            {
                                origins: [origin],
                                destinations: [destination],
                                travelMode: google.maps.TravelMode.DRIVING,
                                unitSystem: google.maps.UnitSystem.metric,
                                avoidHighways: false,
                                avoidTolls: false
                            }, save_results);
                    }

                
                  
                    function save_results(response, status) {

                        if (status != google.maps.DistanceMatrixStatus.OK) {
                            $('#result').html(err);
                        } else {
                            var origin = response.originAddresses[0];
                            var destination = response.destinationAddresses[0];
                            if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                                $('#result').html("Sorry , not available to use this travel mode between " + origin + " and " + destination);
                            } else {
                                var distance = response.rows[0].elements[0].distance;
                                var duration = response.rows[0].elements[0].duration;
                                var distance_in_kilo = distance.value / 1000; // the kilo meter
                                var duration_text = duration.text;
                                appendResults(distance_in_kilo, distance_in_mile, duration_text);
                            }
                                }
                        }
                                        


                    function appendResults(distance_in_kilo, distance_in_mile, duration_text) {
                        console.log(distance_in_kilo);
                        $('#distance').html(distance_in_kilo + "km");
                    }

                });
                


           
        
                   
                    


        
            </script>
        
        </div>

        
    </html>
