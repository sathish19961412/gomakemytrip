<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/product-slider.css">
    <title>slider</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <section class="product shadow-lg">
                    
                    <h1 class="handpicked-collection">Wonders of India</h1>
                    <div class="product-container">
                        <button class="ctrl-btn pre-btn wonder-d-none"><i class="fa fa-chevron-left" aria-hidden="true"></i></i></button>
                        <button class="ctrl-btn nxt-btn wonder-d-none"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                        <div class="product-card">
                            <div class="product-image">
                                <div class="woder-child">
                                    <span class="top-section-heading top-border">TOP 8</span>
                                    <p class="top-section">shemlas Best Kept Secret</p>
                                </div>
                                <img class="item-wonders" src="./destination imgs/wonders of india/m_Dapoli_l_703_937.jpg" class="product-thumb" alt="">
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <div class="woder-child">
                                    <span class="top-section-heading top-border">TOP 8</span>
                                    <p class="top-section">Tamilnadu Charming Hill Town</p>
                                </div>
                                <img class="item-wonders" src="./destination imgs/wonders of india/m_Narkanda_l_372_902.png" class="product-thumb" alt="">
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <div class="woder-child">
                                    <span class="top-section-heading top-border">TOP 8</span>
                                    <p class="top-section">Picturesque Gateway to Himalayas</p>
                                </div>
                                <img class="item-wonders" src="./destination imgs/wonders of india/m_destination-mandarmoni-landscape_l_400_640.png" class="product-thumb" alt="">
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <div class="woder-child">
                                    <span class="top-section-heading top-border">TOP 8</span>
                                    <p class="top-section">Quaint Little Hill Station in Gujarat</p>
                                </div>
                                <img class="item-wonders" src="./destination imgs/wonders of india/m_destination-saputara-landscape_l_400_640.png" class="product-thumb" alt="">
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <div class="woder-child">
                                    <span class="top-section-heading top-border">TOP 8</span>
                                    <p class="top-section">A pleasant summer retreat and a snowy winter wonderland!</p>
                                </div>
                                <img class="item-wonders" src="./destination imgs/wonders of india/m_destination-mandarmoni-landscape_l_400_640.png" class="product-thumb" alt="">
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <div class="woder-child">
                                    <span class="top-section-heading top-border">TOP 8</span>
                                    <p class="top-section">Hidden Gem along Maharashtra's Coast</p>
                                </div>
                                <img class="item-wonders" src="./destination imgs/wonders of india/m_destination-udupi-landscape_l_400_640.jpg" class="product-thumb" alt="">
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <div class="woder-child">
                                    <span class="top-section-heading top-border">TOP 8</span>
                                    <p class="top-section">Picture-Perfect Hill Station in Tamil Nadu</p>
                                </div>
                                <img class="item-wonders" src="./destination imgs/wonders of india/m_destination_Araku Valley_landscape_l_400_640.avif" class="product-thumb" alt="">
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <div class="woder-child">
                                    <span class="top-section-heading top-border">TOP 8</span>
                                    <p class="top-section">stay in & Around Delhi for a WeekendGetway</p>
                                </div>
                                <img class="item-wonders" src="./destination imgs/wonders of india/m_destination_vagamon_landscape_l_400_640.jpg" class="product-thumb" alt="">
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <div class="woder-child">
                                    <span class="top-section-heading top-border">TOP 8</span>
                                    <p class="top-section">stay in & Around Delhi for a WeekendGetway</p>
                                </div>
                                <img class="item-wonders" src="./destination imgs/wonders of india/m_destination_vengurla_landscape_l_400_640.jpg" class="product-thumb" alt="">
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <div class="woder-child">
                                    <span class="top-section-heading top-border">TOP 8</span>
                                    <p class="top-section">stay in & Around Delhi for a WeekendGetway</p>
                                </div>
                                <img class="item-wonders" src="./destination imgs/wonders of india/m_destination_vagamon_landscape_l_400_640.jpg" class="product-thumb" alt="">
                            </div>
                        </div>
                    </div>
                </section>    
            </div>
        </div>
    </div>
    
    
    <script>
        const productContainers = [...document.querySelectorAll('.product-container')];
        const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
        const preBtn = [...document.querySelectorAll('.pre-btn')];

        productContainers.forEach((item, i) => {
            let containerDimensions = item.getBoundingClientRect();
            let containerWidth = containerDimensions.width;

            nxtBtn[i].addEventListener('click', () => {
                item.scrollLeft += containerWidth;
            })

            preBtn[i].addEventListener('click', () => {
                item.scrollLeft -= containerWidth;
            })
        })
    </script>
    <script >
jQuery(document).ready(function() {
	'use strict';
	dz_rev_slider_1();
});	/*ready*/
</script>
<script type="text/javascript">

    $(document).ready(function () {

        //Disable full page

        $("body").on("contextmenu",function(e){

            //alert("right click functionality is disabled for this page.");

            return false;

        });        

    });
     $(document).ready(function () {       

       //Disable cut copy paste

        $('body').bind('cut copy paste', function (e) {

            //alert("cut copy paste functionalities are disabled for this page.");

            e.preventDefault();

        });       

    });

 </script>
</body>
</html>