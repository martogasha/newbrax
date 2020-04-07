@include('Partials.header')
<main>

    <div class="main-wrapper">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="profile-menu-area secondary-navigation-style bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3">
                        <div class="profile-picture-box">
                            <figure class="profile-picture">
                                <a href="profile.html">
                                    <img src="assets/images/profile/profile-1.jpg" alt="profile picture">
                                </a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 offset-lg-1">
                        <div class="profile-menu-wrapper">
                            <div class="main-menu-inner header-top-navigation">
                                <nav>
                                    <ul class="main-menu">
                                        <li class="active"><a href="#">timeline</a></li>
                                        <li><a href="about.html">about</a></li>
                                        <li><a href="photos.html">photos</a></li>
                                        <li><a href="friends.html">friends</a></li>
                                        <li><a href="about.html">more</a></li>
                                        <!-- <li class="d-inline-block d-md-none"><a href="profile.html">edit profile</a></li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 d-none d-md-block">
                        <div class="profile-edit-panel">
                            <button class="edit-btn">edit profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- profile menu area end -->

        <!-- sendary menu start -->
        <div class="menu-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="secondary-menu-wrapper secondary-menu-2 bg-white">
                            <div class="page-title-inner">
                                <h4 class="page-title">My Products (120)</h4>
                            </div>
                            <div class="filter-menu">
                                <button class="active" data-filter="*">all</button>
                                <button data-filter=".timeline">timeline</button>
                                <button data-filter=".upload">upload</button>
                                <button data-filter=".folder">folder</button>
                            </div>
                            <div class="post-settings-bar">
                                <span></span>
                                <span></span>
                                <span></span>
                                <div class="post-settings arrow-shape">
                                    <ul>
                                        <li><button>edit profile</button></li>
                                        <li><button>activity log</button></li>
                                        <li><button>embed adda</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sendary menu end -->

        <!-- photo section start -->
        <div class="photo-section mt-20">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content-box">
                            <div class="content-body">
                                <div class="row mt--30 photo-filter">

                                    <div id="grid-products" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="product-single">
                                                    <div class="product-title">
                                                        <small><a href="#">Aquaracer</a></small>
                                                        <h4><a href="#">iPATROL RILEY - WiFi Enabled Mobilized Home Monitoring</a></h4>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="asset/images/products/shop/1.jpg" alt="" /></a>
                                                        <div class="product-quick-view">
                                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <div class="pull-left">
                                                            <span>$395.00</span>
                                                        </div>
                                                        <div class="pull-right">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <span class="rating-quantity">(0)</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="{{url('cart')}}" class="add-to-cart">Add to Cart</a>
                                                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="product-single">
                                                    <div class="product-title">
                                                        <small><a href="#">Iphone</a></small>
                                                        <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="asset/images/products/shop/2.jpg" alt="" /></a>
                                                        <div class="product-quick-view">
                                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <div class="pull-left">
                                                            <span>$495.00</span>
                                                        </div>
                                                        <div class="pull-right">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <span class="rating-quantity">(0)</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="{{url('cart')}}" class="add-to-cart">Add to Cart</a>
                                                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="product-single">
                                                    <div class="product-title">
                                                        <small><a href="#">Camera</a></small>
                                                        <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="asset/images/products/shop/3.jpg" alt="" /></a>
                                                        <div class="product-quick-view">
                                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <div class="pull-left">
                                                            <span>$345.00</span>
                                                            <del>$429.99</del>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="product-single">
                                                    <div class="product-title">
                                                        <small><a href="#">Macbook</a></small>
                                                        <h4><a href="#">iNewby 3.3mm Lens 720P HD WiFi Smart</a></h4>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="asset/images/products/shop/4.jpg" alt="" /></a>
                                                        <div class="product-quick-view">
                                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <div class="pull-left">
                                                            <span>$395.00</span>
                                                        </div>
                                                        <div class="pull-right">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="product-single">
                                                    <div class="product-title">
                                                        <small><a href="#">Macbook</a></small>
                                                        <h4><a href="#">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h4>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="asset/images/products/shop/5.jpg" alt="" /></a>
                                                        <div class="product-quick-view">
                                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <div class="pull-left">
                                                            <span>$195.00 </span>
                                                            <del>$229.99</del>
                                                        </div>
                                                        <div class="pull-right">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="product-single">
                                                    <div class="product-title">
                                                        <small><a href="#">Aquaracer</a></small>
                                                        <h4><a href="#">iPATROL RILEY - WiFi Enabled Mobilized Home Monitoring</a></h4>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="asset/images/products/shop/6.jpg" alt="" /></a>
                                                        <div class="product-quick-view">
                                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <div class="pull-left">
                                                            <span>$395.00</span>
                                                        </div>
                                                        <div class="pull-right">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <span class="rating-quantity">(0)</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="product-single">
                                                    <div class="product-title">
                                                        <small><a href="#">Aquaracer</a></small>
                                                        <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="asset/images/products/shop/7.jpg" alt="" /></a>
                                                        <div class="product-quick-view">
                                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <div class="pull-left">
                                                            <span>$495.00</span>
                                                        </div>
                                                        <div class="pull-right">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <span class="rating-quantity">(0)</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="product-single">
                                                    <div class="product-title">
                                                        <small><a href="#">Camera</a></small>
                                                        <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="asset/images/products/shop/8.jpg" alt="" /></a>
                                                        <div class="product-quick-view">
                                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <div class="pull-left">
                                                            <span>$345.00</span>
                                                            <del>$429.99</del>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="product-single">
                                                    <div class="product-title">
                                                        <small><a href="#">Macbook</a></small>
                                                        <h4><a href="#">iNewby 3.3mm Lens 720P HD WiFi Smart</a></h4>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="asset/images/products/shop/9.jpg" alt="" /></a>
                                                        <div class="product-quick-view">
                                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <div class="pull-left">
                                                            <span>$195.00</span>
                                                            <del>$229.99</del>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="product-single">
                                                    <div class="product-title">
                                                        <small><a href="#">Macbook</a></small>
                                                        <h4><a href="#">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h4>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="asset/images/products/shop/10.jpg" alt="" /></a>
                                                        <div class="product-quick-view">
                                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <div class="pull-left">
                                                            <span>$195.00</span>
                                                            <del>$229.99</del>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="product-single">
                                                    <div class="product-title">
                                                        <small><a href="#">Aquaracer</a></small>
                                                        <h4><a href="#">iPATROL RILEY - WiFi Enabled Mobilized Home Monitoring</a></h4>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="asset/images/products/shop/11.jpg" alt="" /></a>
                                                        <div class="product-quick-view">
                                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <div class="pull-left">
                                                            <span>$195.00</span>
                                                        </div>
                                                        <div class="pull-right">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <span class="rating-quantity">(0)</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="product-single">
                                                    <div class="product-title">
                                                        <small><a href="#">Iphone</a></small>
                                                        <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="asset/images/products/shop/12.jpg" alt="" /></a>
                                                        <div class="product-quick-view">
                                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <div class="pull-left">
                                                            <span>$495.00</span>
                                                        </div>
                                                        <div class="pull-right">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <span class="rating-quantity">(0)</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="product-single">
                                                    <div class="product-title">
                                                        <small><a href="#">Macbook</a></small>
                                                        <h4><a href="#">iNewby 3.3mm Lens 720P HD WiFi Smart</a></h4>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="asset/images/products/shop/9.jpg" alt="" /></a>
                                                        <div class="product-quick-view">
                                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <div class="pull-left">
                                                            <span>$195.00</span>
                                                            <del>$229.99</del>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="product-single">
                                                    <div class="product-title">
                                                        <small><a href="#">Macbook</a></small>
                                                        <h4><a href="#">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h4>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="asset/images/products/shop/10.jpg" alt="" /></a>
                                                        <div class="product-quick-view">
                                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <div class="pull-left">
                                                            <span>$195.00</span>
                                                            <del>$229.99</del>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="product-single">
                                                    <div class="product-title">
                                                        <small><a href="#">Aquaracer</a></small>
                                                        <h4><a href="#">iPATROL RILEY - WiFi Enabled Mobilized Home Monitoring</a></h4>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="asset/images/products/shop/11.jpg" alt="" /></a>
                                                        <div class="product-quick-view">
                                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <div class="pull-left">
                                                            <span>$195.00</span>
                                                        </div>
                                                        <div class="pull-right">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <span class="rating-quantity">(0)</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="product-single">
                                                    <div class="product-title">
                                                        <small><a href="#">Iphone</a></small>
                                                        <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                                                    </div>
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="asset/images/products/shop/12.jpg" alt="" /></a>
                                                        <div class="product-quick-view">
                                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <div class="pull-left">
                                                            <span>$495.00</span>
                                                        </div>
                                                        <div class="pull-right">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <span class="rating-quantity">(0)</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- photo section end -->
    </div>

