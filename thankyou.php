<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                            <div class="alert alert-success">Thank you <?php echo $name; ?>!<br><br>Your registration
                                was
                                successful. Your confirmation ticket has been sent to your email.<br><br>

                                <div style="font-size:12px; color:#FF6C0D;">If you do not see the email in your inbox, please check your <strong>Junk/Spam</strong> folder.</div> <br><br>

                                <?php if ($pitch_session == 'yes') { ?>
                                    <a target="_blank" href="https://forms.gle/pJ91iC4osoreirLi8">Click this link to submit your prosposal for the pitch deck session</a> 
                            </div>

                    <?php }
                            endif; ?>



                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const fruitSelect = document.getElementById('fruitSelect');
        const display = document.getElementById('displaySelection');

        fruitSelect.addEventListener('change', function() {
            const selected = this.value;
            display.textContent = 'You selected: ' + selected;
        });
    </script>
</body>

</html>