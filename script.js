let currentIndex = 0;
const totalItems = document.querySelectorAll('.carousel-item').length;
const carousel = document.querySelector('.carousel');

// Function to move to the next or previous slide
function moveSlide(step) {
    currentIndex = (currentIndex + step + totalItems) % totalItems;  // Ensures the index loops
    carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
}

// Auto slide function
function autoSlide() {
    setInterval(() => {
        moveSlide(1); // Automatically move to the next slide
    }, 3000); // Change slide every 3 seconds (3000 ms)
}

// Start the auto sliding when the page loads
autoSlide();


const allHoverImages = document.querySelectorAll('.hover-container div img');
const imgContainer = document.querySelector('.img-container');

window.addEventListener('DOMContentLoaded', () => {
    allHoverImages[0].parentElement.classList.add('active');
});

allHoverImages.forEach((image) => {
    image.addEventListener('mouseover', () =>{
        imgContainer.querySelector('img').src = image.src;
        resetActiveImg();
        image.parentElement.classList.add('active');
    });
});

function resetActiveImg(){
    allHoverImages.forEach((img) => {
        img.parentElement.classList.remove('active');
    });
}



let shoppingCart = JSON.parse(localStorage.getItem('shoppingCart')) || [];

// Toggle the cart sidebar visibility
function toggleCart() {
  const cartSidebar = document.getElementById("shopping-cart-sidebar");
  cartSidebar.classList.toggle("open");
  cartSidebar.classList.toggle("hidden");

  // Update the cart display when toggling
  updateCart();
}

// Add an item to the cart (now including image)
function addToCart(itemName, itemPrice, itemImage) {
  const cartTotal = document.querySelector(".cart-total");

  // Add item to the cart array (including image)
  shoppingCart.push({ name: itemName, price: itemPrice, image: itemImage });

  // Update cart display and total
  updateCart();

  // Update the notification badge
  updateCartNotification();
}

// Update the cart display
function updateCart() {
  const cartItems = document.querySelector(".cart-items");
  cartItems.innerHTML = ""; // Clear the current cart display

  if (shoppingCart.length === 0) {
    const emptyMessage = document.createElement("li");
    emptyMessage.className = "empty-cart";
    emptyMessage.textContent = "Your cart is empty.";
    cartItems.appendChild(emptyMessage);
  } else {
    shoppingCart.forEach((item, index) => {
      const cartItem = document.createElement("li");
      cartItem.className = "cart-item";
      cartItem.innerHTML = `
        <img src="${item.image}" alt="${item.name}" class="cart-item-image">
        <span class="cart-item-name">${item.name}</span>
        <span class="cart-item-price">₱ ${item.price.toFixed(2)}</span>
        <button class="remove-item-btn" onclick="removeCartItem(${index})">×</button>
      `;
      cartItems.appendChild(cartItem);
    });
  }

  const total = shoppingCart.reduce((sum, item) => sum + item.price, 0);
  document.querySelector(".cart-total").textContent = `₱ ${total.toFixed(2)}`;

  // Save the cart to localStorage
  localStorage.setItem('shoppingCart', JSON.stringify(shoppingCart));
}

// Remove an item from the cart
function removeCartItem(index) {
  shoppingCart.splice(index, 1); // Remove the item by index
  updateCart(); // Refresh the cart display
  updateCartNotification(); // Update the badge
}

// Update the notification badge
function updateCartNotification() {
  const cartNotif = document.querySelector(".cart-notif");

  if (shoppingCart.length > 0) {
    cartNotif.textContent = shoppingCart.length;
    cartNotif.classList.add("visible");
  } else {
    cartNotif.classList.remove("visible");
  }
}

// Load the cart when the page loads
document.addEventListener('DOMContentLoaded', () => {
  updateCartNotification();
});





// Load PayPal button when the document is ready
document.addEventListener('DOMContentLoaded', () => {
  // Add the PayPal button when the user clicks the "Checkout" button
  const checkoutBtn = document.querySelector('.checkout-btn');
  checkoutBtn.addEventListener('click', () => {
    displayPayPalButton();
  });
});

// Function to display the PayPal Button and trigger the checkout process
function displayPayPalButton() {
  // Get the total amount from the cart (e.g., from localStorage or from the page)
  const totalAmount = calculateCartTotal();

  // Create a PayPal button inside the container
  paypal.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: totalAmount.toFixed(2), // Use the calculated total amount
          },
        }],
      });
    },
    onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
        alert('Transaction completed by ' + details.payer.name.given_name);
        // You can redirect the user to a success page or process further
        window.location.href = "thank_you.html"; // Redirect to thank you page after successful payment
      });
    },
    onCancel: function(data) {
      alert('Transaction was cancelled.');
      // You can add some logic here to handle cancellation if needed
    }
  }).render('#paypal-button-container'); // Render PayPal button in the container
}

// Function to calculate total cart amount
function calculateCartTotal() {
  let total = 0;
  shoppingCart.forEach(item => {
    total += item.price * item.quantity;
  });
  return total; // Return the total amount
}
