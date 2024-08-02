function addToCart(itemName, price) {
    // Check if the cart exists in the local storage
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
  
    // Add the item to the cart
    cart.push({ name: itemName, price: price });
  
    // Update the cart in the local storage
    localStorage.setItem('cart', JSON.stringify(cart));
  
    // Calculate the total price and update it in the local storage
    let total = calculateTotalPrice();
    localStorage.setItem('totalPrice', total);
  
    // Update the cart display
  }
  

  // Function to get the cart items from local storage
  function getCartItems() {
    // Get the cart from local storage
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    return cart;
  }

  // Function to clear the cart
 
  function calculateTotalPrice() {
    let cartItems = getCartItems();
    let total = 0;
    if (cartItems.length > 0) {
      cartItems.forEach((item) => {
        total += item.price;
      });
    }
    return total;
  }
  

  // Function to display the cart items
  function showCart() {
    let cartItems = getCartItems();
    let cartContainer = document.getElementById('cart');
    let totalPriceContainer = document.getElementById('totalPrice'); // Added

    // Clear the existing content in the cart and total price containers
    cartContainer.innerHTML = '';
    totalPriceContainer.innerHTML = ''; // Added

    // Display the cart items in the cart container
    if (cartItems.length === 0) {
      cartContainer.innerHTML = '<p>Your cart is empty.</p>';
    } else {
      let cartList = document.createElement('ul');
      cartItems.forEach((item) => {
        let cartItem = document.createElement('li');
        cartItem.textContent = `${item.name} - ${item.price}/-`;
        cartList.appendChild(cartItem);
      });
      cartContainer.appendChild(cartList);

      // Display the total price
      let totalPrice = calculateTotalPrice();
      totalPriceContainer.innerHTML = `<p>Total Price: ${totalPrice}</p>`; // Added
    }
  }
  function clearCart() {
    // Clear the cart in local storage
    localStorage.removeItem('cart');
    
    // Reset the total price to zero in local storage
    localStorage.setItem('totalPrice', 0);
    
    // Update the cart display
    showCart();
  }
  
  