<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Bege || Admin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

       <?php include "include/header.php"; ?>

       <style>

            .unlis {
            margin: 0;
            padding: 0;
            display: flex;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 71%);
            }

            .unlis li {
            list-style: none;
            margin: 0 15px;
            }

            .unlis li a {
            position: relative; 
            display: block;
            width: 60px;
            height: 60px;
            text-align: center;
            line-height: 63px;
            background: #333;
            border-radius: 50%;
            font-size: 30px;
            color: #fff;
            transition: .5s;
            }

            .unlis li a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #fff;
            transition: .5s;
            transform: scale(.9);
            z-index: -1;
            }

            .unlis li a:hover::before {
            transform: scale(1.1);
            box-shadow: 0 0 15px #58dffd;
            }

            .unlis li a:hover {
            color: #58dffd;
            box-shadow: 0 0 5px #58dffd;
            text-shadow: 0 0 5px #58dffd;
            }
                 
                        

            .ulis {
            margin: 0;
            padding: 0;
            display: flex;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            }

            .ulis li {
            list-style: none;
            margin: 0 15px;
            }

            .ulis li a {
            position: relative; 
            display: block;
            width: 60px;
            height: 60px;
            text-align: center;
            line-height: 63px;
            background: #333;
            border-radius: 50%;
            font-size: 30px;
            color: #fff;
            transition: .5s;
            }

            .ulis li a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #fff;
            transition: .5s;
            transform: scale(.9);
            z-index: -1;
            }

            .ulis li a:hover::before {
            transform: scale(1.1);
            box-shadow: 0 0 15px #58dffd;
            }

            .ulis li a:hover {
            color: #58dffd;
            box-shadow: 0 0 5px #58dffd;
            text-shadow: 0 0 5px #58dffd;
            }
                    


       </style>
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <!-- Body main wrapper start -->
        <div class="wrapper home-one single-product-page" style="min-height:600px">
         <?php include "include/adnav.php";?>
            <!-- Page title -->
            <div class="entry-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="entry-title">Add new product</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page title end -->
            <!-- cart page content -->
            <div class="register-page-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="ulis">
                                <li>
                                    <a href="newproduct.php">
                                    <i class="fas fa-download"></i>
                                    </a>Insertion
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="fas fa-trash-alt"></i>
                                    </a>Deletion
                                    </li>
                                <li>
                                    <a href="#">
                                    <i class="fas fa-wrench"></i>
                                     </a>Updation
                                    
                                </li>
                                <li>
                                    <a href="admin.php">
                                    <i class="fas fa-running"></i>
                                    </a>Log out 
                                </li>
                            <br>
                                <li>
                                    <a href="sh2.php">
                                    <i class="fas fa-camera"></i>
                                    </a>SlideShow
                                </li>
                                <li>
                                    <a href="sh2">
                                    <i class="fas fa-fire"></i>                                    
                                </a>Hot Deals
                                    </li>
                                <li>
                                    <a href="sh2.php">
                                    <i class="fas fa-wrench"></i>
                                     </a>Latest
                                    
                                </li>
                                <li>
                                    <a href="admin.php">
                                    <i class="fas fa-running"></i>
                                    </a>xxxx
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer-area" style="position: relative;padding:20% 0%;left: 0;bottom:0;width: 100%;color: white;text-align: center;">
                
                <div class="footer-copyright-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-lg-6 col-md-6">
                                <p>Copyright © 2018 Bege . All Rights Reserved.</p>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-md-6 pull-right">
                                <img src="images/icons/payment-icon.png" alt="payment icon">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer copyright area end -->
            </footer>
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
