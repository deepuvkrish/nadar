<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["p1"])) {
    $table = $_GET["p1"];
}
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM $table WHERE item_name='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["item_name"]=>array('item_name'=>$productByCode[0]["item_name"], 'Current_Stock'=>$productByCode[0]["Current_Stock"], 'quantity'=>$_POST["quantity"], 'Act_Price'=>$productByCode[0]["Act_Price"],'Final_Price'=>$productByCode[0]["Final_Price"], 'image'=>$productByCode[0]["image"], 'Discount'=>$productByCode[0]["Discount"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["item_name"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["item_name"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
                } 
                else {
                    $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
            } 
            else {
                $_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>




<!doctype html>
<html class="no-js" lang="en">
    <head>
        <?php include "include/header.php"; ?>
    </head>
    <body>
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
                                <span class="separator">/</span> Cart
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
                            <h1 class="entry-title">Cart</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page title end -->
            <!-- cart page content -->
            <div class="cart-page-area">
                <div class="container">
                    <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="table-content table-responsive mb-50">
                                <div id="shopping-cart">
                                    <div class="txt-heading">Shopping Cart</div>

                                    
                                    <?php
                                    if(isset($_SESSION["cart_item"])){
                                        $total_quantity = 0;
                                        $total_price = 0;
                                    ?>	
                                    <table class="tbl-cart" cellpadding="10" cellspacing="1">
                                        <tbody>
                                        <a id="btnEmpty" href="cart.php?action=empty&p1=<?php echo $table;?>" style="background-color: #ffffff;
                                        border: #d00000 1px solid;
                                        padding: 5px 10px;
                                        color: #d00000;
                                        float: right;
                                        text-decoration: none;
                                        border-radius: 3px;
                                        margin: 10px 0px;">
                                    Empty Cart
                                    </a>
                                            <tr>
                                                <th class="product-thumbnail">Name</th>
                                                <th class="product-name">Code</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-subtotal">Discount Price</th>
                                                <th class="product-remove">Remove</th>
                                            </tr>	
                                            <?php		
                                                foreach ($_SESSION["cart_item"] as $item){
                                                    $item_price = $item["quantity"]*$item["Final_Price"];
                                            ?>
                                            <tr>
                                                <td class="product-thumbnail">	
                                                    <img src="upload/<?php echo $item["image"]; ?>" class="cart-item-image" /> 
                                                </td>                         
                                                <td class="product-name">	
                                                    <?php echo $item["item_name"]; ?>	
                                                </td>
                                                <td class="product-quantity">	
                                                    <?php echo $item["quantity"]; ?>	
                                                </td>
                                                <td  class="product-price">	
                                                    <?php echo "₹ ".$item["Act_Price"]; ?>	
                                                </td>
                                                <td  class="product-subtotal">	
                                                    <?php echo "₹ ". number_format($item_price,2); ?>	
                                                </td>
                                                <td class="product-remove" >
                                                    <a href="cart.php?action=remove&p1=<?php echo $table;?>&code=<?php echo $item["item_name"]; ?>" class="btnRemoveAction">
                                                        <img src="icon-delete.png" alt="Remove Item" />
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php
                                                $total_quantity += $item["quantity"];
                                                $total_price += ($item["Final_Price"]*$item["quantity"]);
                                                }
                                            ?>

                                            <tr>
                                                <td colspan="2" align="right">Total:</td>
                                                <td align="right"><?php echo $total_quantity; ?></td>
                                                <td align="right" colspan="2"><strong><?php echo "₹ ".number_format($total_price, 2); ?></strong></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>		
                                    <?php
                                        } else {
                                    ?>
                                    <!-- Table Content Start -->
                                    
                                    <div class="no-records">Your Cart is Empty</div>
                                    <?php 
                                        }
                                    ?>
                                </div>
                                <div class="row">
                                        <!-- Cart Button Start -->
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <div class="buttons-cart">
                                            <input type="submit" value="Update Cart">
                                            <a href="index.php">Continue Shopping</a>
                                            <a href="checkout.php">Proceed to Checkout</a>
                                        </div>
                                        
                                    </div>
                                        <!-- Cart Button Start -->
                                        <!-- Cart Totals Start -->
                                    
                        </div>
                    </div>
                </div>
            </div>
            <!-- cart page content end -->
            <?php include 'include/footer.php'; ?>













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
