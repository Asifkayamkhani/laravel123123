@extends('fronted.layout.app')
@section('content')

<div class="register-form-area">
    <div class="register-form text-center">

        <div class="register-heading">
            <span>Sign Up</span>
            <p>Create your account to get full access</p>
        </div>

        <form action="" method="post">
            @csrf
            <div class="input-box">
                <div class="single-input-fields">
                    <label>Full name</label>
                    <input type="text" name="name" required placeholder="Enter full name">
                </div>
                <div class="single-input-fields">
                    <label>Email Address</label>
                    <input type="text" name="email" required placeholder="Enter email">
                </div>
                <div class="single-input-fields">
                    <label>Number</label>
                    <input type="text" name="number" required placeholder="Enter number">
                </div>
                <div class="single-input-fields">
                    <label>Address</label>
                    <input type="text" name="address" required placeholder="Enter address">
                </div>
                <div class="single-input-fields">
                    <label>Pincode</label>
                    <input type="text" name="pincode" required placeholder="Enter pincode">
                </div>
                <div class="single-input-fields">
                    <label>Country</label>
                    <input type="text" name="country" required placeholder="Enter country">
                </div>
                <div class="single-input-fields">
                    <label>State</label>
                    <input type="text" name="state" required placeholder="Enter state">
                </div>
                <div class="single-input-fields">
                    <label>City</label>
                    <input type="text" name="city" required placeholder="Enter city">
                </div>

                <input type="submit" class="btn btn-sm btn-danger" value="Sign Up" id="">
            </div>

            <div class="register-footer">
                <p> Already have an account? <a href="{{url('login-fronted')}}"> Login</a> here</p>

            </div>
        </form>
    </div>
</div>

@endsection