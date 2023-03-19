<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="./css/base.css">
  <title>Contact Us</title>
  <link rel="stylesheet" href="./css/contact_us.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

  <div class="container">
    <?php
    include('bar.php')
    ?>
    <div class="content">
    <div class="right-side">
        <div class="topic-text">Contact Us</div>
        <br>
        <form action="#">
          <div class="input-box">
            <input type="text" placeholder="Enter your name">
          </div>
          <div class="input-box">
            <input type="text" placeholder="Enter your email">
          </div>
          <div class="input-box message-box">
            <textarea name="message-box" id="message-box" cols="30" rows="10" placeholder="Enter your inqury"></textarea>
          </div>
          <div class="button">
            <input type="button" value="Send" >
          </div>
        </form>
      </div>

      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-pin"></i>
          <div class="topic">Address</div>
          <div class="text-one">350 Victoria St</div>
          <div class="text-two">Toronto, ON M5B 2K3</div>
        </div>

        <div class="phone details">
          <i class="fas fa-phone"></i>
          <div class="topic">Phone</div>
          <div class="text-one">(416) 979-5000</div>
        </div>

        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">info.tmu@gmail.com</div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
