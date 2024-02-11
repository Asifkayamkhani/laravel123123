@extends('fronted.layout.app')
@section('content')
<section class="slider-area ">
    <div class="slider-active">
        @foreach($banner as $val)
        @if($val->type==1)
        <div class="single-slider slider-height d-flex align-items-center"
            style="background-image:url({{asset('uploades/'.$val->image)}});;">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8 col-sm-10">
                        <div class="hero-caption text-center">
                            <span>Fashion Sale</span>
                            <h1 data-animation="bounceIn" data-delay="0.2s">{{$val->name}}</h1>
                            <p data-animation="fadeInUp" data-delay="0.4s">{{$val->describtion}}</p>
                            <a href="#" class="btn_1 hero-btn" data-animation="fadeInUp" data-delay="0.7s">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else

        <div class="single-slider slider-height d-flex align-items-center"
            style="background-image:url({{asset('uploades/'.$val->image)}});">
            <div class="container">
                <div class="rowr">
                    <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8  col-sm-10">
                        <div class="hero-caption text-center">
                            <span>Fashion Sale</span>
                            <h1 data-animation="bounceIn" data-delay="0.2s">Minimal Menz Style</h1>
                            <p data-animation="fadeInUp" data-delay="0.4s">Consectetur adipisicing elit. Laborum
                                fuga incidunt laboriosam voluptas iure, delectus dignissimos facilis neque nulla
                                earum.</p>
                            <a href="#" class="btn_1 hero-btn" data-animation="fadeInUp" data-delay="0.7s">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @endif
        @endforeach
    </div>
</section>


<section class="items-product1 pt-30">
    <div class="container">
        <div class="row">
            @foreach($category as $title)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-items mb-20">
                    <div class="items-img">
                        <img src="{{asset('uploades/'.$title->image)}}" alt>
                        <!-- <img src="{{asset('fronted/assets/img/gallery/items1.jpg')}}" alt> -->

                    </div>
                    <div class="items-details">
                        <h4><a href="{{url('pro-details')}}">{{$title->name}}</a></h4>
                        <a href="{{url('category/'.$title->slug)}}" class="browse-btn">{{$title->describtion}}</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>


<div class="latest-items section-padding fix">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-12">

                <nav>
                    <div class="text-center">
                        <h2>Oldest Items</h2>
                    </div>

                </nav>

            </div>
        </div>
    </div>
    <div class="container">

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">

                <div class="latest-items-active">
                    @foreach($pro as $val)
                    @if($val->condition==0)
                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="{{url('pro-details/'.$val->slug)}}"><img
                                        src="{{asset('uploades/'.$val->image )}}" alt></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="{{url('pro-details/'.$val->slug)}}">{{$val->name
                                    }}</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span><i class="fa fa-inr"></i>{{$val->price}} <span><i
                                                    class="fa fa-inr"></i>{{$val->mrp}}</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach


                </div>
            </div>
        </div>


        <div class="testimonial-area testimonial-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-10 col-md-11">
                        <div class="h1-testimonial-active">
                            @foreach($google as $val)
                            <div class="single-testimonial text-center">
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <h2>Customer Testimonial</h2>
                                        <p>{{$val->describtion}}</p>
                                    </div>

                                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                        <div class="founder-img">
                                            <img src="{{asset('uploades/'.$val->image)}}" alt width="100px">
                                        </div>
                                        <div class="founder-text">
                                            <span>{{$val->name}}</span>
                                            <p>Designer at Colorlib</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="latest-items section-padding fix">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-40">
                        <h2>Latest Items</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="latest-items-active">
                    @foreach($pro as $val)
                    @if($val->condition==1)
                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="{{url('pro-details/'.$val->slug)}}"><img src="{{asset('uploades/'.$val->image)}}" alt></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="{{url('pro-details/'.$val->slug)}}">{{$val->name}}</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span><i class="fa fa-inr"></i>{{$val->price}} <span><i
                                                    class="fa fa-inr"></i>{{$val->mrp}}</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach


                </div>
            </div>
        </section>

        <section class="latest-items section-padding fix">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-40">
                        <h2>Trending Items</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="latest-items-active">
                    @foreach($pro as $val)
                    @if($val->condition==2)
                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="{{url('pro-details/'.$val->slug)}}"><img src="{{asset('uploades/'.$val->image)}}" alt></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="{{url('pro-details/'.$val->slug)}}">{{$val->name}}</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span><i class="fa fa-inr"></i>{{$val->price}} <span><i
                                                    class="fa fa-inr"></i>{{$val->mrp}}</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach


                </div>
            </div>
        </section>


    


        <div class="categories-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp text-center" data-wow-duration="1s"
                            data-wow-delay=".2s">
                            <div class="cat-icon">
                                <img src="{{asset('fronted/assets/img/icon/services1.svg')}}" alt>
                            </div>
                            <div class="cat-cap">
                                <h5>Fast & Free Delivery</h5>
                                <p>Free delivery on all orders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp text-center" data-wow-duration="1s"
                            data-wow-delay=".2s">
                            <div class="cat-icon">
                                <img src="{{asset('fronted/assets/img/icon/services2.svg')}}" alt>
                            </div>
                            <div class="cat-cap">
                                <h5>Secure Payment</h5>
                                <p>Free delivery on all orders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp text-center" data-wow-duration="1s"
                            data-wow-delay=".4s">
                            <div class="cat-icon">
                                <img src="{{asset('fronted/assets/img/icon/services3.svg')}}" alt>
                            </div>
                            <div class="cat-cap">
                                <h5>Money Back Guarantee</h5>
                                <p>Free delivery on all orders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp text-center" data-wow-duration="1s"
                            data-wow-delay=".5s">
                            <div class="cat-icon">
                                <img src="{{asset('fronted/assets/img/icon/services4.svg')}}" alt>
                            </div>
                            <div class="cat-cap">
                                <h5>Online Support</h5>
                                <p>Free delivery on all orders</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection