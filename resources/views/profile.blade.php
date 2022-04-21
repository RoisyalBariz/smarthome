@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="profile">
    <h1>Company Profile</h1>
    <p>
        Profile research of the Unpad Artificial Intelligence Big Data Research
        Center and PT Sapta Tunggal
    </p>
    <div
        class="container profile Perikanan AIDA"
        style="margin-top: 120px; margin-bottom: 116px"
    >
        <div class="row">
            <div class="col perikanan" style="text-align: center">
                <img
                    style="width: 220px; margin-left: 300px; float: none"
                    src="/source/img/sapta.jpeg"
                    alt=""
                />
            </div>
            <div class="col AIDA" style="text-align: center">
                <img
                    style="
                        width: 340px;
                        margin-right: 300px;
                        padding-left: 15px;
                        float: none;
                        padding-top: 100px;
                    "
                    src="/source/img/aida.png"
                    alt=""
                />
            </div>
        </div>
        <div class="row">
            <div class="col saptatunggal" style="text-align: center">
                <a style="text-decoration: none" href="source/pdf/profileSapta">
                    <p style="float: right; margin-right: 100px">
                        VIEW PROFILE
                    </p>
                </a>
            </div>
            <div class="col AIDA" style="text-align: center">
                <a
                    style="text-decoration: none"
                    href="https://aida.unpad.ac.id/"
                >
                    <p style="float: left; margin-left: 110px">VIEW PROFILE</p>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
