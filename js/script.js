// Mouse tracking effect 
document.addEventListener("mousemove", function (event) {
  let movingImage = document.querySelector(".moving-image");
  // (only if .moving-image exists) 
  if (!movingImage) return; // Exit if .moving-image does not exist

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

  let observer = new IntersectionObserver(
      (entries, observer) => {
          entries.forEach(entry => {
              if (entry.isIntersecting) {
                  let counter = entry.target;
                  let targetValue = parseInt(counter.getAttribute("data-count"), 10);

                  counter.innerHTML = 0; // Reset to 0 before animation

                  setTimeout(() => {
                      counter.innerHTML = targetValue; // Start Odometer animation
                  }, 500);

                  observer.unobserve(counter); // Stop observing after it runs once
              }
          });
      },
      { threshold: 0.5 } // Trigger when 50% of the element is visible
  );

  counters.forEach(counter => observer.observe(counter));
});

// about page brand swiper
// Initialize Swiper
let brandSwiper = new Swiper(".brand-swiper", {
  loop: true,
  autoplay: {
      delay: 2500,
      disableOnInteraction: false
  },
  slidesPerView: 1,
  spaceBetween: 10,
  breakpoints: {
      768: { slidesPerView: 3, spaceBetween: 15 },
      992: { slidesPerView: 5, spaceBetween: 20 }
  },
  on: {
      slideChangeTransitionEnd: function () {
          // Reset WOW.js animations
          let slides = document.querySelectorAll(".swiper-slide");
          slides.forEach(slide => {
              slide.classList.remove("animated"); // Remove old animation
              void slide.offsetWidth; // Trigger reflow (forces animation restart)
              slide.classList.add("animated"); // Reapply animation
          });

      }
  }
});

// Initialize WOW.js on page load
new WOW().init();


