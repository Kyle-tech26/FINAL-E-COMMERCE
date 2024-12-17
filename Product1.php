<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Tumbler</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
  <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  
  
  <!-- Christmas Sale Banner -->
  <div id="christmas-banner">
    <span class="blinking-text">🎄 Christmas Sale! Enjoy up to 50% off on All select items! 🎄</span>
  </div>

  <!-- Left Side Snowflakes -->
  <div class="snowflake left">❄️</div>
  <div class="snowflake left">❄️</div>
  <div class="snowflake left">❄️</div>
  <div class="snowflake left">❄️</div>
  <div class="snowflake left">❄️</div>
  
 

  <!-- Right Side Snowflakes -->
  <div class="snowflake right">❄️</div>
  <div class="snowflake right">❄️</div>
  <div class="snowflake right">❄️</div>
  <div class="snowflake right">❄️</div>
  <div class="snowflake right">❄️</div>
 


  <section id="header">
  <a href="#"><img src="img/logo.png" class="logo" alt=""></a>
  <div>
    <ul id="navbar">
      <li><a href="index.php">Home</a></li>
      <li class="dropdown">
        <a href="Product.php" class="dropbtn">Product</a>
        <ul class="dropdown-content">
          <li><a href="Product1.php">Tumbler</a></li>
          <li><a href="Product2.php">Mug</a></li>
        
        </ul>
      </li>
      <li><a href="Blog.php">Blog</a></li>
      <li><a href="About.php">About</a></li>
      <li><a href="Contact.php">Contact</a></li>
      <li class="cart-icon">
        <a href="#" onclick="toggleCart()">
          <img src="cart-icon.png" alt="Cart" class="cart-icon-image">
          <span class="cart-notif">0</span> <!-- Notification Badge -->
        </a>
      </li>
    </ul>
  </div>
</section>

<!-- Shopping Cart Sidebar -->
<div id="shopping-cart-sidebar" class="cart-sidebar hidden">
  <div class="cart-header">
    <h2>Shopping Cart</h2>
    <button class="close-cart" onclick="toggleCart()">×</button>
  </div>
  <div class="cart-content">
    <ul class="cart-items">
      <li class="empty-cart">Your cart is empty.</li>
    </ul>
  </div>
  <div class="cart-footer">
    <p>Total: <span class="cart-total">$0.00</span></p>
    <button type="button" class="checkout-btn" onclick="location.href='checkout.php'">Checkout</button>
  </div>
</div>

</section>


 <!-- Main Content Section -->
<section class="trending-product" id="trending">
  <div class="center-text">
    <h2>Our Trending <Span>Product</Span></h2>
  </div>
  <div class="products">
    <div class="row">
      <!-- Product 1 -->
      <div class="product-card" onclick="window.location.href='detail.php'">
        <img src="img/prod5.png" alt="Product 1">
        <div class="product-text">
          <h5>Sale</h5>
        </div>
        <div class="heart-icon">
          <i class='bx bx-heart'></i>
        </div>
        <div class="rating">
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bxs-star-half'></i>
        </div>
        <div class="price">
          <h4>Stainless Tumbler</h4>
          <p>₱ 459.00</p>
        </div>
      </div>

      <!-- Product 2 -->
      <div class="product-card" onclick="window.location.href='detail1.php'">
        <img src="img/prod6.png" alt="Product 2">
        <div class="product-text">
          <h5>Sale</h5>
        </div>
        <div class="heart-icon">
          <i class='bx bx-heart'></i>
        </div>
        <div class="rating">
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bxs-star-half'></i>
        </div>
        <div class="price">
          <h4>Travel Tumbler</h4>
          <p>₱365.00</p>
        </div>
      </div>

      <!-- Product 3 -->
      <div class="product-card" onclick="window.location.href='detail2.php'">
        <img src="img/prod11.png" alt="Product 3">
        <div class="product-text">
          <h5>Sale</h5>
        </div>
        <div class="heart-icon">
          <i class='bx bx-heart'></i>
        </div>
        <div class="rating">
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bxs-star-half'></i>
        </div>
        <div class="price">
          <h4>Matte Skinny Tumbler</h4>
          <p>₱299.00</p>
        </div>
      </div>

      <!-- Product 4 -->
      <div class="product-card" onclick="window.location.href='detail3.php'">
        <img src="img/prod16.png" alt="Product 4">
        <div class="product-text">
          <h5>Sale</h5>
        </div>
        <div class="heart-icon">
          <i class='bx bx-heart'></i>
        </div>
        <div class="rating">
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bxs-star-half'></i>
        </div>
        <div class="price">
          <h4> 2 n 1 Harmony Tumbler</h4>
          <p>₱1,999.00</p>
        </div>
      </div>
      <!-- Product 1 -->
      <div class="product-card" onclick="window.location.href='detail4.php'">
        <img src="img/prod20.png" alt="Product 1">
        <div class="product-text">
          <h5>Sale</h5>
        </div>
        <div class="heart-icon">
          <i class='bx bx-heart'></i>
        </div>
        <div class="rating">
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bxs-star-half'></i>
        </div>
        <div class="price">
          <h4>Beacon Straw Tumbler</h4>
          <p>₱1,249.00</p>
        </div>
      </div>

      <!-- Product 2 -->
      <div class="product-card" onclick="window.location.href='detail5.php'">
        <img src="img/prod24.png" alt="Product 2">
        <div class="product-text">
          <h5>Sale</h5>
        </div>
        <div class="heart-icon">
          <i class='bx bx-heart'></i>
        </div>
        <div class="rating">
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bxs-star-half'></i>
        </div>
        <div class="price">
          <h4>Sutton Tumbler</h4>
          <p>₱779.00</p>
        </div>
      </div>

      <!-- Product 3 -->
      <div class="product-card" onclick="window.location.href='detail6.php'">
        <img src="img/prod28.png" alt="Product 3">
        <div class="product-text">
          <h5>Sale</h5>
        </div>
        <div class="heart-icon">
          <i class='bx bx-heart'></i>
        </div>
        <div class="rating">
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bxs-star-half'></i>
        </div>
        <div class="price">
          <h4>Kelso Set Tumbler</h4>
          <p>₱870.00</p>
        </div>
      </div>

      <!-- Product 4 -->
      <div class="product-card" onclick="window.location.href='detail7.php'">
        <img src="img/prod32.png" alt="Product 4">
        <div class="product-text">
          <h5>Sale</h5>
        </div>
        <div class="heart-icon">
          <i class='bx bx-heart'></i>
        </div>
        <div class="rating">
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bx-star'></i>
          <i class='bx bxs-star-half'></i>
        </div>
        <div class="price">
          <h4>Staw flask Tumbler</h4>
          <p>₱499.00</p>
        </div>
      </div>
    </div>
  </div>
</section>

 <!-- Footer Section -->
 <footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Product</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Blog</a></li>
      <li class="menu__item"><a class="menu__link" href="#">About</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>
    </ul>
    <p>&copy;2024 E-Tumbler | All Rights Reserved</p>
  </footer>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="script.js"></script>


</body>
<html>