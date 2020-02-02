<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Bege || checkout</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/icons/icon_logo.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/css-plugins-call.css">
        <link rel="stylesheet" href="css/bundle.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/colors.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <!-- Body main wrapper start -->
        <div class="wrapper home-one single-product-page">
            <!-- HEADER AREA START -->
            <?php include 'include/navbar.php'; ?>
            <!-- HRADER AREA END -->
            <!-- Breadcrumbs -->
            <div class="breadcrumbs-container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <nav class="woocommerce-breadcrumb">
                                <a href="index.php">Home</a>
                                <span class="separator">/</span> Checkout
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs End -->
            <!-- Page title -->
            <div class="entry-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="entry-title">Checkout</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page title end -->
            <!-- checkout page content -->
            <div class="checkout-page-area">
                <!-- coupon area -->
                <div class="coupon-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="coupon-accordion">
                                    <!-- ACCORDION START -->
                                    <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                                    <div id="checkout-login" class="coupon-content">
                                        <div class="coupon-info">
                                            <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
                                            <form action="#">
                                                <p class="form-row-first">
                                                    <label>Username or email <span class="required">*</span></label>
                                                    <input type="text">
                                                </p>
                                                <p class="form-row-last">
                                                    <label>Password  <span class="required">*</span></label>
                                                    <input type="text">
                                                </p>
                                                <p class="form-row">
                                                    <input type="submit" value="Login">
                                                    <label>
                                                    <input type="checkbox">
                                                     Remember me 
                                                </label>
                                                </p>
                                                <p class="lost-password">
                                                    <a href="#">Lost your password?</a>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- ACCORDION END -->
                                    <!-- ACCORDION START -->
                                    <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                                    <div id="checkout_coupon" class="coupon-checkout-content">
                                        <div class="coupon-info">
                                            <form action="#">
                                                <p class="checkout-coupon">
                                                    <input type="text" class="code" placeholder="Coupon code">
                                                    <input type="submit" value="Apply Coupon">
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- ACCORDION END -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- coupon area end -->
                <!-- checkout area -->
                <div class="checkout-area">
                    <div class="container">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="checkbox-form">
                                        <h3>Billing Details</h3>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="country-select mb-30">
                                                    <label>Country <span class="required">*</span></label>
                                                    <select>
                                                        <option value="volvo">Bangladesh</option>
                                                        <option value="saab">Algeria</option>
                                                        <option value="mercedes">Afghanistan</option>
                                                        <option value="audi">Ghana</option>
                                                        <option value="audi2">Albania</option>
                                                        <option value="audi3">Bahrain</option>
                                                        <option value="audi4">Colombia</option>
                                                        <option value="audi5">Dominican Republic</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>First Name <span class="required">*</span></label>
                                                    <input type="text" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list mb-30">
                                                    <label>Last Name <span class="required">*</span></label>
                                                    <input type="text" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list mb-30">
                                                    <label>Company Name</label>
                                                    <input type="text" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Address <span class="required">*</span></label>
                                                    <input type="text" placeholder="Street address">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list mtb-30">
                                                    <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list mb-30">
                                                    <label>Town / City <span class="required">*</span></label>
                                                    <input type="text" placeholder="Town / City">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list mb-30">
                                                    <label>State / County <span class="required">*</span></label>
                                                    <input type="text" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list mb-30">
                                                    <label>Postcode / Zip <span class="required">*</span></label>
                                                    <input type="text" placeholder="Postcode / Zip">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list mb-30">
                                                    <label>Email Address <span class="required">*</span></label>
                                                    <input type="email" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list mb-30">
                                                    <label>Phone  <span class="required">*</span></label>
                                                    <input type="text" placeholder="Postcode / Zip">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list create-acc mb-30">
                                                    <input id="cbox" type="checkbox">
                                                    <label>Create an account?</label>
                                                </div>
                                                <div id="cbox_info" class="checkout-form-list create-accounts mb-25">
                                                    <p class="mb-10">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                                    <label>Account password  <span class="required">*</span></label>
                                                    <input type="password" placeholder="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="different-address">
                                            <div class="ship-different-title">
                                                <h3>
                                                    <label>Ship to a different address?</label>
                                                    <input id="ship-box" type="checkbox">
                                                </h3>
                                            </div>
                                            <div id="ship-box-info" class="row">
                                                <div class="col-md-12">
                                                    <div class="country-select mb-30">
                                                        <label>Country <span class="required">*</span></label>
                                                        <select>
                                                            <option value="volvo">Bangladesh</option>
                                                            <option value="saab">Algeria</option>
                                                            <option value="mercedes">Afghanistan</option>
                                                            <option value="audi">Ghana</option>
                                                            <option value="audi2">Albania</option>
                                                            <option value="audi3">Bahrain</option>
                                                            <option value="audi4">Colombia</option>
                                                            <option value="audi5">Dominican Republic</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="checkout-form-list mb-30">
                                                        <label>First Name <span class="required">*</span></label>
                                                        <input type="text" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="checkout-form-list mb-30">
                                                        <label>Last Name <span class="required">*</span></label>
                                                        <input type="text" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="checkout-form-list mb-30">
                                                        <label>Company Name</label>
                                                        <input type="text" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="checkout-form-list mb-30">
                                                        <label>Address <span class="required">*</span></label>
                                                        <input type="text" placeholder="Street address">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="checkout-form-list mb-30">
                                                        <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="checkout-form-list mb-30">
                                                        <label>Town / City <span class="required">*</span></label>
                                                        <input type="text" placeholder="Town / City">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="checkout-form-list mb-30">
                                                        <label>State / County <span class="required">*</span></label>
                                                        <input type="text" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="checkout-form-list mb-30">
                                                        <label>Postcode / Zip <span class="required">*</span></label>
                                                        <input type="text" placeholder="Postcode / Zip">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="checkout-form-list mb-30">
                                                        <label>Email Address <span class="required">*</span></label>
                                                        <input type="email" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="checkout-form-list mb-30">
                                                        <label>Phone  <span class="required">*</span></label>
                                                        <input type="text" placeholder="Postcode / Zip">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-notes">
                                                <div class="checkout-form-list">
                                                    <label>Order Notes</label>
                                                    <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="your-order">
                                        <h3>Your order</h3>
                                        <div class="your-order-table table-responsive">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="product-name">Product</th>
                                                        <th class="product-total">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
                                                        </td>
                                                        <td class="product-total">
                                                            <span class="amount">£165.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            Vestibulum dictum magna <strong class="product-quantity"> × 1</strong>
                                                        </td>
                                                        <td class="product-total">
                                                            <span class="amount">£50.00</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr class="cart-subtotal">
                                                        <th>Cart Subtotal</th>
                                                        <td><span class="amount">£215.00</span></td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>Order Total</th>
                                                        <td><strong><span class="amount">£215.00</span></strong>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="payment-method">
                                            <div class="payment-accordion">
                                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingOne">
                                                            <h4 class="panel-title">
                                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            Direct Bank Transfer
                                                            </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                            <div class="panel-body">
                                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingTwo">
                                                            <h4 class="panel-title">
                                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            Cheque Payment
                                                            </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                            <div class="panel-body">
                                                                <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingThree">
                                                            <h4 class="panel-title">
                                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            PayPal
                                                            </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                            <div class="panel-body">
                                                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="order-button-payment">
                                                    <input type="submit" value="Place order">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- checkout area end -->
            </div>
            <!-- checkout page content end -->
            <?php include 'include/footer.php'; ?>
