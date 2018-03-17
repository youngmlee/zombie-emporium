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
      <div class="col-md-3">
        <h4>Kevlar Body Armor</h4>
        <img src="images/bodyarmor.jpg" alt="Kevlar Body Armor" id="images" />
        <p class="list-price text-danger">List Price: <s>$399.99</s></p>
        <p class="price">Our Price: $199.95</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
      </div>
      <div class="col-md-3">
        <h4>Tactical M4 Crossbow</h4>
        <img src="images/crossbow.jpg" alt="Crossbow" id="images" />
        <p class="list-price text-danger">List Price: <s>$274.99</s></p>
        <p class="price">Our Price: $149.95</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
      </div>
      <div class="col-md-3">
        <h4>Lifestraw</h4>
        <img src="images/lifestraw.jpg" alt="Lifestraw" id="images" />
        <p class="list-price text-danger">List Price: <s>$29.99</s></p>
        <p class="price">Our Price: $19.95</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">Details</button>
      </div>
      <div class="col-md-3">
        <h4>Steel Axe</h4>
        <img src="images/axe.jpg" alt="Steel Axe" id="images" />
        <p class="list-price text-danger">List Price: <s>$99.99</s></p>
        <p class="price">Our Price: $69.95</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
      </div>
      <div class="col-md-3">
        <h4>Multi-tool</h4>
        <img src="images/multitool.jpg" alt="Multi-tool" id="images" />
        <p class="list-price text-danger">List Price: <s>$19.99</s></p>
        <p class="price">Our Price: $14.95</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-5">Details</button>
      </div>
      <div class="col-md-3">
        <h4>First Aid Kit</h4>
        <img src="images/firstaid.jpg" alt="First Aid Kit" id="images" />
        <p class="list-price text-danger">List Price: <s>$39.99</s></p>
        <p class="price">Our Price: $19.95</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-6">Details</button>
      </div>
      <div class="col-md-3">
        <h4>Heavy Duty Flashlight</h4>
        <img src="images/flashlight.jpg" alt="Heavy Duty Flashlight" id="images" />
        <p class="list-price text-danger">List Price: <s>$39.99</s></p>
        <p class="price">Our Price: $29.95</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-7">Details</button>
      </div>
      <div class="col-md-3">
        <h4>Mossberg Pump-Action Shotgun</h4>
        <img src="images/shotgun.jpg" alt="Shotgun" id="images" />
        <p class="list-price text-danger">List Price: <s>$199.99</s></p>
        <p class="price">Our Price: $149.95</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-8">Details</button>
      </div>
      <div class="col-md-3">
        <h4>Steel-toed Boots</h4>
        <img src="images/boots.jpg" alt="Boots" id="images" />
        <p class="list-price text-danger">List Price: <s>$99.99</s></p>
        <p class="price">Our Price: $59.95</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-9">Details</button>
      </div>
      <div class="col-md-3">
        <h4>Binoculars</h4>
        <img src="images/binoculars.jpg" alt="Binoculars" id="images" />
        <p class="list-price text-danger">List Price: <s>$149.99</s></p>
        <p class="price">Our Price: $99.95</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-10">Details</button>
      </div>
      <div class="col-md-3">
        <h4>Emergency Firestarter</h4>
        <img src="images/firestarter.jpg" alt="Emergency Firestarter" id="images" />
        <p class="list-price text-danger">List Price: <s>$29.99</s></p>
        <p class="price">Our Price: $19.95</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-11">Details</button>
      </div>
      <div class="col-md-3">
        <h4>Kevlar Gloves</h4>
        <img src="images/gloves.jpg" alt="Kevlar Gloves" id="images" />
        <p class="list-price text-danger">List Price: <s>$29.99</s></p>
        <p class="price">Our Price: $19.95</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-12">Details</button>
      </div>
      <div class="col-md-3">
        <h4>Paracord Survival Bracelet</h4>
        <img src="images/bracelet.jpg" alt="Paracord Survival Bracelet" id="images" />
        <p class="list-price text-danger">List Price: <s>$39.99</s></p>
        <p class="price">Our Price: $19.95</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-13">Details</button>
      </div>
      <div class="col-md-3">
        <h4>Tactical Helmet</h4>
        <img src="images/helmet.jpg" alt="Tactical Helmet" id="images" />
        <p class="list-price text-danger">List Price: <s>$129.99</s></p>
        <p class="price">Our Price: $99.95</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-14">Details</button>
      </div>
      <div class="col-md-3">
        <h4>Tactical Field Ops Watch</h4>
        <img src="images/watch.jpg" alt="Tactical Field Ops Watch" id="images" />
        <p class="list-price text-danger">List Price: <s>$199.99</s></p>
        <p class="price">Our Price: $149.95</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-15">Details</button>
      </div>
      <div class="col-md-3">
        <h4>Steel Bat</h4>
        <img src="images/bat.jpg" alt="Steel Bat" id="images" />
        <p class="list-price text-danger">List Price: <s>$179.99</s></p>
        <p class="price">Our Price: $99.95</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-16">Details</button>
      </div>
    </div>
    <footer class="text-center" id="footer">&copy; Copyright 2017-2018 Young's Zombie Emporium</footer>
  </div>
</body>
</html>
