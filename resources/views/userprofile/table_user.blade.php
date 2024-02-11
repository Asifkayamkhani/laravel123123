@extends('layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="{{url('form_user')}}" class="btn btn-sm btn-info">New</a>
        </div>
        <!-- <div class="col-sm-2"></div> -->
        <div class="col-sm-12 mt-3">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" style="width:100%" id="example">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Number</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Country</th>
                            <th>Zipcode</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach($data as $user)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->number}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->city}}</td>
                            <td>{{$user->state}}</td>
                            <td>{{$user->country}}</td>
                            <td>{{$user->zipcode}}</td>
                            <td>{{$user->password}}</td>


                            <td class="d-flex ">
                                <a data-id="{{$user->id}}" class=" btn btn-sm btn-danger user"><i
                                        class="fa fa-trash-o" aria-hidden="true"></i></a>

                                <a href="{{url('edit_user/'.$user->id)}}" class=" btn btn-sm btn-light"><i
                                        class="fa fa-pencil" aria-hidden="true"></i></a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- <div class="col-sm-2"></div> -->
    </div>
</div>





@endsection