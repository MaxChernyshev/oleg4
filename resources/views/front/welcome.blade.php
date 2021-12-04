@extends('front.layouts.layout')

@section('content')

    <div class="container-fluid px-0 ">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-info" role="listbox">
                        <div class="carousel-item active">
                            <div class="d-flex align-items-center justify-content-center min-vh-100">
                                <img src="{{ asset('/img/carousel/0C6A0030.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                            </div>
                        </div>
{{--                        <div class="carousel-item">--}}
{{--                            <div class="d-flex align-items-center justify-content-center min-vh-100">--}}
{{--                                <img src="{{ asset('/img/carousel/0S5A6511.jpg') }}" class="d-block w-100 img-fluid" alt="...">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-item">--}}
{{--                            <div class="d-flex align-items-center justify-content-center min-vh-100">--}}
{{--                                <img src="{{ asset('/img/carousel/35ph_007_900x600.jpg') }}" class="d-block w-100 img-fluid" alt="...">--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
{{--                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">--}}
{{--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                        <span class="sr-only">Previous</span>--}}
{{--                    </a>--}}
{{--                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">--}}
{{--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                        <span class="sr-only">Next</span>--}}
{{--                    </a>--}}
                </div>
            </div>
        </div>
    </div>




    {{--    <div class="container-fluid">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-12">--}}
    {{--                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">--}}
    {{--                    <div class="carousel-inner">--}}
    {{--                        <div class="carousel-item active">--}}
    {{--                            <img src="{{ asset('/img/carousel/0C6A0030.jpg') }}" class="d-block w-100" alt="...">--}}
    {{--                        </div>--}}
    {{--                        <div class="carousel-item">--}}

    {{--                            <img src="{{ asset('/img/carousel/0S5A6511.jpg') }}" class="d-block w-100" alt="...">--}}
    {{--                        </div>--}}
    {{--                        <div class="carousel-item">--}}
    {{--                            <img src="{{ asset('/img/carousel/35ph_007_900x600.jpg') }}" class="d-block w-100" alt="...">--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">--}}
    {{--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
    {{--                        <span class="sr-only">Previous</span>--}}
    {{--                    </button>--}}
    {{--                    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">--}}
    {{--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
    {{--                        <span class="sr-only">Next</span>--}}
    {{--                    </button>--}}
    {{--                </div>--}}


    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

@endsection
