@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
{{-- ini isi content --}}
<div id="sectionOne">
    <div class="banner" id="banner">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-15 col-lg-6 my-auto">
                    <h1 class="banner-titles">
                        <span>Smarthome System</span>
                    </h1>
                    <p>
                    This website is the result of a collaboration between the Artificial Intelligence and Big Data Research Center of the University of Padjadjaran with PT Sapta Tunggal Karunia Bakti. 
                    This website has the theme of a smart home, where the task of this website is to check the captured images of home cctv.
                    </p>
                    <a href="/service" class="btn mt-2 mb-2 btn-start">GET STARTED</a>
                </div>
                <div class="col-10 col-lg-6 my-6">
                    <img src="source/img/banner.png" alt="banner-images" class="banner-images">
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sectionTwo">
      <div class="caption-sectwo">
        <h2 class="h2-secTwo">We offer the best service</h2>
        <h3 class="h3-secTwo">Only serve you with the best recommendations.</h3>
        <h3 class="h3-secTwo" style="padding-bottom: 33px;">We guarantee the safety of your home</h3>
      </div>
      <div class="icon-secTwo row">
        <div class="col-sm-3">
          <a href="#"><button class="btn comprehensive"><img src="source/img/component1.jpg" class="img-component"></button></a>
        </div>
        <div class="col-sm-3">
          <a href="#"><button class="btn uptodate"><img src="source/img/component2.jpg" class="img-component" ></button></a>
        </div>
        <div class="col-sm-3">
          <a href="#"><button class="btn trusted"><img src="source/img/component3.jpg" class="img-component"></button></a>
        </div>
        <div class="col-sm-3">
          <a href="#"><button class="btn hq"><img src="source/img/component4.jpg" class="img-component"></button></a>
        </div>
      </div>
      <div class="text-secTwo row">
        <div class="col-sm-3">
          <h4 class="h4-secTwo" style="padding-top: 10px; padding-bottom: 18px;">Comprehensive</h4>
          <h5 class="h5-secTwo" style="padding-bottom: 104px;">We provide machine learning features to check cctv capture photos</h5>
        </div>
        <div class="col-sm-3">
          <h4 class="h4-secTwo" style="padding-top: 10px; padding-bottom: 18px;">Up to date</h4>
          <h5 class="h5-secTwo" style="padding-bottom: 104px;">We are always ready to help in every condition</p>
        </div>
        <div class="col-sm-3">
          <h4 class="h4-secTwo" style="padding-top: 10px; padding-bottom: 18px;">Trusted</h4>
          <h5 class="h5-secTwo" style="padding-bottom: 104px;">Don't worry, your house is safe to be handled by us.</h5>
        </div>
        <div class="col-sm-3">
          <h4 class="h4-secTwo" style="padding-top: 10px; padding-bottom: 18px;">100% Accurate</h4>
          <h5 class="h5-secTwo" style="padding-bottom: 104px;">we provide accurate machine learning results</h5>
        </div>
      </div>
    </div>
@endsection