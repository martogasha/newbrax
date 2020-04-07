@include('Partials.header')

<main>

    <div class="main-wrapper pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <aside class="widget-area">
                        <!-- widget single item start -->
                        @include('Partials.sidebar')

                    </aside>
                </div>

                <div class="col-lg-6 order-1 order-lg-2">
                    <!-- share box start -->
                    <div class="card card-small">
                        <h4><b>Shopping Cart</b></h4>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="p-2 px-3 text-uppercase">Product</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Price</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Quantity</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Remove</div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row" class="border-0">
                                    <div class="p-2">
                                        <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-1_zrifhn.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                                        <div class="ml-3 d-inline-block align-middle">
                                            <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Timex Unisex Originals</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: Watches</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="border-0 align-middle"><strong>Ksh: 790</strong></td>
                                <td class="border-0 align-middle"><strong>3</strong></td>
                                <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>



                    <div class="row py-5 p-4 bg-white rounded shadow-sm">
                        <div class="col-lg-6">
                            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller</div>
                            <div class="p-4">
                                <p class="font-italic mb-4">If you have some information for the seller you can leave them in the box below</p>
                                <textarea name="" cols="30" rows="2" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class=" rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                            <div class="p-4">
                                <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
                                <ul class="list-unstyled mb-4">
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>$390.00</strong></li>
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li>
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>$0.00</strong></li>
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                                        <h5 class="font-weight-bold">$400.00</h5>
                                    </li>
                                </ul>
                                <a href="{{url('checkout')}}" class="btn btn-dark rounded-pill py-2 btn-block">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 order-3">
                    <aside class="widget-area">
                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">Recent Notifications</h4>
                            <div class="widget-body">
                                <ul class="like-page-list-wrapper">
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-9.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                            <p class="list-subtitle">5 min ago</p>
                                        </div>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-35.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                            <p class="list-subtitle">10 min ago</p>
                                        </div>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-15.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                            <p class="list-subtitle">18 min ago</p>
                                        </div>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-6.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                            <p class="list-subtitle">25 min ago</p>
                                        </div>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-34.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                            <p class="list-subtitle">39 min ago</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- widget single item end -->

                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">Advertizement</h4>
                            <div class="widget-body">
                                <div class="add-thumb">
                                    <a href="#">
                                        <img src="assets/images/banner/advertise.jpg" alt="advertisement">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- widget single item end -->

                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">Friends Zone</h4>
                            <div class="widget-body">
                                <ul class="like-page-list-wrapper">
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-33.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Ammeya Jakson</a></h3>
                                            <p class="list-subtitle"><a href="#">10 mutual</a></p>
                                        </div>
                                        <button class="like-button">
                                            <img class="heart" src="assets/images/icons/heart.png" alt="">
                                            <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                                        </button>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-30.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Jashon Muri</a></h3>
                                            <p class="list-subtitle"><a href="#">2 mutual</a></p>
                                        </div>
                                        <button class="like-button active">
                                            <img class="heart" src="assets/images/icons/heart.png" alt="">
                                            <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                                        </button>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-5.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Rolin Theitar</a></h3>
                                            <p class="list-subtitle"><a href="#">drama</a></p>
                                        </div>
                                        <button class="like-button">
                                            <img class="heart" src="assets/images/icons/heart.png" alt="">
                                            <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                                        </button>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="assets/images/profile/profile-small-29.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Active Mind</a></h3>
                                            <p class="list-subtitle"><a href="#">fitness</a></p>
                                        </div>
                                        <button class="like-button">
                                            <img class="heart" src="assets/images/icons/heart.png" alt="">
                                            <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- widget single item end -->
                    </aside>
                </div>
            </div>
        </div>
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

</body>


<!-- Mirrored from demo.hasthemes.com/adda-preview/adda/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Apr 2020 04:25:31 GMT -->
</html>
