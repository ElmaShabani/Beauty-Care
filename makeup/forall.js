let cartItems = [];
let cartTotal = 0;

function addToCart(productName, productPrice) {
    cartItems.push({ name: productName, price: productPrice });
    cartTotal += productPrice;
    updateCartUI();
}

function updateCartUI() {
    const cartItemsContainer = document.getElementById('cart-items');
    const cartTotalElement = document.getElementById('cart-total');
    cartItemsContainer.innerHTML = '';
    cartItems.forEach(item => {
        const listItem = document.createElement('li');
        listItem.textContent = `${item.name} - $${item.price.toFixed(2)}`;
        cartItemsContainer.appendChild(listItem);
    });

   
    cartTotalElement.textContent = cartTotal.toFixed(2);
}

function toggleCart() {
    const cart = document.getElementById('cart');
    cart.classList.toggle('hidden');
}