</main>

<!-- Scroll to top start -->
<div class="scroll-top not-visible">
    <i class="bi bi-finger-index"></i>
</div>
<!-- Scroll to Top End -->

<!-- footer area start -->
<footer class="d-none d-lg-block">
    <div class="footer-area reveal-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="footer-wrapper">
                        <div class="footer-card position-relative">
                            <div class="friends-search">
                                <form class="search-box">
                                    <input type="text" placeholder="Search Your Friends" class="search-field">
                                    <button class="search-btn"><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                            <div class="friend-search-list">
                                <div class="frnd-search-title">
                                    <button class="frnd-search-icon"><i class="flaticon-settings"></i></button>
                                    <p>search friends</p>
                                    <button class="close-btn" data-close="friend-search-list"><i class="flaticon-cross-out"></i></button>
                                </div>
                                <div class="frnd-search-inner custom-scroll">
                                    <ul>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="assets/images/profile/profile-small-1.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author">Jon Wilime</h6>
                                                <p>Many desktop publishing</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="assets/images/profile/profile-small-2.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">Jon Wileyam</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="assets/images/profile/profile-small-3.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">Mili Raoulin</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="assets/images/profile/profile-small-4.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">Jon Wilime</a></h6>
                                                <button class="add-frnd">10 mutual friends</button>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="assets/images/profile/profile-small-5.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">Robart faul</a></h6>
                                                <button class="add-frnd">12 mutual friends</button>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="assets/images/profile/profile-small-3.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">Mili Raoulin</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="assets/images/profile/profile-small-4.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">Jon Wilime</a></h6>
                                                <button class="add-frnd">10 mutual friends</button>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="assets/images/profile/profile-small-5.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">Robart faul</a></h6>
                                                <button class="add-frnd">12 mutual friends</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card card-small mb-0 active-profile-wrapper">
                            <div class="active-profiles-wrapper">
                                <div class="active-profile-carousel slick-row-20 slick-arrow-style">
                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-1.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-1.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-2.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-3.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-4.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-1.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-5.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-6.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-7.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-8.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-9.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-10.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-11.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->
                                </div>
                            </div>
                        </div>
                        <div class="footer-card position-relative">
                            <div class="live-chat-inner">
                                <div class="chat-text-field">
                                    <textarea class="live-chat-field custom-scroll" placeholder="Text Message"></textarea>
                                    <button class="chat-message-send" type="submit" value="submit">
                                        <img src="assets/images/icons/plane.png" alt="">
                                    </button>
                                </div>
                                <div class="chat-output-box">
                                    <div class="live-chat-title">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb active">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-15.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->
                                        <div class="posted-author">
                                            <h6 class="author"><a href="profile.html">Robart Marloyan</a></h6>
                                            <span class="active-pro">active now</span>
                                        </div>
                                        <div class="live-chat-settings ml-auto">
                                            <button class="chat-settings"><i class="flaticon-settings"></i></button>
                                            <button class="close-btn" data-close="chat-output-box"><i class="flaticon-cross-out"></i></button>
                                        </div>
                                    </div>
                                    <div class="message-list-inner">
                                        <ul class="message-list custom-scroll">
                                            <li class="text-friends">
                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                                                <div class="message-time">10 minute ago</div>
                                            </li>
                                            <li class="text-author">
                                                <p>Many desktop publishing packages and web page editors</p>
                                                <div class="message-time">5 minute ago</div>
                                            </li>
                                            <li class="text-friends">
                                                <p>packages and web page editors </p>
                                                <div class="message-time">2 minute ago</div>
                                            </li>
                                            <li class="text-friends">
                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                                                <div class="message-time">10 minute ago</div>
                                            </li>
                                            <li class="text-author">
                                                <p>Many desktop publishing packages and web page editors</p>
                                                <div class="message-time">5 minute ago</div>
                                            </li>
                                            <li class="text-friends">
                                                <p>packages and web page editors </p>
                                                <div class="message-time">2 minute ago</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->
