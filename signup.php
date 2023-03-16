<?php include 'connection.php' ?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script defer src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key={MAPKEY}" type="text/javascript"></script>

<head>
    <title>Smart Customer Services</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<script>
    $(function() {
        var origin, destination, map;

        // add input listeners
        google.maps.event.addDomListener(window, 'load', function(listener) {
            setDestination();
        });

        function setDestination() {
            var from_places = new google.maps.places.Autocomplete(document.getElementById('address'));


            google.maps.event.addListener(from_places, 'place_changed', function() {
                var from_place = from_places.getPlace();
                var from_address = from_place.formatted_address;
                $('#address').val(from_address);
            });
        }
    });
</script>


<body>
    <div class="menu-bar">
        <div>
            <a href="signup.php">Sign Up</a>
        </div>
        <div>
            <a href="signin.php">Sign In</a>
        </div>
    </div>
    <form class="signup" action="" method="post">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="name" id="name" placeholder="Your Name" required />
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email" required />
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="password" placeholder="Password" required />
                        </div>
                        <div class="form-group">
                            <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                            <input type="number" name="phone" id="phone" placeholder="Phone number" required />
                        </div>
                        <div class="form-group">
                            <label for="address"><i class="zmdi zmdi-pin"></i></label>
                            <input type="text" name="address" id="address" placeholder="Address" required />
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signUp" id="signUp" class="form-submit" value="Sign Up" />
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                    <a href="signin.php" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </form>

</body>

</html>

<?php
session_start();

require __DIR__ . './functions.php';

if (isset($_POST['signUp'])) {

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $tel_no = validate($_POST['phone']);
    $address = validate($_POST['address']);

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) === 1) {
        echo "<br>" . "Username is already being used";
    } else {
        echo "<br>" . "Added to Database";
        $connect->query("INSERT INTO users (name, email, password, tel_no, address) VALUES 
        ('$name', '$email', '$password', '$tel_no', '$address')");
        redirect("signin.php");
    }

    $sql = "SELECT * FROM users";
    $result = mysqli_query($connect, $sql);

    $connect->close();
    exit();
}
?>