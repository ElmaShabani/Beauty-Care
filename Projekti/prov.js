let cartData = JSON.parse(sessionStorage.getItem('cartData')) || { items: [], total: 0 };

function addToCart(productName, productPrice) {
    cartData.items.push({ name: productName, price: productPrice });
    cartData.total += productPrice;
    sessionStorage.setItem('cartData', JSON.stringify(cartData));

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


window.addEventListener('beforeunload', function () {
    sessionStorage.removeItem('cartData');
});

document.addEventListener('visibilitychange', function () {
    if (document.visibilityState === 'hidden') {
        sessionStorage.setItem('cartData', JSON.stringify(cartData));
    }
});

updateCartUI();




