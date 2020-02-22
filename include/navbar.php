<?php

    //index.php

    //Include Configuration File
    include('config.php');

    $login_button = '';
    //This $_GET["code"] variable value received after user has login into their Google Account redirct to PHP script then this variable value has been received
    if(isset($_GET["code"]))
    {
    //It will Attempt to exchange a code for an valid authentication token.
    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
    //This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
    if(!isset($token['error']))
    {
    //Set the access token used for requests
    $google_client->setAccessToken($token['access_token']);
    //Store "access_token" value in $_SESSION variable for future use.
    $_SESSION['access_token'] = $token['access_token'];
    //Create Object of Google Service OAuth 2 class
    $google_service = new Google_Service_Oauth2($google_client);
    //Get user profile data from google
    $data = $google_service->userinfo->get();
    //Below you can find Get profile data and store into $_SESSION variable
    if(!empty($data['given_name']))
    {
    $_SESSION['user_first_name'] = $data['given_name'];
    }
    if(!empty($data['family_name']))
    {
    $_SESSION['user_last_name'] = $data['family_name'];
    }
    if(!empty($data['email']))
    {
    $_SESSION['user_email_address'] = $data['email'];
    }
    if(!empty($data['gender']))
    {
    $_SESSION['user_gender'] = $data['gender'];
    }
    if(!empty($data['picture']))
    {
    $_SESSION['user_image'] = $data['picture'];
    }
    }
    }

    //This is for check user has login into system by using Google account, if User not login into system then it will execute if block of code and make code for display Login link for Login using Google account.
    if(!isset($_SESSION['access_token']))
    {
    //Create a URL to obtain user authorization
    $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="images/logo/google_sign.png" /></a>';
    }

