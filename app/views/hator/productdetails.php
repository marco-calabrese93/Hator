<?php $this->view("hator/header",$data);?>
        <!-- Breadcrumb Area Start Here -->
        <div class="breadcrumb-area">
            <div class="container">
                <ol class="breadcrumb breadcrumb-list">
                    <li class="breadcrumb-item"><a href="<?=ROOT?>home">Home</a></li>
                    <li class="breadcrumb-item active">Product Details</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Product Thumbnail Start -->
        <div class="main-product-thumbnail white-bg ptb-90">
            <div class="container">
                <div class="row">
                    <!-- Main Thumbnail Image Start -->
                    <div class="col-lg-4 col-md-6 mb-all-40">
                        <!-- Thumbnail Large Image start -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="thumb1" role="tabpanel" aria-labelledby="thumb1-tab">
                                <a data-fancybox="images" href="<?=ASSETS?>hator/img/products/cosmetic/1.webp"><img src="<?=ASSETS?>hator/img/products/cosmetic/1.webp" alt="product-view"></a>
                            </div>
                            <div class="tab-pane fade" id="thumb2" role="tabpanel" aria-labelledby="thumb2-tab">
                                <a data-fancybox="images" href="<?=ASSETS?>hator/img/products/cosmetic/2.webp"><img src="<?=ASSETS?>hator/img/products/cosmetic/2.webp" alt="product-view"></a>
                            </div>
                            <div class="tab-pane fade" id="thumb3" role="tabpanel" aria-labelledby="thumb3-tab">
                                <a data-fancybox="images" href="<?=ASSETS?>hator/img/products/cosmetic/3.webp"><img src="<?=ASSETS?>hator/img/products/cosmetic/3.webp" alt="product-view"></a>
                            </div>
                            <div class="tab-pane fade" id="thumb4" role="tabpanel" aria-labelledby="thumb4-tab">
                                <a data-fancybox="images" href="<?=ASSETS?>hator/img/products/cosmetic/4.webp"><img src="<?=ASSETS?>hator/img/products/cosmetic/4.webp" alt="product-view"></a>
                            </div>
                        </div>
                        <!-- Thumbnail Large Image End -->
                        <!-- Thumbnail Image End -->
                        <div class="product-thumbnail">
                            <ul class="thumb-menu owl-carousel nav tabs-area nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="thumb1-tab" data-bs-toggle="tab" data-bs-target="#thumb1" type="button"
                                        role="tab" aria-controls="thumb1" aria-selected="true">
                                        <img src="<?=ASSETS?>hator/img/products/cosmetic/1.webp" alt="product-thumbnail">
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="thumb2-tab" data-bs-toggle="tab" data-bs-target="#thumb2" type="button"
                                        role="tab" aria-controls="thumb2" aria-selected="false">
                                        <img src="<?=ASSETS?>hator/img/products/cosmetic/2.webp" alt="product-thumbnail">
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="thumb3-tab" data-bs-toggle="tab" data-bs-target="#thumb3" type="button"
                                        role="tab" aria-controls="thumb3" aria-selected="false">
                                        <img src="<?=ASSETS?>hator/img/products/cosmetic/3.webp" alt="product-thumbnail">
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="thumb4-tab" data-bs-toggle="tab" data-bs-target="#thumb4" type="button"
                                        role="tab" aria-controls="thumb4" aria-selected="false">
                                        <img src="<?=ASSETS?>hator/img/products/cosmetic/4.webp" alt="product-thumbnail">
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <!-- Thumbnail image end -->
                    </div>
                    <!-- Main Thumbnail Image End -->
                    <!-- Thumbnail Description Start -->
                    <div class="col-lg-8 col-md-6">
                        <div class="thubnail-desc fix">
                            <h3 class="product-header" >New Look eye Material</h3>
                            <div>
                                
                            </div>
                           
                            <div class="pro-thumb-price mt-10">
                                <p class="d-flex align-items-center"><span class="prev-price">16.51</span><span
                                        class="price">$15.19</span><span class="saving-price">-5%</span>

                                        
                                        
                            </p>
                            </div>
                            
                            
                            <p class="pro-desc-details">
                                Faded short sleeves t-shirt with high neckline. Soft and
                                stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready
                                for summer!</p>

                                
                                        
                                    
                            <div class="product-size mtb-30 clearfix">
                                <label>Size</label>
                                <select class="">
                                    <option>50 ML</option>
                                    <option>100 ML</option>
                                    <option>200 ML</option>
                                </select>
                            </div>
                            
                            <div class="quatity-stock">
                                <label>Quantity</label>
                                <ul class="d-flex flex-wrap  align-items-center">
                                    <li class="box-quantity">
                                        <form action="#">
                                            <input class="quantity" type="number" min="1" value="1" >
                                        </form>
                                    </li>
                                    <li>
                                        <button class="pro-cart">add to cart</button>
                                    </li>
                                    <span class="in-stock"><i class="ion-checkmark-round"></i> in stock</span>
                                   
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Thumbnail Description End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Product Thumbnail End -->
        <!-- Product Thumbnail Description Start -->
        <div class="thumnail-desc">
            <div class="container">
                <div class="thumb-desc-inner">
                    <div class="row">
                        <div class="col-12">
                            <ul class="main-thumb-desc nav tabs-area" role="tablist">
                                <li><h6 style="rel="stylesheet" href="<?=ASSETS?>hator/css/font-awesome.min.css"><b>Description</b></h6></li>

                            </ul>
                            <!-- Product Thumbnail Tab Content Start -->
                            <div class="tab-content thumb-content">
                                <div id="dtail" class="tab-pane fade show active">
                                    <p>Fashion has been creating well-designed collections since 2010. The brand offers
                                        feminine designs delivering stylish separates and statement dresses which have
                                        since evolved into a full ready-to-wear collection in which every item is a
                                        vital part of a woman's wardrobe. The result? Cool, easy, chic looks with
                                        youthful elegance and unmistakable signature style. All the beautiful pieces are
                                        made in Italy and manufactured with the greatest attention. Now Fashion extends
                                        to a range of accessories including shoes, hats, belts and more!</p>
                                </div>
                                
                            </div>
                            <!-- Product Thumbnail Tab Content End -->
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Product Thumbnail Description End -->
        <!-- New Arrival Products Start Here -->
        <div class="new-arrival no-border-style ptb-90">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h2>Related Products</h2>
                    <p>Add our new arrivals to your weekly lineup</p>
                </div>
                <!-- Section Title End -->
                <div class="our-pro-active owl-carousel">
                    <!-- Single Product Start Here -->
                    <div class="single-makal-product">
                        <div class="pro-img">
                            <a href="<?=ROOT?>productdetails">
                                <img src="<?=ASSETS?>hator/img/products/cosmetic/1.webp" alt="product-img">
                            </a>
                            <span class="sticker-new">new</span>
                            <div class="quick-view-pro">
                                <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                            </div>
                        </div>
                        <div class="pro-content">
                            <h4 class="pro-title">
                                <a href="<?=ROOT?>productdetails">Modern Eye Brush</a>
                            </h4>
                            <p>
                                <span class="price">$45.50</span>
                            </p>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="<?=ROOT?>cart" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End Here -->
                    <!-- Single Product Start Here -->
                    <div class="single-makal-product">
                        <div class="pro-img">
                            <a href="<?=ROOT?>productdetails">
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
                                <a href="<?=ROOT?>productdetails">Fusion facial cream</a>
                            </h4>
                            <p>
                                <span class="price">$72.50</span>
                            </p>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="<?=ROOT?>cart" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End Here -->
                    <!-- Single Product Start Here -->
                    <div class="single-makal-product">
                        <div class="pro-img">
                            <a href="<?=ROOT?>productdetails">
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
                                <a href="<?=ROOT?>productdetails">Field Messenger</a>
                            </h4>
                            <p>
                                <span class="price">$55.50</span>
                                <span class="prev-price">$59.50</span>
                            </p>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="<?=ROOT?>cart" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End Here -->
                    <!-- Single Product Start Here -->
                    <div class="single-makal-product">
                        <div class="pro-img">
                            <a href="<?=ROOT?>productdetails">
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
                                <a href="<?=ROOT?>productdetails">Field Messenger</a>
                            </h4>
                            <p>
                                <span class="price">$55.50</span>
                                <span class="prev-price">$59.50</span>
                            </p>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="<?=ROOT?>cart" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
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
                    <!-- Single Product Start Here -->
                    <div class="single-makal-product">
                        <div class="pro-img">
                            <a href="<?=ROOT?>productdetails">
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
                                <a href="<?=ROOT?>productdetails">Field Messenger</a>
                            </h4>
                            <p>
                                <span class="price">$55.50</span>
                                <span class="prev-price">$59.50</span>
                            </p>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="<?=ROOT?>cart" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
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
                    <!-- Single Product Start Here -->
                    <div class="single-makal-product">
                        <div class="pro-img">
                            <a href="<?=ROOT?>productdetails">
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
                                <a href="<?=ROOT?>productdetails">Field Messenger</a>
                            </h4>
                            <p>
                                <span class="price">$55.50</span>
                                <span class="prev-price">$59.50</span>
                            </p>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="<?=ROOT?>cart" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
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
        </div>
        <!-- New Arrival Products End Here -->

          <!-- Quick View Content Start -->
        <div class="main-product-thumbnail quick-thumb-content">
            <div class="container">
                <!-- The Modal -->
                <div class="modal fade" id="product-window">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                    <!-- Main Thumbnail Image Start -->
                                    <div class="col-lg-5 col-md-6 mb-all-40">

                                        <!-- Thumbnail Large Image start -->
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="pro-1" role="tabpanel" aria-labelledby="pro-1-tab">
                                                <a data-fancybox="images" href="img/products/cosmetic/1.webp"><img src="img/products/cosmetic/1.webp"
                                                        alt="product-view"></a>
                                            </div>
                                            <div class="tab-pane fade" id="pro-2" role="tabpanel" aria-labelledby="pro-2-tab">
                                                <a data-fancybox="images" href="img/products/cosmetic/2.webp"><img src="img/products/cosmetic/2.webp"
                                                        alt="product-view"></a>
                                            </div>
                                            <div class="tab-pane fade" id="pro-3" role="tabpanel" aria-labelledby="pro-3-tab">
                                                <a data-fancybox="images" href="img/products/cosmetic/3.webp"><img src="img/products/cosmetic/3.webp"
                                                        alt="product-view"></a>
                                            </div>
                                            <div class="tab-pane fade" id="pro-4" role="tabpanel" aria-labelledby="pro-4-tab">
                                                <a data-fancybox="images" href="img/products/cosmetic/4.webp"><img src="img/products/cosmetic/4.webp"
                                                        alt="product-view"></a>
                                            </div>
                                        </div>
                                        <!-- Thumbnail Large Image End -->
                                        <!-- Thumbnail Image End -->
                                        <div class="product-thumbnail">
                                            <ul class="thumb-menu owl-carousel nav tabs-area nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pro-1-tab" data-bs-toggle="tab" data-bs-target="#pro-1" type="button"
                                                        role="tab" aria-controls="pro-1" aria-selected="true">
                                                        <img src="img/products/cosmetic/1.webp" alt="product-thumbnail">
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pro-2-tab" data-bs-toggle="tab" data-bs-target="#pro-2" type="button"
                                                        role="tab" aria-controls="pro-2" aria-selected="false">
                                                        <img src="img/products/cosmetic/2.webp" alt="product-thumbnail">
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pro-3-tab" data-bs-toggle="tab" data-bs-target="#pro-3" type="button"
                                                        role="tab" aria-controls="pro-3" aria-selected="false">
                                                        <img src="img/products/cosmetic/3.webp" alt="product-thumbnail">
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pro-4-tab" data-bs-toggle="tab" data-bs-target="#pro-4" type="button"
                                                        role="tab" aria-controls="pro-4" aria-selected="false">
                                                        <img src="img/products/cosmetic/4.webp" alt="product-thumbnail">
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Thumbnail image end -->
                                    </div>
                                    <!-- Main Thumbnail Image End -->
                                    <!-- Thumbnail Description Start -->
                                    <div class="col-lg-7 col-md-6">
                                        <div class="thubnail-desc fix">
                                            <h3 class="product-header">New Look eye Material</h3>
                                            <ul class="rating-summary">
                                                <li class="rating-pro">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </li>
                                                <li class="read-review">
                                                    <a href="#">read reviews (1)</a>
                                                </li>
                                                <li class="write-review">
                                                    <a href="#">write review</a>
                                                </li>
                                            </ul>
                                            <div class="pro-thumb-price mt-10">
                                                <p class="d-flex align-items-center">
                                                    <span class="prev-price">16.51</span>
                                                    <span class="price">$15.19</span>
                                                    <span class="saving-price">-5%</span>
                                                </p>
                                            </div>
                                            <p class="pro-desc-details">New Look eye Material with high neckline. Soft
                                                and stretchy material for
                                                a comfortable fit. Accessorize with a straw hat and you're ready for
                                                summer!</p>
                                            <div class="product-size mtb-30 clearfix">
                                                <label>Size</label>
                                                <select class="">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                </select>
                                            </div>
                                            <div class="color clearfix mb-30">
                                                <label>color</label>
                                                <ul class="color-list">
                                                    <li>
                                                        <a class="white" href="#"></a>
                                                    </li>
                                                    <li>
                                                        <a class="orange active" href="#"></a>
                                                    </li>
                                                    <li>
                                                        <a class="paste" href="#"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="quatity-stock">
                                                <label>Quantity</label>
                                                <ul class="d-flex flex-wrap  align-items-center">
                                                    <li class="box-quantity">
                                                        <form action="#">
                                                            <input class="quantity" type="number" min="1" value="1" min="1">
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <button class="pro-cart">add to cart</button>
                                                    </li>
                                                    <li class="pro-ref">
                                                        <p>
                                                            <span class="in-stock">
                                                                <i class="ion-checkmark-round"></i> in stock</span>
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="social-sharing mt-30">
                                                <ul>
                                                    <li>
                                                        <label>share</label>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Thumbnail Description End -->
                                </div>
                            </div>
                            <!-- Modal footer -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick View Content End -->
<?php $this->view("hator/footer",$data);?>