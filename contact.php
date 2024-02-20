<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<style>
    .x-buy-bg {
        min-height: calc(100vh - 134px);
    }
</style>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-6 x-container">
                <div class="x-menu">
                    <a href="/buy.php" class="btn btn-default x-btn">BUY</a>
                    <a href="/sell.php" class="btn btn-default x-btn">SELL</a>
                    <a href="/rent.php" class="btn btn-default x-btn">RENT</a>
                    <a href="#" class="btn btn-default x-btn active">CONTACT</a>
                    <a href="/about.php" class="btn btn-default x-btn">ABOUT</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 x-buy-bg">
        </div>
    </div>
</div>
<?php include('footer.php'); ?>