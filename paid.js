const paymentForm = document.getElementById("paymentForm");
paymentForm.addEventListener("submit", payWithPaystack, false);
const firstName = document.getElementById("name");
const phone = document.getElementById("phone");
const pitch = document.getElementById("pitch");
if (window.location.hostname === "localhost" || window.location.hostname === "127.0.0.1") {
	let key = "pk_test_59e6e667d3990cda6c6a6849eb0c8c303cc333fd";
} else {
	let key = "pk_test_59e6e667d3990cda6c6a6849eb0c8c303cc333fd";
}
function payWithPaystack(e) {
	e.preventDefault();
	let handler = PaystackPop.setup({
		key: "pk_test_59e6e667d3990cda6c6a6849eb0c8c303cc333fd", // Replace with your public key
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
			document.location.href = `payment-complete?em=${btoa(
				email,
			)}&name=${btoa(firstName)}&p=${btoa(phone)}s=${pitch}&reference=${response.reference}`;
		},
	});
	handler.openIframe();
}
