// Mobile Menu Toggle
const mobileMenuBtn = document.getElementById("mobileMenuBtn");
const navMenu = document.getElementById("navMenu");

mobileMenuBtn.addEventListener("click", () => {
  navMenu.classList.toggle("show");
  mobileMenuBtn.innerHTML = navMenu.classList.contains("show")
    ? '<i class="fas fa-times"></i>'
    : '<i class="fas fa-bars"></i>';
});

// Carousel Functionality
const carouselItems = document.querySelectorAll(".carousel-item");
const prevBtn = document.getElementById("prevSlide");
const nextBtn = document.getElementById("nextSlide");
const dotsContainer = document.getElementById("carouselDots");
let currentIndex = 0;
let autoPlayInterval;
const slideInterval = 6000; // 6 seconds

// Create dots
carouselItems.forEach((_, index) => {
  const dot = document.createElement("div");
  dot.classList.add("dot");
  if (index === 0) dot.classList.add("active");
  dot.addEventListener("click", () => goToSlide(index));
  dotsContainer.appendChild(dot);
});

const dots = document.querySelectorAll(".dot");

// Function to go to specific slide
function goToSlide(index) {
  carouselItems[currentIndex].classList.remove("active");
  dots[currentIndex].classList.remove("active");

  currentIndex = (index + carouselItems.length) % carouselItems.length;

  carouselItems[currentIndex].classList.add("active");
  dots[currentIndex].classList.add("active");

  // Reset autoplay timer when manually navigating
  resetAutoPlay();
}

// Next slide function
function nextSlide() {
  goToSlide(currentIndex + 1);
}

// Previous slide function
function prevSlide() {
  goToSlide(currentIndex - 1);
}

// Auto-play functionality
function startAutoPlay() {
  autoPlayInterval = setInterval(nextSlide, slideInterval);
}

function resetAutoPlay() {
  clearInterval(autoPlayInterval);
  startAutoPlay();
}

// Event listeners
prevBtn.addEventListener("click", prevSlide);
nextBtn.addEventListener("click", nextSlide);

// Start autoplay
startAutoPlay();

// Pause autoplay when hovering over carousel
const carousel = document.querySelector(".carousel");
carousel.addEventListener("mouseenter", () => {
  clearInterval(autoPlayInterval);
});

carousel.addEventListener("mouseleave", startAutoPlay);

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    const targetId = this.getAttribute("href");
    if (targetId === "#") return;

    const targetElement = document.querySelector(targetId);
    if (targetElement) {
      window.scrollTo({
        top: targetElement.offsetTop - 70,
        behavior: "smooth",
      });

      // Close mobile menu if open
      if (navMenu.classList.contains("show")) {
        navMenu.classList.remove("show");
        mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
      }
    }
  });
});
