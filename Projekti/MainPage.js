 
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
function shfaqMesazhin() {
    alert('Everglow Beauty Kosova: Where beauty meets excellence, making us the best choice for all your cosmetic needs!');
    }


    



