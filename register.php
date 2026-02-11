<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Next Frontier 2026</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
    border-bottom: 1px solid #b9b9b9;
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
    list-style: none;
}

.re {
    display: flex;
    align-items: center;
    justify-content: center;
}
.re .btn{
    margin-bottom: 20px;
}
.re .btn:hover {
    background-color: transparent;
    color: black !important;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}
</style>



<style>

    .card-container {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 30px;
        margin-bottom: 60px;
    }
    @media (max-width: 768px) {
        .card-container{
            display: block;
        }
        .card{
            width: 85% !important;
            margin: 35px auto;
        }
    }

    .card {
        background: #ffffff;
        width: 28%;
        border-radius: 12px;
        padding: 15px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card h2 {
        margin: 0;
        font-size: 22px;
        color: #222;
    }

    .price {
        font-size: 26px;
        font-weight: bold;
        margin: 15px 0;
        color: #022083;
    }

    .card ul {
        padding-left: 18px;
        margin: 15px 0;
    }

    .card ul li {
        margin-bottom: 8px;
        color: #3a3a3a;
    }
    ul li i {
    margin-right: 5px;
    font-size: 20px;
    font-weight: 500;
    color: #FF6C0D;
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
        <h1>Next Frontier Conference 2026</h1>
        <div class="event-details">
            <p><strong>Venue:</strong> AGIP Recital Hall, Muson Centre, Onikan, Lagos</p>
            <p><strong>Date:</strong> Saturday, September 19, 2026</p>
            <p><strong>Theme:</strong> Beyond Boundaries: Building the Future</p>
            <p><strong>Organized by:</strong> Jobrole Consulting Limited</p>
        </div>

        <h2>Ticket</h2>

        <!-- <div class="ticket-type">
            <h3>Standard Ticket - FREE
            </h3>
            <p class="description">Perfect for aspiring professionals, students, and early-stage entrepreneurs.</p>

            <h4>What You Get:</h4>
            <ul>
                <li>Access to keynote sessions</li>
                <li>Access to panel discussions</li>
            </ul>
        </div> -->

        <!-- <div class="ticket-type">
    <h3>₦30,000 Ticket</h3>

    <p>Early Birds - ₦20,000 (Limited Time Offer)</p>
    <p class="description">For professionals, founders, and serious growth-minded attendees who want the full immersive experience.</p>

    <h4>What You Will Get (₦30,000 Ticket Value):</h4>
    <ul>
        <li><strong>30-Minute Post-Conference Strategy Consultation</strong> – One-on-one business or career growth session with Jobrole Consulting (worth ₦50,000)</li>
        <li><strong>₦30,000 Discount Voucher</strong> – Redeemable on any Jobrole Business or HR Consulting Service within 3 months</li>
        <li><strong>Pitch & Win Competition</strong> – Seize the exclusive opportunity to pitch your business and win a <strong>&#8358;500,000</strong> grand prize</li>
        <li><strong>Conference Material Pack</strong> – Practical worksheets, templates, and strategy tools used during the sessions</li>
        <li><strong>Light Refreshments</strong> – Snacks and drinks throughout the conference</li>
        <li><strong>Premium Conference Souvenirs</strong> – Curated business-themed gift pack</li>
        <li><strong>Priority Networking Access</strong> – Special access to speakers, panelists, and key participants</li>
    </ul>
</div> -->

    </div>
    




<div class="card-container">

    <!-- General Pass -->
    <div class="card">
        <div>
            <h2>General</h2>
            <div class="price">₦10,000</div>
            <ul>
    <li><i class="fa-solid fa-check"></i> Main conference sessions</li>
    <li><i class="fa-solid fa-check"></i> Keynotes & panels</li>
    <li><i class="fa-solid fa-check"></i> Exhibition & networking areas</li>
    <li><i class="fa-solid fa-xmark"></i> No pitch access</li>
    <li><i class="fa-solid fa-xmark"></i> Not eligible for grant</li>
</ul>

        </div>
        <div class="re">
        <a href="register-form.php" class="btn">Register Now</a>
    </div>

    </div>

    <!-- Aspiring Entrepreneur Pass -->
    <div class="card">
        <div>
            <h2>Aspiring Entrepreneur</h2>
            <div class="price">₦20,000</div>
            <ul>
                <li><i class="fa-solid fa-check"></i> Everything in General</li>
                <li><i class="fa-solid fa-check"></i> Eligible for business pitch deck</li>
                <li><i class="fa-solid fa-check"></i> Grand prize of ₦500,000</li>
                <li><i class="fa-solid fa-check"></i> Refreshments</li>
                <li><i class="fa-solid fa-check"></i> Premium conference souvenirs</li>
            </ul>
        </div>
        <div class="re">
        <a href="register-form.php" class="btn">Register Now</a>
    </div>

    </div>

    <!-- Premium Pitch Pass -->
    <div class="card">
        <div>
            <h2>Premium Pitch</h2>
            <div class="price">₦30,000</div>
            <ul>
                <li><i class="fa-solid fa-check"></i> Everything in Aspiring Entrepreneur</li>
                <li><i class="fa-solid fa-check"></i> 30-minute post-conference strategy consultation</li>
                <li><i class="fa-solid fa-check"></i> One-on-one session with Jobrole Consulting</li>
                <li><i class="fa-solid fa-check"></i> ₦30,000 discount voucher (3 months validity)</li>
            </ul>
        </div>
        <div class="re">
        <a href="register-form.php" class="btn">Register Now</a>
    </div>

    </div>

</div>







    <br>

    <?php include('footer.php'); ?>

</body>

</html>