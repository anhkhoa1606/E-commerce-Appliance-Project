<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Smart Customer Services</title>
<link rel="stylesheet" href="./css/base.css">
<link rel="stylesheet" href="./css/types_of_services.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

<style>
</style>

<body>

    <?php
    include('bar.php')
    ?>

    <div class="text">
        <h1 style="text-align:center;">Types of Services</h1>
        <p>We provide the following services to our customers:</p>
        <table>
            <tbody>
                <tr>
                    <th>Orders</th>
                    <td>
                        <a href="">Payment Methods</a><br>
                        <a href="">Cancelling Order</a>
                    </td>

                    <th>Delivery</th>
                    <td>
                        <a href="">Shipping Times</a><br>
                        <a href="">Track an Order</a>
                    </td>
                </tr>
                <tr>
                    <th>About Us</th>
                    <td>
                        <a href="about_us.php#AboutUs">About Smart Customer Services</a><br>
                        <a href="about_us.php#FAQ">FAQ</a><br>
                        <a href="reviews.php">Customer Reviews</a>
                    </td>

                    <th>Contact Us</th>
                    <td>
                        <a href="contact_us.php">Contact Us Form</a><br>
                        <a href="contact_us.php">Address, Phone, Email</a>
                    </td>
                </tr>
                
                <tr>
                    <th>Privacy & Security</th>
                    <td>
                        <a href="">Privacy Policy</a><br>
                        <a href="">Security Protection</a><br>
                    </td>

                </tr>
            </tbody>
        </table>
    </div>

    <!-- Footer to display browser information-->
    <div class="text-center fixed-bottom opacity-25 mt-3 pt-3 px-4">
        <p class="fs-6" id="footerText"></p>
    </div>
    <script src="./js/websiteInfo.js"></script>
</body>

</html>