document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector('.slider');
    let currentIndex = 0;

    function showSlide(index) {
        const slideWidth = document.querySelector('.slider img').clientWidth;
        slider.style.transform = `translateX(-${index * slideWidth}px)`;
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % (slider.children.length - 2);
        showSlide(currentIndex);
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + slider.children.length - 2) % (slider.children.length - 2);
        showSlide(currentIndex);
    }

    // Show initial three images
    showSlide(currentIndex);

    // Event listeners for arrow buttons
    document.querySelector('.prev').addEventListener('click', prevSlide);
    document.querySelector('.next').addEventListener('click', nextSlide);
});
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
