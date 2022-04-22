@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="aboutus">
    <div>
        <div
            style="text-align: center; padding-bottom: 20px; padding-top: 30px"
        >
            <div class="col-sm-12">
                <h1 style="color: #705ecf">Team Developer</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <img
                    class="mx-auto d-block"
                    src="/source/img/32.jpg"
                    width="175"
                    style="border-radius: 20px"
                    alt="photo akira"
                />
                <br />
                <h2 class="text-center">Akirareka Kinantan</h2>
                <p class="p-1 text-center" style="color: #bfbfbf">
                    Machine Learning
                </p>
            </div>
            <div class="col">
                <img
                    class="mx-auto d-block"
                    src="/source/img/23.jpg"
                    width="175"
                    style="border-radius: 20px"
                    alt="photo bariz"
                />
                <br />
                <h2 class="text-center">Roisyal Bariz</h2>
                <p class="p-1 text-center" style="color: #bfbfbf">
                    Frontend Developer
                </p>
            </div>
            <div class="col">
                <img
                    class="mx-auto d-block"
                    src="/source/img/20.jpg"
                    width="175"
                    style="border-radius: 20px"
                    alt="photo join"
                />
                <br />
                <h2 class="text-center">Join Valentino</h2>
                <p class="p-1 text-center" style="color: #bfbfbf">
                    Backend Developer
                </p>
            </div>
        </div>
        <div>
            <div
                style="
                    text-align: center;
                    padding-bottom: 20px;
                    padding-top: 40px;
                "
            >
                <div class="col-sm-12">
                    <h1 style="color: #705ecf">Team Researcher</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <img
                    class="mx-auto d-block"
                    src="/source/img/"
                    width="175"
                    style="border-radius: 20px"
                    alt="photo Researcher"
                />
                <br />
                <h2 class="text-center">Researcher 1</h2>
                <p class="p-1 text-center" style="color: #bfbfbf">
                    Lorem ipsum
                </p>
            </div>
            <div class="col">
                <img
                    class="mx-auto d-block"
                    src="/source/img/"
                    width="175"
                    style="border-radius: 20px"
                    alt="photo Researcher"
                />
                <br />
                <h2 class="text-center">Researcher 2</h2>
                <p class="p-1 text-center" style="color: #bfbfbf">
                    Lorem ipsum
                </p>
            </div>
            <div class="col">
                <img
                    class="mx-auto d-block"
                    src="/source/img/"
                    width="175"
                    style="border-radius: 20px"
                    alt="photo Researcher"
                />
                <br />
                <h2 class="text-center">Researcher 3</h2>
                <p class="p-1 text-center" style="color: #bfbfbf">
                    Lorem ipsum
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
