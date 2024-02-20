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
                    <a href="#" class="btn btn-default x-btn active">BUY</a>
                    <a href="/sell.php" class="btn btn-default x-btn">SELL</a>
                    <a href="/rent.php" class="btn btn-default x-btn">RENT</a>
                    <a href="/contact.php" class="btn btn-default x-btn">CONTACT</a>
                    <a href="/about.php" class="btn btn-default x-btn">ABOUT</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 x-buy-bg">
            <div class="container x-buy-items">
                <?php
                require("./utils/database.php");
                $sql = "SELECT * FROM products order by id asc";
                $result = $conn->query($sql);
                $products = array();
                while ($row = $result->fetch_assoc()) {
                    $products[] = $row;
                }
                ?>
                <div class="row">
                    <?php foreach ($products as $product) { ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="thumbnail-link" href="javascript:void(0)">
                                <div class="thumbnail thumbnail-0">
                                    <img src="./assets<?= $product["img_path"] ?>" alt="...">
                                    <div class="caption">
                                        <h4><?= '$' . number_format($product['price'], 0, '.', ','); ?></h4>
                                        <p><?= $product['address'] ?></p>
                                        <p><?= $product['address2'] ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>