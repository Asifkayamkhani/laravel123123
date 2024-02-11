
@php
$category=App\Models\category::where('status',1)->get();
@endphp
<div class="main-menu d-none d-lg-block">

    <nav>
        <ul id="navigation">
            <li><a href="{{url('home')}}">Home</a></li>
            <li><a href="#">Category <i class="fas fa-angle-down"></i></a>
                <ul class="submenu">
                    @foreach($category as $val)
                    <li><a href="{{url('category/'.$val->slug)}}">{{$val->name}}</a></li>
                    @endforeach

                </ul>
            </li>   

            <li><a href="#">Pages <i class="fas fa-angle-down"></i></a>
                <ul class="submenu">
                    <li><a href="{{url('login-fronted')}}">Login</a></li>
                    <li><a href="{{url('cart')}}">Cart</a></li>
                    <li><a href="{{url('pro-details')}}">Product Details</a></li>
                    <li><a href="{{url('checkout')}}">Product Checkout</a></li>
                </ul>
            </li>
            <li><a href="blog.html">Blog</a>
                <ul class="submenu">
                    <li><a href="{{url('blog')}}">Blog</a></li>
                    <li><a href="{{url('elements')}}">Element</a></li>
                    <li><a href="{{url('blog-details')}}">Blog Details</a></li>
                </ul>
            </li>
            <li><a href="{{url('contact')}}">Contact</a></li>
        </ul>
    </nav>
</div>