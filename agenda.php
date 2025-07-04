<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda - Next Frontier 2025</title>
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
                    <div class="time">9:00 – 10:00 AM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">Networking</span>
                                <h3 class="session-title">Arrival & Registration</h3>
                            </div>
                        </div>
                        <p class="session-description">Arrive, check-in, and enjoy breakfast while networking with
                            fellow attendees.</p>
                        <p class="session-location"><i class="fas fa-map-marker-alt"></i>Main Venue</p>
                    </div>
                </div>

                <!-- Session 2 -->
                <div class="time-slot" data-tracks="all" id="alltrack">
                    <div class="time">10:00 – 10:20 AM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">All Tracks</span>
                                <h3 class="session-title">Official Welcome & Opening Remarks</h3>
                                <p class="session-speaker">Dr. Amina Johnson, Founder & CEO, TechInnovate Africa</p>
                            </div>
                        </div>
                        <p class="session-description">Our opening keynote will set the stage for the conference,
                            exploring emerging trends and opportunities across Africa's innovation landscape.</p>
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
                    <div class="time">10:20 – 10:40 AM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">Entrepreneur | Tech</span>
                                <h3 class="session-title">Opening Performance: Spoken Word</h3>
                                <p class="session-speaker">Tunde Williams, Investment Director, Pan-African Ventures</p>
                            </div>
                        </div>
                        <p class="session-description">Learn from the success stories of Africa's fastest-growing
                            startups and the strategies they used to scale across the continent.</p>
                        <p class="session-location"><i class="fas fa-map-marker-alt"></i>Main Venue</p>
                    </div>
                </div>

                <!-- Session 5 -->
                <div class="time-slot" data-tracks="career" id="career">
                    <div class="time">10:40 – 11:15 AM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">Career Growth</span>
                                <h3 class="session-title">Opening Keynote: “The Next Frontier”</h3>
                                <p class="session-speaker">Oluwaseun Adebayo, Head of Talent, Andela</p>
                            </div>
                        </div>
                        <p class="session-description">Discover the skills and mindsets needed to thrive in the rapidly
                            evolving world of work.</p>
                        <p class="session-location"><i class="fas fa-map-marker-alt"></i>Main Venue</p>
                    </div>
                </div>

                <!-- Session 6 -->
                <div class="time-slot" data-tracks="sme" id="sme">
                    <div class="time">11:15 – 11:40 AM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">SME Growth</span>
                                <h3 class="session-title">Founders Panel: “Building Bold in Africa”</h3>
                                <p class="session-speaker">Ngozi Adebayo, CTO, DigitalPay Africa</p>
                            </div>
                        </div>
                        <p class="session-description">Practical strategies for leveraging technology to grow your small
                            or medium enterprise.</p>
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
                    <div class="time">11:40 – 12:00 PM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">Networking</span>
                                <h3 class="session-title">Networking + Launch Break</h3>
                            </div>
                        </div>
                        <p class="session-description">Start your day with breakfast and valuable connections.</p>
                        <p class="session-location"><i class="fas fa-map-marker-alt"></i>Main Venue</p>
                    </div>
                </div>

                <!-- Session 2 -->
                <div class="time-slot" data-tracks="entrepreneur tech" id="entrepreneur">
                    <div class="time">12:00 – 1:40 PM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">Entrepreneur | Tech</span>
                                <h3 class="session-title">Interactive Workshop Tracks</h3>
                                <p class="session-speaker">Kwame Okafor, CEO, GreenFuture Energy</p>
                            </div>
                        </div>
                        <p class="session-description">Bring your business challenges and get real-time solutions from
                            experts and peers in this interactive session.</p>
                        <p class="session-location"><i class="fas fa-map-marker-alt"></i>Main Venue</p>
                    </div>
                </div>

                <!-- Session 3 -->
                <div class="time-slot" data-tracks="career" id="career">
                    <div class="time">1:40 – 2:00 PM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">Career Growth</span>
                                <h3 class="session-title">Entertainment Break</h3>
                                <p class="session-speaker">Fatima Diallo, Founder, AgriTech Solutions</p>
                            </div>
                        </div>
                        <p class="session-description">Learn how to build a powerful personal brand that opens doors to
                            new opportunities.</p>
                        <p class="session-location"><i class="fas fa-map-marker-alt"></i>Main Venue</p>
                    </div>
                </div>

                <!-- More sessions for Day 2... -->

                <!-- Session 4 -->
                <div class="time-slot" id="networking-day1" data-tracks="all networking">
                    <div class="time">2:00 – 2:30 PM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">Networking</span>
                                <h3 class="session-title">Keynote: “Navigating Change”</h3>
                            </div>
                        </div>
                        <p class="session-description">Join us as we celebrate Africa's most innovative startups and
                            leaders, followed by an evening of music and networking.</p>
                        <p class="session-location"><i class="fas fa-map-marker-alt"></i>Main Venue</p>
                    </div>
                </div>

                <!-- Session 4 -->
                <div class="time-slot" id="networking-day1" data-tracks="all networking">
                    <div class="time">2:30 – 3:00 PM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">Networking</span>
                                <h3 class="session-title">Keynote: “Tech, Talent & Tenacity”</h3>
                            </div>
                        </div>
                        <p class="session-description">Join us as we celebrate Africa's most innovative startups and
                            leaders, followed by an evening of music and networking.</p>
                        <p class="session-location"><i class="fas fa-map-marker-alt"></i>Main Venue</p>
                    </div>
                </div>

                <!-- Session 4 -->
                <div class="time-slot" id="networking-day1" data-tracks="all networking">
                    <div class="time">3:00 – 3:30 PM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">Networking</span>
                                <h3 class="session-title">Speed Mentoring: “The Growth Exchange”</h3>
                            </div>
                        </div>
                        <p class="session-description">Join us as we celebrate Africa's most innovative startups and
                            leaders, followed by an evening of music and networking.</p>
                        <p class="session-location"><i class="fas fa-map-marker-alt"></i>Main Venue</p>
                    </div>
                </div>

                <!-- Session 4 -->
                <div class="time-slot" id="networking-day1" data-tracks="all networking">
                    <div class="time">3:30 – 4:00 PM</div>
                    <div class="session">
                        <div class="session-header">
                            <div>
                                <span class="session-track">Networking</span>
                                <h3 class="session-title">Special Recognition: Trailblazer Awards</h3>
                            </div>
                        </div>
                        <p class="session-description">Join us as we celebrate Africa's most innovative startups and
                            leaders, followed by an evening of music and networking.</p>
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