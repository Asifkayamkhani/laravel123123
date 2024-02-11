@extends('layout.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="card mt-3">
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 mt-3">
                                <label for="">Email</label>
                                <input type="text" name="email" value="{{$data->email}}" class="form-control" id="">
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">Number</label>
                                <input type="text" name="number" value="{{$data->number}}" class="form-control" id="">
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">Address</label>
                                <input type="text" name="address" value="{{$data->address}}" class="form-control" id="">
                            </div>

                            <div class="col-sm-12 mt-3">
                                <label for="">Describtion</label>
                                <input type="text" name="describtion" value="{{$data->describtion}}"class="form-control" id="">
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