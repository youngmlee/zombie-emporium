<?php
  include_once 'includes/connect.php';
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="utf-8" />
  <title>Zombie Emporium</title>
  <link href="https://fonts.googleapis.com/css?family=Pirata+One" rel="stylesheet" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="main.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1,user-scaleable=no">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top" id="navbar">
    <div class="container">
      <a href="/zombie-emporium/zombie.php" class="navbar-brand">Zombie Emporium</a>
      <ul class="nav navbar-nav">
        <!-- Drop Down Menu -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Clothing<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Shirts</a></li>
            <li><a href="#">Pants</a></li>
            <li><a href="#">Shoes</a></li>
            <li><a href="#">Accessories</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Survival<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"></a></li>
            <li><a href="#">Basic Needs</a></li>
            <li><a href="#">Tools</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Weapons<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Silent but Deadly</a></li>
            <li><a href="#">Guns Blazin'</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Inserting Images -->
  <div id="background-image">
    <div><h1 id="store">Zombie Emporium</h1></div>
    <div id="logo"></div>
  </div>
  <!-- remove the spaces and center the products -->
  <div class="col-md-2"></div>
  <!-- main content of featured products -->
  <div class="col-md-8">
    <div class="row">
      <h2 class="text-center">Featured Products</h2>
      <?php
        $sql = "SELECT * FROM zombie;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        while ($row = mysqli_fetch_assoc($result)) :
      ?>
      <div class="col-md-3">
        <h4><?= $row['title']; ?></h4>
        <img src="<?= $row['image']; ?>" alt="<?= $row['title']; ?>" id="images" />
        <p class="list-price text-danger">List Price: <s><?=$row['list_price']; ?></s></p>
        <p class="price">Our Price: $<?=$row['our_price']; ?></p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="<?= $row['data-target']; ?>">Details</button>
      </div>
      <?php endwhile; ?>
    </div>
    <footer class="text-center" id="footer">&copy; Copyright 2017-2018 Young's Zombie Emporium</footer>
  </div>
  <!-- details modal -->
  <?php include 'details-modal-BodyArmor.php';
        include 'details-modal-Crossbow.php';
        include 'details-modal-Lifestraw.php';
        include 'details-modal-Axe.php';
        include 'details-modal-Multitool.php';
        include 'details-modal-FirstAid.php';
        include 'details-modal-Flashlight.php';
        include 'details-modal-Shotgun.php';
        include 'details-modal-Boots.php';
        include 'details-modal-Binoculars.php';
        include 'details-modal-Firestarter.php';
        include 'details-modal-Gloves.php';
        include 'details-modal-Bracelet.php';
        include 'details-modal-Helmet.php';
        include 'details-modal-Watch.php';
        include 'details-modal-Bat.php';
  ?>
  <!-- end of details modal -->
</body>
</html>
