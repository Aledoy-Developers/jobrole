<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <?php include('header.php'); ?>
    <br>
    <br>
    <br>


    <div class="container mt-5">
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

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>