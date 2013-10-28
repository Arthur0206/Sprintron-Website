<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="Show your talent, and become a popular idol known to the world!" />
        <meta name="keywords" content="idol, popular, vedio contest, price, bonus, world champion, super star, sining, dancing, film maker" />
        <title>Tiger Wing - 讓您的產品如虎添翼</title>
        <link href="./css/main.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="./nivo-slider/themes/default/default.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="./nivo-slider/themes/light/light.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="./nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="./nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="./nivo-slider/nivo-slider.css" type="text/css" media="screen" />
        <script src="./_js/jquery-1.7.2.min.js"></script>
        <script src="./nivo-slider/jquery.nivo.slider.js"></script>
        <script>
            $(document).ready(function() {
                $('#slider').nivoSlider();

                $('.entry_content_wrapper').hover(
                function() {
                    //$(this).find('.entry_image').css('opacity', '0.6');
                    //$(this).css('background-color','#f8f8f8');
                    $(this).find('.entry_description').css('color', '#444444');
                }, function() {
                    //$(this).find('.entry_image').css('opacity', '1.0');
                    //
                    $(this).css('background-color','#ffffff');
                    $(this).find('.entry_description').css('color', '#777777');
                }); // end hover
            }); // ready
        </script> 
    </head>
    <body>
    	<?php 
            /* include top menu bar */ 
            require_once('./menubar.php'); 
    	?>
    <div id="wrapper">
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="./Pics/circuit-board-crop.jpg">
                <img src="./Pics/flying-tiger-crop.jpg">
            </div>
        </div>
    </div>
        <div id="main_container">
            <div class="entry_wrapper" style="top: 70px; left: -3px;">         
                <div class="entry_title_wrapper unselectable">
                    公司介紹
                </div> 
                <a href="./company_intro.php">
                <div class="entry_content_wrapper" style="height: 300px">
                <div class="entry_image_wrapper">
                    <img class="entry_image" src="./Pics/company-intro.jpg">
                    </img>
                </div>
                <div class="entry_description_wrapper">
                    <p class="entry_description">
                        Tiger Wing Technologies為您的產品
                    </p>
                </div>
                </div>
                </a>
            </div>
            
            <div class="entry_wrapper" style="top: 70px; left: 250px;">
                <div class="entry_title_wrapper unselectable">
                    產品介紹
                </div> 
                <a href="./product_intro.php">
                <div class="entry_content_wrapper" style="height: 300px">
                <div class="entry_image_wrapper">
                    <img class="entry_image" src="./Pics/product-intro.jpg">
                    </img>
                </div>
                <div class="entry_description_wrapper">
                    <p class="entry_description">
                        我們的產品我們的產品我們的產品我們的產品我們的產品我們的產品我們的產品我們的產品我們的產品我們的產品我們的產品我們的產品我們的產品
                    </p>
                </div>
                </div>
                </a>
            </div>
            
            <div class="entry_wrapper" style="top: 70px; left: 503px;">
                <div class="entry_title_wrapper unselectable">
                    技術支援
                </div> 
                <a href="./technical_support.php">
                <div class="entry_content_wrapper" style="height: 300px">
                <div class="entry_image_wrapper">
                    <img class="entry_image" src="./Pics/technical-support.jpg">
                    </img>
                </div>
                <div class="entry_description_wrapper">
                    <p class="entry_description">
                        技術支援 技術支援技術支援技術支援技術支援 技術支援技術支援 技術支援技術支援 技術支援技術支援技術支援 
                    </p>
                </div>
                </div>
                </a>
            </div>
            
            <div class="entry_wrapper" style="top: 70px; left: 756px;">
                <div class="entry_title_wrapper unselectable">
                    聯絡我們
                </div> 
                <a href="./contact_us.php">
                <div class="entry_content_wrapper" style="height: 300px">
                <div class="entry_image_wrapper">
                    <img class="entry_image" src="./Pics/contact-us.jpg">
                    </img>
                </div>
                <div class="entry_description_wrapper">
                    <p class="entry_description">
                        聯絡我們聯絡我們聯絡我們聯絡我們 聯絡我們聯絡我們 聯絡我們聯絡我們聯絡我們 聯絡我們聯絡我們聯絡我們聯絡我們 聯絡我們
                    </p>
                </div>
                </div>
                </a>
            </div>
            <!--
            <div id="news_wrapper">
                <div id="news_title">
                    <h3>最新消息</h3>
                </div>
                <div id="news_hr">
                </div>
            </div>
            -->
        </div>
        <div id="footer">
            <div id="footer-copyright">
                copyright (c) 2013 by Tiger Wing Technologies. All rights reserved.
            </div>
            <div id="footer-contact">
                聯絡我們
            </div>
        </div>
    </body>
</html>
