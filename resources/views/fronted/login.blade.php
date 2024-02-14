@extends('fronted.layout.app')
@section('content')

<div class="login-form-area">
    <div class="login-form">

        <div class="login-heading">
            <span>Login</span>
            <p>Enter Login details to get access</p>
        </div>
        @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error')}}
        </div>
        @endif

        @if(session()->has('success'))
        <div class="alert alert-danger">
            {{ session('success')}}
        </div>
        @endif


        <form action="" method="post">
            @csrf
            <div class="input-box">
                <div class="single-input-fields">
                    <label>Email Address</label>
                    <input type="text" name="email" required placeholder="Enter Email address">
                </div>
                <div class="single-input-fields">
                    <label>Password</label>
                    <input type="password" name="password" required placeholder="Enter Password">
                </div>

                <div class="single-input-fields login-check">
                    <a href="{{url('email1')}}" class="f-right">Forgot Password?</a>
                </div>
                <div class="col-sm-12 text-center">
                    <input type="submit" class="btn btn-sm btn-danger" value="Login" id="">
                </div>

            </div>


            <div class="login-footer">
                <p>Don’t have an account? <a href="{{url('register-fronted')}}">Sign Up</a> here</p>

            </div>
        </form>
    </div>
</div>

@endsection