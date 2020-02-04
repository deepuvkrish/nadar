<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<?php include "include/header.php";?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<style>


    body{  
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size:cover;
    background-color:#1c8adb;
    font-family: sans-serif;
    background: url('images/back.jpg');
    }
   
    .bt {
    box-sizing: border-box;
    position: relative;
    /* width: 13em;  - apply for fixed size */
    margin: 0.2em;
    padding: 0 15px 0 46px;    
    min-width: 240px; 
    border: none;
    text-align: left;
    line-height: 34px;
    white-space: nowrap;
    border-radius: 0.2em;
    font-size: 16px;
    color: #FFF;
    }
    .loginBtn:before {
    content: "";
    box-sizing: border-box;
    position: absolute;
    top: 0;
    left: 0;
    width: 34px;
    height: 100%;
    }
    .loginBtn:focus {
    outline: none;
    }
    .loginBtn:active {
    box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
    }
    
   
   
    .login-box{
    width: 320px;
    height: 375px;
    background: rgba(0, 0, 0, 0.7);
    border-radius: 10%;
    color: #fff;
    top: 40%;
    left: 50%;
    position: relative;
    transform: translate(-50%, 22%);
    box-sizing: border-box;   
    padding: 70px 30px;     
    }

    .login-box h1{
    margin: 0;
    padding: 0 0 3px;
    font-size: 25px;
    border-bottom: 3px solid #4caf50;
    text-align: center;
    margin-bottom: 50px;
    }

    .avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
    }
    .login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
    }

    .login-box input{
    width: 100%;
    margin-bottom: 20px;
    }
    .login-box input[type="text"],input[type="password"]
    {
    border: none;
    border-bottom: 1px solid #4caf50;
    background:transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
    min-width:200px;
    width:200px;
    
    }

    .login-box input[type="submit"]
    {
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18x;
    border-radius: 40px;
    
    
    }  


    #logo img {
    opacity: 0;
    -moz-transition: opacity 5s; /* Firefox 4 */
    -webkit-transition: opacity 5s; /* Safari and Chrome */
    -o-transition: opacity 5s;
    transition: opacity 5s;
    max-height:100px;
    }
   
</style>

</head>
<body>

<div class="container_fluid">
    <?php include 'include/adnav.php'; ?>

    <div class="login-box"  >   <!-- new modified log in box -->
                <img src="images/student.png" class="avatar">
                <h4 style="color:white">Admin LOGin</h4>
                <form class="form-inline form-signin" align="center" autocomplete="off" action="sel.php" method="POST">

                
                    <div style="position: relative;left: 14px;">
                    <i class="fas fa-user  faa-ring animated"></i>
                    <input type="text" class="form-control" name="username" id="username" autocomplete="off" autofocus value style="margin-bottom:5px" placeholder="Username"><br>
                    </div>
                    <div>
                    <i class="fas fa-lock faa-flash animated"></i>
                    <input type="password" class="form-control" name="password" id="password" 
                            autocomplete="off" autofocus value style="margin-bottom:5px" placeholder="password"><br>
                    <input class="bt btn-large btn-primary" type="submit" name="save" id="save" value="Sign In">
                    </div>

                </form>
    </div>




    <?php include 'include/adfooter.php'; ?>
</div>



<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<!-- jQuery Local -->
<script>window.jQuery || document.write('<script src="js/jquery-3.2.1.min.js"><\/script>')</script>

<!-- Popper min js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap min js  -->
<script src="js/bootstrap.min.js"></script>
<!-- nivo slider pack js  -->
<script src="js/jquery.nivo.slider.pack.js"></script>
<!-- All plugins here -->
<script src="js/plugins.js"></script>
<!-- Main js  -->
<script src="js/main.js"></script>



</body>
</html>