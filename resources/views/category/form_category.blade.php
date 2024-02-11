@extends('layout.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="{{url('table_category')}}" class="btn btn-sm btn-info">Back</a>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="card mt-3">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 mt-3">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control" id="">
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" id="">
                            </div>
                         

                            
                            <div class="col-sm-12 mt-3">
                                <label for="">Describtion</label>
                                <textarea  type="text" name="describtion" class="form-control" id="" cols="30" rows="3"></textarea>
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