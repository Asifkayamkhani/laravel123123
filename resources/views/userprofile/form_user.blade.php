@extends('layout.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="{{url('table_user')}}" class="btn btn-sm btn-info">Back</a>
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
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" id="">
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">Number</label>
                                <input type="text" name="number" class="form-control" id="">
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">Address</label>
                                <input type="text" name="address" class="form-control" id="">
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">City</label>
                                <select name="city" class="form-control" id="">
                                    <option value="" selected disabled>Select your city</option>
                                    <option value="Didwana">Didwana</option>
                                    <option value="Ladnun">Ladnun</option>
                                    <option value="Sujanghar">Sujanghar</option>
                                    <option value="Kuchaman">Kuchaman</option>
                                    <option value="Ajmer">Ajmer</option>
                                    <option value="Ajmer">Ajmer</option>
                                    <option value="Jhunjnu">Jhunjnu</option>
                                    <option value="Sikar">Sikar</option>
                                    <option value="Nagour">Nagour</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                </select>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">State</label>
                                <select name="state" class="form-control" id="">
                                <option value="" selected disabled>Select your state</option>

                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Utar-Pardesh">Utar-Pardesh</option>
                                    <option value="Aassam">Aassam</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                </select>
                            </div>

                                 <div class="col-sm-12 mt-3">
                                <label for="">Country</label>
                                <select name="country" class="form-control" id="">
                                <option value="" selected disabled>Select your country</option>

                                    <option value="Indian">Indian</option>
                                    <option value="Philistin">Philistin</option>
                                    <option value="Saudi-Arabia">Saudi-Arabia</option>
                                    <option value="Turki">Turki</option>
                                    <option value="Dubai">Dubai</option>
                                </select>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">Zipcode</label>
                                <input type="text" name="zipcode" class="form-control" id="">
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="">Password</label>
                                <input type="text" name="password" class="form-control" id="">
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