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
                    <div><img src="img/prod36.png" onclick="changeImage('img/prod36.png')"></div>
                    <div><img src="img/prod37.png" onclick="changeImage('img/prod37.png')"></div>
                    <div><img src="img/prod38.png" onclick="changeImage('img/prod38.png')"></div>
                    <div><img src="img/prod39.png" onclick="changeImage('img/prod39.png')"></div>
                    
                    
                </div>
            </div>
            <div class="product-div-right">
                <span class="product-name">Hydro Flask Mug  </span>
                <span class="product-price">₱ 5,442.00 <del style="color: red;">₱10,884.00</del> </span>
                <div class="product-rating">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star-half-alt"></i></span>
                    <span>(350 ratings)</span>
                </div>
                <p class="product-description">The Hydro Flask Mug is a versatile and stylish drinkware option designed to keep your beverages at the perfect temperature, whether you're enjoying a hot cup of coffee, tea, or a chilled refreshment.
                   Known for its high-quality stainless steel construction and double-wall vacuum insulation, the Hydro Flask Mug ensures your drink stays hot for 
                   up to 6 hours or cold for up to 24 hours. Its durable, sweat-proof exterior makes it comfortable to hold, while the slip-resistant bottom helps prevent
                    spills and provides added stability. The mug features a wide-mouth design for easy sipping and cleaning, along with a spill-resistant,
                     ergonomic handle that enhances portability. Available in a range of colors, the Hydro Flask Mug combines sleek, modern design with Hydro Flask's
                      renowned performance, making it a perfect companion for your everyday adventures.</p>
                <div class="btn-groups">
                    <!-- Add to Cart Button -->
                    <button type="button" class="add-cart-btn" onclick="addToCart('Hydro Flask Mug', 5442.00, document.getElementById('main-image').src)">
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
