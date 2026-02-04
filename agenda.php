<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda - Next Frontier 2026</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- <script src="script.js"></script> -->
</head>

<body>
    <!-- Header -->
    <?php include('header.php'); ?>


    <section class="track-selection">
        <div class="container">
            <div class="track-buttons">
                <a href="#alltrack">
                    <button class="track-btn active" data-track="all">All Tracks</button>
                </a>
                <a href="#entrepreneur">
                    <button class="track-btn" data-track="entrepreneur">Opening
                        keynote
                    </button>
                </a>
                <a href="#career">
                    <button class="track-btn" data-track="career">Founders Panel</button>
                </a>
                <a href="#sme">
                    <button class="track-btn" data-track="sme">Networking</button>
                </a>
                <a href="#tech">
                    <button class="track-btn" data-track="tech">Keynote 2</button>
                </a>
                <a href="#networking-day1">
                    <button class="track-btn" data-track="networking">Trailblazer Awards</button>
                </a>
            </div>
        </div>
    </section>

    <!-- Agenda Timeline -->
    <section class="agenda-section">
        <div class="container agenda-container">
            <!-- Day 1 -->
            <div class="agenda-day">
                <!-- <div class="day-header">
                    <h2>Day 1: September 20, 2025</h2>
                </div> -->

                <!-- Session 1 -->
                <div class="time-slot" data-tracks="all networking" id="networking-day1">
                    <div class="time">8:30 – 9:15 AM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track" >Registration & Curated Networking</span>
                                <h3 class="session-title">Guided networking, sector-based interaction</h3>
                            </div>
                        </div>
                        <!-- <p class="session-description">Guided networking, sector-based interaction</p> -->
                        <p class="session-location"><i class="fas fa-map-marker-alt"></i>Main Venue</p>
                    </div>
                </div>

                <!-- Session 2 -->
                <div class="time-slot" data-tracks="all" id="alltrack">
                    <div class="time">9:15 – 9:30 AM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">Opening & Conference Framing</span>
                                <h3 class="session-title">What Beyond Boundaries means for today’s aspiring entrepreneur</h3>
                                <!-- <p class="session-speaker">Mr Chigbo</p> -->
                            </div>
                        </div>
                        <!-- <p class="session-description">What Beyond Boundaries means for today’s aspiring entrepreneur</p> -->
                        <p class="session-location"><i class="fas fa-map-marker-alt"></i>Main Venue</p>
                    </div>
                </div>

                <!-- Session 3 -->
                <!-- <div class="time-slot" data-tracks="all" id="networking-day1">
                    <div class="time">10:30 AM</div>
                    <div class="session break-session">
                        <div class="session-header">
                            <div>
                                <h3 class="session-title">Morning Break & Networking</h3>
                            </div>
                        </div>
                        <p class="session-location"><i class="fas fa-map-marker-alt"></i> Exhibition Hall</p>
                    </div>
                </div> -->

                <!-- Session 4 -->
                <div class="time-slot" data-tracks="entrepreneur tech" id="entrepreneur">
                    <div class="time">9:30 – 10:15 AM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">Opening Keynote</span>
                                <h3 class="session-title">From Idea to Execution: What I Wish I Knew — and What Tools I’d Use Today</h3>
                                <!-- <p class="session-speaker">Tunde Williams, Investment Director, Pan-African Ventures</p> -->
                            </div>
                        </div>
                        <!-- <p class="session-description">From Idea to Execution: What I Wish I Knew — and What Tools I’d Use Today</p> -->
                        <p class="session-location"><i class="fas fa-map-marker-alt"></i>Main Venue</p>
                    </div>
                </div>

                <!-- Session 5 -->
                <div class="time-slot" data-tracks="career" id="career">
                    <div class="time">10:15 – 10:30 AM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">Coffee Break</span>
                                <!-- <h3 class="session-title">Opening Keynote: “The Next Frontier: Thriving in a Bold New Era” (Era of work, growth and opportunity)</h3> -->
                                <!-- <p class="session-speaker">Oluwaseun Adebayo, Head of Talent, Andela</p> -->
                            </div>
                        </div>
                        <!-- <p class="session-description">Visionary keynote by a thought leader.</p>
                        <p class="session-location"><i class="fas fa-map-marker-alt"></i>Main Venue</p> -->
                    </div>
                </div>

                <!-- Session 6 -->
                <div class="time-slot" data-tracks="sme" id="sme">
                    <div class="time">10:30 – 11:45 AM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">Panel Session</span>
                                <h3 class="session-title">Starting Right: Avoiding the Mistakes That Kill Businesses Early</h3>
                                <!-- <p class="session-speaker">Ngozi Adebayo, CTO, DigitalPay Africa</p> -->
                            </div>
                        </div>
                        <!-- <p class="session-description">Facilitated mingling with networking cards or games.</p> -->
                        <p class="session-location"><i class="fas fa-map-marker-alt"></i>Main Venue</p>
                    </div>
                </div>

                <!-- More sessions for Day 1... -->
            </div>

            <!-- Day 2 -->
            <div class="agenda-day">
                <!-- <div class="day-header">
                    <h2>Day 2: September 21, 2025</h2>
                </div> -->

                <!-- Session 1 -->
                <div class="time-slot" data-tracks="all networking" id="networking">
                    <div class="time">11:45 – 12:30 PM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">Core Practical Session (AI Integrated)</span>
                                <h3 class="session-title">Starting Smart in a Digital World: Using AI as a Business Advantage</h3>
                            </div>
                        </div>
                        <!-- <p class="session-description">Facilitated mingling with networking cards or games.</p> -->
                        <p class="session-location"><i class="fas fa-map-marker-alt"></i>Main Venue</p>
                    </div>
                </div>

                <!-- Session 2 -->
                <div class="time-slot" data-tracks="entrepreneur tech" id="entrepreneur">
                    <div class="time">12:30 – 1:30 PM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">Lunch & Networking</span>
                                <h3 class="session-title">Themed tables and guided interaction</h3>
                                <!-- <p class="session-speaker">Kwame Okafor, CEO, GreenFuture Energy</p> -->
                            </div>
                        </div>
                        <!-- <p class="session-description">Hands-on session with facilitator-guided planning</p> -->
                        <p class="session-location"><i class="fas fa-map-marker-alt"></i>Main Venue</p>
                    </div>
                </div>

                <!-- Session 3 -->
                <div class="time-slot" data-tracks="career" id="career">
                    <div class="time">1:30 – 2:15 PM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">Career-to-Business Transition Session</span>
                                <h3 class="session-title">Turning Skills & Experience into Viable Businesses</h3>
                                <!-- <p class="session-speaker">Fatima Diallo, Founder, AgriTech Solutions</p> -->
                            </div>
                        </div>
                        <!-- <p class="session-description">Short musical performance to keep energy high</p> -->
                        <p class="session-location"><i class="fas fa-map-marker-alt"></i>Main Venue</p>
                    </div>
                </div>

                <!-- More sessions for Day 2... -->

                <!-- Session 4 -->
                <div class="time-slot" id="networking-day1" data-tracks="all networking">
                    <div class="time">2:15 – 3:00 PM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">Fireside Chat</span>
                                <h3 class="session-title">Building the Future in Nigeria: What’s Changing and What’s Next</h3>
                            </div>
                        </div>
                        <!-- <p class="session-description">Talk by a renowned guest entrepreneur or investor.</p> -->
                        <p class="session-location"><i class="fas fa-map-marker-alt"></i>Main Venue</p>
                    </div>
                </div>

                <!-- Session 4 -->
                <div class="time-slot" id="networking-day1" data-tracks="all networking">
                    <div class="time">3:00 – 3:15 PM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">Break</span>
                                <!-- <h3 class="session-title">Guest Speaker 2: “Tech, Talent, and Tenacity.</h3> -->
                            </div>
                        </div>
                        <!-- <p class="session-description">How Tech can enhance the productivity of your business and as a career professional. Tech tools to enhance your business from finance to projects</p>
                        <p class="session-location"><i class="fas fa-map-marker-alt"></i>Main Venue</p> -->
                    </div>
                </div>

                <!-- Session 4 -->
                <div class="time-slot" id="networking-day1" data-tracks="all networking">
                    <div class="time">3:15 – 4:15 PM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">Breakout Sessions</span>
                                <h3 class="session-title">1. Idea Validation & Early Customers</h3>
                                <h3 class="session-title">2. Money, Pricing & Cash Flow</h3>
                                <h3 class="session-title">3.  People, Partnerships & Growth Readiness</h3>
                                 
                            </div>
                        </div>
                        <!-- <p class="session-description">How operational strategy and leadership must adapt from early stage to scale</p> -->
                        <p class="session-location"><i class="fas fa-map-marker-alt"></i>Main Venue</p>
                    </div>
                </div>

                <!-- Session 4 -->
                <div class="time-slot" id="networking-day1" data-tracks="all networking">
                    <div class="time">4:15 – 4:45 PM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">Pitch Deck Session</span>
                                <h3 class="session-title">Real Business Questions, Honest Answers</h3>
                            </div>
                        </div>
                        
                        <!-- <p class="session-description">Awards for impactful startups and innovators. Sponsors/partners.</p> -->
                        <p class="session-location"><i class="fas fa-map-marker-alt"></i>Main Venue</p>
                    </div>
                </div>
                <div class="time-slot" id="networking-day1" data-tracks="all networking">
                    <div class="time">4:45 – 5:00 PM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">Closing Charge</span>
                                <h3 class="session-title">Your Next 90 Days Beyond Boundaries</h3>
                            </div>
                        </div>
                        <!-- <p class="session-description">Awards for impactful startups and innovators. Sponsors/partners.</p> -->
                        <p class="session-location"><i class="fas fa-map-marker-alt"></i>Main Venue</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <!-- <section class="download-section">
        <div class="container">
            <h2>Download the Full Agenda</h2>
            <p>Get the complete conference schedule with all sessions, speakers, and locations to plan your experience.</p>
            <a href="#" class="btn btn-light"><i class="fas fa-download"></i> Download Agenda (PDF)</a>
        </div>
    </section> -->


    <?php include('footer.php'); ?>
</body>

</html>