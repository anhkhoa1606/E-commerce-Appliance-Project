<?php session_start() ?>
<!DOCTYPE php>
<php lang="en">
    <meta charset="UTF-8">
    <title>Smart Customer Services</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/invoice.css">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script defer src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key=AIzaSyAqxE1lTQ3YsUjGs9lJpkD1hp8Q_bsi-KA" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/controller.js"></script>
    <script type="text/javascript" src="./js/drag.js"></script>


    <?php require_once('getUserAddress.php'); ?>

    </head>

    <body>
        <?php
        include('bar.php')
        ?>
        <div id="container">
            <h1 class="mb-3">Invoice</h1>
            <div id="order"><button class="btn btn-primary" onclick="submitOrder('<?php echo $_GET['branch'] ?>', '<?php echo $_GET['shipment-time'] ?>'), window.location.href='./payment.php'" style="font-size: 20px">Place Your Order</button></div>


            <div class="cart">
                <div style="display: flex; position: absolute;">

                    <div class='flex-child'>
                        <table class="table table-bordered table-hover" id="shopping-cart">

                        </table>
                    </div>

                    <div class="maps-container">
                        <div class="flex-child" id="map"></div>
                        <div id="result">Distance from branch to your location is <b id="distance"></b></div>
                    </div>
                </div>





            </div>
            <div id="results" style="background-color:red"></div>




            <script>
                $(function() {

                    var origin, destination, map;


                    // add input listeners
                    google.maps.event.addDomListener(window, 'load', function(listener) {
                        // setDestination();
                        initMap();
                    });

                    // init or load map
                    function initMap() {

                        var myLatLng = {
                            lat: 43.6532,
                            lng: -79.3832
                        };
                        map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 16,
                            center: myLatLng
                        });
                    }

                    function displayRoute(origin, destination, directionsService, directionsDisplay) {

                        directionsService.route({

                            origin: "<?php echo $_GET['branch'] ?>",
                            destination: "<?php echo func1($_SESSION['user_id']) ?>",
                            travelMode: "DRIVING",
                            avoidTolls: true
                        }, function(response, status) {
                            if (status === 'OK') {
                                directionsDisplay.setMap(map);
                                directionsDisplay.setDirections(response);
                            } else {
                                directionsDisplay.setMap(null);
                                directionsDisplay.setDirections(null);
                                alert('Could not display directions due to: ' + status);
                            }
                        });
                    }


                    window.onload = (function(e) {




                        e.preventDefault();
                        var origin = "<?php echo $_GET['branch'] ?>";
                        var destination = "<?php echo func1($_SESSION['user_id']) ?>";
                        console.log("<?php echo func1($_SESSION['user_id']) ?>");
                        var directionsDisplay = new google.maps.DirectionsRenderer({
                            'draggable': true
                        });
                        var directionsService = new google.maps.DirectionsService();
                        displayRoute(origin, destination, directionsService, directionsDisplay);
                        calculateDistance(origin, destination);
                        populateTable()
                    });




                    function calculateDistance(origin, destination) {
                        var DistanceMatrixService = new google.maps.DistanceMatrixService();
                        DistanceMatrixService.getDistanceMatrix({
                            origins: [origin],
                            destinations: [destination],
                            travelMode: google.maps.TravelMode["DRIVING"],
                            unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
                            avoidHighways: false,
                            avoidTolls: false
                        }, save_results);
                    }

                    // save distance results
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
                                var distance_in_mile = distance.value / 1609.34; // the mile
                                var duration_text = duration.text;
                                appendResults(distance_in_kilo, distance_in_mile, duration_text);
                            }
                        }
                    }

                    // append html results
                    function appendResults(distance_in_kilo, distance_in_mile, duration_text) {
                        console.log(distance_in_kilo);
                        $('#distance').html(distance_in_kilo + "km");
                    }



                });
            </script>

        </div>

    </body>

    </html>