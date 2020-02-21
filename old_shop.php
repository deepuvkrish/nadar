


        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <!-- Body main wrapper start -->
        
            
            <!-- Shop page wraper -->
            
                        <div class="col-xs-12 col-md-9 shop-content">
                            <div class="shop-banner">
                                
                                <!-- <img src="images/banner/shop-category.jpg" alt=""> -->
                            </div>
                            <div class="product-toolbar">
                                <div class="topbar-title">
                                    <h1>veggies</h1>
                                </div>
                                <div class="product-toolbar-inner">
                                    <div class="product-view-mode">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#grid"><i class="ion-grid"></i></a></li>
                                            <li><a data-toggle="tab" href="#list"><i class="ion-navicon"></i></a></li>
                                        </ul>
                                    </div>
                                    <p class="woocommerce-result-count">Showing 1–12 of 42 results</p>
                                    <div class="woocommerce-ordering">
                                        <form method="get" class="woocommerce-ordering hidden-xs">
                                            <div class="orderby-wrapper">
                                                <label>Sort By :</label>
                                                <select class="nice-select-menu orderby">
                                                    <option dara-display="Select">Default sorting</option>
                                                    <option value="popularity">Sort by popularity</option>
                                                    <option value="rating">Sort by average rating</option>
                                                    <option value="date">Sort by newness</option>
                                                    <option value="price">Sort by price: low to high</option>
                                                    <option value="price-desc">Sort by price: high to low</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                 
                                <div class="shop-page-product-area tab-content">
                                    <div id="grid" class="tab-pane fade in show active">
                                        <div class="row">
                                            <?php
                                                $db_name = "nadar";
                                                $mysql_username = "root";
                                                $mysql_password = "";
                                                $server_name = "localhost";
                                                $conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
                                                $sql = "SELECT * FROM bh108";
                                                $result = mysqli_query($conn,$sql);
                                                while($row = mysqli_fetch_array($result)) 
                                                {
                                                    $txt = $row['image'];
                                                    $txtl = $row['item_name'];
                                                
                                            ?>
                                            <div class="col-sm-6 col-md-4 col-xl-3">
                                                <div class="single-product-area">
                                                    <div class="product-wrapper gridview">
                                                        <div class="list-col4">
                                                            <div class="product-image">
                                                                <a href="">
                                                                    <img src="upload/<?php echo $txt;?>" style="height: 240px;" alt="">
                                                                </a>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-col8">
                                                            <div class="product-info">
                                                                <h2><a href="single-product.html"><?php echo $txtl?></a></h2>
                                                                <span class="price">
                                                                    <del>$ 85.00</del> $ 75.00
                                                                </span>
                                                            </div>
                                                            <div class="product-hidden">
                                                                <div class="add-to-cart">
                                                                    <a href="cart.html">Add to cart</a>
                                                                </div>
                                                                <div class="star-actions">
                                                                    <div class="product-rattings">
                                                                        <span><i class="fa fa-star"></i></span>
                                                                        <span><i class="fa fa-star"></i></span>
                                                                        <span><i class="fa fa-star"></i></span>
                                                                        <span><i class="fa fa-star-half-o"></i></span>
                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                    </div>
                                                                    <ul class="actions">
                                                                        <li><a href=""><i class="ion-android-favorite-outline"></i></a></li>
                                                                        <li><a href=""><i class="ion-ios-shuffle-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           <?php } ?>
                                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <nav class="woocommerce-pagination">
                                <ul class="page-numbers">
                                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                                    <li><a class="page-numbers" href="#">2</a></li>
                                    <li><a class="page-numbers" href="#">3</a></li>
                                    <li><a class="page-numbers" href="#">4</a></li>
                                    <li><a class="next page-numbers" href="#">→</a></li>
                                </ul>
                            </nav> -->
                        </div>
                    </div>
                </div> 
            </div>
            <!-- Shop page wraper end -->
            
            
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
