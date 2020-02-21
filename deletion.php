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
                            <h1 class="entri-title">Delete product</h1>
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
                            
                        <form class="form-register" action="#" method="POST" enctype="multipart/form-data">
                                <fieldset>
                                    <legend>Select categories</legend>

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
                                </fieldset>
                               
                                <div class="terms">
                                    <div class="float-md-right">
                                        <input type="submit" value="Continue" name="fileuploadsubmit1" class="return-customer-btn">
                                    </div>
                                </div>
                            </form>


                        <?php
                         if(isset($_POST['fileuploadsubmit1'])){
                            $cat = $_POST['category'];
                            $db_name = "nadar";
                            $mysql_username = "root";
                            $mysql_password = "";
                            $server_name = "localhost";
                            $conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
                            $sql = "SELECT * FROM $cat";
                            $result = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_array($result)) 
                            {
                                $txt = $row['image'];
                                $txtl = $row['item_name'];
                                echo "<img src='upload/$txt' width='175' height='200' />";
                                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$txtl."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                echo "<a href='bb.php?p1=$txt&&p2=$cat'><b>Delete</b></a><br>";
                            }
                        }

                        ?>
                       
                       

                                <a href="sel.php">
                                <div class="wrapper-inner-tab">
                                    <div class="wrapper-inner-tab-backgrounds">
                                        <div class="wrapper-inner-tab-backgrounds-first">
                                            <div class="sim-button button30"><span>Main page</span></div>
                                    </div>
                                </div>
                                </a>

                                <a href="admin.php">
                                <div class="wrapper-inner-tab">
                                    <div class="wrapper-inner-tab-backgrounds">
                                        <div class="wrapper-inner-tab-backgrounds-third">
                                            <div class="sim-button button28"><span>Log out</span></div>
                                        </div>
                                    </div>
                                </div>
                                </a>



                           

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
