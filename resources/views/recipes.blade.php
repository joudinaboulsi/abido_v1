@extends('layouts.master')
@section('content')
    {{-- <style>
        @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');

        .img_cover {
            width: 100%;
            height: 100%;
            opacity: 100%;
            position: absolute;
            opacity: 0%;
            border-radius: 20px;
            top: 0px;
            left: 0px;
        }

        .img_cover:hover {
            opacity: 20%;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
            transition: 0.3s;
            z-index: -1;
        }

        .single-service-content {
            box-shadow: rgba(0, 0, 0, 0.06) 0px 16px 32px 0px;
            position: relative;
            z-index: 5;
            /* border-radius: 44px; */
            padding: 80px 50px;
            overflow: hidden;
            transition: 0.3s;
            background-color: #99332F;
            text-align: center;
        }

        .recipes {
            counter-reset: service-counter !important;
        }

        .service-number {
            margin-bottom: 0;
            display: inline-block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: -1;

        }

        .service-number::before {
            content: counter(service-counter, decimal-leading-zero);
            counter-increment: service-counter !important;
            font-size: 250px;
            font-weight: 400 !important;
            font-family: 'Lobster', cursive !important;
            color: transparent;
            stroke: 1px #E74436;
            font-family: "Poppins", sans-serif;
            -webkit-text-fill-color: #E74436;
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: #E74436;
            line-height: 1;
            transition: 0.3s;
        }

        .service-title {
            font-size: 28px !important;
            text-transform: uppercase;
            margin-bottom: 15px;
            position: relative;
            padding-bottom: 0;
            transition: 0.3s;
            color: #fff;
            transform: translateY(10px);
            font-weight: 'myraid-pro', sans-serif;
        }



        .single-service-content p {
            margin-bottom: 25px;
            transition: 0.3s;
            color: #fff;
            transform: translateY(30px);
            font-size: 20px;
        }

        .btn-recipe .text-btn {
            transform: translateY(30px);
        }

        .text-btn {
            font-size: 14px;
            font-weight: 600;
            color: #fff;
            text-transform: capitalize;
            display: inline-flex;
            gap: 15px;
            align-items: center;
            line-height: 1;
            padding: 10px 28px;
        }

        .card-grid-style-4:hover .text-btn {
            color: white;
            background-color: #E74336 !important;
            text-align: center;
            line-height: 18px;
            border-radius: 20px;
            padding: 15px 28px;
            display: inline-flex;
            align-items: center;
            margin-top: 50px;
            cursor: pointer;
            z-index: -1;
        }
    </style> --}}
    <section class="section-box">
        <div class="banner-hero banner-head-image"
            style="background-image: url('{{ asset('assets/imgs/abido/recipe.jpg') }}');
            background-attachment: fixed;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height:60vh">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-heading-1 color-red mb-20">RECIPES</h1>
                        <p class="text-body-text color-white">abido qualified team is here to provide you with more
                            information,
                            .<br class="d-lg-block d-none"> answer your questions and create a memory out of your dishes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box recipes mt-10">
        <div class="container mt-30">
            <div class="row">
                <div class="col-lg-1 col-sm-1 col-12"></div>
                {{-- <div class="col-lg-10 col-sm-10 col-12 text-center">
                    <h2 class="text-heading-1 color-gray-900 mb-10">Latest Recipes</h2>
                    <p class="text-heading-6 color-black-t mb-20">From year to year we strive to invent the most
                        innovative technology<br class="d-lg-block d-none"> that is used by both small enterprises and
                        space enterprises.</p>
                </div> --}}
                <div class="col-lg-1 col-sm-1 col-12"></div>
            </div>
        </div>
        <div class="container mt-90">
            <div class="row">
                <div class="col-lg-4 col-sm-12 pr-30 mb-50">
                    <div class="card-grid-style-4">
                        <div class="single-service-content">
                            <img class="img_cover" src="assets/imgs/abido/img5.jpg" alt="Agon">
                            <span class="service-number"></span>
                            <h4 class="service-title"><a href="{{ route('recipeDetail') }}">Abido Spices</a></h4>
                            <p>The laying out and care of a plot of ground
                                devoted partially or wholly.</p>
                            <div class="btn-recipe">
                                <a href="{{ route('recipeDetail') }}" class="text-btn mt-50">read
                                    more<i class="fa fa-long-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 pr-30 mb-50">
                    <div class="card-grid-style-4">
                        <div class="single-service-content">
                            <img class="img_cover" src="assets/imgs/abido/img5.jpg" alt="Agon">
                            <span class="service-number"></span>
                            <h4 class="service-title"><a href="{{ route('recipeDetail') }}">Abido Spices</a></h4>
                            <p>The laying out and care of a plot of ground
                                devoted partially or wholly.</p>
                            <div class="btn-recipe">
                                <a href="{{ route('recipeDetail') }}" class="text-btn mt-50">read
                                    more<i class="fa fa-long-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 pr-30 mb-50">
                    <div class="card-grid-style-4">
                        <div class="single-service-content">
                            <img class="img_cover" src="assets/imgs/abido/img5.jpg" alt="Agon">
                            <span class="service-number"></span>
                            <h4 class="service-title"><a href="{{ route('recipeDetail') }}">Abido Spices</a></h4>
                            <p>The laying out and care of a plot of ground
                                devoted partially or wholly.</p>
                            <div class="btn-recipe">
                                <a href="{{ route('recipeDetail') }}" class="text-btn mt-50">read
                                    more<i class="fa fa-long-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 pr-30 mb-50">
                    <div class="card-grid-style-4">
                        <div class="single-service-content">
                            <img class="img_cover" src="assets/imgs/abido/img5.jpg" alt="Agon">
                            <span class="service-number"></span>
                            <h4 class="service-title"><a href="{{ route('recipeDetail') }}">Abido Spices</a></h4>
                            <p>The laying out and care of a plot of ground
                                devoted partially or wholly.</p>
                            <div class="btn-recipe">
                                <a href="{{ route('recipeDetail') }}" class="text-btn mt-50">read
                                    more<i class="fa fa-long-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

    </section>
@endsection
