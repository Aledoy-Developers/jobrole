<html>

<head>
    <title>Jobrole Payment Page</title>
    <link rel="shortcut icon" href="image/icon.png" />
    <script src="jquery.js"></script>
    <style>
        body {
            background-color: #ccc;
        }
    </style>

</head>

<body>
    <div style="margin: auto; width:600px; padding:20px; background-color:#fff; text-align: center; margin-top: 50px;">
        <a href="index"><img src="./dist/images/logo.png" alt="" class="img-fluid"></a>
        <h2>Jobrole Secure Payment Page</h2>

        You can transfer the sum of &#x20A6;20,000 to the bank details below:<br><br><strong> </strong>
        <strong>Account Number</strong>: 1023747141 - <br>

        <strong>Bank</strong>: UBA - <br>

        <strong>Account Name</strong>: Jobrole Consulting Limited.<br><br>
        -- OR -- <br><br>
        <form id="paymentForm">
            <div>
                <input type="hidden" id="email-address" required value="<?php echo $email; ?>" />

                <input type="hidden" id="amount" required value="20000" />
                <input type="hidden" id="name" value="<?php echo $fullname ?>" />
                <input type="hidden" id="phone" value="<?php echo $phone ?>" />
                <input type="hidden" id="pitch" value="<?php echo $pitch_session ?>" />

                <input type="hidden" id="last-name" />
            </div>
            <div class="form-submit">
                <button type="submit" style="width:50%; height: 40px; background-color:#2C9846; color:#fff; font-weight:bold; font-size:18px;" onclick="payWithPaystack()">Pay with Debit Card </button>
            </div>
        </form>
        <br>
        <img src="dist/images/paystack-logo.png" style="height: 60px; margin-top:50px;">

        <br><br> <a href="./">Back to Home Page</a>

    </div>
</body>
<script src="https://js.paystack.co/v1/inline.js"></script>

<script src="paid.js"></script>

</html>