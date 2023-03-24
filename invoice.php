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
                    </div>
                   
                </div>
            </div>

            <div id="results" style="background-color:red"></div>
            <div id="floating-panel">
            <b>Select a Branch: </b>
                <select id="start">
                    <option value="Toronto Metropolitan Univesity">Downtown</option>
                    <option value="Michael Garron Hospital">East York</option>
                    <option value="CF Sherway Gardens">Etobicoke</option>
                </select> 
          

                <b>Destination:</b> <input id="end" type="text" placeholder="Enter your address..."/>
                <!-- <input id="destination" name="destination" required="" type="hidden"/> -->
            </div>   
            
    
            <script>
            $(function () {
                google.maps.event.addDomListener(window, 'load', function (listener) {
                    setDestination();
                    initMap();
                })
            function initMap() {
                const directionsService = new google.maps.DirectionsService();
                const directionsRenderer = new google.maps.DirectionsRenderer();
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 14,
                    center: { lat: 43.6532, lng: -79.3832 },
                });

                directionsRenderer.setMap(map);

                const onChangeHandler = function () {
                    calculateAndDisplayRoute(directionsService, directionsRenderer);
                };

                
                document.getElementById("end").addEventListener("change", onChangeHandler);
            }

            function setDestination() {
            var to_places = new google.maps.places.Autocomplete(document.getElementById('end'));

            google.maps.event.addListener(end, 'place_changed', function () {
                var end1 = end.getPlace();
                var to_address = end1.formatted_address;
                $('#destination').val(to_address);
            });


            }

            function calculateAndDisplayRoute(directionsService, directionsRenderer) {
            directionsService
                .route({
                origin: {
                    query: document.getElementById("start").value,
                },
                destination: {
                    query: document.getElementById("end").value,
                },
                travelMode: google.maps.TravelMode.DRIVING,
                })
                .then((response) => {
                directionsRenderer.setDirections(response);
                })
                .catch((e) => window.alert("Directions request failed due to " + status));
            }
        });
            window.initMap = initMap;
            </script>
            <div class="text-center fixed-bottom opacity-25 mt-3 pt-3 px-4">
                <p class="fs-6" id="footerText"></p>
            </div>
            <script src="./js/websiteInfo.js"></script>
            </body>
        </php>
 
