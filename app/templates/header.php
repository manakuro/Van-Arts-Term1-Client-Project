<?php 
require "boostrap.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ThinkW</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato:400,300,700' rel='stylesheet' type='text/css'>
        
        <!-- build:css dist/css/vendor.min.css -->
        <link href="../css/libs/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="../css/libs/fontello.css" rel="stylesheet" type="text/css"/>
        <link href="../css/libs/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="../js/vendor/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
        <link href="../js/vendor/source/helpers/jquery.fancybox-buttons.css" rel="stylesheet" type="text/css"/>
        <link href="../js/vendor/source/helpers/jquery.fancybox-thumbs.css" rel="stylesheet" type="text/css"/>
        <!-- endbuild -->

        <link href="dist/css/main.css" rel="stylesheet" type="text/css"/>

        <!-- build:js dist/js/vendor.min.js -->
        <script src="../js/vendor/flexibility.js" type="text/javascript"></script>
        <script src="../js/vendor/css_browser_selector.js" type="text/javascript"></script>
        <!-- endbuild -->

        <!-- my js -->
        <script type="text/javascript" src="dist/js/bundle.js"></script>
    </head>
    <body>
        <header class="page-header">

            <div class="row">

                <div class="span-4 columns">

                    <a href="./index.php" class="logo">
                        <img src="dist/img/logo.png" alt="logo">
                    </a>  

                </div>

                <div class="span-3 columns offset-5 medium-hide large-hide">

                    <div class="page-header-menu">
                        <i class="fa fa-bars page-header-menu-icon js-menu-icon"></i>    
                    </div>
                    
                </div>

                <nav class="page-nav span-m-7 columns offset-m-2">

                    <i class="fa fa-times close-btn js-menu-icon"></i>

                    <ul>
                        <li>
                            <a href="./index.php" class="link">Home</a>
                        </li>
                        <li>
                            <a href="./about.php" class="link">About</a>
                        </li>
                        <li>
                            <a href="./service.php" class="link">Service</a>
                        </li>
                        <li>
                            <a href="./portfolio.php" class="link">Work</a>
                        </li>
                        <li>
                            <a href="./contact.php" class="link">Contact</a>
                        </li>
                    </ul>

                </nav>

            </div>

        </header>