@include('fronted.layout.header')
@if(session()->has('success'))
<div class="alert alert-danger">
    {{session('success')}}
</div>
@endif
<main>

    @yield('content')

</main>
@include('fronted.layout.footer')