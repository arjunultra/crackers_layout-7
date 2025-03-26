// mouse tracking effect
document.addEventListener("mousemove", function (event) {
    let movingImage = document.querySelector(".moving-image");
    let boundingBox = movingImage.getBoundingClientRect();

    // Get mouse position
    let mouseX = event.clientX;
    let mouseY = event.clientY;

    // Get center position of the image
    let imgCenterX = boundingBox.left + boundingBox.width / 2;
    let imgCenterY = boundingBox.top + boundingBox.height / 2;

    // Calculate movement in opposite direction
    let moveX = (imgCenterX - mouseX) * 0.05; // Adjust intensity
    let moveY = (imgCenterY - mouseY) * 0.05;

    // Apply transform
    movingImage.style.transform = `translate(${moveX}px, ${moveY}px)`;
});
// product swiper
// Product Swiper
const progressCircle = document.querySelector(".autoplay-progress svg");
const progressContent = document.querySelector(".autoplay-progress span");

let swiper = new Swiper(".product-swiper", {
  spaceBetween: 20,
  centeredSlides: false, // Prevents centering when multiple slides are visible
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false
  },
  breakpoints: {
    0: {
      slidesPerView: 1, // Mobile screens
    },
    768: {
      slidesPerView: 2, // Medium screens
    },
    992: {
      slidesPerView: 3, // Large screens
    }
  },
  on: {
    autoplayTimeLeft(s, time, progress) {
      progressCircle.style.strokeDashoffset = 125.6 * (1 - progress);
      progressContent.textContent = `${Math.ceil(time / 1000)}s`;
    }
  }
});
// odometer.js
document.addEventListener("DOMContentLoaded", function () {
    let counters = document.querySelectorAll(".counter");

    counters.forEach(counter => {
        counter.innerHTML = 0; // Reset to 0 before animation
        let targetValue = parseInt(counter.getAttribute("data-count"), 10);

        setTimeout(() => {
            counter.innerHTML = targetValue; // Start Odometer animation
        }, 500);
    });
});
