@extends('layout.app')
@section('content')

<style>
@media (min-width: 576px) {
    .col-sm-2 {
        flex: 0 0 auto;
        width: 8.66666667%;
    }
}
</style>

<div class="container">
    <div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="{{url('form_category')}}" class="btn btn-sm btn-info">New</a>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="table-responsive">
                <table class="table table-striped table-bordered " style="width:100%" id="example">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Describtion</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach($data as $category)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>
                                <img src="{{asset('uploades/'.$category->image)}}" alt="">
                            </td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->slug}}</td>
                            <td>{{$category->describtion}}</td>
                            <td>
                                @if($category->status==1)
                                <a href="{{url('status_category/'.$category->id)}}"
                                    class="btn btn-sm btn-primary">Active</a>
                                @else
                                <a href="{{url('status_category/'.$category->id)}}"
                                    class="btn btn-sm btn-dark">Inactive</a>
                                @endif
                            </td>
                            <td class="d-flex ">
                                <!-- <a href=""></a> -->
                                <p data-id="{{$category->id}}" class="btn btn-sm btn-danger vali1"><i
                                        class="fa fa-trash-o" aria-hidden="true"></i></p>
                                <p> <a href="{{url('edit_category/'.$category->id)}}"
                                        class="btn btn-sm btn-secondary "><i class="fa fa-pencil"
                                            aria-hidden="true"></i></a>
                                </p>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>




@endsection