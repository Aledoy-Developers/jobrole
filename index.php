<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next Frontier Conference 2025 | JobRole Consulting</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- <script src="script.js"></script> -->
</head>

<body>
    <!-- Header -->
    <?php include('header.php'); ?>

    <!-- Hero Carousel -->
    <section class="hero">
        <div class="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 - Conference Hero Banner -->
                <div class="carousel-item active" style="background-image: url('images/1.png');">
                    <div class="carousel-content">
                        <h1>Next Frontier Conference 2025</h1>
                        <p>Theme: Igniting Potential, Fueling Growth</p>
                        <p>📍 Landmark Towers, Lagos | Saturday, September 20, 2025</p>
                        <a href="register.php" class="btn">Register Now</a>
                    </div>
                </div>

                <!-- Slide 2 - Vision & Theme -->
                <div class="carousel-item" style="background-image: url('images/2.png');">
                    <div class="carousel-content">
                        <h1>Unlocking Africa's Future</h1>
                        <p>Innovation, Talent & Vision in a Changing World</p>
                        <p>Be part of a future-forward gathering where ideas, talent, and technology collide to shape what's next.</p>
                        <a href="agenda.php" class="btn">Explore Full Agenda</a>
                    </div>
                </div>

                <!-- Slide 3 - Key Sessions & Speakers -->
                <div class="carousel-item" style="background-image: url('images/3.png');">
                    <div class="carousel-content">
                        <h1>Dynamic Speakers. Powerful Conversations.</h1>
                        <p>From startups to enterprises, meet Africa's top thinkers, doers, and builders.</p>
                        <a href="speaker.php" class="btn">Meet the Speakers</a>
                    </div>
                </div>

                <!-- Slide 4 - Interactive Experiences -->
                <div class="carousel-item" style="background-image: url('images/4.png');">
                    <div class="carousel-content">
                        <h1>Workshops. Networking. Live Problem-Solving.</h1>
                        <p>Design your 2026 blueprint in breakout sessions for career, SME, or founder growth.</p>
                        <p>Take part in The Growth Exchange – Solve It Live!</p>
                    </div>
                </div>

                <!-- Slide 5 - Awards & Celebration -->
                <!-- <div class="carousel-item" style="background-image: url('images/5.jpeg');">
                    <div class="carousel-content">
                        <h1>Next Frontier Trailblazers Awards</h1>
                        <p>Celebrate impactful startups and leaders moving Africa forward.</p>
                        <p>Enjoy good vibes with comedy, music, and surprises.</p>
                        <a href="#awards" class="btn">Nominate a Trailblazer</a>
                    </div>
                </div> -->
            </div>

            <!-- Carousel Controls -->
            <div class="carousel-control prev" id="prevSlide">
                <i class="fas fa-chevron-left"></i>
            </div>
            <div class="carousel-control next" id="nextSlide">
                <i class="fas fa-chevron-right"></i>
            </div>

            <div class="carousel-dots" id="carouselDots">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="section-title">
                <h2>Next Frontier Conference 2025</h2>
                <p>Welcome to The Next Frontier Conference 2025 <strong>Date:</strong> September 20, 2025
                </p>
            </div>

            <div class="about-content">
                <div class="about-text">
                    <h3>Why We're Hosting the Next Frontier 2025</h3>
                    <p>The Next Frontier Conference is where visionaries, and innovators collide to shape Africa’s future of work and business. Whether you’re an entrepreneur, SME founder, career professional, or a growth-seeker, this one-day experience is designed to equip you with clarity, connections, and a community for your next big leap.
                    </p>
                    <!-- <p>As the world of work rapidly evolves and Africa's entrepreneurial landscape continues to expand, it is critical that startups, jobseekers, SMEs, and founders are not just keeping pace but leading with Clarity, vision, and adaptability. This conference is a bold response to that need.</p> -->
                    <a href="register.php" class="btn">Register Now</a>
                </div>

                <div class="about-image">
                    <img src="images/images.jpg">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <!-- <div class="section-title">
                <h2>About The Next Frontier 2025</h2>
                <p>Igniting Potential, Fueling Growth across Africa</p>
            </div> -->

                <div class="about-content about-swap">
                    <div class="about-image md-6">
                        <img src="images/images.jpg" class="img-fluid">
                    </div>


                    <div class="about-text md-6">
                        <h3>What to Expect</h3>
                        <p>
                        <ul>
                            <li>Actionable strategies from top industry minds</li>
                            <li>Founders' stories of bold growth in Africa</li>
                            <li>Hands-on workshops tailored to your stage</li>
                            <li>Speed mentoring</li>
                            <li>Recognition for trailblazers</li>
                            <li>High-impact networking, entertainment, and insight</li>
                        </ul>
                        <strong>Ready to step into your next frontier? Join 200+ innovators and changemakers as we unlock the future together.</strong>
                        </p>
                        <a href="register.php" class="" style="padding: 7px;">Register Now</a>
                        <a href="register.php" class="" style="padding: 7px;">Become a Sponsor</a>
                        <a href="register.php" class="" style="padding: 7px;">Become a Partner</a>
                        <a href="agenda.php" class="" style="padding: 7px;">View Agenda</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <?php include('footer.php'); ?>

    <script>
        // Carousel Functionality
        const carouselItems = document.querySelectorAll('.carousel-item');
        const prevBtn = document.getElementById('prevSlide');
        const nextBtn = document.getElementById('nextSlide');
        const dotsContainer = document.getElementById('carouselDots');
        let currentIndex = 0;
        let autoPlayInterval;
        const slideInterval = 6000; // 6 seconds

        // Create dots
        carouselItems.forEach((_, index) => {
            const dot = document.createElement('div');
            dot.classList.add('dot');
            if (index === 0) dot.classList.add('active');
            dot.addEventListener('click', () => goToSlide(index));
            dotsContainer.appendChild(dot);
        });

        const dots = document.querySelectorAll('.dot');

        // Function to go to specific slide
        function goToSlide(index) {
            carouselItems[currentIndex].classList.remove('active');
            dots[currentIndex].classList.remove('active');

            currentIndex = (index + carouselItems.length) % carouselItems.length;

            carouselItems[currentIndex].classList.add('active');
            dots[currentIndex].classList.add('active');

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
        prevBtn.addEventListener('click', prevSlide);
        nextBtn.addEventListener('click', nextSlide);

        // Start autoplay
        startAutoPlay();

        // Pause autoplay when hovering over carousel
        const carousel = document.querySelector('.carousel');
        carousel.addEventListener('mouseenter', () => {
            clearInterval(autoPlayInterval);
        });

        carousel.addEventListener('mouseleave', startAutoPlay);
    </script>
</body>

</html>