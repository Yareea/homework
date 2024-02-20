<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<style>
    .x-buy-bg {
        min-height: calc(100vh - 134px);
    }

    .cake-image {
        width: 100px;
        height: 100px;
        object-fit: cover;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }
    .container-cake {
        padding-top: 5rem;
        padding-bottom: 5rem;
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
                    <a href="/contact.php" class="btn btn-default x-btn">CONTACT</a>
                    <a href="#" class="btn btn-default x-btn active">ABOUT</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 x-buy-bg">
            <div class="container container-cake">
                <h1>Cakes Catalog</h1>
                <p>***This is XML file <a target="_blank" href="/data/download.php">cakes.xml</a></p>
                <table>
                    <thead>
                        <tr>
                            <th>Cake Name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Load and parse the XML file
                        $xml = simplexml_load_file('./data/cakes.xml');

                        // Check if XML is loaded successfully
                        if ($xml === false) {
                            die('Error loading XML file.');
                        }

                        // Loop through each cake element
                        foreach ($xml->cake as $cake) {
                            echo '<tr>';
                            echo '<td>' . $cake->cake_name . '</td>';
                            echo '<td><img src="' . $cake->image . '" alt="' . $cake->cake_name . '" class="cake-image"></td>';
                            echo '<td>' . $cake->description . '</td>';
                            echo '<td>' . $cake->price . '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>