<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<style>
    body {
        background-color: #f8f8f8;
    }

    .register-container {
        margin-top: 5%;
    }

    .x-register-container {
        min-height: calc(100vh - 90px);
    }
</style>
<div class="container x-register-container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 register-container">
            <h2 class="text-center">Register</h2>
            <?php
            // Check if there is an error message to display
            if (isset($_GET['error'])) {
                echo '<div class="alert alert-danger text-center">' . $_GET['error'] . '</div>';
            }
            ?>
            <form action="register_process.php" method="post">
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" id="fname" name="fname" required>
                </div>
                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" id="lname" name="lname" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirm">Confirm Password:</label>
                    <input type="password" class="form-control" id="password_confirm" name="password_confirm" required>
                </div>
                <button type="submit" class="btn btn-success btn-block">Register</button>
            </form>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>