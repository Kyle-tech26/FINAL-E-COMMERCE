<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Image Change</title>
    <link rel = "stylesheet" href = "style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <p>Total: <span class="cart-total">₱ 0.00</span></p>
    <button type="button" class="checkout-btn" onclick="location.href='checkout.php'">Checkout</button>
  </div>
</div>

<div class="main-wrapper">
    <div class="container">
        <div class="product-div">
            <div class="product-div-left">
                <div class="img-container">
                    <img src="images/w1.png" alt="watch" id="main-image">
                </div>
                <div class="hover-container">
                    <div><img src="img/prod44.png" onclick="changeImage('img/prod44.png')"></div>
                    <div><img src="img/prod45.png" onclick="changeImage('img/prod45.png')"></div>
                    <div><img src="img/prod46.png" onclick="changeImage('img/prod46.png')"></div>
                    <div><img src="img/prod47.png" onclick="changeImage('img/prod47.png')"></div>
                    
                    
                </div>
            </div>
            <div class="product-div-right">
                <span class="product-name">SUNWILL Insulated Coffee Mug </span>
                <span class="product-price">₱ 1,468.00 <del style="color: red;">₱2,936.00</del> </span>
                <div class="product-rating">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star-half-alt"></i></span>
                    <span>(350 ratings)</span>
                </div>
                <p class="product-description">The SUNWILL Insulated Coffee Mug is a high-performance, stylish mug designed to keep your beverages hot or cold for hours.
                   Made with premium double-wall vacuum insulation, it maintains your coffee, tea, or other drinks at the perfect temperature, whether you're enjoying them at home,
                    in the office, or on the go. The mug's sleek, modern design features a durable, stainless steel exterior that resists scratches and dents, 
                    while the interior is easy to clean and ensures no lingering tastes or odors. With a spill-resistant, one-handed operated lid and a non-slip bottom,
                     the SUNWILL Insulated Coffee Mug is both practical and convenient for busy lifestyles. Available in a range of vibrant colors,
                      this mug is as much about functionality as it is about adding a pop of personality to your daily routine. Whether you're commuting or relaxing at home,
                       the SUNWILL Insulated Coffee Mug keeps your drinks just the way you like them—hot or cold, for longer.</p>
                <div class="btn-groups">
                    <!-- Add to Cart Button -->
                    <button type="button" class="add-cart-btn" onclick="addToCart('SUNWILL Insulated Coffee Mug', 1468.00, document.getElementById('main-image').src)">
                        <i class="fas fa-shopping-cart"></i> Add to Cart
                    </button>
                    <button type="button" class="buy-now-btn" onclick="location.href='checkout.php'">
                            <i class="fas fa-wallet"></i> Buy Now
                       </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src = "script.js"></script>

</body>
</html>
