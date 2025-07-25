<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
      <?php
        if (isset($page_title)) {
            $websiteName = defined('WEBSITE_NAME') ? WEBSITE_NAME : '';
            echo (strpos($page_title, $websiteName) === false) ? $page_title . " | " . $websiteName : $page_title;
        } else {
            echo 'Titolo di Default';
        }
      ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?=ASSETS?>hator/img/logo.png">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="<?=ASSETS?>hator/css/font-awesome.min.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="<?=ASSETS?>hator/css/animate.css">
    <!-- 7-stroke fonts css -->
    <link rel="stylesheet" href="<?=ASSETS?>hator/css/pe-icon-7-stroke.min.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="<?=ASSETS?>hator/css/nice-select.css">
    <!-- Jquery fancybox css -->
    <link rel="stylesheet" href="<?=ASSETS?>hator/css/jquery.fancybox.css">
    <!-- Jquery ui price slider css -->
    <link rel="stylesheet" href="<?=ASSETS?>hator/css/jquery-ui.min.css">
    <!-- Meanmenu css -->
    <link rel="stylesheet" href="<?=ASSETS?>hator/css/meanmenu.min.css">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="<?=ASSETS?>hator/css/owl.carousel.min.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="<?=ASSETS?>hator/css/bootstrap.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="<?=ASSETS?>hator/css/default.css">
    <!-- Main css -->
    <link rel="stylesheet" href="<?=ASSETS?>hator/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?=ASSETS?>hator/css/responsive.css">

    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Modernizer js -->
    <script src="<?=ASSETS?>hator/js/vendor/modernizr-3.5.0.min.js"></script>
   
</head>

