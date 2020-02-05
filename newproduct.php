<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Bege || Register Page</title>
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
        <link rel="stylesheet" href="css/button.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <!-- Body main wrapper start -->
        <div class="wrapper home-one single-product-page">
         <?php include "include/adnav.php";?>
            <!-- Page title -->
            <div class="entri-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="entri-title">Add new product</h1>
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
                            <form class="form-register" action="aa.php" method="POST" enctype="multipart/form-data">
                                <fieldset>
                                    <legend>Product Details</legend>

                                    <div class="form-group d-md-flex align-items-md-center">
                                        <label class="control-label col-md-2" for="l-name"><span class="require">*</span>Category</label>
                                        <div class="col-md-10">
                                            <select name="category">
                                                <option value="hs101">Household</option>
                                                <option value="vf102">Veggies</option>
                                                <option value="kt103">Kitchen</option>
                                                <option value="bv104">Beverages</option>
                                                <option value="bk105">Bakes</option>
                                                <option value="pt106">Pet food</option>
                                                <option value="gr107">Groceries</option>
                                                <option value="bh108">Beauty</option>
                                                <option value="sf109">Stationary</option>
                                            </select>
                                        </div>
                                    </div>
                                       
                                   
                                   


                                    <div class="form-group d-md-flex align-items-md-center">
                                        <label class="control-label col-md-2" for="f-name"><span class="require">*</span>Item Name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="name" id="f-name" placeholder="Item Name">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group d-md-flex align-items-md-center">
                                        <label class="control-label col-md-2" for="l-name"><span class="require">*</span>current Stock</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="crr_stk" id="crr_stk" placeholder="Current Stock">
                                        </div>
                                    </div>
                                    <div class="form-group d-md-flex align-items-md-center">
                                        <label class="control-label col-md-2" for="l-name"><span class="require">*</span>Booked Stock</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="bkd_stk" id="bkd_stk" placeholder="Booked Stock">
                                        </div>
                                    </div>
                                    <div class="form-group d-md-flex align-items-md-center">
                                        <label class="control-label col-md-2" for="l-name"><span class="require">*</span>Actual Price</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="act_prc" id="act_prc" placeholder="Actual price">                                        </div>
                                    </div>
                                    <div class="form-group d-md-flex align-items-md-center">
                                        <label class="control-label col-md-2" for="l-name"><span class="require">*</span>Discount</label>
                                        <div class="col-md-10">
                                        <input type="text" class="form-control" name="discount" id="discount" placeholder="Discount in %">                                        </div>
                                    </div>

                                    <div class="form-group d-md-flex align-items-md-center">
                                        <label class="control-label col-md-2" for="l-name"><span class="require">*</span>Image</label>
                                        <div class="col-md-10">
                                            <input type="file" class="form-control" name="file" id="l-name" >
                                        </div>
                                    </div>
                                </fieldset>
                               
                                <div class="terms">
                                    <div class="float-md-right">
                                        <input type="submit" value="Continue" name="fileuploadsubmit1" class="return-customer-btn">
                                    </div>
                                </div>
                                <div class="wrapper-inner-tab">
                                    <div class="wrapper-inner-tab-backgrounds">
                                        <div class="wrapper-inner-tab-backgrounds-third">
                                            <div class="sim-button button28"><span><a href="admin.php">Log out</a></span></div>
                                            <a href="admin.php">Log out</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                           

                        </div>
                    </div>
                </div>
            </div>
           <?php include "include/adfooter.php";?>
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
