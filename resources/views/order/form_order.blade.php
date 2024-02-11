@extends('layout.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="{{url('table_order')}}" class="btn btn-sm btn-info">Back</a>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="card mt-3">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                       
                            <div class="col-sm-12 mt-3">
                                <label for="">Order_number</label>
                                <input type="text" name="order_number" class="form-control" id="">
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">Product_id</label>
                                <select name="product_id" class="form-control" id="">
                                    @foreach($data as $val)
                                    <option value="{{$val->id}}">{{$val->name}}</option>
                                    @endforeach
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