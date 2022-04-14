@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="container">
    <h1 class="text-center">Category Partnership</h1>
    <h5 class="text-center">Silahkan Pilih Katerogi kerjasama</h5>
    <div class="row p-1">
        <a href=""><img class="mx-auto d-block" src="/source/img/peneliti.png" alt=""></a>
    </div>
    <div class="row p-1">
        <a href=""><img class="mx-auto d-block" src="/source/img/developer.png" alt=""></a>
    </div>
    <div class="row p-1">
        <a href=""><img class="mx-auto d-block" src="/source/img/sponsor.png" alt=""></a>
    </div>
</div>
@endsection