<!-- footer area start -->
<footer class="d-block d-lg-none">
    <div class="footer-area reveal-footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-footer-inner d-flex">
                        <div class="mobile-frnd-search">
                            <button class="search-toggle-btn"><i class="flaticon-search"></i></button>
                        </div>
                        <div class="mob-frnd-search-inner">
                            <form class="mob-frnd-search-box d-flex">
                                <input type="text" placeholder="Search Your Friends" class="mob-frnd-search-field">
                            </form>
                        </div>
                        <div class="card card-small mb-0 active-profile-mob-wrapper">
                            <div class="active-profiles-mob-wrapper slick-row-10">
                                <div class="active-profile-mobile">
                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="#">
                                                <figure class="profile-thumb-small profile-active">
                                                    <img src="assets/images/profile/profile-small-1.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small profile-active">
                                                    <img src="assets/images/profile/profile-small-8.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small profile-active">
                                                    <img src="assets/images/profile/profile-small-2.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small profile-active">
                                                    <img src="assets/images/profile/profile-small-3.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small profile-active">
                                                    <img src="assets/images/profile/profile-small-4.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small profile-active">
                                                    <img src="assets/images/profile/profile-small-5.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small profile-active">
                                                    <img src="assets/images/profile/profile-small-9.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- JS
