<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<body>
    <?php include('header.php'); ?>


    <section class="about-hero">
        <div class="container">
            <div class="about-hero-content">
                <h1>About Next Frontier 2025</h1>
                <p>Discover the vision, mission, and people behind Africa's premier conference for innovators and changemakers</p>
            </div>
        </div>
    </section>

    <!-- About Conference Section -->
    <section class="about-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Conference</h2>
                <p>The Next Frontier Conference is more than an event - it's a movement to unlock Africa's potential</p>
            </div>
            
            <div class="about-grid">
                <div class="about-card">
                    <img src="https://images.unsplash.com/photo-1529333166437-7750a6dd5a70?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="Conference Audience">
                    <div class="about-card-content">
                        <h3>Our Story</h3>
                        <p>Founded in 2020, the Next Frontier Conference was born from a need to connect Africa's brightest minds and boldest innovators. What began as a small gathering has grown into the continent's premier platform for business and career transformation.</p>
                    </div>
                </div>
                
                <div class="about-card">
                    <img src="https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="Networking at Conference">
                    <div class="about-card-content">
                        <h3>Our Impact</h3>
                        <p>With over 5,000 attendees across our events, we've facilitated partnerships that have launched 200+ startups, created 3,000+ jobs, and attracted $50M+ in investment to African businesses.</p>
                    </div>
                </div>
                
                <div class="about-card">
                    <img src="https://images.unsplash.com/photo-1496318447583-f524534e9ce1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Awards Ceremony">
                    <div class="about-card-content">
                        <h3>Our Community</h3>
                        <p>Join a growing network of 15,000+ professionals, entrepreneurs, and innovators who are shaping Africa's economic future through collaboration and knowledge sharing.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission">
        <div class="container">
            <h2>Our Mission</h2>
            <p>To ignite individual and collective potential across Africa by creating platforms for learning, connection, and co-creation that fuel business, career, and community growth.</p>
            <a href="register.html" class="btn">Join the Movement</a>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team">
        <div class="container">
            <div class="section-title">
                <h2>Meet The Team</h2>
                <p>The passionate individuals driving the Next Frontier vision forward</p>
            </div>
            
            <div class="team-grid">
                <div class="team-member">
                    <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=761&q=80" alt="Amina Johnson">
                    <h3>Amina Johnson</h3>
                    <p>Founder & CEO</p>
                </div>
                
                <div class="team-member">
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Kwame Okafor">
                    <h3>Kwame Okafor</h3>
                    <p>Conference Director</p>
                </div>
                
                <div class="team-member">
                    <img src="https://images.unsplash.com/photo-1619895862022-09114b41f16f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Ngozi Adebayo">
                    <h3>Ngozi Adebayo</h3>
                    <p>Partnerships Lead</p>
                </div>
                
                <div class="team-member">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Tunde Williams">
                    <h3>Tunde Williams</h3>
                    <p>Program Director</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Ready to Be Part of Africa's Next Frontier?</h2>
            <p>Join us on September 20, 2025 at Landmark Towers, Lagos for an unforgettable experience of learning, networking, and growth.</p>
            <a href="register.php" class="btn">Register Now</a>
        </div>
    </section>

    <?php include('footer.php'); ?>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const navMenu = document.getElementById('navMenu');
        
        mobileMenuBtn.addEventListener('click', () => {
            navMenu.classList.toggle('show');
            mobileMenuBtn.innerHTML = navMenu.classList.contains('show') ? 
                '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    if (navMenu.classList.contains('show')) {
                        navMenu.classList.remove('show');
                        mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
                    }
                }
            });
        });
    </script>

</body>
</html>