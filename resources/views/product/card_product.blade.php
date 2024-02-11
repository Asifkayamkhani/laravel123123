@extends('layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="{{url('form_product')}}" class="btn btn-sm btn-info">NEW</a>
        </div>
        @php
        $i=1;
        $a=1;
        @endphp
        @foreach($card as $title)
        <div class="col-sm-12 ">
            <div class="card bg-dark mt-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <h4 class="test" style="text-align:center; color:white; font-size:25px;">PRODUCT DATA
                                {{$a++}}</h4>
                        </div>
                        <div class="col-sm-4"></div>

                    </div>
                    <div class="row">
                        <div class="col-sm-2 mt-4">
                            <h3><span style="color:yellow">ID :</span> <span class="text-light">{{$i++}}</span>
                            </h3>
                        </div>
                        <div class="col-sm-3 mt-4">
                            <h2><span style="color:yellow">NAME :</span> <span
                                    class="text-light">{{$title->name}}</span></h2>
                        </div>
                        <div class="col-sm-3 mt-4">
                            <h2><span style="color:yellow">Image :</span> <span class="text-light"><img
                                        src="{{asset('uploades/'.$title->image)}}" width="50px" alt=""></span></h2>
                        </div>
                        <div class="col-sm-2 mt-4">
                            <h3><span style="color:yellow">SLUG :</span> <span
                                    class="text-light">{{$title->slug}}</span></h3>
                        </div>
                        <div class="col-sm-3 mt-4">
                            <h3><span style="color:yellow">CATEGORY_ID :</span>
                                <span class="text-light">{{$title->category_id}}</span>
                            </h3>
                        </div>
                        <div class="col-sm-2 mt-4">
                            <h3><span style="color:yellow">COLOR :</span> <span
                                    class="text-light">{{$title->color}}</span></h3>
                        </div>
                        <div class="col-sm-2 mt-4">
                            <h4><span style="color:yellow">HSN_CODE :</span> <span
                                    class="text-light">{{$title->hsn_code}}</span></h4>
                        </div>
                        <div class="col-sm-3 mt-4">
                            <h3><span style="color:yellow">SIZE :</span> <span
                                    class="text-light">{{$title->size}}</span></h3>
                        </div>
                        <div class="col-sm-2 mt-4">
                            <h2><span style="color:yellow">SKU :</span> <span class="text-light">{{$title->sku}}</span>
                            </h2>
                        </div>
                        <div class="col-sm-3 mt-4">
                            <h3><span style="color:yellow">GST :</span> <span class="text-light">{{$title->gst}}</span>
                            </h3>
                        </div>
                        <div class="col-sm-2 mt-4">
                            <h5><span style="color:yellow">DESCRIBTION :</span> <span
                                    class="text-light">{{$title->describtion}}</span></h6>
                        </div>
                        <div class="col-sm-2 mt-4">
                            <h3><span style="color:yellow">MRP :</span> <span class="text-light">{{$title->mrp}}</span>
                            </h3>
                        </div>
                        <div class="col-sm-3 mt-4">
                            <h3><span style="color:yellow">PRICE :</span> <span
                                    class="text-light">{{$title->price}}</span></h3>
                        </div>
                        <div class="col-sm-2 mt-4">
                            <h3><span style="color:yellow">QUENTITY :</span> <span
                                    class="text-light">{{$title->quentity}}</span></h3>
                        </div>
                        <div class="col-sm-3 mt-4">
                            <h3><span style="color:yellow">STATUS :</span>
                                @if($title->condition==0)
                                <a href="#" class="btn btn-sm btn-primary">Oldest
                                    Product</a>
                                @elseif($title->condition==1)
                                <a href="#" class="btn btn-sm btn-primary">Latest
                                    Product</a>
                                @elseif($title->condition==2)
                                <a href="#" class="btn btn-sm btn-primary">Trending
                                    Product</a>
                                @elseif($title->condition==3)
                                <a href="#" class="btn btn-sm btn-primary">Category Product</a>
                                @endif

                            </h3>
                        </div>
                        <div class="col-sm-2 mt-4">
                            <h3><span style="color:yellow">STATUS :</span>
                                @if($title->status==1)
                                <a href="{{url('status_product/'.$title->id)}}" class="btn btn-sm btn-info">Active</a>
                                @else
                                <a href="{{url('status_product/'.$title->id)}}"
                                    class="btn btn-sm btn-light">Inactive</a>
                                @endif
                            </h3>

                        </div>
                        <div class="col-sm-12 mt-4 text-center">
                            <h6>

                                <a data-id="{{$title->id}}" class=" btn btn-sm btn-danger product"><i
                                        class="fa fa-trash-o" aria-hidden="true"></i></a>

                                <a href="{{url('edit_product/'.$title->id)}}" class=" btn btn-sm btn-light"><i
                                        class="fa fa-pencil" aria-hidden="true"></i></a>

                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection