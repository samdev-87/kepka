<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kepka - Мужская одежда</title>
    <meta name="description" content="Мужская одежда">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="https://htmldemo.net/sophie/assets/img/favicon.ico" type="image/x-icon">
    <!-- Place favicon.ico in the root directory -->


    <!-- all css here -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/et-line-icon.css')}}">
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('css/elegantIcons.css')}}">
    <link rel="stylesheet" href="{{asset('css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/Pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{asset('css/bundle.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <script src="{{asset('js/modernizr-3.11.2.min.js')}}"></script>
</head>
<body>
<div class="wrapper-top">
    <!-- header-start -->
    <div class="header-top">
        <div class="row">
            <div class="col-lg-2 col-sm-4 col-6">
                <div class="logo">
                    <a href="#"><img src="{{asset('images/1.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-10 col-sm-8 col-6 pl-0">
                <div class="block-right f-right">
                    <div class="current">
                        <i class="fa fa-cog"></i>
                        <ul class="current-menu">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Log In</a></li>
                            <li><a href="#">english</a></li>
                            <li><a href="#">اللغة العربية</a></li>
                            <li><a href="#">Currency :</a></li>
                            <li><a href="#"> Dollar (USD)</a></li>
                            <li><a href="#"> Pound (GBP)</a></li>
                        </ul>
                    </div>
                    <div class="serch-container">
                        <i class="fa fa-search"></i>
                        <div class="icon-form">
                            <form action="#">
                                <input type="text" placeholder="search">
                                <button class="search"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="cart-icon">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="{{asset('images/2.png')}}" alt="">
                                    <span id="cart-total">2</span>
                                </a>
                                <div class="cart-item">
                                    <ul>
                                        <li>
                                            <div class="cart-img">
                                                <a href="#"><img
                                                        src="./images/45.jpg" alt=""></a>
                                            </div>
                                            <div class="cart-title">
                                                <a href="#">
                                                    <h4>Zopo Designs x Woolrich Klette...</h4>
                                                </a>
                                                <span class="quantity">×1</span>
                                                <span class="cart-price">$69.00</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cart-img">
                                                <a href="#"><img
                                                        src="./images/46.jpg" alt=""></a>
                                            </div>
                                            <div class="cart-title">
                                                <a href="#">
                                                    <h4>Zopo Designs x Woolrich Klette...</h4>
                                                </a>
                                                <span class="quantity">×1</span>
                                                <span class="cart-price">$69.00</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="subtotal">
                                                <div class="subtotal-titles">
                                                    <h3>Sub-Total :</h3>
                                                    <span>44.00£</span>
                                                </div>
                                                <div class="subtotal-titles">
                                                    <h3>VAT (20%) :</h3>
                                                    <span>12.00£</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cart-btns">
														<span class="default-btn">
															<a href="#">View Cart</a>
														</span>
                                                <span class="default-btn">
															<a href="#">Checkout</a>
														</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="main-menu d-none d-lg-block">
                    <nav>
                        <ul>
                            <li class="active"><a href="#">home <i
                                        class="fa fa-angle-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="#">Home style 1</a></li>
                                </ul>
                            </li>
                            <li><a href="https://htmldemo.net/sophie/shop.html">Bowling bag<i
                                        class="fa fa-angle-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="https://htmldemo.net/sophie/shop.html">Doctor's bag</a></li>
                                    <li><a href="https://htmldemo.net/sophie/shop.html">Half-moon</a></li>
                                    <li><a href="https://htmldemo.net/sophie/shop.html">Drawstring</a></li>
                                </ul>
                            </li>
                            <li class="megamenu-holder"><a href="https://htmldemo.net/sophie/shop.html">Clutch <i
                                        class="fa fa-angle-down"></i></a>
                                <div class="mega-menu">
                                    <ul>
                                        <li class="mega-title"><a href="https://htmldemo.net/sophie/shop.html">hobo</a>
                                        </li>
                                        <li><a href="https://htmldemo.net/sophie/shop.html">backpack flexible</a></li>
                                        <li><a href="https://htmldemo.net/sophie/shop.html">frameless backpack</a></li>
                                        <li><a href="https://htmldemo.net/sophie/shop.html">modern frame</a></li>
                                        <li><a href="https://htmldemo.net/sophie/shop.html">swiss army backpack</a></li>
                                    </ul>
                                    <ul>
                                        <li class="mega-title"><a
                                                href="https://htmldemo.net/sophie/shop.html">treating</a></li>
                                        <li><a href="https://htmldemo.net/sophie/shop.html">acne treatment</a></li>
                                        <li><a href="https://htmldemo.net/sophie/shop.html">anti-fungal</a></li>
                                        <li><a href="https://htmldemo.net/sophie/shop.html">anti-itch</a></li>
                                        <li><a href="https://htmldemo.net/sophie/shop.html">eczema</a></li>
                                    </ul>
                                    <ul>
                                        <li class="mega-title"><a href="#">nourishing</a>
                                        </li>
                                        <li><a href="https://htmldemo.net/sophie/shop.html">lorem ipsum</a></li>
                                        <li><a href="https://htmldemo.net/sophie/shop.html">nulla sit</a></li>
                                        <li><a href="https://htmldemo.net/sophie/shop.html">orther</a></li>
                                        <li><a href="https://htmldemo.net/sophie/shop.html">donec luctus</a></li>
                                    </ul>
                                    <ul>
                                        <li class="mega-title"><a
                                                href="https://htmldemo.net/sophie/shop.html">exfoliant</a></li>
                                        <li><a href="https://htmldemo.net/sophie/shop.html">moisturizer</a></li>
                                        <li><a href="https://htmldemo.net/sophie/shop.html">foot odor</a></li>
                                        <li><a href="https://htmldemo.net/sophie/shop.html">corn</a></li>
                                        <li><a href="https://htmldemo.net/sophie/shop.html">lorem ipsum</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="https://htmldemo.net/sophie/blog.html">blog <i
                                        class="fa fa-angle-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="https://htmldemo.net/sophie/blog.html">blog 2 column</a></li>
                                    <li><a href="https://htmldemo.net/sophie/blog-full-wide.html">blog full width</a>
                                    </li>
                                    <li><a href="https://htmldemo.net/sophie/blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="https://htmldemo.net/sophie/shop.html">Pages <i
                                        class="fa fa-angle-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="https://htmldemo.net/sophie/about.html">About</a></li>
                                    <li><a href="https://htmldemo.net/sophie/shop.html">shop</a></li>
                                    <li><a href="https://htmldemo.net/sophie/product-details.html">Product Details</a>
                                    </li>
                                    <li><a href="https://htmldemo.net/sophie/cart.html">Shopping cart</a></li>
                                    <li><a href="https://htmldemo.net/sophie/checkout.html">checkout</a></li>
                                    <li><a href="https://htmldemo.net/sophie/wishlist.html">wishlist</a></li>
                                    <li><a href="https://htmldemo.net/sophie/contact-us.html">checkout</a></li>
                                    <li><a href="https://htmldemo.net/sophie/login.html">login</a></li>
                                    <li><a href="https://htmldemo.net/sophie/register.html">register</a></li>
                                    <li><a href="https://htmldemo.net/sophie/error-404.html">404 page</a></li>
                                    <li><a href="https://htmldemo.net/sophie/faq.html">faq</a></li>
                                </ul>
                            </li>
                            <li><a href="https://htmldemo.net/sophie/contact-us.html">contact us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-12">
                <div class="mobile-menu d-block d-md-none">
                    <nav id="mob-menu" style="display: block;">
                        <ul>
                            <li class="active"><a href="#">home <i
                                        class="fa fa-angle-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="#">Home style 1</a></li>
                                    <li><a href="https://htmldemo.net/sophie/index-2.html">Home style 2</a></li>
                                    <li><a href="https://htmldemo.net/sophie/index-3.html">Home style 3</a></li>
                                    <li><a href="https://htmldemo.net/sophie/index-4.html">Home style 4</a></li>
                                </ul>
                            </li>
                            <li><a href="https://htmldemo.net/sophie/shop.html">Bowling bag<i
                                        class="fa fa-angle-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="https://htmldemo.net/sophie/shop.html">Doctor's bag</a></li>
                                    <li><a href="https://htmldemo.net/sophie/shop.html">Half-moon</a></li>
                                    <li><a href="https://htmldemo.net/sophie/shop.html">Drawstring</a></li>
                                </ul>
                            </li>
                            <li class="megamenu-holder"><a href="https://htmldemo.net/sophie/shop.html">Clutch<i
                                        class="fa fa-angle-down"></i></a>
                                <ul>
                                    <li class="mega-title"><a href="https://htmldemo.net/sophie/shop.html">hobo</a>
                                        <ul>
                                            <li><a href="https://htmldemo.net/sophie/shop.html">backpack flexible</a>
                                            </li>
                                            <li><a href="https://htmldemo.net/sophie/shop.html">frameless backpack</a>
                                            </li>
                                            <li><a href="https://htmldemo.net/sophie/shop.html">modern frame</a></li>
                                            <li><a href="https://htmldemo.net/sophie/shop.html">swiss army backpack</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mega-title"><a href="https://htmldemo.net/sophie/shop.html">treating</a>
                                        <ul>
                                            <li><a href="https://htmldemo.net/sophie/shop.html">acne treatment</a></li>
                                            <li><a href="https://htmldemo.net/sophie/shop.html">anti-fungal</a></li>
                                            <li><a href="https://htmldemo.net/sophie/shop.html">anti-itch</a></li>
                                            <li><a href="https://htmldemo.net/sophie/shop.html">eczema</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-title"><a
                                            href="https://htmldemo.net/sophie/shop.html">nourishing</a>
                                        <ul>
                                            <li><a href="https://htmldemo.net/sophie/shop.html">lorem ipsum</a></li>
                                            <li><a href="https://htmldemo.net/sophie/shop.html">nulla sit</a></li>
                                            <li><a href="https://htmldemo.net/sophie/shop.html">orther</a></li>
                                            <li><a href="https://htmldemo.net/sophie/shop.html">donec luctus</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-title"><a href="https://htmldemo.net/sophie/shop.html">exfoliant</a>
                                        <ul>
                                            <li><a href="https://htmldemo.net/sophie/shop.html">moisturizer</a></li>
                                            <li><a href="https://htmldemo.net/sophie/shop.html">foot odor</a></li>
                                            <li><a href="https://htmldemo.net/sophie/shop.html">corn</a></li>
                                            <li><a href="https://htmldemo.net/sophie/shop.html">lorem ipsum</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="https://htmldemo.net/sophie/blog.html">blog <i
                                        class="fa fa-angle-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="https://htmldemo.net/sophie/blog.html">blog 2 column</a></li>
                                    <li><a href="https://htmldemo.net/sophie/blog-full-wide.html">blog full width</a>
                                    </li>
                                    <li><a href="https://htmldemo.net/sophie/blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="https://htmldemo.net/sophie/shop.html">Pages <i
                                        class="fa fa-angle-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="https://htmldemo.net/sophie/about.html">About</a></li>
                                    <li><a href="https://htmldemo.net/sophie/shop.html">shop</a></li>
                                    <li><a href="https://htmldemo.net/sophie/product-details.html">Product Details</a>
                                    </li>
                                    <li><a href="https://htmldemo.net/sophie/cart.html">Shopping cart</a></li>
                                    <li><a href="https://htmldemo.net/sophie/checkout.html">checkout</a></li>
                                    <li><a href="https://htmldemo.net/sophie/wishlist.html">wishlist</a></li>
                                    <li><a href="https://htmldemo.net/sophie/contact-us.html">checkout</a></li>
                                    <li><a href="https://htmldemo.net/sophie/login.html">login</a></li>
                                    <li><a href="https://htmldemo.net/sophie/register.html">register</a></li>
                                    <li><a href="https://htmldemo.net/sophie/error-404.html">404 page</a></li>
                                    <li><a href="https://htmldemo.net/sophie/faq.html">faq</a></li>
                                </ul>
                            </li>
                            <li><a href="https://htmldemo.net/sophie/contact-us.html">contact us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- header-end -->
    <!-- slider-area-start -->
    <div class="slider-area">
        <div class="sliders-active owl-carousel owl-loaded owl-drag">


            <div class="owl-stage-outer">
                <div class="owl-stage"
                     style="transform: translate3d(-3577px, 0px, 0px); transition: all 0s ease 0s; width: 10734px;">
                    <div class="owl-item cloned" style="width: 1788.84px;">
                        <div class="slider-wrapper" style="background-image:url({{asset('images/slider/7.jpg')}})">
                            <div class="container">
                                <div class="slider-text">
                                    <h3>shoes<span>new collection</span></h3>
                                    <h1>Shoes spring ACG</h1>
                                    <p>First presented on the medal stand in Sochi, Sophie has now brought back <br> the
                                        shoes spring ACG.</p>
                                    <a href="#">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 1788.84px;">
                        <div class="slider-wrapper" style="background-image:url({{asset('images/slider/8.jpg')}})">
                            <div class="container">
                                <div class="slider-text">
                                    <h3>headphone <span>new collection</span></h3>
                                    <h1>Soul Flex Waterproof </h1>
                                    <p>Sophie deeply appreciates all military men and women for their service. <br>
                                        Eligible personnel receive a 10% discount on Sophie orders.</p>
                                    <a href="#">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 1788.84px;">
                        <div class="slider-wrapper" style="background-image:url({{asset('images/slider/7.jpg')}})">
                            <div class="container">
                                <div class="slider-text">
                                    <h3>shoes<span>new collection</span></h3>
                                    <h1>Shoes spring ACG</h1>
                                    <p>First presented on the medal stand in Sochi, Sophie has now brought back <br> the
                                        shoes spring ACG.</p>
                                    <a href="#">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 1788.84px;">
                        <div class="slider-wrapper" style="background-image:url({{asset('images/slider/8.jpg')}})">
                            <div class="container">
                                <div class="slider-text">
                                    <h3>headphone <span>new collection</span></h3>
                                    <h1>Soul Flex Waterproof </h1>
                                    <p>Sophie deeply appreciates all military men and women for their service. <br>
                                        Eligible personnel receive a 10% discount on Sophie orders.</p>
                                    <a href="#">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 1788.84px;">
                        <div class="slider-wrapper" style="background-image:url({{asset('images/slider/7.jpg')}})">
                            <div class="container">
                                <div class="slider-text">
                                    <h3>shoes<span>new collection</span></h3>
                                    <h1>Shoes spring ACG</h1>
                                    <p>First presented on the medal stand in Sochi, Sophie has now brought back <br> the
                                        shoes spring ACG.</p>
                                    <a href="#">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 1788.84px;">
                        <div class="slider-wrapper" style="background-image:url({{asset('images/slider/8.jpg')}})">
                            <div class="container">
                                <div class="slider-text">
                                    <h3>headphone <span>new collection</span></h3>
                                    <h1>Soul Flex Waterproof </h1>
                                    <p>Sophie deeply appreciates all military men and women for their service. <br>
                                        Eligible personnel receive a 10% discount on Sophie orders.</p>
                                    <a href="#">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav">
                <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                <div class="owl-next"><i class="fa fa-angle-right"></i></div>
            </div>
            <div class="owl-dots">
                <div class="owl-dot active"><span></span></div>
                <div class="owl-dot"><span></span></div>
            </div>
        </div>
    </div>
    <!-- slider-area-end -->
    <!-- featured-product-area-start -->
    <div class="featured-product-area pt-60 pb-70">
        <div class="row">
            <div class="col-md-3">
                <div class="featured-product-wrapper mb-30">
                    <div class="featured-product-img">
                        <a href="#"><img src="./images/23.jpg" alt=""></a>
                        <div class="featured-product-button">
                            <a href="#">Half-moon</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="featured-product-wrapper mb-30">
                    <div class="featured-product-img">
                        <a href="#"><img src="./images/21.jpg" alt=""></a>
                        <div class="featured-product-button">
                            <a href="#">Hobo</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="featured-product-wrapper mb-30">
                    <div class="featured-product-img">
                        <a href="#"><img src="./images/22.jpg" alt=""></a>
                        <div class="featured-product-button">
                            <a href="#">Clutch</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="featured-product-wrapper mb-30">
                    <div class="featured-product-img">
                        <a href="#"><img src="./images/24.jpg" alt=""></a>
                        <div class="featured-product-button">
                            <a href="#">Pouch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- featured-product-area-end -->
    <!-- product-area-start -->
    <div class="product-area pb-100">
        <div class="section-title text-center">
            <h2>Most viewed products </h2>
            <p>When it comes to TVs, there are choices galore on Flipkart.</p>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-4 column-2">
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="./images/2.jpg" alt="">
                            <img class="secondary-img" src="./images/1.jpg" alt="">
                        </a>
                        <div class="label-product">
                            <span>new</span>
                        </div>
                        <div class="product-action">
                            <div class="action-inner">
                                <a data-bs-toggle="tooltip" title="Add to Cart"
                                   href="#"><i class="icon_cart_alt"></i></a>
                                <a data-bs-toggle="tooltip" title="Compare this Product"
                                   href="#"><i class="icon_tags_alt"
                                                                                       aria-hidden="true"></i></a>
                                <a data-bs-toggle="tooltip" title="Add to Wish List"
                                   href="#"><i class="icon_star_alt"
                                                                                       aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h2><a href="#">Bopo Designs x Woolrich Klettersack 22L
                                Backpack</a></h2>
                        <div class="price-box">
                            <span class="new-price"> $279.99  </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 column-2">
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="./images/4.jpg" alt="">
                            <img class="secondary-img" src="./images/3.jpg" alt="">
                        </a>
                        <div class="label-product">
                            <span class="new">-20%</span>
                        </div>
                        <div class="product-action">
                            <div class="action-inner">
                                <a data-bs-toggle="tooltip" title="Add to Cart"
                                   href="#"><i class="icon_cart_alt"></i></a>
                                <a data-bs-toggle="tooltip" title="Compare this Product"
                                   href="#"><i class="icon_tags_alt"
                                                                                       aria-hidden="true"></i></a>
                                <a data-bs-toggle="tooltip" title="Add to Wish List"
                                   href="#"><i class="icon_star_alt"
                                                                                       aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h2><a href="#">Copo Designs x Woolrich Klettersack 22L
                                Backpack</a></h2>
                        <div class="price-box">
                            <span class="new-price"> $80.00  </span>
                            <span class="old-price"> $100.00  </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 column-2">
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="./images/6.jpg" alt="">
                            <img class="secondary-img" src="./images/5.jpg" alt="">
                        </a>
                        <div class="label-product">
                            <span>new</span>
                        </div>
                        <div class="product-action">
                            <div class="action-inner">
                                <a data-bs-toggle="tooltip" title="Add to Cart"
                                   href="#"><i class="icon_cart_alt"></i></a>
                                <a data-bs-toggle="tooltip" title="Compare this Product"
                                   href="#"><i class="icon_tags_alt"
                                                                                       aria-hidden="true"></i></a>
                                <a data-bs-toggle="tooltip" title="Add to Wish List"
                                   href="#"><i class="icon_star_alt"
                                                                                       aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h2><a href="#">Eopo Designs x Woolrich Klettersack 22L
                                Backpack</a></h2>
                        <div class="price-box">
                            <span class="new-price"> $100.00 </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 column-2">
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="./images/8.jpg" alt="">
                            <img class="secondary-img" src="./images/7.jpg" alt="">
                        </a>
                        <div class="label-product">
                            <span>New</span>
                        </div>
                        <div class="product-action">
                            <div class="action-inner">
                                <a data-bs-toggle="tooltip" title="Add to Cart"
                                   href="#"><i class="icon_cart_alt"></i></a>
                                <a data-bs-toggle="tooltip" title="Compare this Product"
                                   href="#"><i class="icon_tags_alt"
                                                                                       aria-hidden="true"></i></a>
                                <a data-bs-toggle="tooltip" title="Add to Wish List"
                                   href="#"><i class="icon_star_alt"
                                                                                       aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h2><a href="#">Hopo Designs x Woolrich Klettersack 22L
                                Backpack</a></h2>
                        <div class="price-box">
                            <span class="new-price"> $100.00 </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 column-2">
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="./images/25.jpg" alt="">
                            <img class="secondary-img" src="./images/26.jpg" alt="">
                        </a>
                        <div class="label-product">
                            <span>New</span>
                        </div>
                        <div class="product-action">
                            <div class="action-inner">
                                <a data-bs-toggle="tooltip" title="Add to Cart"
                                   href="#"><i class="icon_cart_alt"></i></a>
                                <a data-bs-toggle="tooltip" title="Compare this Product"
                                   href="#"><i class="icon_tags_alt"
                                                                                       aria-hidden="true"></i></a>
                                <a data-bs-toggle="tooltip" title="Add to Wish List"
                                   href="#"><i class="icon_star_alt"
                                                                                       aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h2><a href="#">Jopo Designs x Woolrich Klettersack 22L
                                Backpack</a></h2>
                        <div class="price-box">
                            <span class="new-price"> $101.00   </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 column-2">
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="./images/28.jpg" alt="">
                            <img class="secondary-img" src="./images/27.jpg" alt="">
                        </a>
                        <div class="label-product">
                            <span>New</span>
                        </div>
                        <div class="product-action">
                            <div class="action-inner">
                                <a data-bs-toggle="tooltip" title="Add to Cart"
                                   href="#"><i class="icon_cart_alt"></i></a>
                                <a data-bs-toggle="tooltip" title="Compare this Product"
                                   href="#"><i class="icon_tags_alt"
                                                                                       aria-hidden="true"></i></a>
                                <a data-bs-toggle="tooltip" title="Add to Wish List"
                                   href="#"><i class="icon_star_alt"
                                                                                       aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h2><a href="#">Gopo Designs x Woolrich Klettersack 22L
                                Backpack</a></h2>
                        <div class="price-box">
                            <span class="new-price"> $100.00   </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 column-2">
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="./images/30.jpg" alt="">
                            <img class="secondary-img" src="./images/29.jpg" alt="">
                        </a>
                        <div class="label-product">
                            <span class="new">-20%</span>
                        </div>
                        <div class="product-action">
                            <div class="action-inner">
                                <a data-bs-toggle="tooltip" title="Add to Cart"
                                   href="#"><i class="icon_cart_alt"></i></a>
                                <a data-bs-toggle="tooltip" title="Compare this Product"
                                   href="#"><i class="icon_tags_alt"
                                                                                       aria-hidden="true"></i></a>
                                <a data-bs-toggle="tooltip" title="Add to Wish List"
                                   href="#"><i class="icon_star_alt"
                                                                                       aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h2><a href="#">Dopo Designs x Woolrich Klettersack 22L
                                Backpack</a></h2>
                        <div class="price-box">
                            <span class="new-price"> $69.00   </span>
                            <span class="old-price"> $80.00   </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 column-2">
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="./images/32.jpg" alt="">
                            <img class="secondary-img" src="./images/31.jpg" alt="">
                        </a>
                        <div class="label-product">
                            <span>New</span>
                        </div>
                        <div class="product-action">
                            <div class="action-inner">
                                <a data-bs-toggle="tooltip" title="Add to Cart"
                                   href="#"><i class="icon_cart_alt"></i></a>
                                <a data-bs-toggle="tooltip" title="Compare this Product"
                                   href="#"><i class="icon_tags_alt"
                                                                                       aria-hidden="true"></i></a>
                                <a data-bs-toggle="tooltip" title="Add to Wish List"
                                   href="#"><i class="icon_star_alt"
                                                                                       aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h2><a href="#">Sopo Designs x Woolrich Klettersack 22L
                                Backpack</a></h2>
                        <div class="price-box">
                            <span class="new-price"> $200.00   </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 column-2">
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="./images/33.jpg" alt="">
                            <img class="secondary-img" src="./images/34.jpg" alt="">
                        </a>
                        <div class="label-product">
                            <span class="new">-91%</span>
                        </div>
                        <div class="product-action">
                            <div class="action-inner">
                                <a data-bs-toggle="tooltip" title="Add to Cart"
                                   href="#"><i class="icon_cart_alt"></i></a>
                                <a data-bs-toggle="tooltip" title="Compare this Product"
                                   href="#"><i class="icon_tags_alt"
                                                                                       aria-hidden="true"></i></a>
                                <a data-bs-toggle="tooltip" title="Add to Wish List"
                                   href="#"><i class="icon_star_alt"
                                                                                       aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h2><a href="#">Ropo Designs x Woolrich Klettersack 22L
                                Backpack</a></h2>
                        <div class="price-box">
                            <span class="new-price"> $90.00   </span>
                            <span class="old-price"> $1000.00   </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 column-2">
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="./images/36.jpg" alt="">
                            <img class="secondary-img" src="./images/35.jpg" alt="">
                        </a>
                        <div class="label-product">
                            <span>New</span>
                        </div>
                        <div class="product-action">
                            <div class="action-inner">
                                <a data-bs-toggle="tooltip" title="Add to Cart"
                                   href="#"><i class="icon_cart_alt"></i></a>
                                <a data-bs-toggle="tooltip" title="Compare this Product"
                                   href="#"><i class="icon_tags_alt"
                                                                                       aria-hidden="true"></i></a>
                                <a data-bs-toggle="tooltip" title="Add to Wish List"
                                   href="#"><i class="icon_star_alt"
                                                                                       aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h2><a href="#">Iopo Designs x Woolrich Klettersack 22L
                                Backpack</a></h2>
                        <div class="price-box">
                            <span class="new-price"> $100.00   </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 column-2">
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="./images/38.jpg" alt="">
                            <img class="secondary-img" src="./images/37.jpg" alt="">
                        </a>
                        <div class="label-product">
                            <span>New</span>
                        </div>
                        <div class="product-action">
                            <div class="action-inner">
                                <a data-bs-toggle="tooltip" title="Add to Cart"
                                   href="#"><i class="icon_cart_alt"></i></a>
                                <a data-bs-toggle="tooltip" title="Compare this Product"
                                   href="#"><i class="icon_tags_alt"
                                                                                       aria-hidden="true"></i></a>
                                <a data-bs-toggle="tooltip" title="Add to Wish List"
                                   href="#"><i class="icon_star_alt"
                                                                                       aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h2><a href="#">Aopo Designs x Woolrich Klettersack 22L
                                Backpack</a></h2>
                        <div class="price-box">
                            <span class="new-price"> $100.00   </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 column-2">
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="./images/14.jpg" alt="">
                            <img class="secondary-img" src="./images/13.jpg" alt="">
                        </a>
                        <div class="label-product">
                            <span>New</span>
                        </div>
                        <div class="product-action">
                            <div class="action-inner">
                                <a data-bs-toggle="tooltip" title="Add to Cart"
                                   href="#"><i class="icon_cart_alt"></i></a>
                                <a data-bs-toggle="tooltip" title="Compare this Product"
                                   href="#"><i class="icon_tags_alt"
                                                                                       aria-hidden="true"></i></a>
                                <a data-bs-toggle="tooltip" title="Add to Wish List"
                                   href="#"><i class="icon_star_alt"
                                                                                       aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h2><a href="#">Xopo Designs x Woolrich Klettersack 22L
                                Backpack</a></h2>
                        <div class="price-box">
                            <span class="new-price"> $279.00   </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 column-2">
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="./images/40.jpg" alt="">
                            <img class="secondary-img" src="./images/39.jpg" alt="">
                        </a>
                        <div class="label-product">
                            <span>New</span>
                        </div>
                        <div class="product-action">
                            <div class="action-inner">
                                <a data-bs-toggle="tooltip" title="Add to Cart"
                                   href="#"><i class="icon_cart_alt"></i></a>
                                <a data-bs-toggle="tooltip" title="Compare this Product"
                                   href="#"><i class="icon_tags_alt"
                                                                                       aria-hidden="true"></i></a>
                                <a data-bs-toggle="tooltip" title="Add to Wish List"
                                   href="#"><i class="icon_star_alt"
                                                                                       aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h2><a href="#">Oopo Designs x Woolrich Klettersack 22L
                                Backpack</a></h2>
                        <div class="price-box">
                            <span class="new-price"> $500.00   </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 column-2">
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="./images/18.jpg" alt="">
                            <img class="secondary-img" src="./images/17.jpg" alt="">
                        </a>
                        <div class="label-product">
                            <span>New</span>
                        </div>
                        <div class="product-action">
                            <div class="action-inner">
                                <a data-bs-toggle="tooltip" title="Add to Cart"
                                   href="#"><i class="icon_cart_alt"></i></a>
                                <a data-bs-toggle="tooltip" title="Compare this Product"
                                   href="#"><i class="icon_tags_alt"
                                                                                       aria-hidden="true"></i></a>
                                <a data-bs-toggle="tooltip" title="Add to Wish List"
                                   href="#"><i class="icon_star_alt"
                                                                                       aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h2><a href="#">Sopo Designs x Woolrich Klettersack 22L
                                Backpack</a></h2>
                        <div class="price-box">
                            <span class="new-price"> $100.00   </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 column-2">
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="./images/42.jpg" alt="">
                            <img class="secondary-img" src="./images/41.jpg" alt="">
                        </a>
                        <div class="label-product">
                            <span>New</span>
                        </div>
                        <div class="product-action">
                            <div class="action-inner">
                                <a data-bs-toggle="tooltip" title="Add to Cart"
                                   href="#"><i class="icon_cart_alt"></i></a>
                                <a data-bs-toggle="tooltip" title="Compare this Product"
                                   href="#"><i class="icon_tags_alt"
                                                                                       aria-hidden="true"></i></a>
                                <a data-bs-toggle="tooltip" title="Add to Wish List"
                                   href="#"><i class="icon_star_alt"
                                                                                       aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h2><a href="#">Qopo Designs x Woolrich Klettersack 22L
                                Backpack</a></h2>
                        <div class="price-box">
                            <span class="new-price"> $2,000.00   </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="items-button text-center">
                    <a href="#"> load more</a>
                </div>
            </div>
        </div>
    </div>
    <!-- product-area-start -->
    <!-- main-area-start -->
    <div class="main-area">
        <div class="container-fulid">
            <div class="row">
                <div class="col-12">
                    <div class="main-wrapper text-center">
                        <div class="main-img">
                            <img src="./images/3(1).jpg" alt="">
                        </div>
                        <div class="main-content">
                            <h4>Sophie DISCOUNT CODES AND OFFERS</h4>
                            <h2>WEEKLY FLASH SALE</h2>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                                vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio
                                dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla
                                facilisi.</p>
                            <div class="text_link">
                                <a href="#">get your code</a>
                                <a href="#">explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main-area-end -->
    <!-- our-brand-area-start -->
    <div class="our-brand-area">
        <div class="container">
            <div class="brand-border">
                <div class="row">
                    <div class="brand-active owl-carousel owl-loaded owl-drag">


                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                 style="transform: translate3d(-1200px, 0px, 0px); transition: all 0s ease 0s; width: 4320px;">
                                <div class="owl-item cloned" style="width: 210px; margin-right: 30px;">
                                    <div class="brand-item">
                                        <div class="single-brand">
                                            <div class="brand-img">
                                                <img src="./images/4.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 210px; margin-right: 30px;">
                                    <div class="brand-item">
                                        <div class="single-brand">
                                            <div class="brand-img">
                                                <img src="./images/5.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 210px; margin-right: 30px;">
                                    <div class="brand-item">
                                        <div class="single-brand">
                                            <div class="brand-img">
                                                <img src="./images/2(1).png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 210px; margin-right: 30px;">
                                    <div class="brand-item">
                                        <div class="single-brand">
                                            <div class="brand-img">
                                                <img src="./images/4.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 210px; margin-right: 30px;">
                                    <div class="brand-item">
                                        <div class="single-brand">
                                            <div class="brand-img">
                                                <img src="./images/3.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 210px; margin-right: 30px;">
                                    <div class="brand-item">
                                        <div class="single-brand">
                                            <div class="brand-img">
                                                <img src="./images/1(1).png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 210px; margin-right: 30px;">
                                    <div class="brand-item">
                                        <div class="single-brand">
                                            <div class="brand-img">
                                                <img src="./images/2(1).png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 210px; margin-right: 30px;">
                                    <div class="brand-item">
                                        <div class="single-brand">
                                            <div class="brand-img">
                                                <img src="./images/3.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 210px; margin-right: 30px;">
                                    <div class="brand-item">
                                        <div class="single-brand">
                                            <div class="brand-img">
                                                <img src="./images/4.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 210px; margin-right: 30px;">
                                    <div class="brand-item">
                                        <div class="single-brand">
                                            <div class="brand-img">
                                                <img src="./images/5.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 210px; margin-right: 30px;">
                                    <div class="brand-item">
                                        <div class="single-brand">
                                            <div class="brand-img">
                                                <img src="./images/2(1).png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 210px; margin-right: 30px;">
                                    <div class="brand-item">
                                        <div class="single-brand">
                                            <div class="brand-img">
                                                <img src="./images/4.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 210px; margin-right: 30px;">
                                    <div class="brand-item">
                                        <div class="single-brand">
                                            <div class="brand-img">
                                                <img src="./images/3.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 210px; margin-right: 30px;">
                                    <div class="brand-item">
                                        <div class="single-brand">
                                            <div class="brand-img">
                                                <img src="./images/1(1).png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 210px; margin-right: 30px;">
                                    <div class="brand-item">
                                        <div class="single-brand">
                                            <div class="brand-img">
                                                <img src="./images/2(1).png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 210px; margin-right: 30px;">
                                    <div class="brand-item">
                                        <div class="single-brand">
                                            <div class="brand-img">
                                                <img src="./images/3.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 210px; margin-right: 30px;">
                                    <div class="brand-item">
                                        <div class="single-brand">
                                            <div class="brand-img">
                                                <img src="./images/4.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 210px; margin-right: 30px;">
                                    <div class="brand-item">
                                        <div class="single-brand">
                                            <div class="brand-img">
                                                <img src="./images/5.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav">
                            <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                            <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                        </div>
                        <div class="owl-dots">
                            <div class="owl-dot active"><span></span></div>
                            <div class="owl-dot"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our-brand-area-end -->
    <!-- footer-area-start -->
    <footer>
        <div class="footer-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-wrapper text-center">
                            <div class="footer-logo">
                                <a href="#"><img src="./images/3(2).png"
                                                                                      alt=""></a>
                            </div>
                            <div class="footer-content">
                                <p>Welcome to the world of L.K.Bennett. Discover the latest trends of the season and how
                                    to wear them, be inspired by profiles of influential and fascinating women, learn
                                    about the design process and production behind the pieces you love. Why not take
                                    some time and explore?</p>
                            </div>
                            <div class="social-footer">
                                <ul class="list-unstyled">
                                    <li><a href="https://www.facebook.com/PlazaThemes1/"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="https://twitter.com/plazathemes"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i
                                                class="fa fa-rss"></i></a></li>
                                    <li><a href="https://plus.google.com/+PlazaThemesMagento"><i
                                                class="fa fa-google-plus"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/plazathemes"><i
                                                class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="single-footer">
                                <ul class="footer-menu text-center">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Delivery Information</a>
                                    </li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms &amp; Conditions</a>
                                    </li>
                                </ul>
                                <div class="footer-img text-center">
                                    <a href="#"><img
                                            src="./images/1(2).png" alt=""></a>
                                </div>
                                <div class="copyright text-center">
                                    <p class="copy-text"> © 2021 <strong>Sophie</strong> Made With <i
                                            class="fa fa-heart" aria-hidden="true"></i> By <a class="company-name"
                                                                                              href="https://themeforest.net/user/hastech/portfolio">
                                            <strong> HasTech</strong></a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->
</div>
<!-- all js here -->
<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-3.3.2.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/ajax-mail.js')}}"></script>
<script src="{{asset('js/jquery.meanmenu.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;">
    <i class="fa fa-angle-up"></i>
</a>


</body>
</html>
