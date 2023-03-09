@extends('layouts.master')
@section('content')
    <style>
        .card-grid-style-packing {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            background: white;
            border-radius: 33px;
            color: #000;
            /* border: 1px solid #E74436; */
            width: 250px;
            transition: transform 500ms;
            padding: 43px 48px;
            width: 100%;
            position: relative;
            box-shadow: inset 0px 40px 80px #fcfcfc;
        }

        .card-grid-style-packing:hover {
            transform: scale(0.9)
        }

        .pcking-infos {
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            font-size: 20px;
            font-weight: bold;
            padding-top: 1rem;
        }

        .pcking-infos span {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            text-align: center;
        }

        .pcking-infos span:not(:last-child) {
            padding-right: 1rem;
            border-right: 1px solid #efefef;
            font-size: 15px;
        }


        .pcking-infos p {
            font-size: 12px;
            color: #000;
            font-family: 'Muli-SemiBold', sans-serif;
        }

        .pcking-infos p .size,
        .bags,
        .wt {
            font-size: 12px;
            color: #000;
            font-family: 'Muli-SemiBold', sans-serif;
        }

        .recipe-start {
            width: 100%;
            border: none;
            border-top: solid 1px var(--grey-color) !important;
            padding: 1rem;
            background: transparent;
            transition: all 500ms;
            font-size: 18px;
            font-weight: bold;
            border-radius: 0 0px 20px 20px;
        }

        .recipe-start:hover {
            background: var(--red-color);
            color: white;
            cursor: pointer;
        }

        .packing-number {
            margin-bottom: 0;
            display: inline-block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: -1;

        }

        .packing-number::before {
            content: counter(packing-counter, decimal-leading-zero);
            counter-increment: packing-counter !important;
            font-size: 250px;
            font-weight: 400 !important;
            font-family: 'Lobster', cursive !important;
            color: transparent;
            stroke: 1px #E74436;

            -webkit-text-fill-color: #E74436;
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: #E74436;

        }
    </style>
    <section class="section-box">
        <div class="banner-hero banner-head-image"
            style="background-image: url('{{ asset('assets/imgs/abido/about1.jpg') }}'); background-attachment: fixed;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;height: 60vh;
">
            <div class="container text-center">
                <h1 class="text-display-33 color-red mb-20">Packing</h1>
                <p class="text-body-text color-white">abido qualified team is here to provide you with more
                    information,
                    .<br class="d-lg-block d-none"> answer your questions and create a memory out of your dishes</p>
            </div>

        </div>
        <section class="section-box mt-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 mt-50">
                        <h2 class="text-heading-1 color-red mt-30">How It Delivery</h2>
                        {{-- <p class="text-body-excerpt color-black-t">Ac sapien purus tristique neque nibh vitae faucibus non
                            phasellus vulputate nulla in eget amet, risus</p> --}}
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="card-grid-style-6 hover-up wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                            <div class="grid-6-img">

                                <img src="assets/imgs/abido/ss.svg" style="width:90px" alt="Agon">
                            </div>
                            <h3 class="text-heading-5 mt-20">Airplane</h3>
                            <p class="text-body-text color-black-t mt-20">One make creepeth, man bearing theira firmament.
                            </p>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <section class="section-box">
            <div class="container mt-120">
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-12"></div>
                    <div class="col-lg-10 col-sm-10 col-12 text-center">
                        <h2 class="text-heading-1 color-red mb-10"> Packing</h2>

                    </div>
                    <div class="col-lg-1 col-sm-1 col-12"></div>
                </div>

            </div>
            <div class="container mt-90">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 pr-30 mb-50">
                        <div class="card-grid-style-4">
                            <div class="card-grid-style-packing hover-up">
                                <div class="grid-2-img"><img src="assets/imgs/abido/img5.jpg" alt="Agon"></div>
                                <h3 class="text-heading-5 mt-20 text-xl-center">Hearbs & Retail</h3>
                                <div class="pcking-infos">
                                    <span>
                                        <p class="size">50</p>
                                        <p>Size</p>
                                    </span>
                                    <span>
                                        <p class="bags">PP Bags</p>
                                        <p>Type</p>
                                    </span>
                                    <span>
                                        <p class="wt">72</p>
                                        <p>Net wt</p>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 pr-30 mb-50">
                        <div class="card-grid-style-4">
                            <div class="card-grid-style-packing hover-up">
                                <div class="grid-2-img"><img src="assets/imgs/abido/img5.jpg" alt="Agon"></div>
                                <h3 class="text-heading-5 mt-20 text-xl-center">Hearbs & Retail</h3>
                                <div class="pcking-infos">
                                    <span>
                                        <p class="size">50</p>
                                        <p>Size</p>
                                    </span>
                                    <span>
                                        <p class="bags">PP Bags</p>
                                        <p>Type</p>
                                    </span>
                                    <span>
                                        <p class="wt">72</p>
                                        <p>Net wt</p>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 pr-30 mb-50">
                        <div class="card-grid-style-4">
                            <div class="card-grid-style-packing hover-up">
                                <div class="grid-2-img"><img src="assets/imgs/abido/img5.jpg" alt="Agon"></div>
                                <h3 class="text-heading-5 mt-20 text-xl-center">Hearbs & Retail</h3>
                                <div class="pcking-infos">
                                    <span>
                                        <p class="size">50</p>
                                        <p>Size</p>
                                    </span>
                                    <span>
                                        <p class="bags">PP Bags</p>
                                        <p>Type</p>
                                    </span>
                                    <span>
                                        <p class="wt">72</p>
                                        <p>Net wt</p>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 pr-30 mb-50">
                        <div class="card-grid-style-4">
                            <div class="card-grid-style-packing hover-up">
                                <div class="grid-2-img"><img src="assets/imgs/abido/img5.jpg" alt="Agon"></div>
                                <h3 class="text-heading-5 mt-20 text-xl-center">Hearbs & Retail</h3>
                                <div class="pcking-infos">
                                    <span>50
                                        <p>Size</p>
                                    </span>
                                    <span>PP Bags
                                        <p>Type</p>
                                    </span>
                                    <span>72
                                        <p>Net wt</p>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- <div class="mt-20 mb-30 text-center"><a class="btn btn-black icon-arrow-right-white"
                        href="{{ route('products') }}">Producs</a></div> --}}
                </div>
        </section>
    @endsection
