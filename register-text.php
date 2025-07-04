<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Next Frontier 2025</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href=""> -->
    <!-- <script src="script.js"></script> -->
</head>
<style>
    h1 {
    color: #2c3e50;
    margin-bottom: 20px;
}

h2 {
    color: #2c3e50;
    border-bottom: 1px solid #eee;
    padding-bottom: 10px;
    margin-top: 30px;
}

h3 {
    color: #3498db;
    margin-bottom: 5px;
}

h4 {
    color: #2c3e50;
    margin-bottom: 5px;
}

.event-details {
    margin-bottom: 30px;
}

.ticket-type {
    margin-bottom: 30px;
}

.description {
    font-style: italic;
    color: #7f8c8d;
    margin-top: 0;
}

ul {
    padding-left: 20px;
}

li {
    margin-bottom: 5px;
}

.re {
    display: flex;
    align-items: center;
    justify-content: center;
}

.re .btn:hover {
  background-color: transparent;
  color: black !important;
  transform: translateY(-3px);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}
</style>
<body>
    <?php include('header.php'); ?>
<br>
<br>
<br>
<br>
<br>

    <div class="container">
        <h1>Next Frontier Conference 2025</h1>
        
        <div class="event-details">
            <p><strong>Venue:</strong> Landmark Towers, Lagos</p>
            <p><strong>Date:</strong> Saturday, September 20, 2025</p>
            <p><strong>Theme:</strong> Igniting Potential, Fueling Growth</p>
            <p><strong>Organized by:</strong> Jobrole Consulting Limited</p>
        </div>
        
        <h2>Ticket Categories</h2>
        
        <div class="ticket-type">
            <h3>Standard Ticket - FREE</h3>
            <p class="description">Perfect for aspiring professionals, students, and early-stage entrepreneurs.</p>
            
            <h4>What You Get:</h4>
            <ul>
                <li>Access to keynote sessions</li>
                <li>Access to panel discussions</li>
            </ul>
        </div>
        
        <div class="ticket-type">
            <h3>Premium Ticket - ₦15,000</h3>
            <p class="description">For professionals, founders, and serious growth-minded attendees who want the full immersive experience.</p>
            
            <h4>What You Get (Includes Everything in Free Ticket, PLUS):</h4>
            <ul>
                <li>15-minute Business/Personal Branding speed mentoring</li>
                <li>30 Minutes Post Conference Consultation</li>
                <li>Career Clarity workbook</li>
                <li>Investor-Ready Pitch Deck Template</li>
                <li>Exclusive Conference Souvenirs</li>
                <li>Legal Starter Pack for SMEs (MOU, NDA, SLA)</li>
            </ul>
        </div>
    </div>
    <div class="re">
        <a href="register.php" class="btn">Register Now</a>
    </div>

    <br>

    <?php include('footer.php'); ?>

</body>
</html>