<!-- QUICKVIEW PRODUCT START -->
            <div id="quickview-wrapper">
                <!-- Modal -->
                <div class="modal fade" id="product_modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-close-btn">
                                <button class="close" data-dismiss="modal">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                               <!-- Single product area -->
                               <div class="single-product-area">
                                   <div class="container-fullwidth">
                                       <div class="single-product-wrapper">
                                           <div class="row">
                                               <div class="col-xs-12 col-md-7 col-lg-7">
                                                    <div class="product-details-img-content">
                                                        <div class="product-details-tab mr-40">
                                                            <div class="product-details-large tab-content">
                                                                <div class="tab-pane active" id="pro-details1">
                                                                    <div class="product-popup">
                                                                        <a href="images/product/single/product4.jpg">
                                                                            <img src="images/product/single/product4.jpg" alt="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="pro-details2">
                                                                    <div class="product-popup">
                                                                        <a href="images/product/single/product5.jpg">
                                                                            <img src="images/product/single/product5.jpg" alt="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="pro-details3">
                                                                    <div class="product-popup">
                                                                        <a href="images/product/single/product6.jpg">
                                                                            <img src="images/product/single/product6.jpg" alt="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="pro-details4">
                                                                    <div class="product-popup">
                                                                        <a href="images/product/single/product7.jpg">
                                                                            <img src="images/product/single/product7.jpg" alt="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="pro-details5">
                                                                    <div class="product-popup">
                                                                        <a href="images/product/single/product8.jpg">
                                                                            <img src="images/product/single/product8.jpg" alt="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-details-small nav product-dec-slider-qui owl-carousel">
                                                                <a class="active" href="#pro-details1">
                                                                    <img src="images/product/thumbnails/product4.jpg" alt="">
                                                                </a>
                                                                <a href="#pro-details2">
                                                                    <img src="images/product/thumbnails/product5.jpg" alt="">
                                                                </a>
                                                                <a href="#pro-details3">
                                                                    <img src="images/product/thumbnails/product6.jpg" alt="">
                                                                </a>
                                                                <a href="#pro-details4">
                                                                    <img src="images/product/thumbnails/product7.jpg" alt="">
                                                                </a>
                                                                <a href="#pro-details5">
                                                                    <img src="images/product/thumbnails/product8.jpg" alt="">
                                                                </a>
                                                                <a class="active" href="#pro-details1">
                                                                    <img src="images/product/thumbnails/product4.jpg" alt="">
                                                                </a>
                                                                <a href="#pro-details2">
                                                                    <img src="images/product/thumbnails/product5.jpg" alt="">
                                                                </a>
                                                                <a href="#pro-details3">
                                                                    <img src="images/product/thumbnails/product6.jpg" alt="">
                                                                </a>
                                                                <a href="#pro-details4">
                                                                    <img src="images/product/thumbnails/product7.jpg" alt="">
                                                                </a>
                                                                <a href="#pro-details5">
                                                                    <img src="images/product/thumbnails/product8.jpg" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                               </div>
                                               <div class="col-xs-12 col-md-5 col-lg-5">
                                                   <div class="single-product-info">
                                                       <h1>Sit voluptatem</h1>
                                                       <div class="product-rattings">
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star-half-o"></i></span>
                                                            <span><i class="fa fa-star-o"></i></span>
                                                        </div>
                                                        <span class="price">
                                                            <del>$ 77.00</del> $ 66.00
                                                        </span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                                        <div class="box-quantity d-flex">
                                                            <form action="#">
                                                                <input class="quantity mr-40" min="1" value="1" type="number">
                                                            </form>
                                                            <a class="add-cart" href="cart.html">add to cart</a>
                                                        </div>
                                                        <div class="wishlist-compear-area">
                                                            <a href="wishlist.html"><i class="ion-ios-heart-outline"></i> Add to Wishlist</a>
                                                            <a href="#"><i class="ion-ios-loop-strong"></i> Compare</a>
                                                        </div>
                                                        <div class="product_meta">
                                                            <span class="posted_in">Categories: <a href="#" rel="tag">Accessories</a>, <a href="#" rel="tag">Clothings</a></span>
                                                        </div>
                                                        <div class="single-product-sharing">
                                                            <div class="widget widget_socialsharing_widget">
                                                                <h3 class="widget-title">Share this product</h3>
                                                                <ul class="social-icons">
                                                                    <li><a class="facebook social-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                                                    <li><a class="twitter social-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                                                    <li><a class="pinterest social-icon" href="#"><i class="fa fa-pinterest"></i></a></li>
                                                                    <li><a class="gplus social-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                    <li><a class="linkedin social-icon" href="#"><i class="fa fa-linkedin"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                                <!-- Single product area end -->
                            </div>
                        </div><!-- .modal-content -->
                    </div><!-- .modal-dialog -->
                </div><!-- END Modal -->
            </div>
            <!-- QUICKVIEW PRODUCT END -->
        </div>
        <!-- Body main wrapper end -->


        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <!-- jQuery Local -->
        <script>window.jQuery || document.write('<script src="js/jquery-3.2.1.min.js"><\/script>')</script>

        <!-- Popper min js -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap min js  -->
        <script src="js/bootstrap.min.js"></script>
        <!-- All plugins here -->
        <script src="js/plugins.js"></script>
        <!-- Main js  -->
        <script src="js/main.js"></script>



        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
