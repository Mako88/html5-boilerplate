<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <base href="localhost" target="_top"> <!-- Change this to your site's hostname -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!-- This checks the name of the current page so that you can set the title and meta description independently. -->
        <?php
            $i = basename($_SERVER['SCRIPT_NAME']);
            $i = basename($i);
            switch ($i) {
                case "index.php":
                    echo '<title></title>';
                    echo '<meta name="description" content="">';
                    break;
                default:
                    echo "<title></title>";  
            }
        ?>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="images/icons/apple-touch-icon-precomposed.png">
        <link rel="icon" href="images/icons/favicon.ico" />
        <!-- Uncomment this if you use custom fonts. Don't forget to edit the fonts.css file! -->
        <!-- <link rel="stylesheet" href="css/fonts.css"> -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.0.min.js"></script>
    </head>
    <body>
        <!-- This is the site menu -->
        <!-- The PHP is an if statement to check the current filename and add the class 'selected' to the appropriate menu item. -->
        <!--<nav>
            <ul>
                <li>
                    <a href="" class="<?php //echo ($i == 'index.php' ? 'selected' : '');?>">Index</a>
                </li>
            </ul>
        </nav> -->