<?php include 'connection.php' ?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<head>
    <title>Smart Customer Services</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- <div class="menu-bar">
        <div>
            <a href="signup.php">Sign Up</a>
        </div>
        <div>
            <a href="signin.php">Sign In</a>
        </div>
    </div> -->
    <div class="signin-container">
    <!-- Sing in  Form -->
    <section class="sign-in" action="" method="post">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                    <a href="signup.php" class="signup-image-link">I don't have an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Sign In</h2>
                    <form method="POST" class="register-form" id="login-form">
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="text" name="email" id="email" placeholder="Email" required />
                        </div>
                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="password" placeholder="Password" required />
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signIn" id="signIn" class="form-submit" value="Log in" />
                        </div>
                    </form>
                    <div class="social-login">
                        <span class="social-label">Or login with</span>
                        <ul class="socials">
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
</body>

</html>

<?php
session_start();

require __DIR__ . '/functions.php';

if (isset($_POST['signIn'])) {

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) === 1) {
        while ($row = $result->fetch_assoc()) {
            if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['address'] = $row['address'];
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['cart_id'] = 1;
                redirect("index.php");
            }
        }
    } else {
        echo "<br>" . "Your Email or password is incorrect.";
    }

    $sql = "SELECT email, password FROM users";
    $result = mysqli_query($connect, $sql);
}
?>