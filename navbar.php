<?php
session_start();
?>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid navbar-color">
        <div class="row">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand navbar-title" href="/index.php">REAL ESTATE</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <li class="navbar-btn"><a href="/register.php">SIGN UP</a></li>
                            <li class="navbar-btn"><a href="/login.php">SIGN IN</a></li>
                        <?php } else { ?>
                            <li class="navbar-btn"><a href="/logout.php">LOGOUT</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>