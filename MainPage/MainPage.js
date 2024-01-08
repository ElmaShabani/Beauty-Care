 
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

    showSlide(currentIndex);

    document.querySelector('.prev').addEventListener('click', prevSlide);
    document.querySelector('.next').addEventListener('click', nextSlide);
});
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
