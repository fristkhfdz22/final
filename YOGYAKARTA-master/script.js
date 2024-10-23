
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) { // Ganti 50 dengan nilai yang Anda inginkan
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    $(document).ready(function() {
        // Add 'scrolled' class to navbar on scroll
        $(window).scroll(function() {
            if ($(this).scrollTop() > 0) {
                $('.navbar').addClass('scrolled');
            } else {
                $('.navbar').removeClass('scrolled');
            }
        });
    });


    document.addEventListener('DOMContentLoaded', function () {
        const counters = document.querySelectorAll('.count');
    
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-to');
                const count = +counter.innerText;
    
                const increment = target / 200; // Ubah 200 sesuai kecepatan yang diinginkan
    
                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 1); // Ubah 1 ms sesuai kecepatan yang diinginkan
                } else {
                    counter.innerText = target;
                }
            };
    
            updateCount();
        });
    });
    


let currentSlide = 0;
const slides = document.querySelector('.slide-content');
const cardWrapper = document.querySelectorAll('.card-wrapper');
const totalSlides = cardWrapper.length;

function moveSlide(direction) {
    currentSlide += direction;
    if (currentSlide < 0) {
        currentSlide = totalSlides - 1;
    } else if (currentSlide >= totalSlides) {
        currentSlide = 0;
    }
    updateSlidePosition();
}

function updateSlidePosition() {
    slides.style.transform = `translateX(-${currentSlide * 100}%)`;
}

// Automatic slide change every 4 seconds
setInterval(() => {
    moveSlide(1);
}, 4000);



