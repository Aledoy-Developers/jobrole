<header>
    <div class="container">
        <div class="header-content">
            <a href="index.php" class="logo"><img src="images/logo.png"></span></a>
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>
            <nav>
                <ul id="navMenu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="speaker.php">Speakers</a></li>
                    <li><a href="agenda.php">Agenda</a></li>
                    <li><a href="pastevent.php">Past Events</a></li>
                    <!-- <li><a href="award.php">Awards</a></li> -->
                    
                      <li>
                        <a href="register.php" class="new-btton">Register</a>
                     </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
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