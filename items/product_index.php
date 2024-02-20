<?php
require("./utils/database.php");
$sql = "SELECT * FROM products order by id asc LIMIT 4";
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