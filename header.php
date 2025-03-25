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

    <!-- Navbar Contact Section -->
    <div class="d-none d-lg-block bg-violet">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="index.php" class="navbar-brand py-0">
                    <img class="img-fluid" src="images/logo.png" alt="Demo Traders" title="Demo Traders">
                </a>
            </div>

            <div class="beside-logo d-flex align-items-center">
                <div class="brand-info mr-4">
                    <i class="bi bi-geo-alt-fill text-warning heading4"></i>
                    <a href="https://maps.app.goo.gl/JS9iTYo9bTxECWrk6" target="_blank">
                        <span class="text-white">Sivakasi</span>
                    </a>
                </div>
                <div class="brand-info mr-4">
                    <i class="bi bi-telephone-fill text-warning heading4"></i>
                    <a href="tel:9999999999">
                        <span class="text-white">+91 99999 99999</span>
                    </a>
                </div>
                <div class="brand-info mr-4">
                    <i class="bi bi-envelope text-warning heading4"></i>
                    <a href="mailto:contact@demotraders.com">
                        <span class="text-white">contact@demotraders.com</span>
                    </a>
                </div>
                <div class="pricelist ml-4">
                    <a class="btn btn-warning text-uppercase" href="products.php">Download Pricelist</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Navbar Menu -->
    <div class="menu menu-shrink bg-violet">
        <div class="container">
            <nav class="navbar navbar-expand-lg py-0 px-0">
                <a href="index.php" class="navbar-brand d-lg-none py-0">
                    <img class="img-fluid" src="images/logo.png" alt="Demo Traders mobile Logo" title="Demo Traders">
                </a>

                <!-- Navbar Toggle Button -->
                <button class="navbar-toggler border border-white text-white" type="button" data-toggle="collapse"
                    data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="bi bi-three-dots-vertical"></span>
                </button>

                <!-- Navbar Links -->
                <div class="collapse navbar-collapse bg-warning p-3" id="mainMenu">
                    <ul class="navbar-nav menu-link-container text-dark w-100">
                        <li class="nav-item px-2 font-weight-bold <?php if ($page == 'home')
                            echo 'active'; ?>">
                            <a class="nav-link text-dark text-uppercase" href="index.php">Home</a>
                        </li>
                        <li class="nav-item px-2 font-weight-bold <?php if ($page == 'about')
                            echo 'active'; ?>">
                            <a class="nav-link text-dark text-uppercase" href="about.php">About</a>
                        </li>
                        <li class="nav-item px-2 font-weight-bold <?php if ($page == 'products')
                            echo 'active'; ?>">
                            <a class="nav-link text-dark text-uppercase" href="products.php">Products</a>
                        </li>
                        <li class="nav-item px-2 font-weight-bold <?php if ($page == 'safety')
                            echo 'active'; ?>">
                            <a class="nav-link text-dark text-uppercase" href="safety.php">Safety Tips</a>
                        </li>
                        <li class="nav-item px-3 font-weight-bold <?php if ($page == 'contact')
                            echo 'active'; ?>">
                            <a class="nav-link text-dark text-uppercase" href="contact.php">Contact</a>
                        </li>
                    </ul>
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