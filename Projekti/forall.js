let cartData = JSON.parse(sessionStorage.getItem('cartData')) || { items: [], total: 0 };
        if (!sessionStorage.getItem('cartData')) {
            sessionStorage.setItem('cartData', JSON.stringify(cartData));
        }

        const maxAllowedTotalPrice = 10000000;

        function addToCart(productName, productPrice) {
            if (cartData.total + productPrice <= maxAllowedTotalPrice) {
                cartData.items.push({ name: productName, price: productPrice });
                cartData.total += productPrice;

                sessionStorage.setItem('cartData', JSON.stringify(cartData));
                updateCartUI();
            } else {
                alert(`Adding this item exceeds the maximum allowed total price of $${maxAllowedTotalPrice}.`);
            }
        }

        function updateCartUI() {
            const cartItemsContainer = document.getElementById('cart-items');
            const cartTotalElement = document.getElementById('cart-total');
            cartItemsContainer.innerHTML = '';
            if (cartItemsContainer && cartTotalElement) {
                cartData.items.forEach(item => {
                    const listItem = document.createElement('li');
                    listItem.textContent = `${item.name} - $${item.price.toFixed(2)}`;
                    cartItemsContainer.appendChild(listItem);
                });

                cartTotalElement.textContent = cartData.total.toFixed(2);
            } else {
                console.error("One or more cart elements not found.");
            }
        }

        function toggleCart() {
            const cart = document.getElementById('cart');
            cart.classList.toggle('hidden');
        }

        function placeOrder() {
            const selectedPaymentMethod = document.getElementById('payment-method').value;
            const cardNumber = document.getElementById('card-number').value;
            const cvv = document.getElementById('cvv').value;

            if (!cardNumber || !cvv) {
                alert('Please enter your card number and CVV before placing the order.');
            } else if (!isNumeric(cardNumber) || !isNumeric(cvv)) {
                alert('Please enter only numerical values for the card number and CVV.');
                return;
            } else {
                alert('Order placed successfully!');
            }

            function isNumeric(value) {
                return !isNaN(+value);
            }
        }