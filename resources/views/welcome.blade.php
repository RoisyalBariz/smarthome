@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
{{-- ini isi content --}}
<div class="banner" id="banner">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-15 col-lg-6 my-auto">
                <h1 class="banner-titles">
                    <span>Smarthome</span>
                </h1>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, provident!
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, officia.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, expedita.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, placeat!
                </p>
                <a href="/service" class="btn mt-2 mb-2 btn-start">GET STARTED</a>
            </div>
            <div class="col-10 col-lg-6 my-6">
                <img src="source/img/banner.png" alt="banner-images" class="banner-images">
            </div>
        </div>
    </div>
</div>
@endsection