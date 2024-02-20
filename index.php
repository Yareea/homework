<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-6 x-container">
                    <div class="x-menu">
                        <a href="/buy.php" class="btn btn-default x-btn">BUY</a>
                        <a href="/sell.php" class="btn btn-default x-btn">SELL</a>
                        <a href="/rent.php" class="btn btn-default x-btn">RENT</a>
                        <a href="/contact.php" class="btn btn-default x-btn">CONTACT</a>
                        <a href="/about.php" class="btn btn-default x-btn">ABOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 x-search-bg">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12">
                        <p class="txt-welcome">
                            WE HELP OUR CLIENTS MAKE<br>
                            BETTER DECISION IN REAL ESTATE
                        </p>
                    </div>
                    <div class="col-12">
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control x-search-input" placeholder="Search by Neighbourhood, City, or Address">
                            <span class="input-group-btn">
                                <button class="btn btn-default x-search-btn" type="button">LET'S GO!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="padding: 5rem;">
    <?php include("items/product_index.php"); ?>
</div>
<div class="container-fluid about">
    <div class="about-text">
        <h2>LET YOUR DREAM COME TRUE</h2>
        <h3>BUILDING HAPPY HOME, CREATE HEALTHY LIVING SPACE</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin condimentum, diam ut maximus venenatis, turpis
            orci convallis arcu, ut porta orci eros vitae odio. Vestibulum ipsum eros, viverra at accumsan id, blandit
            eget diam. Aenean in est malesuada, lacinia ligula a, vulputate tortor. Donec leo orci, posuere pellentesque
            enim ac, rhoncus dignissim libero. Phasellus sodales sapien id placerat tincidunt. Pellentesque vitae
            lobortis enim. Proin vel vulputate augue, a consequat massa. In hac habitasse platea dictumst.
        </p>
        <a href="#" class="btn-read-more">SEE OUR STORY</a>

    </div>
</div>
<?php include('footer.php'); ?>