@extends('fronted.layout.app')
@section('content')

<div class="hero-area section-bg2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="slider-area">
                    <div class="slider-height2 slider-bg4 d-flex align-items-center justify-content-center">
                        <div class="hero-caption hero-caption2">
                            <h2>Product Details</h2>
                            <nav aria-label="breadcrumb">
                                @foreach($product as $val)
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">{{$val->slug}}</a></li>
                                </ol>
                                @endforeach
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="services-area2 pt-50">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        @foreach($product as $val)
                        <div class="single-services d-flex align-items-center mb-0">
                            <div class="features-img">
                                <img src="{{asset('uploades/'.$val->image)}}" alt>
                            </div>
                            <div class="features-caption">
                                <h3>{{$val->name}}</h3>
                                <p>By Evan Winter</p>
                                <div class="price">
                                    <span><i class="fa fa-inr"></i>{{$val->price}}</span>
                                </div>
                                <div class="review">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <p>(120 Review)</p>
                                </div>
                                <a href="{{url('add-cart/'.$val->id)}}" class="white-btn mr-10">Add to Cart</a>
                                <a href="#" class="border-btn share-btn"><i class="fas fa-share-alt"></i></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="our-client section-padding best-selling">

</section>
@endsection