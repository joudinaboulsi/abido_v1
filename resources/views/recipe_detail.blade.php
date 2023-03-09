@extends('layouts.master')
@section('content')
    <section class="section-box">
        <div class="banner-hero banner-head-image"
            style="background-image: url('{{ asset('assets/imgs/abido/about1.jpg') }}'); background-attachment: fixed;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;height: 60vh;
">
            <div class="container text-center">
                <h1 class="text-display-33 color-red mb-20">Recipe-detail</h1>
                <p class="text-body-text color-white">abido qualified team is here to provide you with more
                    information,
                    .<br class="d-lg-block d-none"> answer your questions and create a memory out of your dishes</p>
            </div>

        </div>
    </section>
    <section class="section-box">
        <div class="container mt-120">
            <div class="row">
                <div class="col-lg-6 col-sm-12 mb-30">
                    <span class="tag-2">Food arabic</span>
                    <h3 class="text-heading-44 color-black-t mt-20">FEggplant Dip With Yoghurt And Zaatar</h3>
                    <p class="text-body-text1 color-black-t mt-30">Eggplant seasoned with Zaatar Seasoning, drizzled
                        with a sweet and tangy yogurt sauce.</p>
                    <div class="bd-bottom mt-50"></div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-12 mt-50">
                            {{-- <h4 class="text-heading-6 icon-leaf">Automated reports</h4>
                            <p class="text-body-excerpt color-gray-600 mt-15">The latest design trends meet hand-crafted
                                templates.</p> --}}
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12 mt-50">
                            {{-- <h4 class="text-heading-6 icon-leaf">Realtime analytics</h4>
                            <p class="text-body-excerpt color-gray-600 mt-15">The latest design trends meet hand-crafted
                                templates.</p> --}}
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12 mt-50">
                            {{-- <h4 class="text-heading-6 icon-leaf">Funnel optimization</h4>
                            <p class="text-body-excerptcolor-black-t mt-15">The latest design trends meet hand-crafted
                                templates.</p> --}}
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12 mt-50">
                            {{-- <h4 class="text-heading-6 icon-leaf">User journey</h4>
                            <p class="text-body-excerptcolor-black-t mt-15">The latest design trends meet hand-crafted
                                templates.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 block-we-do">
                    <div class="inner-image"><img class="bdrd-16 img-responsive" src="assets/imgs/abido/r2.jpg"
                            alt="Agon">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-90">

        <div class="container mt-90 mb-100">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="bg-11 box-square hover-up">
                        <h4 class="text-heading-44 color-black-t  mb-15">Ingrdients</h4>
                        <div class="bd-bottom mt-10"></div>
                        <div class="text-body-text-md color-black-t mt-20 d-flex justify-content-between">
                            <span> 2 Tbsp</span>
                            <p>
                                vegetable oil</p>
                        </div>
                        <div class="bd-bottom mt-10"></div>
                        <div class="text-body-text-md color-black-t mt-20 d-flex justify-content-between">
                            <span> 2 Tbsp</span>
                            <p>
                                vegetable oil</p>
                        </div>
                        <div class="bd-bottom mt-10"></div>
                        <div class="text-body-text-md color-black-t mt-20 d-flex justify-content-between">
                            <span> 2 Tbsp</span>
                            <p>
                                vegetable oil</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="box-square hover-up">
                        <h4 class="text-heading-44 color-black-t mb-15">Preparation</h4>
                        <p class="text-body-text-md color-black-t">
                        <ol type="1" style="list-style:auto">
                            <li>
                                Your site is not complete with only landings. Get
                                essential inner pages using our ready demos.
                            </li><br>
                            <li>
                                Your site is not complete with only landings. Get
                                essential inner pages using our ready demos.
                            </li>
                        </ol>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box">
        <div class="container mt-30">
            <div class="row">
                <div class="col-lg-1 col-sm-1 col-12"></div>
                <div class="col-lg-10 col-sm-10 col-12 text-center">
                    <h2 class="text-heading-1 color-red mb-10">Relataed Recipes</h2>
                    {{-- <p class="text-body-lead-large color-gray-600 mt-20">From Our Blog And Event Fanpage</p> --}}
                </div>
                <div class="col-lg-1 col-sm-1 col-12"></div>
            </div>
        </div>
        <div class="container mt-90">
            <div class="row">
                <div class="col-lg-4 col-sm-12 pr-30 mb-50">
                    <div class="card-grid-style-4">
                        <div class="single-service-content">
                            <img class="img_cover" src="assets/imgs/page/homepage1/img-news-1.png" alt="Agon">
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
                            <img class="img_cover" src="assets/imgs/page/homepage1/img-news-1.png" alt="Agon">
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
                            <img class="img_cover" src="assets/imgs/page/homepage1/img-news-1.png" alt="Agon">
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
                            <img class="img_cover" src="assets/imgs/page/homepage1/img-news-1.png" alt="Agon">
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