?>
 

 
 
 
 <header class="header-area">
                <!-- Header top area start -->
                <div class="header-top-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="top-bar-left">
                                    <!-- welcome -->
                                    <div class="welcome">
                                        <p>A product of Prince. since 1968</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="topbar-nav">
                                    <div class="wpb_wrapper">
                                        <!-- my account -->
                                        <div class="menu-my-account-container">
                                            <a href="#">My Account <i class="ion-ios-arrow-down"></i></a>
                                            <ul>
                                                <?php
                                                    if($login_button == '')
                                                    {
                                                        echo '<h6>Welcome'.$_SESSION['user_first_name'].'</h6><div class="panel-body">';
                                                        echo '<p><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'<p>';
                                                        echo '<p><b>Email :</b> '.$_SESSION['user_email_address'].'</p>';
                                                        echo '<li><a href="my-account.php">My Account</a></li>';
                                                        echo '<li><a href="checkout.php">Checkout</a></li>';
                                                        echo '<li><a href="logout.php">Logout</a><li>';
                                                    }
                                                    else
                                                    {
                                                        echo '<div align="center">'.$login_button . '</div>';
                                                        echo '<li><a href="register.php">Register</a></li>';

                                                    }
                                                ?>                                        
                                            </ul>
                                        </div>
                                        <div class="switcher">     
                                           <!--  <div class="language">
                                                <a href="#">
                                                    <img src="images/icons/en.png" alt="language-selector">English
                                                    <i class="ion-ios-arrow-down"></i>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="images/icons/fr.png" alt="French">
                                                            <span>French</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div> -->
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Top bar area end -->
                <!-- Header middle area start -->
                <div class="header-middle-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-2 col-md-12">
                                <!-- site-logo -->
                                <div class="site-logo">
                                    <a href="index.php"><img src="images/logo/nadar.png" style="width:100%" alt="prince"></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-12">
                                <!-- header-search -->
                                <div class="header-search clearfix">
                                    <div class="category-select pull-right">
                                        <select class="nice-select-menu">
                                            <option data-display="All Categories">All Categories</option>
                                            <option value="1">Decor & Furniture</option>
                                            <option value="2">Electronics</option>
                                            <option value="3">Fashion & clothings</option>
                                            <option value="4" disabled>Sport & Outdoors</option>
                                            <option value="5">Toy, Kids & Baby</option>
                                        </select> 
                                    </div> 
                                    <div class="header-search-form">
                                        <form action="#">
                                            <input type="text" name="search" placeholder="Search product...">
                                            <input type="submit" name="submit" value="Search">
                                        </form>                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12">
                                <!-- shop-cart-menu -->
                                <div class="shop-cart-menu pull-right">
                                    <ul>
                                        <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                        <li><a href="wishlist.php"><i class="ion-android-favorite-outline"></i></a></li>
                                        <li><a href="cart.php">
                                           
                                            <span class="cart-text">
                                                <span class="cart-text-title">My cart <br> 
                                                    
                                                </span>
                                            </span>
                                        </a>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header middle area end -->
                <!-- Header bottom area start -->
                <div class="header-bottom-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 hidden-md hidden-sm pull-left category-wrapper">
                               
                            
                            </div>
                            <div class="col-lg-9">
                            
                                <!-- main-menu -->
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            <li class="current"><a href="index.php">Home <i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="shop.php">Shop</a></li>
                                            <li><a href="blog.php">Blog</a></li>
                                            <li><a href="about-us.php">About Us</a></li>
                                            <li><a href="contact-us.php ">Contact</a></li>
                                            <li><a href="#">Features <i class="fa fa-angle-down"></i></a>
                                                <ul class="megamenu-3-column">
                                                    <li><a href="#">Pages</a>
                                                        <ul>
                                                            <li><a href="about-us.php">About Us</a></li>
                                                            <li><a href="contact-us.php">Contact Us</a></li>
                                                            <li><a href="service.php">Services</a></li>
                                                            <li><a href="portfolio.php">Portfolio</a></li>
                                                            <li><a href="faq.php">Frequently Questins</a></li>
                                                            <li><a href="404.php">Error 404</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Blog</a>
                                                        <ul>
                                                            <li><a href="blog-no-sidebar.php">None Sidebar</a></li>
                                                            <li><a href="blog.php">Sidebar right</a></li>
                                                            <li><a href="single-blog.php">Image Format</a></li>
                                                            <li><a href="single-blog-gallery.php">Gallery Format</a></li>
                                                            <li><a href="single-blog-audio.php">Audio Format</a></li>
                                                            <li><a href="single-blog-video.php">Video Format</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Shop</a>
                                                        <ul>
                                                            <li><a href="shop.php">Shop</a></li>
                                                            <li><a href="shop-list.php">Shop List View</a></li>
                                                            <li><a href="shop-right.php">Shop Right</a></li>
                                                            <li><a href="single-product.php">Shop Single</a></li>
                                                            <li><a href="cart.php">Shoping Cart</a></li>
                                                            <li><a href="checkout.php">Checkout</a></li>
                                                            <li><a href="my-account.php">My Account</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                
                                <div class="mobile-menu-area">
                                    <div class="mobile-menu">
                                        <nav id="mobile-menu-active">
                                            <ul class="menu-overflow">
                                                <li><a href="index.php">HOME</a>
                                                </li>
                                                <li><a href="shop.php">Shop</a></li>
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="about-us.php">About Us</a></li>
                                                <li><a href="contact-us.php">Contact</a></li>
                                                <li><a href="#">Features</a>
                                                    <ul>
                                                        <li><a href="#">Pages</a>
                                                            <ul>
                                                                <li><a href="about-us.php">About Us</a></li>
                                                                <li><a href="service.php">Services</a></li>
                                                                <li><a href="service-2.php">Services Two</a></li>
                                                                <li><a href="portfolio.php">Portfolio</a></li>
                                                                <li><a href="faq.php">Frequently Questins</a></li>
                                                                <li><a href="404.php">Error 404</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Blog</a>
                                                            <ul>
                                                                <li><a href="blog-no-sidebar.php">None Sidebar</a></li>
                                                                <li><a href="blog.php">Sidebar right</a></li>
                                                                <li><a href="single-blog.php">Image Format</a></li>
                                                                <li><a href="single-blog-gallery.php">Gallery Format</a></li>
                                                                <li><a href="single-blog-audio.php">Audio Format</a></li>
                                                                <li><a href="single-blog-video.php">Video Format</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Shop</a>
                                                            <ul>
                                                                <li><a href="shop.php">Shop</a></li>
                                                                <li><a href="shop-list.php">Shop List View</a></li>
                                                                <li><a href="shop-right.php">Shop Right</a></li>
                                                                <li><a href="single-product.php">Shop Single</a></li>
                                                                <li><a href="cart.php">Shoping Cart</a></li>
                                                                <li><a href="checkout.php">Checkout</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>                          
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header bottom area end -->
            </header>