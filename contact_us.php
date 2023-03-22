<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="./css/base.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <title>Contact Us</title>
    <link rel="stylesheet" href="./css/contact_us.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

  <body style="display: block;">
  <?php
        include('bar_with_search.php')
            ?>
    <div class="container">
      <div class="content">
        <div class="right-side">
          <div class="topic-text">Contact Us</div>
          <br />
          <form action="#">
            <div class="input-box">
              <input type="text" placeholder="Enter your name" />
            </div>
            <div class="input-box">
              <input type="text" placeholder="Enter your email" />
            </div>
            <div class="input-box message-box">
              <textarea
                name="message-box"
                id="message-box"
                cols="30"
                rows="10"
                placeholder="Enter your inqury"
              ></textarea>
            </div>
            <div class="button">
              <input type="button" value="Send" />
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

    <!-- Footer to display browser information-->
    <div class="text-center fixed-bottom opacity-25 mt-3 pt-3 px-4">
      <p class="fs-6" id="footerText"></p>
    </div>
    <script src="./js/websiteInfo.js"></script>
  </body>
</html>
