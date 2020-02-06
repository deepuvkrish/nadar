<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Nadar | Admin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php include "include/header.php";?>
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
                            <h1 class="entri-title">Slide Show</h1>
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
                            <form class="form-register" action="slid.php" method="POST" enctype="multipart/form-data">
                                <fieldset>
                                    <legend>Slide Details</legend>

                                   

                                    <div class="form-group d-md-flex align-items-md-center">
                                        <label class="control-label col-md-2" for="l-name"><span class="require">*</span>Choose 1st image</label>
                                        <div class="col-md-10">
                                            <input type="file" class="form-control" name="file" id="l-name" >
                                        </div>
                                    </div>
                                    <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group d-md-flex align-items-md-center">
                                                <label class="control-label col-md-2" for="f-name">
                                                    <span class="require">*</span>1st Heading
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="name" id="f-name" placeholder="Product Definition">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group d-md-flex align-items-md-center">
                                                <label class="control-label col-md-2" for="f-name"><span class="require">*</span>2nd Heading</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="name" id="f-name" placeholder="Product Spec">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-100"></div>
                                        <div class="col">
                                            <div class="form-group d-md-flex align-items-md-center">
                                                <label class="control-label col-md-2" for="f-name"><span class="require">*</span>3rd Heading</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="name" id="f-name" placeholder="Product Offer">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group d-md-flex align-items-md-center">
                                                <label class="control-label col-md-2" for="f-name"><span class="require">*</span>Catchy Phrase</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="name" id="f-name" placeholder="Product Slogan">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    
                                        
                                    <div class="form-group d-md-flex align-items-md-center">
                                        <label class="control-label col-md-2" for="l-name"><span class="require">*</span>Choose 2nd image</label>
                                        <div class="col-md-10">
                                            <input type="file" class="form-control" name="file" id="l-name" >
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group d-md-flex align-items-md-center">
                                                    <label class="control-label col-md-2" for="f-name"><span class="require">*</span>1st Heading</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="name" id="f-name" placeholder="Product Definition">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group d-md-flex align-items-md-center">
                                                    <label class="control-label col-md-2" for="f-name"><span class="require">*</span>2nd Heading</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="name" id="f-name" placeholder="Product Spec">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-100"></div>
                                            <div class="col">
                                                <div class="form-group d-md-flex align-items-md-center">
                                                    <label class="control-label col-md-2" for="f-name"><span class="require">*</span>3rd Heading</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="name" id="f-name" placeholder="Product Offer">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group d-md-flex align-items-md-center">
                                                    <label class="control-label col-md-2" for="f-name"><span class="require">*</span>Catchy Phrase</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="name" id="f-name" placeholder="Product Slogan">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                        
                                    <div class="form-group d-md-flex align-items-md-center">
                                        <label class="control-label col-md-2" for="l-name"><span class="require">*</span>Choose 3rd image</label>
                                        <div class="col-md-10">
                                            <input type="file" class="form-control" name="file" id="l-name" >
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group d-md-flex align-items-md-center">
                                                    <label class="control-label col-md-2" for="f-name"><span class="require">*</span>1st Heading</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="name" id="f-name" placeholder="Product Definition">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group d-md-flex align-items-md-center">
                                                    <label class="control-label col-md-2" for="f-name"><span class="require">*</span>2nd Heading</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="name" id="f-name" placeholder="Product Spec">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-100"></div>
                                            <div class="col">
                                                <div class="form-group d-md-flex align-items-md-center">
                                                    <label class="control-label col-md-2" for="f-name"><span class="require">*</span>3rd Heading</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="name" id="f-name" placeholder="Product Offer">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group d-md-flex align-items-md-center">
                                                    <label class="control-label col-md-2" for="f-name"><span class="require">*</span>Catchy Phrase</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="name" id="f-name" placeholder="Product Slogan">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
  
                                
                               
                                <div class="terms">
                                    <div class="float-md-right">
                                        <input type="submit" value="Upload" name="fileuploadsubmit1" class="return-customer-btn">
                                    </div>
                                </div>
                                

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
                                            <div class="sim-button button28" style="padding-bottom:50px"><span>Log out</span></div>
                                        </div>
                                    </div>
                                </div>
                                </a>
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
