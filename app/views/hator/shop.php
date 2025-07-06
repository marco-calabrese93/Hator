<?php $this->view("hator/header",$data);?>
        <!-- Breadcrumb Area Start Here -->
        <div class="breadcrumb-area">
            <div class="container">
                <ol class="breadcrumb breadcrumb-list">
                    <li class="breadcrumb-item"><a href="<?=ROOT?>home">Home</a></li>
                    <li class="breadcrumb-item active">shop</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Shop Page Start -->
        <div class="main-shop-page ptb-90">
            <div class="container">
                <!-- Row End -->
                <div class="row">
                    <!-- Sidebar Shopping Option Start -->
                    <div class="col-lg-3 order-2 order-lg-1 mt-all-40">
                        <div class="sidebar shop-sidebar">
                            <!-- Price Filter Options Start -->
                            <div class="search-filter mb-30">
                                <h3 class="sidebar-title">filter by price</h3>
                                <form action="#" class="slider-sidebar">
                                    <div id="slider-range"></div>
                                    <input type="text" id="amount" class="amount-range" readonly>
                                </form>
                            </div>
                            <!-- Price Filter Options End -->
                            <!-- Sidebar Categorie Start -->
                            <div class="sidebar-categorie mb-30">
                                <h3 class="sidebar-title">categories</h3>
                                <ul class="sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="camera" type="checkbox">
                                        <label class="form-check-label" for="camera">Women</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="GamePad" type="checkbox">
                                        <label class="form-check-label" for="GamePad">Men</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="Digital" type="checkbox">
                                        <label class="form-check-label" for="Digital">Unisex</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="Virtual" type="checkbox">
                                        <label class="form-check-label" for="Virtual">New Arrivals</label>
                                    </li>
                                     <li class="form-check">
                                        <input class="form-check-input" value="#" id="Virtual" type="checkbox">
                                        <label class="form-check-label" for="Virtual">Best Sellers</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Sidebar Categorie Start -->
                            <!-- Product Size Start -->
                            <div class="size mb-30">
                                <h3 class="sidebar-title">size</h3>
                                <ul class="size-list sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="small" type="checkbox">
                                        <label class="form-check-label" for="small">50 mL</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="medium" type="checkbox">
                                        <label class="form-check-label" for="medium">100 mL</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="large" type="checkbox">
                                        <label class="form-check-label" for="large">200 mL</label>
                                </ul>
                            </div>
                            <!-- Product Size End -->
                            <!-- Product Color Start -->
                            <div class="color mb-30">
                                <h3 class="sidebar-title">Type</h3>
                                <ul class="color-option sidbar-style">
                                    <li class="form-check" >
                                        <input class="form-check-input" value="" id="eau_parfum" type="checkbox">
                                        <label class="form-check-label" for="eau_parfum">Eau De Parfum</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="eau_toilette" type="checkbox">
                                        <label class="form-check-label" for="eau_toilette">Eau De Toilette</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="eau_cologne" type="checkbox">
                                        <label class="form-check-label" for="eau_cologne">Eau De Cologne</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="parfum" type="checkbox">
                                        <label class="form-check-label" for="parfum">Parfum</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Product Color End -->
                            <!-- Sidebar Categorie Start -->
                            <div class="sidebar-categorie mb-30">
                                <h3 class="sidebar-title">Olfactory family</h3>
                                <ul class="sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">citrus</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">floral</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">woody</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">amber</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">leathers</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">chypre</label>
                                    </li>
                                     <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">ferns</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Sidebar Categorie Start -->
                        </div>
                        <!-- Single Banner Start -->
                        <div class="sidebar-banner mt-30">
                            <a href="shop"><img class="ful" src="<?=ASSETS?>hator/img/banner/others/1.webp" alt="slider-banner"></a>
                        </div>
                    </div>
                    <!-- Sidebar Shopping Option End -->
                    <!-- Product Categorie List Start -->
                    <div class="col-lg-9 order-1 order-lg-2">
                        <!-- Grid & List View Start -->
                        <div class="grid-list-top border-default universal-padding d-md-flex justify-content-md-between align-items-center mb-30">
                            <div class="grid-list-view d-flex align-items-center  mb-sm-15">
                                <ul class="nav tabs-area d-flex align-items-center">
                                    <li><a class="active" data-bs-toggle="tab" href="#grid-view"><i
                                                class="fa fa-th"></i></a></li>
                                    <li><a data-bs-toggle="tab" href="#list-view"><i class="fa fa-list-ul"></i></a></li>
                                </ul>
                                <span class="show-items">There are 8 products.</span>
                            </div>
                            <!-- Toolbar Short Area Start -->
                            <div class="main-toolbar-sorter clearfix">
                                <div class="toolbar-sorter d-md-flex align-items-center">
                                    <label>Sort By:</label>
                                    <select class="sorter wide">
                                        <option value="Position">Relevance</option>
                                        <option value="Product Name">Name, A to Z</option>
                                        <option value="Product Name">Name, Z to A</option>
                                        <option value="Price">Price low to high</option>
                                        <option value="Price">Price high to low</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Toolbar Short Area End -->
                        </div>
                        <!-- Grid & List View End -->
                        <div class="shop-area mb-all-40">
                            <!-- Grid & List Main Area End -->
                            <div class="tab-content">
                                <div id="grid-view" class="tab-pane fade show active">
                                    <div class="row border-hover-effect ">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <!-- Single Product Start Here -->
                                            <div class="single-makal-product">
                                                <div class="pro-img">
                                                    <a href="product-details.html">
                                                        <img src="<?=ASSETS?>hator/img/products/cosmetic/1.webp" alt="product-img">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                    <div class="quick-view-pro">
                                                        <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                                    </div>
                                                </div>
                                                <div class="pro-content">
                                                    <h4 class="pro-title">
                                                        <a href="product-details.html">Modern Eye Brush</a>
                                                    </h4>
                                                    <p>
                                                        <span class="price">$45.50</span>
                                                    </p>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <div class="rating">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <!-- Single Product Start Here -->
                                            <div class="single-makal-product">
                                                <div class="pro-img">
                                                    <a href="product-details.html">
                                                        <img src="<?=ASSETS?>hator/img/products/cosmetic/2.webp" alt="product-img">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                    <span class="sticker-sale">-5%</span>
                                                    <div class="quick-view-pro">
                                                        <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                                    </div>
                                                </div>
                                                <div class="pro-content">
                                                    <h4 class="pro-title">
                                                        <a href="product-details.html">Sprite Yoga Straps1</a>
                                                    </h4>
                                                    <p>
                                                        <span class="price">$65.00</span>
                                                    </p>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <div class="rating">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <!-- Single Product Start Here -->
                                            <div class="single-makal-product">
                                                <div class="pro-img">
                                                    <a href="product-details.html">
                                                        <img src="<?=ASSETS?>hator/img/products/cosmetic/3.webp" alt="product-img">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                    <div class="quick-view-pro">
                                                        <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                                    </div>
                                                </div>
                                                <div class="pro-content">
                                                    <h4 class="pro-title">
                                                        <a href="product-details.html">Voyage face cleaner</a>
                                                    </h4>
                                                    <p>
                                                        <span class="price">$61.21</span>
                                                        <span class="prev-price">$64.50</span>
                                                    </p>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <div class="rating">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <!-- Single Product Start Here -->
                                            <div class="single-makal-product">
                                                <div class="pro-img">
                                                    <a href="product-details.html">
                                                        <img src="<?=ASSETS?>hator/img/products/cosmetic/4.webp" alt="product-img">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                    <span class="sticker-sale">-5%</span>
                                                    <div class="quick-view-pro">
                                                        <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                                    </div>
                                                </div>
                                                <div class="pro-content">
                                                    <h4 class="pro-title">
                                                        <a href="product-details.html">Fusion facial cream</a>
                                                    </h4>
                                                    <p>
                                                        <span class="price">$72.50</span>
                                                    </p>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <div class="rating">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <!-- Single Product Start Here -->
                                            <div class="single-makal-product">
                                                <div class="pro-img">
                                                    <a href="product-details.html">
                                                        <img src="<?=ASSETS?>hator/img/products/cosmetic/5.webp" alt="product-img">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                    <span class="sticker-sale">-5%</span>
                                                    <div class="quick-view-pro">
                                                        <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                                    </div>
                                                </div>
                                                <div class="pro-content">
                                                    <h4 class="pro-title">
                                                        <a href="product-details.html">Impulse Duffle</a>
                                                    </h4>
                                                    <p>
                                                        <span class="price">$45.50</span>
                                                        <span class="prev-price">$30.50</span>
                                                    </p>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <div class="rating">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <!-- Single Product Start Here -->
                                            <div class="single-makal-product">
                                                <div class="pro-img">
                                                    <a href="product-details.html">
                                                        <img src="<?=ASSETS?>hator/img/products/cosmetic/6.webp" alt="product-img">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                    <span class="sticker-sale">-5%</span>
                                                    <div class="quick-view-pro">
                                                        <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                                    </div>
                                                </div>
                                                <div class="pro-content">
                                                    <h4 class="pro-title">
                                                        <a href="product-details.html">Field Messenger</a>
                                                    </h4>
                                                    <p>
                                                        <span class="price">$55.50</span>
                                                        <span class="prev-price">$59.50</span>
                                                    </p>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <div class="rating">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <!-- Single Product Start Here -->
                                            <div class="single-makal-product">
                                                <div class="pro-img">
                                                    <a href="product-details.html">
                                                        <img src="<?=ASSETS?>hator/img/products/cosmetic/12.webp" alt="product-img">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                    <span class="sticker-sale">-5%</span>
                                                    <div class="quick-view-pro">
                                                        <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                                    </div>
                                                </div>
                                                <div class="pro-content">
                                                    <h4 class="pro-title">
                                                        <a href="product-details.html">Impulse Duffle</a>
                                                    </h4>
                                                    <p>
                                                        <span class="price">$45.50</span>
                                                        <span class="prev-price">$30.50</span>
                                                    </p>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <div class="rating">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <!-- Single Product Start Here -->
                                            <div class="single-makal-product">
                                                <div class="pro-img">
                                                    <a href="product-details.html">
                                                        <img src="<?=ASSETS?>hator/img/products/cosmetic/10.webp" alt="product-img">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                    <span class="sticker-sale">-5%</span>
                                                    <div class="quick-view-pro">
                                                        <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                                    </div>
                                                </div>
                                                <div class="pro-content">
                                                    <h4 class="pro-title">
                                                        <a href="product-details.html">Field Messenger</a>
                                                    </h4>
                                                    <p>
                                                        <span class="price">$55.50</span>
                                                        <span class="prev-price">$59.50</span>
                                                    </p>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <div class="rating">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <!-- Single Product Start Here -->
                                            <div class="single-makal-product">
                                                <div class="pro-img">
                                                    <a href="product-details.html">
                                                        <img src="<?=ASSETS?>hator/img/products/cosmetic/7.webp" alt="product-img">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                    <span class="sticker-sale">-5%</span>
                                                    <div class="quick-view-pro">
                                                        <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                                    </div>
                                                </div>
                                                <div class="pro-content">
                                                    <h4 class="pro-title">
                                                        <a href="product-details.html">Impulse Duffle</a>
                                                    </h4>
                                                    <p>
                                                        <span class="price">$45.50</span>
                                                        <span class="prev-price">$30.50</span>
                                                    </p>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <div class="rating">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <!-- Single Product Start Here -->
                                            <div class="single-makal-product">
                                                <div class="pro-img">
                                                    <a href="product-details.html">
                                                        <img src="<?=ASSETS?>hator/img/products/cosmetic/11.webp" alt="product-img">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                    <span class="sticker-sale">-5%</span>
                                                    <div class="quick-view-pro">
                                                        <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                                    </div>
                                                </div>
                                                <div class="pro-content">
                                                    <h4 class="pro-title">
                                                        <a href="product-details.html">Field Messenger</a>
                                                    </h4>
                                                    <p>
                                                        <span class="price">$55.50</span>
                                                        <span class="prev-price">$59.50</span>
                                                    </p>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <div class="rating">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <!-- Single Product Start Here -->
                                            <div class="single-makal-product">
                                                <div class="pro-img">
                                                    <a href="product-details.html">
                                                        <img src="<?=ASSETS?>hator/img/products/cosmetic/8.webp" alt="product-img">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                    <span class="sticker-sale">-5%</span>
                                                    <div class="quick-view-pro">
                                                        <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                                    </div>
                                                </div>
                                                <div class="pro-content">
                                                    <h4 class="pro-title">
                                                        <a href="product-details.html">Impulse Duffle</a>
                                                    </h4>
                                                    <p>
                                                        <span class="price">$45.50</span>
                                                        <span class="prev-price">$30.50</span>
                                                    </p>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <div class="rating">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <!-- Single Product Start Here -->
                                            <div class="single-makal-product">
                                                <div class="pro-img">
                                                    <a href="product-details.html">
                                                        <img src="<?=ASSETS?>hator/img/products/cosmetic/9.webp" alt="product-img">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                    <span class="sticker-sale">-5%</span>
                                                    <div class="quick-view-pro">
                                                        <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                                    </div>
                                                </div>
                                                <div class="pro-content">
                                                    <h4 class="pro-title">
                                                        <a href="product-details.html">Field Messenger</a>
                                                    </h4>
                                                    <p>
                                                        <span class="price">$55.50</span>
                                                        <span class="prev-price">$59.50</span>
                                                    </p>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <div class="rating">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End Here -->
                                        </div>
                                    </div>
                                    <!-- Row End -->
                                </div>
                                <!-- #grid view End -->
                                <div id="list-view" class="tab-pane fade fix">
                                    <!-- Single Product Start Here -->
                                    <div class="single-makal-product">
                                        <div class="pro-img">
                                            <a href="product-details.html"><img src="<?=ASSETS?>hator/img/products/cosmetic/1.webp" alt="product-img"></a>
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <div class="pro-content">
                                            <h4 class="pro-title"><a href="product-details.html">Modern Eye Brush</a>
                                            </h4>
                                            <div class="rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <p><span class="price">$55.50</span><span class="prev-price">$59.50</span>
                                            </p>
                                            <p>New Look eye Material with high neckline. Soft and stretchy material for
                                                a comfortable fit. Accessorize with a straw hat and you're ready for
                                                summer!</p>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                    <!-- Single Product Start Here -->
                                    <div class="single-makal-product">
                                        <div class="pro-img">
                                            <a href="product-details.html"><img src="<?=ASSETS?>hator/img/products/cosmetic/2.webp" alt="product-img"></a>
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <div class="pro-content">
                                            <h4 class="pro-title"><a href="product-details.html">Sprite Yoga Straps1</a>
                                            </h4>
                                            <div class="rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <p><span class="price">$29.99</span><span class="prev-price">$24.00</span>
                                            </p>
                                            <p>Accessorize with a straw hat and you're ready for summer! New Look eye
                                                Material with high neckline. Soft and stretchy material for a
                                                comfortable fit. </p>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                    <!-- Single Product Start Here -->
                                    <div class="single-makal-product">
                                        <div class="pro-img">
                                            <a href="product-details.html"><img src="<?=ASSETS?>hator/img/products/cosmetic/3.webp" alt="product-img"></a>
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <div class="pro-content">
                                            <h4 class="pro-title"><a href="product-details.html">Voyage face cleaner</a>
                                            </h4>
                                            <div class="rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <p><span class="price">$26.99</span><span class="prev-price">$25.50</span>
                                            </p>
                                            <p>Soft and stretchy material for a comfortable fit. Accessorize with a
                                                straw hat and you're ready for summer! New Look eye Material with high
                                                neckline. </p>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                    <!-- Single Product Start Here -->
                                    <div class="single-makal-product">
                                        <div class="pro-img">
                                            <a href="product-details.html"><img src="<?=ASSETS?>hator/img/products/cosmetic/4.webp" alt="product-img"></a>
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <div class="pro-content">
                                            <h4 class="pro-title"><a href="product-details.html">Impulse Duffle</a></h4>
                                            <div class="rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <p><span class="price">$45.50</span><span class="prev-price">$42.50</span>
                                            </p>
                                            <p>Soft and stretchy material for a comfortable fit. New Look eye Material
                                                with high neckline.Accessorize with a straw hat and you're ready for
                                                summer!</p>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                    <!-- Single Product Start Here -->
                                    <div class="single-makal-product">
                                        <div class="pro-img">
                                            <a href="product-details.html"><img src="<?=ASSETS?>hator/img/products/cosmetic/5.webp" alt="product-img"></a>
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <div class="pro-content">
                                            <h4 class="pro-title"><a href="product-details.html">Field Messenger</a>
                                            </h4>
                                            <div class="rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <p><span class="price">$20.00</span><span class="prev-price">$17.50</span>
                                            </p>
                                            <p>Soft and stretchy material for a comfortable fit. Accessorize with a
                                                straw hat and you're ready for summer! New Look eye Material with high
                                                neckline.</p>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                    <!-- Single Product Start Here -->
                                    <div class="single-makal-product">
                                        <div class="pro-img">
                                            <a href="product-details.html"><img src="<?=ASSETS?>hator/img/products/cosmetic/8.webp" alt="product-img"></a>
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <div class="pro-content">
                                            <h4 class="pro-title"><a href="product-details.html">Impulse Duffle</a></h4>
                                            <div class="rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <p><span class="price">$45.50</span><span class="prev-price">$42.50</span>
                                            </p>
                                            <p>Soft and stretchy material for a comfortable fit. New Look eye Material
                                                with high neckline.Accessorize with a straw hat and you're ready for
                                                summer!</p>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                    <!-- Single Product Start Here -->
                                    <div class="single-makal-product">
                                        <div class="pro-img">
                                            <a href="product-details.html"><img src="<?=ASSETS?>hator/img/products/cosmetic/6.webp" alt="product-img"></a>
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <div class="pro-content">
                                            <h4 class="pro-title"><a href="product-details.html">Field Messenger</a>
                                            </h4>
                                            <div class="rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <p><span class="price">$20.00</span><span class="prev-price">$17.50</span>
                                            </p>
                                            <p>Soft and stretchy material for a comfortable fit. Accessorize with a
                                                straw hat and you're ready for summer! New Look eye Material with high
                                                neckline.</p>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                </div>
                                <!-- #list view End -->
                            </div>
                            <!-- Grid & List Main Area End -->
                        </div>
                        <!-- Shop Breadcrumb Area Start -->
                        <div class="shop-breadcrumb-area border-default mt-30">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-5">
                                    <span class="show-items">Showing 1-12 of 13 item(s) </span>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-7">
                                    <ul class="pfolio-breadcrumb-list text-center">
                                        <li class="float-left prev"><a href="#"><i class="fa fa-angle-left"
                                                    aria-hidden="true"></i>Previous</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li class="float-right next"><a href="#">Next<i class="fa fa-angle-right"
                                                    aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Shop Breadcrumb Area End -->
                    </div>
                    <!-- product Categorie List End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Shop Page End -->
<?php $this->view("hator/footer", $data); ?>