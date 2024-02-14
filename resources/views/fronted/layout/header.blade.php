<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/capitalshop/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Feb 2024 05:17:28 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shop | eCommers</title>
    <meta name="description" content>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('fronted/assets/img/icon/favicon.png')}}">

    <link rel="stylesheet" href="{{asset('fronted/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fronted/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('fronted/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('fronted/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('fronted/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('fronted/assets/css/price_rangs.css')}}">
    <link rel="stylesheet" href="{{asset('fronted/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('fronted/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('fronted/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('fronted/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('fronted/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('fronted/assets/css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script nonce="6dc9acfc-d72c-4d8f-a161-bb4a57a3d60b">
    try {
        (function(w, d) {
            ! function(bb, bc, bd, be) {
                bb[bd] = bb[bd] || {};
                bb[bd].executed = [];
                bb.zaraz = {
                    deferred: [],
                    listeners: []
                };
                bb.zaraz.q = [];
                bb.zaraz._f = function(bf) {
                    return async function() {
                        var bg = Array.prototype.slice.call(arguments);
                        bb.zaraz.q.push({
                            m: bf,
                            a: bg
                        })
                    }
                };
                for (const bh of ["track", "set", "debug"]) bb.zaraz[bh] = bb.zaraz._f(bh);
                bb.zaraz.init = () => {
                    var bi = bc.getElementsByTagName(be)[0],
                        bj = bc.createElement(be),
                        bk = bc.getElementsByTagName("title")[0];
                    bk && (bb[bd].t = bc.getElementsByTagName("title")[0].text);
                    bb[bd].x = Math.random();
                    bb[bd].w = bb.screen.width;
                    bb[bd].h = bb.screen.height;
                    bb[bd].j = bb.innerHeight;
                    bb[bd].e = bb.innerWidth;
                    bb[bd].l = bb.location.href;
                    bb[bd].r = bc.referrer;
                    bb[bd].k = bb.screen.colorDepth;
                    bb[bd].n = bc.characterSet;
                    bb[bd].o = (new Date).getTimezoneOffset();
                    if (bb.dataLayer)
                        for (const bo of Object.entries(Object.entries(dataLayer).reduce(((bp, bq) => ({
                                ...bp[1],
                                ...bq[1]
                            })), {}))) zaraz.set(bo[0], bo[1], {
                            scope: "page"
                        });
                    bb[bd].q = [];
                    for (; bb.zaraz.q.length;) {
                        const br = bb.zaraz.q.shift();
                        bb[bd].q.push(br)
                    }
                    bj.defer = !0;
                    for (const bs of [localStorage, sessionStorage]) Object.keys(bs || {}).filter((bu => bu
                        .startsWith("_zaraz_"))).forEach((bt => {
                        try {
                            bb[bd]["z_" + bt.slice(7)] = JSON.parse(bs.getItem(bt))
                        } catch {
                            bb[bd]["z_" + bt.slice(7)] = bs.getItem(bt)
                        }
                    }));
                    bj.referrerPolicy = "origin";
                    bj.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(bb[
                        bd])));
                    bi.parentNode.insertBefore(bj, bi)
                };
                ["complete", "interactive"].includes(bc.readyState) ? zaraz.init() : bb.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document)
    } catch (e) {
        throw fetch("/cdn-cgi/zaraz/t"), e;
    };
    </script>
</head>

<body>

    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('fronted/assets/img/icon/loder.png')}}" alt="loder">
                </div>
            </div>
        </div>
    </div>

    <header>
        <div class="header-area">
            <div class="header-top d-none d-sm-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="d-flex justify-content-between flex-wrap align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Privacy</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Careers</a></li>
                                    </ul>
                                </div>
                                <div class="header-info-right d-flex">
                                    <ul class="order-list">
                                        <li><a href="#">My Wishlist</a></li>
                                        <li><a href="#">Track Your Order</a></li>
                                    </ul>
                                    <ul class="header-social">
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li> <a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li> <a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-mid header-sticky">
                <div class="container">
                    <div class="menu-wrapper">

                        <div class="logo">
                            <a href="{{url('home')}}"><img src="{{asset('fronted/assets/img/logo/logo.png')}}" alt></a>
                        </div>

                        @include('fronted.layout.page')

                        <div class="header-right">
                            <ul>
                                <li>
                                    <div class="nav-search search-switch hearer_icon">
                                        <a id="search_1" href="javascript:void(0)">
                                            <span class="flaticon-search"></span>
                                        </a>
                                    </div>
                                </li>
                                <li> <a href="{{url('cart')}}"><span class="flaticon-user"></span></a></li>
                                <li class="cart"><a href="{{url('cart')}}"><span
                                            class="flaticon-shopping-cart"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="search_input" id="search_input_box">
                        <form class="search-inner d-flex justify-content-between ">
                            <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                            <button type="submit" class="btn"></button>
                            <span class="ti-close" id="close_search" title="Close Search"></span>
                        </form>
                    </div>

                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
            <div class="header-bottom text-center">
                <p>Sale Up To 50% Biggest Discounts. Hurry! Limited Perriod Offer <a href="#" class="browse-btn">Shop
                        Now</a></p>
            </div>
        </div>
    </header>