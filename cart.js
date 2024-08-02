let cartItems = [];

        
        function addToCart(itemName, quantity, price) {
            cartItems.push({ itemName, quantity, price });
            updateCartDisplay();
        }

        
        function updateCartDisplay() {
            const cartElement = document.getElementById('cart');
            cartElement.innerHTML = ''; 
            let totalPrice = 0;

            cartItems.forEach((item) => {
                const itemTotal=item.quantity*item.price;

                totalPrice += itemTotal;

                const itemElement = document.createElement('div');
                itemElement.innerHTML = `${item.itemName} x ${item.quantity} = ${itemTotal}`;
                cartElement.appendChild(itemElement);
            });

            const totalElement = document.createElement('div');
            totalElement.innerHTML = `<strong>Total: ${totalPrice}</strong>`;
            cartElement.appendChild(totalElement);
        }

        
        const addButtons = document.getElementsByClassName('custom-button-items-page');
        for (let i = 0; i < addButtons.length; i++) {
            const addButton = addButtons[i];
            addButton.addEventListener('click', function() {
                const itemCard = this.closest('.menu-item-card');
                const itemName = itemCard.querySelector('.menu-item-heading').innerText;
                const quantity = parseInt(itemCard.querySelector('.quantity').innerText);
                const priceString = itemCard.querySelector('.price_selection').innerText;
                const price = parseInt(priceString.substr(0)); 
                addToCart(itemName, quantity, price);
            });
        }
    
