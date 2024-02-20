<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<style>
    body {
        background-color: #f8f8f8;
    }

    .login-container {
        margin-top: 5%;
    }

    .x-login-container {
        min-height: calc(100vh - 90px);
    }
</style>
<div class="container x-login-container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 login-container">
            <h2 class="text-center">Login</h2>
            <?php
            // Check if there is an error message to display
            if (isset($_GET['error'])) {
                echo '<div class="alert alert-danger text-center">' . $_GET['error'] . '</div>';
            }
            // Check if there is an error message to display
            if (isset($_GET['register'])) {
                echo '<div class="alert alert-success text-center">Register successfully...</div>';
            }
            ?>
            <form action="login_process.php" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
                <div class="text-center">
                    <a href="forgot_password.php">Forgot Password?</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>