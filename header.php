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
        
        <link rel="stylesheet" href="dist/css/vendor.min.css">

        <link href="dist/css/main.css" rel="stylesheet" type="text/css"/>

        <script src="dist/js/vendor.min.js"></script>

        <!-- my js -->
        <script type="text/javascript" src="dist/js/bundle.js"></script>
    </head>
    <body>
        <header class="page-header">

            <div class="row">

                <div class="span-4 span-m-3 span-l-2 columns">

                    <a href="./index.php" class="logo">
                        <img src="dist/img/logo.png" alt="logo">
                    </a>  

                </div>

                <div class="span-3 columns offset-5 medium-hide large-hide">

                    <div class="page-header-menu">
                        <i class="fa fa-bars page-header-menu-icon js-menu-icon"></i>    
                    </div>
                    
                </div>

                <nav class="page-nav span-m-9 columns span-l-8 offset-l-1">

                    <i class="fa fa-times close-btn js-menu-icon medium-hide large-hide"></i>

                    <ul class="menu-list">
                        <li class="menu-item">
                            <a href="./index.php" class="link">Home</a>
                        </li>
                        <li class="menu-item">
                            <a href="./about.php" class="link">About</a>
                        </li>
                        <li class="menu-item">
                            <a href="./service.php" class="link">Service</a>
                        </li>
                        <li class="menu-item">
                            <a href="./portfolio.php" class="link">Work</a>
                        </li>
                        <li class="menu-item">
                            <a href="./contact.php" class="link">Contact</a>
                        </li>
                    </ul>

                </nav>

            </div>

        </header>