<body class="template-color-1">
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Main Wrapper Start Here -->
    <div class="wrapper">
        <!-- Newsletter Popup Start 
        <div class="popup_wrapper">
            <div class="test">
                <span class="popup_off">Close</span>
                <div class="subscribe_area text-center mt-40">
                    <h2>Newsletter</h2>
                    <p>Subscribe to the Makali mailing list to receive updates on new arrivals, special offers and other
                        discount
                        information.</p>
                    <div class="subscribe-form-group">
                        <form action="#">
                            <input autocomplete="off" type="text" name="message" id="message" placeholder="Enter your email address">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                    <div class="subscribe-bottom mt-15">
                        <input type="checkbox" id="newsletter-permission">
                        <label for="newsletter-permission">Don't show this popup again</label>
                    </div>
                </div>
            </div>
        </div>
         Newsletter Popup End -->

        <!-- Main Header Area Start Here -->

        <!-- Main Header Area Three Start Here -->
        <header class="header-style-five">
            <!-- Header Top Start Here -->
            <div class="header-top">
                <div class="container">
                    <div class="col-12">
                        <div class="row justify-content-lg-between justify-content-center">
                            <!-- Header Top Left Start -->
                            <div class="col-auto header-top-left order-2 order-lg-1">
                                <ul>
                                    <li>
                                         <a href="tel:0123456789"><i class="fa fa-phone"></i>08624311</a>
                                    </li>
                                    <li>
                                         <a href="mailto:hatorparfumes@gmail.com"><i class="fa fa-envelope-open-o"></i> hatorparfumes@gmail.com</a>
                                    </li>
                                    <li> <!-- bentornato-->
                                       <?php if (isset($_SESSION['user_id'])): ?>
                                        <p>
                                            Bentornat<?= ($_SESSION['titolo'] === 'Mrs.') ? 'a' : 'o' ?>
                                            <?= $_SESSION['user_first_name'] . " " . $_SESSION['user_last_name'] ?>
                                        </p>
                                        <?php endif; ?>     
                                    </li>
                                </ul>
                            </div>
                            <!-- Header Top Left End -->
                            <!-- Header Top Right Start -->
                            <div class="col-auto header-top-right order-1 order-lg-2">
                                <ul>
                                    <li>
                                        <a href="#">EUR €
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <!-- Dropdown Start -->
                                        <ul class="ht-dropdown">
                                            <li>
                                                <a href="#">EUR €</a>
                                            </li>
                                            <li>
                                                <a href="#">USD $</a>
                                            </li>
                                        </ul>
                                        <!-- Dropdown End -->
                                    </li>
                                    <!--<li>
                                        <a href="#">
                                            <img src="<?=ASSETS?>hator/img/header/2.png" alt="language-selector">Italiano
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                         Dropdown Start 
                                        <ul class="ht-dropdown">
                                            <li>
                                                <a href="#">
                                                    <img src="<?=ASSETS?>hator/img/header/1.webp" alt="language-selector">English</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="<?=ASSETS?>hator/img/header/2.png" alt="language-selector">Italiano</a>
                                            </li>
                                        </ul>
                                         Dropdown End -->
                                    <?php if(!isset($_SESSION['user_id'])): ?>
                                    <!--se non è loggato non ha i settings -->
                                    <?php else: ?>
                                    </li>
                                    <li>
                                        <a href="#">Settings
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <!-- Dropdown Start -->
                                        <ul class="ht-dropdown">
                                             <li>
                                                <a href="<?=ASSETS?>hator/account.html">my account</a>
                                            </li>
                                            <li>
                                                <a href="<?=ASSETS?>hator/wishlist.html">my wishlist</a>
                                            </li>
                                            
                                            <?php endif; ?>
                                        </ul>
                                        <!-- Dropdown End -->
                                    </li>
                                </ul>
                            </div>
                            <!-- Header Top Right End -->
                        </div>
                    </div>
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Top End Here -->
            <!-- Header Middle Start Here -->
            <div class="header-middle stick header-sticky">
                <div class="header-middle_nav position-relative">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo Start -->
                            <div class="col-xl-3 col-lg-2 col-6">
                                <div class="logo" style="display: flex; justify-content: flex-start; align-items: center;">
                                    <a href="<?=ROOT?>home">
                                        <img src="<?=ASSETS?>hator/img/logo/logo-h.jpg" alt="logo-image" style="max-width: 100%; height: auto;">
                                    </a>
                                </div>
                            </div>
                            <!-- Logo End -->
                            <!-- Menu Area Start Here -->
                            <div class="col-xl-7 col-lg-8 d-none d-lg-block position-static">
                                <nav>
                                    <ul class="header-bottom-list d-flex justify-content-start">
                                        <li class="active position-static">
<!-- HOME LINK-->                     <a  href="<?=ROOT?>home">home</a>                                    
                                        </li>
                                        <li>
<!--ABOUT US LINK-->                      <a href="<?=ROOT?>about">about us</a>
                                        </li>
                                        <li>
<!--CONTACT US LINK-->                        <a class="link" href="<?=ROOT?>contact">Contact Us</a>                                         
                                        </li>
                                        <li>
<!--SHOP LINK-->                         <a href="<?=ROOT?>shop">shop</a>
                                        </li>

                                        <?php if(!isset($_SESSION['user_id'])): ?>
                                        <li>
<!--LOG IN LINK-->                            <a href="<?=ROOT?>login">Log In</a>
                                        </li>
                                        <li>
<!--REGISTER LINK-->                          <a href="<?=ROOT?>register">Register</a>
                                        </li>
                                        <?php else: ?>
                                            
                                        <!--aggiungi qui tutto ciò che vuoi mostrare 
                                        SOLO agli utenti loggati e aggiungi nelle
                                        funzioni a cui puoi accedere solo se sei loggato
                                        $user= $this->loadModel("User");
                                        if(! $user->check_logged_in()) {
                                            header("Location: " . ROOT . "login");
                                            die;   MINUTO 230 
                                        } -->
                                        <li>
