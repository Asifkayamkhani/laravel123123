@extends('forget.app')
@section('asif')

<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="card mt-5">
                <h3 class="text-center text-light bg-dark">Enter Your New Password</h3>
                @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
                @endif
                @if(session()->has('success'))
                <div class="alert alert-info">
                    {{session('success')}}
                    @endif
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 mt-3">
                                <label for="">New Password</label>
                                <input type="text" name="password" class="form-control" id="" required>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">Confirm Password</label>
                                <input type="text" name="c_password" class="form-control" id="" required>
                            </div>
                            <div class="col-sm-12 text-center mt-3">
                                <input type="submit" value="Submit" class="btn btn-sm btn-info" id="">
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
