<!DOCTYPE html>
<html lang="en">

<head>
  <title>About Us</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/base.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/aboutus.css">  
</head>

<body>

  <?php
  include('bar.php')
  ?>

  <div style="text-align:center;">
    <div class="header">
      <h1 style="font-size:100px;color:lightcoral;">Smart Customer Services </h1>
      <h2>All appliances you need in one place.</h2>
    </div>

    <h1 id="AboutUs">About Us</h2>
    <div class="text">
      <p>Smart Customer Services has a rich history over 40+ years of providing customers with high quality and long lasting appliances.
        Founded in 1980, Smart Customer Services is one of Canada's largest appliances store with over 10000 unique products, offering all kind of brands at a competitive pricing.
        Online since 2000, we have helped over 600,000 customers across Canada with their needs, with over 99% of our customers being satisfied.
        We have experienced buying appliances that are expensive and short-lived and are determined to do the opposite by provide last lasting appliances for everyone at an affordable price. 
        We deliver appliances to your door step within 1-3 days guaranteed when urgently needed and offer refunds within 60 days of purchase.
        Whether you are simply buying or replacing old appliances, we have knowledgeable staff who are available offer support and/or answer questions 24/7 via email or phone.</p>
    </div>

    <h1>Meet the team</h2>
    <div class="cardsRow">
      <div class="cardsColumn">
        <div class="card">
          <p>Gary Huang</p>
          <img src='./images/person.png'>
          <p>Founder</p>
        </div>
      </div>
      <div class="cardsColumn">
        <div class="card">
          <p>Thanh Huynh</p>
          <img src='./images/person.png'>
          <p>Founder</p>
        </div>
      </div>
      <div class="cardsColumn">
        <div class="card">
          <p>Dinh Ngoc Trac Huynh</p>
          <img src='./images/person.png'>
          <p>Founder</p>
        </div>
      </div>
      <div class="cardsColumn">
        <div class="card">
          <p>Franky Jiang</p>
          <img src='./images/person.png'>
          <p>Founder</p>
        </div>
      </div>
      <div class="cardsColumn">
        <div class="card">
          <p>Keith Jose</p>
          <img src='./images/person.png'>
          <p>Founder</p>
        </div>
      </div>
    </div>
    <button class="buttonContact" onclick="window.location.href='contact_us.php'">Contact Us</button>

    <h1 id="FAQ">Frequently Asked Questions</h1>
    <div class="text">
      <h2>How long will my order take to arrive?</h2>
      <p>Once we have received your order, we will arrive to deliver your order to your home. It will take 1-3 days for the deliver to arrive at your home.</p>
      <h2>I need help with my appliances.</h2>
      <p>Contact us <a style="color:blue;" href="contact_us.php">HERE</a></p>
      <h2>What is the return policy?</h2>
      <p>Orders can be cancelled within 48 hours of placement without any fees as long as order has not been shipped.
        Orders can be returned within 60 days of purchaase. Damage returns are not accepted.
      </p>
    </div>
    
    <h1>Customer Reviews</h2>
    <p>What our customers say about us.</p>
    <button class="buttonContact" onclick="window.location.href='reviews.php'">Reviews</button>
  </div>

</body>

</html>