<!--LOG OUT LINK-->                          <a href="<?=ROOT?>logout">Log Out</a>
                                        </li>
                                        <?php endif; ?>


                                    </ul>
                                </nav>
                            </div>
                            <!-- Menu Area End Here -->
                            <!-- Cart Box Start Here -->
                            <div class="col-xl-2 col-lg-2 col-6">
                                <div class="cart-box">
                                    <ul>
                                        <!-- Search Box Start Here -->
                                        <li>
                                            <a href="#">
                                                <span class="pe-7s-search"></span>
                                            </a>
                                            <div class="categorie-search-box ht-dropdown">
                                                <form action="#">
                                                    <input type="text" name="search" placeholder="Search our catalog">
                                                    <button>
                                                        <span class="pe-7s-search"></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </li>
                                        <!-- Categorie Search Box End Here -->
                                        <li>
                                            <a href="#">
                                                <span class="pe-7s-shopbag"></span>
                                                <span class="total-pro">2</span>
                                            </a>
                                            <ul class="ht-dropdown cart-box-width">
                                                <li>
                                                    <!-- Cart Box Start -->
                                                    <div class="single-cart-box">
                                                        <div class="cart-img">
                                                            <a href="#">
                                                                <img src="<?=ASSETS?>hator/img/products/cosmetic/1.webp" alt="cart-image">
                                                            </a>
                                                            <span class="pro-quantity">1X</span>
                                                        </div>
                                                        <div class="cart-content">
                                                            <h6>
                                                                <a href="cart.html">Modern Eye Brush </a>
                                                            </h6>
                                                            <span class="cart-price">27.45</span>
                                                            <span>Size: S</span>
                                                            <span>Color: Yellow</span>
                                                        </div>
                                                        <a class="del-icone" href="#">
                                                            <i class="ion-close"></i>
                                                        </a>
                                                    </div>
                                                    <!-- Cart Box End -->
                                                    <!-- Cart Box Start -->
                                                    <div class="single-cart-box">
                                                        <div class="cart-img">
                                                            <a href="#">
                                                                <img src="<?=ASSETS?>hator/img/products/cosmetic/2.webp" alt="cart-image">
                                                            </a>
                                                            <span class="pro-quantity">1X</span>
                                                        </div>
                                                        <div class="cart-content">
                                                            <h6>
                                                                <a href="cart.html">Flat Velvet Lipstick</a>
                                                            </h6>
                                                            <span class="cart-price">45.00</span>
                                                            <span>Size: XL</span>
                                                            <span>Color: Green</span>
                                                        </div>
                                                        <a class="del-icone" href="#">
                                                            <i class="ion-close"></i>
                                                        </a>
                                                    </div>
                                                    <!-- Cart Box End -->
                                                    <!-- Cart Footer Inner Start -->
                                                    <div class="cart-footer">
                                                        <ul class="price-content">
                                                            <li>Subtotal
                                                                <span>$57.95</span>
                                                            </li>
                                                            <li>Shipping
                                                                <span>$7.00</span>
                                                            </li>
                                                            <li>Taxes
                                                                <span>$0.00</span>
                                                            </li>
                                                            <li>Total
                                                                <span>$64.95</span>
                                                            </li>
                                                        </ul>
                                                        <div class="cart-actions text-center">
                                                            <a class="cart-checkout" href="<?=ROOT?>checkout">Checkout</a>
                                                        </div>
                                                    </div>
                                                    <!-- Cart Footer Inner End -->
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Cart Box End Here -->
                        </div>
                        <!-- Row End -->
                        <!-- Mobile Menu Start Here -->
                        <div class="mobile-menu d-block d-lg-none">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="index-cosmetic.html">home</a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul>
                                            <li>
                                                <a href="index-cosmetic.html">Home - Cosmetic</a>
                                            </li>
                                            <li>
                                                <a href="index-cosmetic-2.html">Home - Cosmetic 2</a>
                                            </li>
                                            <li>
                                                <a href="index-cosmetic-3.html">Home - Cosmetic 3</a>
                                            </li>
                                            <li>
                                                <a href="index-cosmetic-4.html">Home - Cosmetic 4</a>
                                            </li>
                                            <li>
                                                <a href="index-cosmetic-5.html">Home - Cosmetic 5</a>
                                            </li>
                                            <li>
                                                <a href="index-cosmetic-6.html">Home - Cosmetic 6</a>
                                            </li>
                                            <li>
                                                <a href="index-furniture.html">Home - Furniture</a>
                                            </li>
                                            <li>
                                                <a href="index-furniture-2.html">Home - Furniture 2</a>
                                            </li>
                                            <li>
                                                <a href="index-furniture-3.html">Home - Furniture 3</a>
                                            </li>
                                            <li>
                                                <a href="index-furniture-4.html">Home - Furniture 4</a>
                                            </li>
                                            <li>
                                                <a href="index-jewelry.html">Home - Jewelry</a>
                                            </li>
                                            <li>
                                                <a href="index-jewelry-2.html">Home - Jewelry 2</a>
                                            </li>
                                            <li>
                                                <a href="index-jewelry-3.html">Home - Jewelry 3</a>
                                            </li>
                                            <li>
                                                <a href="index-jewelry-4.html">Home - Jewelry 4</a>
                                            </li>
                                            <li>
                                                <a href="index-organic.html">Home - Organic</a>
                                            </li>
                                            <li>
                                                <a href="index-organic-2.html">Home - Organic 2</a>
                                            </li>
                                            <li>
                                                <a href="index-organic-3.html">Home - Organic 3</a>
                                            </li>
                                            <li>
                                                <a href="index-plant.html">Home - Plant</a>
                                            </li>
                                            <li>
                                                <a href="index-plant-2.html">Home - Plant 2</a>
                                            </li>
                                            <li>
                                                <a href="index-autopart.html">Home - Autopart</a>
                                            </li>
                                            <li>
                                                <a href="index-autopart-2.html">Home - Autopart 2</a>
                                            </li>
                                            <li>
                                                <a href="index-digital.html">Home - Digital</a>
                                            </li>
                                            <li>
                                                <a href="index-digital-2.html">Home - Digital 2</a>
                                            </li>
                                            <li>
                                                <a href="index-digital-3.html">Home - Digital 3</a>
                                            </li>
                                            <li>
                                                <a href="index-digital-4.html">Home - Digital 4</a>
                                            </li>
                                            <li>
                                                <a href="index-food.html">Home - Food</a>
                                            </li>
                                            <li>
                                                <a href="index-food-2.html">Home - Food 2</a>
                                            </li>
                                            <li>
                                                <a href="index-food-3.html">Home - Food 3</a>
                                            </li>
                                            <li>
                                                <a href="index-food-4.html">Home - Food 4</a>
                                            </li>
                                            <li>
                                                <a href="index-handmade.html">Home - Handmade</a>
                                            </li>
                                            <li>
                                                <a href="index-handmade-2.html">Home - Handmade 2</a>
                                            </li>
                                            <li>
                                                <a href="index-handmade-3.html">Home - Handmade 3</a>
                                            </li>
                                            <li>
                                                <a href="index-handmade-4.html">Home - Handmade 4</a>
                                            </li>
                                            <li>
                                                <a href="index-fashion.html">Home - Fashion</a>
                                            </li>
                                            <li>
                                                <a href="index-fashion-2.html">Home - Fashion 2</a>
                                            </li>
                                            <li>
                                                <a href="index-fashion-3.html">Home - Fashion 3</a>
                                            </li>
                                            <li>
                                                <a href="index-fashion-4.html">Home - Fashion 4</a>
                                            </li>
                                            <li>
                                                <a href="index-pet.html">Home - Pet</a>
                                            </li>
                                            <li>
                                                <a href="index-pet-2.html">Home - Pet 2</a>
                                            </li>
                                            <li>
                                                <a href="index-pet-3.html">Home - Pet 3</a>
                                            </li>
                                            <li>
                                                <a href="index-pet-4.html">Home - Pet 4</a>
                                            </li>
                                            <li>
                                                <a href="index-toy.html">Home - Toy</a>
                                            </li>
                                            <li>
                                                <a href="index-toy-2.html">Home - Toy 2</a>
                                            </li>
                                            <li>
                                                <a href="index-toy-3.html">Home - Toy 3</a>
                                            </li>
                                            <li>
                                                <a href="index-toy-4.html">Home - Toy 4</a>
                                            </li>
                                            <li>
                                                <a href="index-book.html">Home - Book</a>
                                            </li>
                                            <li>
                                                <a href="index-book-2.html">Home - Book 2</a>
                                            </li>
                                            <li>
                                                <a href="index-book-3.html">Home - Book 3</a>
                                            </li>
                                            <li>
                                                <a href="index-book-4.html">Home - Book 4</a>
                                            </li>
                                            <li>
                                                <a href="index-kitchenware.html">Home - Kitchenware</a>
                                            </li>
                                            <li>
                                                <a href="index-kitchenware-2.html">Home - Kitchenware 2</a>
                                            </li>
                                            <li>
                                                <a href="index-kitchenware-3.html">Home - Kitchenware 3</a>
                                            </li>
                                            <li>
                                                <a href="index-kitchenware-4.html">Home - Kitchenware 4</a>
                                            </li>
                                            <li>
                                                <a href="index-sportwear.html">Home - Sportwear</a>
                                            </li>
                                            <li>
                                                <a href="index-sportwear-2.html">Home - Sportwear 2</a>
                                            </li>
                                            <li>
                                                <a href="index-sportwear-3.html">Home - Sportwear 3</a>
                                            </li>
                                            <li>
                                                <a href="index-sportwear-4.html">Home - Sportwear 4</a>
                                            </li>
                                            <li>
                                                <a href="index-supermarket.html">Home - Supermarket</a>
                                            </li>
                                            <li>
                                                <a href="index-supermarket-2.html">Home - Supermarket 2</a>
                                            </li>
                                            <li>
                                                <a href="index-supermarket-3.html">Home - Supermarket 3</a>
                                            </li>
                                            <li>
                                                <a href="index-supermarket-4.html">Home - Supermarket 4</a>
                                            </li>
                                            <li>
                                                <a href="index-flower.html">Home - Flower</a>
                                            </li>
                                            <li>
                                                <a href="index-flower-2.html">Home - Flower 2</a>
                                            </li>
                                            <li>
                                                <a href="index-flower-3.html">Home - Flower 3</a>
                                            </li>
                                            <li>
                                                <a href="index-flower-4.html">Home - Flower 4</a>
                                            </li>
                                            <li>
                                                <a href="index-bicycle.html">Home - Bicycle</a>
                                            </li>
                                            <li>
                                                <a href="index-bicycle-2.html">Home - Bicycle 2</a>
                                            </li>
                                            <li>
                                                <a href="index-bicycle-3.html">Home - Bicycle 3</a>
                                            </li>
                                            <li>
                                                <a href="index-bicycle-4.html">Home - Bicycle 4</a>
                                            </li>
                                            <li>
                                                <a href="index-barber.html">Home - Barber</a>
                                            </li>
                                            <li>
                                                <a href="index-barber-2.html">Home - Barber 2</a>
                                            </li>
                                            <li>
                                                <a href="index-barber-3.html">Home - Barber 3</a>
                                            </li>
                                            <li>
                                                <a href="index-barber-4.html">Home - Barber 4</a>
                                            </li>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                    <li>
                                        <a href="#">elements</a>
                                        <!-- Men Accessories Dropdown Start -->
                                        <ul class="submobile-mega-dropdown">
                                            <li>
                                                <a href="#">Earrings</a>
                                                <!-- Watches Dropdown Start -->
                                                <ul>
                                                    <li>
                                                        <a href="shop.html">Document</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Dropcap</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Dummy Image</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Dummy Text</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Fancy Text</a>
                                                    </li>
                                                </ul>
                                                <!-- Watches Dropdown End -->
                                            </li>
                                            <li>
                                                <a href="#">Necklaces</a>
                                                <!-- Shoes Dropdown Start -->
                                                <ul>
                                                    <li>
                                                        <a href="shop.html">Flickr</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Flip Box</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Frame</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Gallery</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Cocktail</a>
                                                    </li>
                                                </ul>
                                                <!-- Shoes Dropdown End -->
                                            </li>
                                            <li>
                                                <a href="#">Bracelets</a>
                                                <!-- Bags Dropdown Start -->
                                                <ul>
                                                    <li>
                                                        <a href="shop.html">Platform Beds</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Storage Beds</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Regular Beds</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Sleigh Beds</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Laundry</a>
                                                    </li>
                                                </ul>
                                                <!-- Bags Dropdown End -->
                                            </li>
                                        </ul>
                                        <!-- Men Accessories Dropdown End -->
                                    </li>
                                    <li>
                                        <a href="#">Beauty</a>
                                        <!-- Women Accessories Dropdown Start -->
                                        <ul class="submobile-mega-dropdown">
                                            <!-- Dress Dropdown Start -->
                                            <li>
                                                <a href="#">portfolio</a>
                                                <ul>
                                                    <li>
                                                        <a href="shop.html">Fusions & Fashions</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Style Statements</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Bangs and Fringes</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Expert Musings</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Style D Dress</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- Dress Dropdown End -->
                                            <!-- shoes Dropdown Start -->
                                            <li>
                                                <a href="#">popover</a>
                                                <ul>
                                                    <li>
                                                        <a href="shop.html">Platform Beds</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Storage Beds</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Regular Beds</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Sleigh Beds</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Laundry</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- shoes Dropdown End -->
                                            <!-- Bags Dropdown Start -->
                                            <li>
                                                <a href="#">promotion</a>
                                                <ul>
                                                    <li>
                                                        <a href="shop.html">Document</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Dropcap</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Dummy Image</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Dummy Text</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Fancy Text</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- Bags Dropdown End -->
                                        </ul>
                                        <!-- Women Accessories Dropdown Start -->
                                    </li>
                                    <li>
                                        <a href="#">shop</a>
                                        <!-- Mobile Menu Dropdown Start -->
                                        <ul>
                                            <li>
                                                <a href="shop.html">Shop</a>
                                            </li>
                                            <li>
                                                <a href="product-details.html">product details</a>
                                            </li>
                                            <li>
                                                <a href="compare.html">compare</a>
                                            </li>
                                            <li>
                                                <a href="cart.html">cart</a>
                                            </li>
                                            <li>
                                                <a href="checkout.html">checkout</a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">wishlist</a>
                                            </li>
                                        </ul>
                                        <!-- Mobile Menu Dropdown End -->
                                    </li>
                                    <li>
                                        <a href="#">Blog</a>
                                        <!-- Mobile Menu Dropdown Start -->
                                        <ul>
                                            <li>
                                                <a href="blog.html">blog</a>
                                            </li>
                                            <li>
                                                <a href="blog-details.html">Blog Details</a>
                                            </li>
                                        </ul>
                                        <!-- Mobile Menu Dropdown End -->
                                    </li>
                                    <li>
                                        <a href="#">pages</a>
                                        <!-- Mobile Menu Dropdown Start -->
                                        <ul>
                                            <li>
                                                <a href="about.html">about us</a>
                                            </li>
                                            <li>
                                                <a href="account.html">My account</a>
                                            </li>
                                            <li>
                                                <a href="register.html">register</a>
                                            </li>
                                            <li>
                                                <a href="login.html">Login</a>
                                            </li>
                                            <li>
                                                <a href="404.html">404</a>
                                            </li>
                                            <li>
                                                <a href="forgot-password.html">forgot password</a>
                                            </li>
                                        </ul>
                                        <!-- Mobile Menu Dropdown End -->
                                    </li>
                                    <li>
                                        <a href="contact.html">contact us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Mobile Menu End Here -->
                    </div>
                    <!-- Container End -->
                </div>
            </div>
            <!-- Header Middle End Here -->
        </header>
        <!-- Main Header Area Three End Here -->

        <!-- Show password js aggiunto da noi -->
       <script src="<?=ASSETS?>hator/js/show-password.js"></script>
</body>