============================================ -->

<!-- Modernizer JS -->
<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
<!-- Popper JS -->
<script src="assets/js/vendor/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/vendor/bootstrap.min.js"></script>
<!-- Slick Slider JS -->
<script src="assets/js/plugins/slick.min.js"></script>
<!-- nice select JS -->
<script src="assets/js/plugins/nice-select.min.js"></script>
<!-- audio video player JS -->
<script src="assets/js/plugins/plyr.min.js"></script>
<!-- perfect scrollbar js -->
<script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
<!-- light gallery js -->
<script src="assets/js/plugins/lightgallery-all.min.js"></script>
<!-- image loaded js -->
<script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
<!-- isotope filter js -->
<script src="assets/js/plugins/isotope.pkgd.min.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>

<script src="asset/js/vendor/modernizr-3.6.0.min.js"></script>
<!-- jquery-3.3.1 version -->
<!-- bootstra.min js -->
<script src="asset/js/bootstrap.min.js"></script>
<!-- mmenu js -->
<script src="asset/js/jquery.mmenu.js"></script>
<!-- easing js -->
<script src="asset/js/jquery.easing.min.js"></script>
<!---slick-js-->
<script src="asset/js/slick.min.js"></script>
<!---letteranimation-js-->
<script src="asset/js/letteranimation.min.js"></script>
<!-- jquery-ui js -->
<script src="asset/js/jquery-ui.min.js"></script>
<!-- jquery.countdown js -->
<script src="asset/js/jquery.countdown.min.js"></script>
<!-- venobox js -->
<script src="asset/js/venobox.min.js"></script>
<!-- plugins js -->
<script src="asset/js/plugins.js"></script>
<!-- main js -->
<script src="asset/js/main.js"></script>
<!-- main js -->

</body>


<!-- Mirrored from demo.hasthemes.com/adda-preview/adda/photos.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Apr 2020 04:25:48 GMT -->
</html>l
