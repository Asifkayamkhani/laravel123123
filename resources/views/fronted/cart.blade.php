@extends('fronted.layout.app')
@section('content')

<div class="hero-area section-bg2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="slider-area">
                    <div class="slider-height2 slider-bg4 d-flex align-items-center justify-content-center">
                        <div class="hero-caption hero-caption2">
                            <h2>Cart</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Cart</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    @inject('getdata','App\Http\Controllers\MasterController')
                    <tbody>
                    @foreach($cart as $val)

                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="{{asset('uploades/'.$getdata::getproimage($val->product_id))}}" alt />
                                    </div>
                                    <div class="media-body">
                                        <p>{{$getdata::getproname($val->product_id)}}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>{{$val->price}}</h5>
                            </td>
                            <td>
                                <div class="product_count">
                                    <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                                    <input class="input-number" type="text" value="1" min="0" max="10">
                                    <span class="input-number-increment"> <i class="ti-plus"></i></span>
                                </div>
                            </td>
                            <td>
                                <h5>{{$val->price}}</h5>
                            </td>
                        </tr>
                    
                        <tr class="bottom_button">
                            <td>
                                <a class="btn" href="#">Update Cart</a>
                            </td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="cupon_text float-right">
                                    <a class="btn" href="#">Close Coupon</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <h5>Subtotal</h5>
                            </td>
                            <td>
                                <h5>$2160.00</h5>
                            </td>
                        </tr>
                       
                    </tbody>
                    @endforeach
                </table>
                <div class="checkout_btn_inner float-right">
                    <a class="btn" href="#">Continue Shopping</a>
                    <a class="btn checkout_btn" href="#">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection