<html>

<head>
    <title>Jobrole Payment Page</title>
    <link rel="shortcut icon" href="image/icon.png" />
    <script src="jquery.js"></script>
    <style>

        body {
            background-color: #ccc;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>

</head>

<body>
    <div style="margin: auto; width:600px; padding:20px; background-color:#fff; text-align: center; margin-top: 50px;">
        <a href="index"><img src="./dist/images/logo.png" alt="" class="img-fluid"></a>
        <h2>Jobrole Secure Payment Page</h2>

        You can transfer the sum of &#x20A6;20,000 to the bank details below:<br><br><strong> </strong>
        Account Number: <strong>1023747141</strong> <br>

        Bank: <strong>United Bank for Africa</strong><br>

        Account Name: <strong>Jobrole Consulting Limited.</strong><br><br>
        -- OR -- <br><br>
        <form id="paymentForm">
            <div>
                <input type="hidden" id="email-address" required value="<?php echo $email; ?>" />

                <input type="hidden" id="amount" required value="100" />
                <input type="hidden" id="name" value="<?php echo $fullname ?>" />
                <input type="hidden" id="phone" value="<?php echo $phone ?>" />
                <input type="hidden" id="pitch" value="<?php echo $pitch_session ?>" />

                <input type="hidden" id="last-name" />
            </div>
            <div class="form-submit">
                <button type="submit" style="width:50%; height: 40px; background-color:#2C9846; color:#fff; font-weight:bold; font-size:18px;" onclick="payWithPaystack()">Online payment</button>
            </div>
        </form>
        <img src="dist/images/paystack-logo.png" style="height: 60px; margin-top:50px;">

        <br><br> <a href="./">Back to Home Page</a>

    </div>
</body>
<script src="https://js.paystack.co/v1/inline.js"></script>

<script>

 const paymentForm = document.getElementById("paymentForm");
paymentForm.addEventListener("submit", payWithPaystack, false);
const firstName = document.getElementById("name");
const phone = document.getElementById("phone");
const pitch = document.getElementById("pitch");
if (window.location.hostname === "localhost" || window.location.hostname === "127.0.0.1") {
	let key = "pk_test_59e6e667d3990cda6c6a6849eb0c8c303cc333fd";
} else {
	let key = "pk_live_09914a9ba5e76f04a0baaa5db1b4a45958af48f9";
}
function payWithPaystack(e) {
	e.preventDefault();
	let handler = PaystackPop.setup({
		key: "pk_live_09914a9ba5e76f04a0baaa5db1b4a45958af48f9", // Replace with your public key
		email: document.getElementById("email-address").value,
		amount: document.getElementById("amount").value * 100,
		ref: "" + Math.floor(Math.random() * 1000000000 + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
		// label: "Optional string that replaces customer email"
		onClose: function () {
			alert("Window closed.");
		},
		callback: function (response) {
			//   let message = 'Payment complete! Reference: ' + response.reference;
			//   alert(message);
			document.location.href = 'payment-complete.php?em=<?php echo base64_encode($email); ?>&name=<?php echo base64_encode($fullname); ?>&p=<?php echo base64_encode($phone); ?>&s=<?php echo base64_encode($pitch_session); ?>&reference='+response.reference;
		},
	});
	handler.openIframe();
}


</script>

</html>