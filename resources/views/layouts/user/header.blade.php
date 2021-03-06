<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{url('user/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('user/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('user/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('user/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('user/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('user/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('user/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('user/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Sign in</a>
                <a href="#">FAQs</a>
            </div>
            <div class="offcanvas__top__hover">
                <span>Usd <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                </ul>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="{{url('user/img/icon/search.png')}}" alt=""></a>
            <a href="#"><img src="{{url('user/img/icon/heart.png')}}" alt=""></a>
            <a href="#"><img src="{{url('user/img/icon/cart.png')}}" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Ho??n tr??? trong 30 ng??y ho???c ho??n ti???n.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Ho??n tr??? trong 30 ng??y ho???c ho??n ti???n.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="#">Sign in</a>
                                <a href="#">FAQs</a>
                            </div>
                            <div class="header__top__hover">
                                <span>Usd <i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li>USD</li>
                                    <li>EUR</li>
                                    <li>USD</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="{{route('home')}}"><img src="{{url('user/img/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{{route('home')}}">Trang ch???</a></li>
                            <li><a href="{{route('product')}}">S???n ph???m</a></li>
                            <li><a href="{{route('page.about_us')}}">Trang</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('page.about_us')}}">Gi???i thi???u</a></li>
                                    <li><a href="{{route('product.detail')}}">Chi ti???t s???n ph???m</a></li>
                                    <li><a href="{{route('post.detail')}}">Chi ti???t b??i vi???t</a></li>
                                    <li><a href="{{route('cart.show')}}">Gi??? h??ng</a></li>
                                    <li><a href="{{route('cart.checkout')}}">Thanh to??n</a></li>                                    
                                </ul>
                            </li>
                            <li><a href="{{route('post')}}">B??i vi???t</a></li>
                            <li><a href="{{route('page.contact')}}">Li??n h???</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="{{url('user/img/icon/search.png')}}" alt=""></a>
                        <a href="#"><img src="{{url('user/img/icon/heart.png')}}" alt=""></a>
                        <a href="#"><img src="{{url('user/img/icon/cart.png')}}" alt=""> <span>0</span></a>
                        <div class="price">$0.00</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->