@extends('layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="{{url('table_test')}}" class="btn btn-sm btn-info">Back</a>
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
                                <input type="text" name="name" value="{{$data->name}}" class="form-control" id="">
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">Describtion</label>
                                <input type="text" name="describtion" value="{{$data->describtion}}" class="form-control" id="">
                            </div>
                      
                            <div class="col-sm-12 mt-3">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control"  id="">
                                <img src="{{asset('uploades/'.$data->image)}}" width="50px" alt="">
                                <input type="hidden" name="img" class="form-control">
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">Status</label>
                                <select name="status" class="form-control" id="">
                                    <option value="" selected disabled>Select status</option>
                                    <option value="1"<?php echo $data->status==1 ? "selected":"" ?>>Active</option>
                                    <option value="0" <?php echo $data->status==0 ? "selected":"" ?>>Inactive</option>
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