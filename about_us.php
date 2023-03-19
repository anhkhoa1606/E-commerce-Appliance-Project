<!DOCTYPE html>
<html lang="en">

<head>
  <title>About Us</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/base.css">
  <link rel="stylesheet" href="./css/aboutus.css">
</head>

<body>

  <?php
  include('bar.php')
  ?>

  <div style="text-align:center;">
    <div class="header">
      <h1 style="font-size:100px;color:lightcoral;">Appliances Canada</h1>
      <h2>All appliances you need in one place.</h2>
    </div>

    <h1>About Us</h2>
    <div class="text">
      <p>Appliances Canada has a rich history over 40+ years of providing customers with high quality and long lasting appliances.
        Founded in 1980, Appliances Canada is one of Canada's largest appliances store with over 10000 unique products, offering all kind of brands at a competitive pricing.
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

    <h1>Customer Reviews</h2>
    <p>What our customers say about us.</p>
    <button class="buttonContact" onclick="window.location.href='reviews.php'">Reviews</button>
  </div>

</body>

</html>