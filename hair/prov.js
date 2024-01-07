let cartData = JSON.parse(sessionStorage.getItem('cartData')) || { items: [], total: 0 };

function addToCart(productName, productPrice) {
    cartData.items.push({ name: productName, price: productPrice });
    cartData.total += productPrice;

    // Save the updated cart data to sessionStorage
    sessionStorage.setItem('cartData', JSON.stringify(cartData));

    // Update the UI immediately after adding to the cart
    updateCartUI();
}

function updateCartUI() {
    const cartItemsContainer = document.getElementById('cart-items');
    const cartTotalElement = document.getElementById('cart-total');
    const cartListModal = document.getElementById('cart-list');
    const cartTotalModalElement = document.getElementById('cart-total-modal');

    cartItemsContainer.innerHTML = '';
    cartData.items.forEach(item => {
        const listItem = document.createElement('li');
        listItem.textContent = `${item.name} - $${item.price.toFixed(2)}`;
        cartItemsContainer.appendChild(listItem);
    });

    cartTotalElement.textContent = cartData.total.toFixed(2);

    cartListModal.innerHTML = '';
    cartData.items.forEach(item => {
        const listItem = document.createElement('li');
        listItem.textContent = `${item.name} - $${item.price.toFixed(2)}`;
        cartListModal.appendChild(listItem);
    });

    cartTotalModalElement.textContent = cartData.total.toFixed(2);
}

function toggleCart() {
    const cart = document.getElementById('cart');
    cart.classList.toggle('hidden');
}

// Listen for beforeunload event to clear the cart when the user leaves the website
window.addEventListener('beforeunload', function () {
    sessionStorage.removeItem('cartData');
});

// Listen for page visibility change events to update the cart before leaving
document.addEventListener('visibilitychange', function () {
    if (document.visibilityState === 'hidden') {
        sessionStorage.setItem('cartData', JSON.stringify(cartData));
    }
});

// Initial UI update when the page loads
updateCartUI();