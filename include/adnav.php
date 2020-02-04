
 

 
 
 
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
                                            <!-- currency-menu -->
                                            <div class="currency">
                                                <a href="#">₹ INR<i class="ion-ios-arrow-down"></i></a>
                                                <ul>
                                                    <li><a href="#">€ EUR</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Top bar area end -->
                
            </header>