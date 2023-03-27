<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Smart Customer Services</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/types_of_services.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <?php include('bar.php'); ?>

    <div class="container text-center">
        <h1 class="mt-5">Types of Services</h1>
        <p class="lead">We provide the following services to our customers:</p>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Orders</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Cancelling Order</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Delivery</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Shipping Times</a></li>
                            <li><a href="#">Track an Order</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">About Us</h5>
                        <ul class="list-unstyled">
                            <li><a href="about_us.php#AboutUs">About Smart Customer Services</a></li>
                            <li><a href="about_us.php#FAQ">FAQ</a></li>
                            <li><a href="reviews.php">Customer Reviews</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Contact Us</h5>
                        <ul class="list-unstyled">
                            <li><a href="contact_us.php">Contact Us Form</a></li>
                            <li><a href="contact_us.php">Address, Phone, Email</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Privacy &amp; Security</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Security Protection</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-light text-center py-3 fixed-bottom">
        <p class="fs-6" id="footerText"></p>
    </footer>

    <script src="./js/websiteInfo.js"></script>
</body>

</html>