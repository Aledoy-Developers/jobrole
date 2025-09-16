<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Now - Next Frontier 2025</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<style>
.custom-select-container {
    position: relative;
    display: inline-block;
    width: 100%;
    background-color: transparent;
}

.custom-select-display {
    padding: 10px 20px;
    font-size: 16px;
    border: 1px solid #ccc;
    background-color: white;
    cursor: pointer;
    user-select: none;
}

.custom-options {
    display: none;
    position: absolute;
    background-color: white;
    border: 1px solid #ccc;
    width: 100%;
    z-index: 1;
}

.custom-options div {
    padding: 10px;
    display: flex;
    flex-direction: column;
    cursor: pointer;
}

.custom-options div:hover {
    background-color: #f1f1f1;
}

.show-options .custom-options {
    display: block;
}

.select-wrapper {
    margin-bottom: 20px;
}

#fruitSelect {
    width: 100%;
}

#choose {
    width: 100%;
}

select {
    padding: 10px 15px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.selected-value {
    font-size: 18px;
    font-weight: bold;
    color: #333;
}
</style>

<body>
    <?php include('header.php'); ?>
    <br>
    <br>
    <br>


    <div class="container mt-5 mb-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form p-4 border rounded bg-light">
                    <h2 class="text-center mb-4">Conference Registration Form</h2>

                    <form action="proc-register.php" method="post">

                        <?php if (!empty($msg) && $msg == 'success') : ?>
                        <div class="alert alert-success">Message Sent</div>
                        <?php endif; ?>

                        <?php if (!empty($msg) && $msg == 'error') : ?>
                        <div class="alert alert-danger"><?php echo htmlspecialchars($comment); ?></div>
                        <?php endif; ?>

                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name:</label>
                            <input type="text" id="name" name="fullname" class="form-control"
                                value="<?php echo htmlspecialchars($fullname ?? ''); ?>">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" id="email" name="email" class="form-control"
                                value="<?php echo htmlspecialchars($email ?? ''); ?>">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number:</label>
                            <input type="number" id="phone" name="phone" class="form-control"
                                value="<?php echo htmlspecialchars($phone ?? ''); ?>">
                        </div>

                        <div class="mb-3">
                            <label for="organization" class="form-label">Organization/Company:</label>
                            <input type="text" id="organization" name="organization" class="form-control"
                                value="<?php echo htmlspecialchars($organization ?? ''); ?>">
                        </div>

                        <div class="mb-3">
                            <label for="position" class="form-label">Position:</label>
                            <input type="text" id="position" name="position" class="form-control"
                                value="<?php echo htmlspecialchars($position ?? ''); ?>">
                        </div>

                        <div class="dropdown mb-3">
                            <div class="select-wrapper">
                                <label for="fruitSelect">How you do you want to attend?</label>
                                <select id="fruitSelect" name="attend">
                                    <!-- <option value="" disabled selected>Choose One</option> -->
                                    <option value="physical" name="option">Physical</option>
                                </select>
                            </div>
                        </div>

                        <div class="dropdown mb-3">
                            <div class="select-wrapper">
                                <label for="fruitSelect">Category:</label>
                                <select id="choose" name="category">
                                    <option value="" disabled selected>Select an option</option>
                                    <option value="no" name="option">Standard Ticket - FREE (Closed)
                                    </option>
                                    <option value="yes" name="option">Premium Ticket - ₦15,000</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="dropdown mb-3">
                            <div class="select-wrapper">
                                <label for="fruitSelect">Do you want a certificate of attendance?</label>
                                <select id="choose" name="certified">
                                    <option value="" disabled selected>Choose One</option>
                                    <option value="yes" name="option">Yes</option>
                                    <option value="no" name="option">No</option>
                                </select>
                            </div>
                        </div> -->

                        <div class="dropdown mb-3">
                            <div class="select-wrapper">
                                <!-- <label for="2"></label> -->
                                <!-- <input type="text" id="hide" name="position" class="form-control" hidden> -->
                                <div class="" id="hide" hidden>
                                    <p>Please make payment to the account details below. Send receipt via WhatsApp
                                        <strong>+234 916 000 5955</strong>
                                    </p>
                                    <!-- <p><strong>UBA: </strong>1023747141 / Jobrole Consulting Limited.<br><strong>Price:
                                        </strong>#15,000.</p> -->
                                    <p>
                                        <strong>Account number: </strong>1023747141<br>
                                        <strong>Bank: </strong>UBA <br>
                                        <strong>Name: </strong>Jobrole Consulting Limited. <br>
                                        <strong>Price: </strong>#15,000. <br>
                                    </p>
                                </div>
                            </div>
                        </div>




                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>


    <script>
    document.getElementById('choose').addEventListener('change', function() {
        const message = document.getElementById('hide');
        if (this.value === "yes") {
            message.hidden = false;
        } else {
            message.hidden = true;
        }
    });
    </script>

    <script>
    const fruitSelect = document.getElementById('fruitSelect');
    const display = document.getElementById('displaySelection');

    fruitSelect.addEventListener('change', function() {
        const selected = this.value;
        display.textContent = 'You selected: ' + selected;
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>