<header class="header">
    <!-- Topbar / Marquee -->
    <div class="bg-red text-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="marquee L text-center smallfnt overflow-hidden p-2 font-helvetica">
                        Diwali sale is open now. Buy early for the best discounts! Happy Diwali....!!!!
                        &nbsp; <i class="bi bi-whatsapp text-success"></i> +91 9999999999
                        &nbsp; <i class="bi bi-telephone text-primary"></i> +91 8888888888, +91 7777777777
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <div class="menu menu-shrink bg-violet">
        <div class="container">
            <nav class="navbar navbar-expand-lg py-0 px-0">
                <!-- Logo -->
                <a href="index.php" class="navbar-brand py-0 text-center mx-auto">
                    <img class="img-fluid logo" src="images/logo.png" alt="Demo Traders Logo" title="Demo Traders">
                </a>
                <!-- header details -->
                <div class="beside-logo w-100 row text-lg-right">


                    <div class="col-12 col-md-4 col-lg-4 brand-info">
                        <div class="row">
                            <div class="icon-div col-2 col-md-2 col-lg-2">
                                <i class="bi bi-geo-alt-fill text-warning heading4"></i>
                            </div>
                            <div class="text-div col-10 col-md-10 col-lg-10 text-left">
                                <a href="https://maps.app.goo.gl/JS9iTYo9bTxECWrk6" target="_blank">
                                    <span class="text-white small-fnt">Demo Building,Demo Area,Demo Street,Sivakasi -
                                        626 123</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 brand-info">
                        <div class="row">
                            <div class="icon-div col-2 col-md-2 col-lg-2"><i
                                    class="bi bi-telephone-fill text-warning heading4"></i>
                            </div>
                            <div class="text-div col-10 col-md-10 col-lg-10 text-left">
                                <a href="tel:9999999999">
                                    <span class="text-white small-fnt">+91 99999 99999</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 brand-info">
                        <div class="row">
                            <div class="icon-div col-2 col-md-2 col-lg-2"><i
                                    class="bi bi-envelope text-warning heading4"></i></div>
                            <div class="text-div col-10 col-md-10 col-lg-10 text-left">
                                <a href="mailto:contact@demotraders.com">
                                    <span class="text-white small-fnt">contact@demotraders.com</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>



                <!-- Navbar Toggler Button -->
                <button class="navbar-toggler border border-white text-white d-block  d-lg-none
                 mx-auto my-3" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list">Menu</i>
                </button>

                <!-- Navbar Links -->
                <div class="collapse navbar-collapse bg-warning p-lg-4" id="mainMenu">
                    <ul class="navbar-nav mx-auto text-dark">
                        <li class="nav-item px-2 font-weight-bold">
                            <a class="nav-link text-dark text-uppercase <?php if ($page == "index") {
                                echo "active";
                            } ?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item px-2 font-weight-bold">
                            <a class="nav-link text-dark text-uppercase <?php if ($page == "about") {
                                echo "active";
                            } ?>" href="about.php">About</a>
                        </li>
                        <li class="nav-item px-2 font-weight-bold">
                            <a class="nav-link text-dark text-uppercase <?php if ($page == "products") {
                                echo "active";
                            } ?>" href="products.php">Products</a>
                        </li>
                        <li class="nav-item px-2 font-weight-bold">
                            <a class="nav-link text-dark text-uppercase <?php if ($page == "safety") {
                                echo "active";
                            } ?>" href="safety.php">Safety Tips</a>
                        </li>
                        <li class="nav-item px-3 font-weight-bold">
                            <a class="nav-link text-dark text-uppercase <?php if ($page == "contact") {
                                echo "active";
                            } ?>" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <div class="pricelist text-center ">
                        <a class="btn btn-danger text-uppercase" href="products.php">Download Pricelist</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>





<script src="js/jquery.min.js"></script>
<script src="js/marquee.js"></script>
<script>
    $('.L').marquee({
        duration: 16000,
        gap: 150,
        delayBeforeStart: 0,
        direction: 'left',
        duplicated: false,
        pauseOnHover: true
    });
</script>