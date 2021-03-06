<?php

require 'core.php';

?>

<html>
    <head>
        <title>Test Site</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="head">
            <div class="site-logo">
                <a href="index.html">My Site</a>
            </div>
            <div class="site-nav">
                <ul class="nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="banner">
            <img src="banner.jpg" />
            <div>
                <h1>Updated.</h1>
                <p>Elaborate a little bit.</p>
                <p>Version 2 included.</p>
                <p>Version 1.</p>
            </div>
        </div>
        <div class="body">
            <div class="three-div-layout">
                <div class="left">
                    <h2 class="center">One service</h2>
                    <p class="center">This is just one service we provide</p>
                </div>
                <div class="middle">
                    <h2 class="center">Another service</h2>
                    <p class="center">This is yet another service we provide</p>
                </div>
                <div class="right">
                    <h2 class="center">A final service</h2>
                    <p class="center">This is a final service that we provide</p>
                </div>
            </div>
            <div class="body-element">
                <h2 class="center">Like what you see?</h2>
                <p class="center"><input type="text" class="large long" placeholder="Email" /></p>
            </div>
        </div>
        <div class="foot">
            <div class="content">
                Test for the footer.
            </div>
        </div>
    </body>
</html>
