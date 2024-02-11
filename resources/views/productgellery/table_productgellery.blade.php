@extends('layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="{{url('form_productgellery')}}" class="btn btn-sm btn-info">New</a>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <table class="table table-striped table-bordered " style="width:100%" id="example">
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Product_id</th>
                        <th>Image</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i=1;
                    @endphp
                    @foreach($data as $val)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$val->product_id}}</td>
                        <td>
                            <img src="{{asset('uploades/'.$val->image)}}" alt="">
                        </td>
                        <td>{{$val->type}}</td>
                        <td>
                            @if($val->status==1)
                            <a href="{{url('status_productgellery/'.$val->id)}}"
                                class="btn btn-sm btn-primary">Active</a>
                            @else
                            <a href="{{url('status_productgellery/'.$val->id)}}"
                                class="btn btn-sm btn-dark">Inactive</a>
                            @endif
                        </td>
                        <td class="d-flex ">
                            <a data-id="{{$val->id}}" class=" btn btn-sm btn-danger productgellery"><i
                                    class="fa fa-trash-o" aria-hidden="true"></i></a>

                            <a href="{{url('edit_productgellery/'.$val->id)}}" class=" btn btn-sm btn-light"><i
                                    class="fa fa-pencil" aria-hidden="true"></i></a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>





@endsection