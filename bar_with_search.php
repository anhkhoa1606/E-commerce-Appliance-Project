<html>
<div class="menu-bar">
    <div>
        <a href="index.php"><img id="logo" src="logo.png"></a>
    </div>
    <div>
        <a href="index.php">Home</a>
    </div>
    <div>
        <a href="types_of_services.php">Types Of Services</a>
    </div>
    <div>
        <a href="reviews.php">Reviews</a>
    </div>
    <div>
        <a href="shopping_cart.php">Shopping Cart</a>
    </div>
    <div>
        <a href="about_us.php">About Us</a>
    </div>
    <div>
        <a href="contact_us.php">Contact Us</a>
    </div>
    <div class="dropdown">
        <button class="dropbtn">DB Maintain</button>
        <div class="dropdown-content">
            <a href="./insert.php">Insert</a>
            <a href="./delete.php">Delete</a>
            <a href="./select.php">Select</a>
            <a href="./update.php">Update</a>
        </div>
    </div>

    <form class="searchBar" action="select.php" method='post'>
        <input type="text" placeholder="Search for specific order..." name="search">
    </form>

    <button type="submit" name="submit" onclick="addedItemNotification()">Search</button>

    <div>
        <a href="logout.php">Log Out</a>
    </div>
</div>

</html>