<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <title>Booking Pink Home page</title>
        <link rel="icon" href="{{asset('front/assets/images/favicon.ico') }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="{{asset('front/assets/css/style_ar.css') }}">
        <link rel="stylesheet" href="{{asset('front/assets/css/colors/main.css') }}" id="colors">
        <link href="{{asset('front/assets/css/plugins/datedropper.css') }}" rel="stylesheet" type="text/css">

    </head>

    <body>
        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Header Container
            ================================================== -->
            @include('site.layout.include.header')

            <!-- Header Container / End -->

            <!-- Slider
            ================================================== -->

            <!-- Revolution Slider -->
            @include('site.layout.include.slider')
            <!-- Revolution Slider / End -->


            <!-- Content
            ================================================== -->

            <!-- Listings -->
            <div class="container margin-top-70">
                <div class="row">
                    <div class="col-md-12 responsive-head">
                        <h3 class="headline pull-left"> Homes</h3>
                        <a class="slide-seemore pull-right" href="{{asset('front/assets/products.html') }}">See all <i class="fa fa-angle-right"></i></a>
                    </div>
                    <div class="col-md-12">
                        <div class="simple-slick-carousel dots-nav">
                            <!-- Listing Item -->
                            <div class="carousel-item">
                                <div class="ribbon-featured"><div class="ribbon-start"></div><div class="ribbon-content">New Home</div><div class="ribbon-end"><figure class="ribbon-shadow"></figure></div></div>
                                <a href="{{asset('front/assets/product.html') }}" class="listing-item-container">
                                    <div class="listing-item">
                                        <img src="{{asset('front/assets/images/listing-item-01.jpg') }}" alt="">
                                        <div class="listing-item-details">
                                            <ul>
                                                <li><i class="fa fa-money"></i> Starting from $59 per night</li>
                                            </ul>
                                        </div>
                                        <div class="listing-item-content">
                                            <span class="tag">Hotels</span>
                                            <h3>Hotel Name</h3>
                                            <span><i class="fa fa-map-marker"></i> 332 Street Name, Alexandria</span>
                                        </div>
                                        <span class="like-icon"></span>
                                    </div>
                                    <div class="star-rating" data-rating="2.0">
                                        <div class="rating-counter">(17 reviews)</div>
                                    </div>
                                </a>
                            </div>
                            <!-- Listing Item / End -->
                            <!-- Listing Item -->
                            <div class="carousel-item">
                                <div class="ribbon-featured"><div class="ribbon-start"></div><div class="ribbon-content">New Home</div><div class="ribbon-end"><figure class="ribbon-shadow"></figure></div></div>
                                <a href="{{asset('front/assets/product.html') }}" class="listing-item-container">
                                    <div class="listing-item">
                                        <img src="{{asset('front/assets/images/listing-item-02.jpg') }}" alt="">
                                        <div class="listing-item-details">
                                            <ul>
                                                <li><i class="fa fa-money"></i> Starting from $59 per night</li>
                                            </ul>
                                        </div>
                                        <div class="listing-item-content">
                                            <span class="tag">Hotels</span>
                                            <h3>Hotel Name</h3>
                                            <span><i class="fa fa-map-marker"></i> 332 Street Name, Alexandria</span>
                                        </div>
                                        <span class="like-icon"></span>
                                    </div>
                                    <div class="star-rating" data-rating="2.0">
                                        <div class="rating-counter">(17 reviews)</div>
                                    </div>
                                </a>
                            </div>
                            <!-- Listing Item / End -->
                            <!-- Listing Item -->
                            <div class="carousel-item">
                                <a href="{{asset('front/assets/product.html') }}" class="listing-item-container">
                                    <div class="listing-item">
                                        <img src="{{asset('front/assets/images/listing-item-03.jpg') }}" alt="">
                                        <div class="listing-item-details">
                                            <ul>
                                                <li><i class="fa fa-money"></i> Starting from $59 per night</li>
                                            </ul>
                                        </div>
                                        <div class="listing-item-content">
                                            <span class="tag">Hotels</span>
                                            <h3>Hotel Name</h3>
                                            <span><i class="fa fa-map-marker"></i> 332 Street Name, Alexandria</span>
                                        </div>
                                        <span class="like-icon"></span>
                                    </div>
                                    <div class="star-rating" data-rating="2.0">
                                        <div class="rating-counter">(17 reviews)</div>
                                    </div>
                                </a>
                            </div>
                            <!-- Listing Item / End -->
                            <!-- Listing Item -->
                            <div class="carousel-item">
                                <a href="{{asset('front/assets/product.html') }}" class="listing-item-container">
                                    <div class="listing-item">
                                        <img src="{{asset('front/assets/images/listing-item-04.jpg') }}" alt="">
                                        <div class="listing-item-details">
                                            <ul>
                                                <li><i class="fa fa-money"></i> Starting from $59 per night</li>
                                            </ul>
                                        </div>
                                        <div class="listing-item-content">
                                            <span class="tag">Hotels</span>
                                            <h3>Hotel Name</h3>
                                            <span><i class="fa fa-map-marker"></i> 332 Street Name, Alexandria</span>
                                        </div>
                                        <span class="like-icon"></span>
                                    </div>
                                    <div class="star-rating" data-rating="2.0">
                                        <div class="rating-counter">(17 reviews)</div>
                                    </div>
                                </a>
                            </div>
                            <!-- Listing Item / End -->
                            <!-- Listing Item -->
                            <div class="carousel-item">
                                <a href="{{asset('front/assets/product.html') }}" class="listing-item-container">
                                    <div class="listing-item">
                                        <img src="{{asset('front/assets/images/listing-item-05.jpg') }}" alt="">
                                        <div class="listing-item-details">
                                            <ul>
                                                <li><i class="fa fa-money"></i> Starting from $59 per night</li>
                                            </ul>
                                        </div>
                                        <div class="listing-item-content">
                                            <span class="tag">Hotels</span>
                                            <h3>Hotel Name</h3>
                                            <span><i class="fa fa-map-marker"></i> 332 Street Name, Alexandria</span>
                                        </div>
                                        <span class="like-icon"></span>
                                    </div>
                                    <div class="star-rating" data-rating="2.0">
                                        <div class="rating-counter">(17 reviews)</div>
                                    </div>
                                </a>
                            </div>
                            <!-- Listing Item / End -->
                            <!-- Listing Item -->
                            <div class="carousel-item">
                                <a href="{{asset('front/assets/product.html') }}" class="listing-item-container">
                                    <div class="listing-item">
                                        <img src="{{asset('front/assets/images/listing-item-06.jpg') }}" alt="">
                                        <div class="listing-item-details">
                                            <ul>
                                                <li><i class="fa fa-money"></i> Starting from $59 per night</li>
                                            </ul>
                                        </div>
                                        <div class="listing-item-content">
                                            <span class="tag">Hotels</span>
                                            <h3>Hotel Name</h3>
                                            <span><i class="fa fa-map-marker"></i> 332 Street Name, Alexandria</span>
                                        </div>
                                        <span class="like-icon"></span>
                                    </div>
                                    <div class="star-rating" data-rating="2.0">
                                        <div class="rating-counter">(17 reviews)</div>
                                    </div>
                                </a>
                            </div>
                            <!-- Listing Item / End -->


                        </div>

                    </div>

                </div>
            </div>

            <section class="fullwidth margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f8f8f8">

                <div class="container margin-top-70">
                    <div class="row">
                        <div class="col-md-12 responsive-head">
                            <h3 class="headline pull-left"> Limousine</h3>
                            <a class="slide-seemore pull-right" href="{{asset('front/assets/products.html') }}">See all <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="col-md-12">
                            <div class="simple-slick-carousel dots-nav">
                                <!-- Listing Item -->
                                <div class="carousel-item">
                                    <div class="ribbon-featured"><div class="ribbon-start"></div><div class="ribbon-content">New Home</div><div class="ribbon-end"><figure class="ribbon-shadow"></figure></div></div>
                                    <a href="{{asset('front/assets/product.html') }}" class="listing-item-container">
                                        <div class="listing-item">
                                            <img src="{{asset('front/assets/images/listing-item-07.jpg') }}" alt="">
                                            <div class="listing-item-details">
                                                <ul>
                                                    <li><i class="fa fa-money"></i> Starting from $59 per night</li>
                                                </ul>
                                            </div>
                                            <div class="listing-item-content">
                                                <span class="tag">Hotels</span>
                                                <h3>Hotel Name</h3>
                                                <span><i class="fa fa-map-marker"></i> 332 Street Name, Alexandria</span>
                                            </div>
                                            <span class="like-icon"></span>
                                        </div>
                                        <div class="star-rating" data-rating="2.0">
                                            <div class="rating-counter">(17 reviews)</div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Listing Item / End -->
                                <!-- Listing Item -->
                                <div class="carousel-item">
                                    <div class="ribbon-featured"><div class="ribbon-start"></div><div class="ribbon-content">New Home</div><div class="ribbon-end"><figure class="ribbon-shadow"></figure></div></div>
                                    <a href="{{asset('front/assets/product.html') }}" class="listing-item-container">
                                        <div class="listing-item">
                                            <img src="{{asset('front/assets/images/listing-item-08.jpg') }}" alt="">
                                            <div class="listing-item-details">
                                                <ul>
                                                    <li><i class="fa fa-money"></i> Starting from $59 per night</li>
                                                </ul>
                                            </div>
                                            <div class="listing-item-content">
                                                <span class="tag">Hotels</span>
                                                <h3>Hotel Name</h3>
                                                <span><i class="fa fa-map-marker"></i> 332 Street Name, Alexandria</span>
                                            </div>
                                            <span class="like-icon"></span>
                                        </div>
                                        <div class="star-rating" data-rating="2.0">
                                            <div class="rating-counter">(17 reviews)</div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Listing Item / End -->
                                <!-- Listing Item -->
                                <div class="carousel-item">
                                    <a href="{{asset('front/assets/product.html') }}" class="listing-item-container">
                                        <div class="listing-item">
                                            <img src="{{asset('front/assets/images/listing-item-03.jpg') }}" alt="">
                                            <div class="listing-item-details">
                                                <ul>
                                                    <li><i class="fa fa-money"></i> Starting from $59 per night</li>
                                                </ul>
                                            </div>
                                            <div class="listing-item-content">
                                                <span class="tag">Hotels</span>
                                                <h3>Hotel Name</h3>
                                                <span><i class="fa fa-map-marker"></i> 332 Street Name, Alexandria</span>
                                            </div>
                                            <span class="like-icon"></span>
                                        </div>
                                        <div class="star-rating" data-rating="2.0">
                                            <div class="rating-counter">(17 reviews)</div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Listing Item / End -->
                                <!-- Listing Item -->
                                <div class="carousel-item">
                                    <a href="{{asset('front/assets/product.html') }}" class="listing-item-container">
                                        <div class="listing-item">
                                            <img src="{{asset('front/assets/images/listing-item-02.jpg') }}" alt="">
                                            <div class="listing-item-details">
                                                <ul>
                                                    <li><i class="fa fa-money"></i> Starting from $59 per night</li>
                                                </ul>
                                            </div>
                                            <div class="listing-item-content">
                                                <span class="tag">Hotels</span>
                                                <h3>Hotel Name</h3>
                                                <span><i class="fa fa-map-marker"></i> 332 Street Name, Alexandria</span>
                                            </div>
                                            <span class="like-icon"></span>
                                        </div>
                                        <div class="star-rating" data-rating="2.0">
                                            <div class="rating-counter">(17 reviews)</div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Listing Item / End -->
                                <!-- Listing Item -->
                                <div class="carousel-item">
                                    <a href="{{asset('front/assets/product.html') }}" class="listing-item-container">
                                        <div class="listing-item">
                                            <img src="{{asset('front/assets/images/listing-item-01.jpg') }}" alt="">
                                            <div class="listing-item-details">
                                                <ul>
                                                    <li><i class="fa fa-money"></i> Starting from $59 per night</li>
                                                </ul>
                                            </div>
                                            <div class="listing-item-content">
                                                <span class="tag">Hotels</span>
                                                <h3>Hotel Name</h3>
                                                <span><i class="fa fa-map-marker"></i> 332 Street Name, Alexandria</span>
                                            </div>
                                            <span class="like-icon"></span>
                                        </div>
                                        <div class="star-rating" data-rating="2.0">
                                            <div class="rating-counter">(17 reviews)</div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Listing Item / End -->
                                <!-- Listing Item -->
                                <div class="carousel-item">
                                    <a href="{{asset('front/assets/product.html') }}" class="listing-item-container">
                                        <div class="listing-item">
                                            <img src="{{asset('front/assets/images/listing-item-04.jpg') }}" alt="">
                                            <div class="listing-item-details">
                                                <ul>
                                                    <li><i class="fa fa-money"></i> Starting from $59 per night</li>
                                                </ul>
                                            </div>
                                            <div class="listing-item-content">
                                                <span class="tag">Hotels</span>
                                                <h3>Hotel Name</h3>
                                                <span><i class="fa fa-map-marker"></i> 332 Street Name, Alexandria</span>
                                            </div>
                                            <span class="like-icon"></span>
                                        </div>
                                        <div class="star-rating" data-rating="2.0">
                                            <div class="rating-counter">(17 reviews)</div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Listing Item / End -->


                            </div>

                        </div>

                    </div>
                </div>

            </section>

            <section class="fullwidth margin-top-70 margin-bottom-65" data-background-color="#fff">

                <div class="container margin-top-70">
                    <div class="row">
                        <div class="col-md-12 responsive-head">
                            <h3 class="headline pull-left"> Travels Offers</h3>
                            <a class="slide-seemore pull-right" href="{{asset('front/assets/products.html') }}">See all <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="col-md-12">
                            <div class="simple-slick-carousel dots-nav">
                                <!-- Listing Item -->
                                <div class="carousel-item">
                                    <div class="ribbon-featured"><div class="ribbon-start"></div><div class="ribbon-content">New Home</div><div class="ribbon-end"><figure class="ribbon-shadow"></figure></div></div>
                                    <a href="{{asset('front/assets/product.html') }}" class="listing-item-container">
                                        <div class="listing-item">
                                            <img src="{{asset('front/assets/images/listing-item-05.jpg') }}" alt="">
                                            <div class="listing-item-details">
                                                <ul>
                                                    <li><i class="fa fa-money"></i> Starting from $59 per night</li>
                                                </ul>
                                            </div>
                                            <div class="listing-item-content">
                                                <span class="tag">Hotels</span>
                                                <h3>Hotel Name</h3>
                                                <span><i class="fa fa-map-marker"></i> 332 Street Name, Alexandria</span>
                                            </div>
                                            <span class="like-icon"></span>
                                        </div>
                                        <div class="star-rating" data-rating="2.0">
                                            <div class="rating-counter">(17 reviews)</div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Listing Item / End -->
                                <!-- Listing Item -->
                                <div class="carousel-item">
                                    <div class="ribbon-featured"><div class="ribbon-start"></div><div class="ribbon-content">New Home</div><div class="ribbon-end"><figure class="ribbon-shadow"></figure></div></div>
                                    <a href="{{asset('front/assets/product.html') }}" class="listing-item-container">
                                        <div class="listing-item">
                                            <img src="{{asset('front/assets/images/listing-item-06.jpg') }}" alt="">
                                            <div class="listing-item-details">
                                                <ul>
                                                    <li><i class="fa fa-money"></i> Starting from $59 per night</li>
                                                </ul>
                                            </div>
                                            <div class="listing-item-content">
                                                <span class="tag">Hotels</span>
                                                <h3>Hotel Name</h3>
                                                <span><i class="fa fa-map-marker"></i> 332 Street Name, Alexandria</span>
                                            </div>
                                            <span class="like-icon"></span>
                                        </div>
                                        <div class="star-rating" data-rating="2.0">
                                            <div class="rating-counter">(17 reviews)</div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Listing Item / End -->
                                <!-- Listing Item -->
                                <div class="carousel-item">
                                    <a href="{{asset('front/assets/product.html') }}" class="listing-item-container">
                                        <div class="listing-item">
                                            <img src="{{asset('front/assets/images/listing-item-07.jpg') }}" alt="">
                                            <div class="listing-item-details">
                                                <ul>
                                                    <li><i class="fa fa-money"></i> Starting from $59 per night</li>
                                                </ul>
                                            </div>
                                            <div class="listing-item-content">
                                                <span class="tag">Hotels</span>
                                                <h3>Hotel Name</h3>
                                                <span><i class="fa fa-map-marker"></i> 332 Street Name, Alexandria</span>
                                            </div>
                                            <span class="like-icon"></span>
                                        </div>
                                        <div class="star-rating" data-rating="2.0">
                                            <div class="rating-counter">(17 reviews)</div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Listing Item / End -->
                                <!-- Listing Item -->
                                <div class="carousel-item">
                                    <a href="{{asset('front/assets/product.html') }}" class="listing-item-container">
                                        <div class="listing-item">
                                            <img src="{{asset('front/assets/images/listing-item-08.jpg') }}" alt="">
                                            <div class="listing-item-details">
                                                <ul>
                                                    <li><i class="fa fa-money"></i> Starting from $59 per night</li>
                                                </ul>
                                            </div>
                                            <div class="listing-item-content">
                                                <span class="tag">Hotels</span>
                                                <h3>Hotel Name</h3>
                                                <span><i class="fa fa-map-marker"></i> 332 Street Name, Alexandria</span>
                                            </div>
                                            <span class="like-icon"></span>
                                        </div>
                                        <div class="star-rating" data-rating="2.0">
                                            <div class="rating-counter">(17 reviews)</div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Listing Item / End -->
                                <!-- Listing Item -->
                                <div class="carousel-item">
                                    <a href="{{asset('front/assets/product.html') }}" class="listing-item-container">
                                        <div class="listing-item">
                                            <img src="{{asset('front/assets/images/listing-item-07.jpg') }}" alt="">
                                            <div class="listing-item-details">
                                                <ul>
                                                    <li><i class="fa fa-money"></i> Starting from $59 per night</li>
                                                </ul>
                                            </div>
                                            <div class="listing-item-content">
                                                <span class="tag">Hotels</span>
                                                <h3>Hotel Name</h3>
                                                <span><i class="fa fa-map-marker"></i> 332 Street Name, Alexandria</span>
                                            </div>
                                            <span class="like-icon"></span>
                                        </div>
                                        <div class="star-rating" data-rating="2.0">
                                            <div class="rating-counter">(17 reviews)</div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Listing Item / End -->
                                <!-- Listing Item -->
                                <div class="carousel-item">
                                    <a href="{{asset('front/assets/product.html') }}" class="listing-item-container">
                                        <div class="listing-item">
                                            <img src="{{asset('front/assets/images/listing-item-03.jpg') }}" alt="">
                                            <div class="listing-item-details">
                                                <ul>
                                                    <li><i class="fa fa-money"></i> Starting from $59 per night</li>
                                                </ul>
                                            </div>
                                            <div class="listing-item-content">
                                                <span class="tag">Hotels</span>
                                                <h3>Hotel Name</h3>
                                                <span><i class="fa fa-map-marker"></i> 332 Street Name, Alexandria</span>
                                            </div>
                                            <span class="like-icon"></span>
                                        </div>
                                        <div class="star-rating" data-rating="2.0">
                                            <div class="rating-counter">(17 reviews)</div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Listing Item / End -->


                            </div>

                        </div>

                    </div>
                </div>

            </section>
            <!-- Listings / End -->
         
            <!-- Footer
              ================================================== -->
              @include('site.layout.include.footer')
            <!-- Footer / End -->
            
            <!--ADS-->
            <div class="fixed-ads announcment">
                    <i id="close_announcment" class="fa fa-close"></i>
                    <img src="{{asset('front/assets/images/ann.jpg') }}">
            </div>
            <!--ADS /End-->
            <!-- Back To Top Button -->
            <div id="backtotop"><a href="#"></a></div>
        </div>
        <!-- Wrapper / End -->

        <!-- Scripts
        ================================================== -->
        <script type="text/javascript" src="{{asset('front/assets/scripts/jquery-2.2.0.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/jpanelmenu.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/chosen.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/slick.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/rangeslider.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/magnific-popup.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/waypoints.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/counterup.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/tooltips.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/custom.js') }}"></script>

        <!-- REVOLUTION SLIDER SCRIPT -->
        <script type="text/javascript" src="{{asset('front/assets/scripts/themepunch.tools.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/themepunch.revolution.min.js') }}"></script>

        <script type="text/javascript">
                                            var tpj = jQuery;
                                            var revapi4;
                                            tpj(document).ready(function () {
                                                if (tpj("#rev_slider_4_1").revolution == undefined) {
                                                    revslider_showDoubleJqueryError("#rev_slider_4_1");
                                                } else {
                                                    revapi4 = tpj("#rev_slider_4_1").show().revolution({
                                                        sliderType: "standard",
                                                        jsFileLocation: "scripts/",
                                                        sliderLayout: "auto",
                                                        dottedOverlay: "none",
                                                        delay: 9000,
                                                        navigation: {
                                                            keyboardNavigation: "off",
                                                            keyboard_direction: "horizontal",
                                                            mouseScrollNavigation: "off",
                                                            onHoverStop: "on",
                                                            touch: {
                                                                touchenabled: "on",
                                                                swipe_threshold: 75,
                                                                swipe_min_touches: 1,
                                                                swipe_direction: "horizontal",
                                                                drag_block_vertical: false
                                                            }
                                                            ,
                                                            arrows: {
                                                                style: "zeus",
                                                                enable: true,
                                                                hide_onmobile: true,
                                                                hide_under: 600,
                                                                hide_onleave: true,
                                                                hide_delay: 200,
                                                                hide_delay_mobile: 1200,
                                                                tmp: '<div class="tp-title-wrap"></div>',
                                                                left: {
                                                                    h_align: "left",
                                                                    v_align: "center",
                                                                    h_offset: 40,
                                                                    v_offset: 0
                                                                },
                                                                right: {
                                                                    h_align: "right",
                                                                    v_align: "center",
                                                                    h_offset: 40,
                                                                    v_offset: 0
                                                                }
                                                            }
                                                            ,
                                                            bullets: {
                                                                enable: false,
                                                                hide_onmobile: true,
                                                                hide_under: 600,
                                                                style: "hermes",
                                                                hide_onleave: true,
                                                                hide_delay: 200,
                                                                hide_delay_mobile: 1200,
                                                                direction: "horizontal",
                                                                h_align: "center",
                                                                v_align: "bottom",
                                                                h_offset: 0,
                                                                v_offset: 32,
                                                                space: 5,
                                                                tmp: ''
                                                            }
                                                        },
                                                        viewPort: {
                                                            enable: true,
                                                            outof: "pause",
                                                            visible_area: "80%"
                                                        },
                                                        responsiveLevels: [1200, 992, 768, 480],
                                                        visibilityLevels: [1200, 992, 768, 480],
                                                        gridwidth: [1180, 1024, 778, 480],
                                                        gridheight: [640, 500, 400, 300],
                                                        lazyType: "none",
                                                        parallax: {
                                                            type: "mouse",
                                                            origo: "slidercenter",
                                                            speed: 2000,
                                                            levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 25, 47, 48, 49, 50, 51, 55],
                                                            type:"mouse",
                                                        },
                                                        shadow: 0,
                                                        spinner: "off",
                                                        stopLoop: "off",
                                                        stopAfterLoops: -1,
                                                        stopAtSlide: -1,
                                                        shuffle: "off",
                                                        autoHeight: "off",
                                                        hideThumbsOnMobile: "off",
                                                        hideSliderAtLimit: 0,
                                                        hideCaptionAtLimit: 0,
                                                        hideAllCaptionAtLilmit: 0,
                                                        debugMode: false,
                                                        fallbacks: {
                                                            simplifyAll: "off",
                                                            nextSlideOnWindowFocus: "off",
                                                            disableFocusListener: false,
                                                        }
                                                    });
                                                }
                                            });
        </script>	
        <script type="text/javascript" src="{{asset('front/assets/scripts/extensions/revolution.extension.actions.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/extensions/revolution.extension.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/extensions/revolution.extension.migration.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/extensions/revolution.extension.video.min.js') }}"></script>
        <script src="{{asset('front/assets/scripts/datedropper.js') }}"></script>
        <script>
                                            $('#checkin').dateDropper();
                                            $('#checkout').dateDropper();
        </script> 
    </body>

</html>