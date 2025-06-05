<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>

<body>

    <?php include('header.php'); ?>


    <br><br><br>
    <div class="form">
        <h2 class="head">Conference Registration Form</h2>

        <form action="proc-register.php" method="post">

            <?php if ($msg == 'success') { ?>
                <div class="alert alert-success">Message Sent</div>
            <?php } ?>

            <?php if ($msg == 'error') { ?>
                <div class="alert alert-danger"><?php echo $comment; ?></div>
            <?php } ?>

            <label for="name">Full Name:</label>
            <input type="text" id="name" name="fullname" value="<?php echo $fullname; ?>">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>">

            <label for="phone">Phone Number:</label>
            <input type="number " id="phone" name="phone" value="<?php echo $phone; ?>">

            <label for="organization">Organization/Company:</label>
            <input type="text" id="organization" name="organization" value="<?php echo $organization; ?>">

            <label for="position">Position:</label>
            <input type="text" id="position" name="position" value="<?php echo $position; ?>">

            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>