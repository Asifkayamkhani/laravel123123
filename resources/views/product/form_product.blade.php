@extends('layout.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="{{url('card_product')}}" class="btn btn-sm btn-info">Back</a>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="card mt-3">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 mt-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" id="">
                            </div>

                            <div class="col-sm-12 mt-3">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control" id="">
                            </div>

                          
                            <div class="col-sm-12 mt-3">
                                <label for="">Category_id</label>
                               <select name="category_id" class="form-control" id="">
                                @foreach($category as $data)
                                <option value="{{$data->category_id}}">{{$data->name}}</option>
                                @endforeach
                               </select>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">Color</label>
                                <input type="text" name="color" class="form-control" id="">
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">Hsn_code</label>
                                <input type="text" name="hsn_code" class="form-control" id="">
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">Size</label>
                                <input type="text" name="size" class="form-control" id="">
                            </div>                          
                            <div class="col-sm-12 mt-3">
                                <label for="">GST</label>
                                <input type="text" name="gst" class="form-control" id="">
                            </div>

                            
                            <div class="col-sm-12 mt-3">
                                <label for="">Describtion</label>
                                <input type="text" name="describtion" class="form-control" id="">
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">MRP</label>
                                <input type="text" name="mrp" class="form-control" id="">
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">Price</label>
                                <input type="text" name="price" class="form-control" id="">
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">Quentity</label>
                                <input type="text" name="quentity" class="form-control" id="">
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">Condition</label>
                                <select type="text" name="condition" class="form-control" id="">
                                    <option value="" selected disebled></option>
                                    <option value="0">Oldest product</option>
                                    <option value="1">Latest product</option>
                                    <option value="2">Trending product</option>
                                    <option value="3">Category product</option>
                                </select>

                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">Status</label>
                                <select name="status" class="form-control" id="">
                                    <option value="" selected disabled>Select status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <div class="col-sm-12 mt-3 text-center">
                                <input type="submit" value="Submit" class=" btn btn-sm btn-info" id="">
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>

@endsection