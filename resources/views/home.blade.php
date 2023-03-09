@extends('layouts.master')
@section('content')
    <section class="section-box">
        <div class="banner-hero banner-head-image"
            style="background-image: url('{{ asset('assets/imgs/abido/b1.jpg') }}');background-position: center;
    background-repeat: no-repeat;background-size:cover;
      background-attachment: fixed;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h1 class="text-display-2 color-red">Experience the world's most delicious
                            flavors withour premium spices and seasonings.</h1>

                        <div class="mt-40"><a class="btn btn-black icon-arrow-right-white"
                                href="{{ route('ProductsHerbs') }}">View
                                products</a>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="banner-imgs">
                            {{-- <div class="video-block shape-1"><a class="popup-youtube btn-play-video"
                                    href="https://www.youtube.com/watch?v=oRI37cOPBQQ"></a><span
                                    class="text-heading-4">Watch intro video</span></div><img class="img-responsive shape-2"
                                alt="Agon" src="assets/imgs/page/homepage1/banner.png">
                        </div> --}}
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="section-box">
        <div class="banner-hero bg-about-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="text-heading-1 color-red">Our Story</h1>
                        <p class="text-body-text color-black-t mt-40">In 1950, Abido Chehade founded the Abido Mills in
                            Lebanon.
                            Since <br class="d-lg-block d-none">then,
                            Abido
                            has

                            been determinant to provide the best and <br class="d-lg-block d-none"> the highest quality
                            spices, newly developed blends and
                            ready mixes .
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section-box mt-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="box-image">
                        <a class="popup-youtube btn-play-video btn-play-middle"
                            href="https://www.youtube.com/watch?v=oRI37cOPBQQ"></a><img class="img-responsive bdrd-16"
                            src="assets/imgs/page/about/3/img.png" alt="Agon" />
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </div>
    <div class="section-box">
        <div class="container mt-120">
            <div class="row">
                <div class="col-lg-9 col-sm-8">
                    <h3 class="text-display-2 color-red mb-10">Featured Products</h3>
                </div>
            </div>
        </div>
        <div class="container mt-80">
            <div class="box-swiper">
                <div class="swiper-container swiper-group-1">
                    <div class="swiper-wrapper pb-70 pt-5">
                        <!-- Slider 1-->
                        <div class="swiper-slide active">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-item-2 hover-up"><a href="">
                                            <div class="product-image"><img src="{{ asset('assets/imgs/abido/img5.jpg') }}"
                                                    alt="agon">
                                            </div>
                                        </a>
                                        <div class="box-quick-view">
                                            <div class="quick-view"><a class="like-product" href="#"></a><a
                                                    class="shuffle-product" href="#"></a><a class="view-product"
                                                    href=""></a></div>
                                        </div>
                                        <div class="product-info"><span
                                                class="text-body-small color-red font-bold">Miscellaneous</span><a
                                                href="">
                                                <h3 class="text-body-lead color-red">Salep - Grade (A)
                                                </h3>
                                            </a>

                                            <div class="d-flex mt-20">
                                                <div class="box-prices"><span class="price-regular mr-5">$22.51</span><span
                                                        class="price-regular price-line"></span></div>
                                                <div class="button-add text-end"><a class="btn btn-cart" href="#">Add
                                                        to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-item-2 hover-up"><a href="">
                                            <div class="product-image"><img src="{{ asset('assets/imgs/abido/img5.jpg') }}"
                                                    alt="agon">
                                            </div>
                                        </a>
                                        <div class="box-quick-view">
                                            <div class="quick-view"><a class="like-product" href="#"></a><a
                                                    class="shuffle-product" href="#"></a><a class="view-product"
                                                    href=""></a></div>
                                        </div>
                                        <div class="product-info"><span
                                                class="text-body-small color-red font-bold">Miscellaneous</span><a
                                                href="">
                                                <h3 class="text-body-lead color-red">Salep - Grade (A)
                                                </h3>
                                            </a>

                                            <div class="d-flex mt-20">
                                                <div class="box-prices"><span class="price-regular mr-5">$22.51</span><span
                                                        class="price-regular price-line"></span></div>
                                                <div class="button-add text-end"><a class="btn btn-cart" href="#">Add
                                                        to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-item-2 hover-up"><a href="">
                                            <div class="product-image"><img src="{{ asset('assets/imgs/abido/img5.jpg') }}"
                                                    alt="agon">
                                            </div>
                                        </a>
                                        <div class="box-quick-view">
                                            <div class="quick-view"><a class="like-product" href="#"></a><a
                                                    class="shuffle-product" href="#"></a><a class="view-product"
                                                    href=""></a></div>
                                        </div>
                                        <div class="product-info"><span
                                                class="text-body-small color-red font-bold">Miscellaneous</span><a
                                                href="">
                                                <h3 class="text-body-lead color-red">Salep - Grade (A)
                                                </h3>
                                            </a>

                                            <div class="d-flex mt-20">
                                                <div class="box-prices"><span
                                                        class="price-regular mr-5">$22.51</span><span
                                                        class="price-regular price-line"></span></div>
                                                <div class="button-add text-end"><a class="btn btn-cart"
                                                        href="#">Add
                                                        to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-item-2 hover-up"><a href="">
                                            <div class="product-image"><img
                                                    src="{{ asset('assets/imgs/abido/img5.jpg') }}" alt="agon">
                                            </div>
                                        </a>
                                        <div class="box-quick-view">
                                            <div class="quick-view"><a class="like-product" href="#"></a><a
                                                    class="shuffle-product" href="#"></a><a class="view-product"
                                                    href=""></a></div>
                                        </div>
                                        <div class="product-info"><span
                                                class="text-body-small color-red font-bold">Miscellaneous</span><a
                                                href="">
                                                <h3 class="text-body-lead color-red">Salep - Grade (A)
                                                </h3>
                                            </a>

                                            <div class="d-flex mt-20">
                                                <div class="box-prices"><span
                                                        class="price-regular mr-5">$22.51</span><span
                                                        class="price-regular price-line"></span></div>
                                                <div class="button-add text-end"><a class="btn btn-cart"
                                                        href="#">Add
                                                        to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slider 2-->
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-item-2 hover-up"><a href="">
                                            <div class="product-image"><img
                                                    src="{{ asset('assets/imgs/abido/img5.jpg') }}" alt="agon">
                                            </div>
                                        </a>
                                        <div class="box-quick-view">
                                            <div class="quick-view"><a class="like-product" href="#"></a><a
                                                    class="shuffle-product" href="#"></a><a class="view-product"
                                                    href=""></a></div>
                                        </div>
                                        <div class="product-info"><span
                                                class="text-body-small color-red font-bold">Miscellaneous</span><a
                                                href="">
                                                <h3 class="text-body-lead color-red">Salep - Grade (A)
                                                </h3>
                                            </a>

                                            <div class="d-flex mt-20">
                                                <div class="box-prices"><span
                                                        class="price-regular mr-5">$22.51</span><span
                                                        class="price-regular price-line"></span></div>
                                                <div class="button-add text-end"><a class="btn btn-cart"
                                                        href="#">Add
                                                        to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-item-2 hover-up"><a href="">
                                            <div class="product-image"><img
                                                    src="{{ asset('assets/imgs/abido/img5.jpg') }}" alt="agon">
                                            </div>
                                        </a>
                                        <div class="box-quick-view">
                                            <div class="quick-view"><a class="like-product" href="#"></a><a
                                                    class="shuffle-product" href="#"></a><a class="view-product"
                                                    href=""></a></div>
                                        </div>
                                        <div class="product-info"><span
                                                class="text-body-small color-red font-bold">Miscellaneous</span><a
                                                href="">
                                                <h3 class="text-body-lead color-red">Salep - Grade (A)
                                                </h3>
                                            </a>

                                            <div class="d-flex mt-20">
                                                <div class="box-prices"><span
                                                        class="price-regular mr-5">$22.51</span><span
                                                        class="price-regular price-line"></span></div>
                                                <div class="button-add text-end"><a class="btn btn-cart"
                                                        href="#">Add
                                                        to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-item-2 hover-up"><a href="">
                                            <div class="product-image"><img
                                                    src="{{ asset('assets/imgs/abido/img5.jpg') }}" alt="agon">
                                            </div>
                                        </a>
                                        <div class="box-quick-view">
                                            <div class="quick-view"><a class="like-product" href="#"></a><a
                                                    class="shuffle-product" href="#"></a><a class="view-product"
                                                    href=""></a></div>
                                        </div>
                                        <div class="product-info"><span
                                                class="text-body-small color-red font-bold">Miscellaneous</span><a
                                                href="">
                                                <h3 class="text-body-lead color-red">Salep - Grade (A)
                                                </h3>
                                            </a>

                                            <div class="d-flex mt-20">
                                                <div class="box-prices"><span
                                                        class="price-regular mr-5">$22.51</span><span
                                                        class="price-regular price-line"></span></div>
                                                <div class="button-add text-end"><a class="btn btn-cart"
                                                        href="#">Add
                                                        to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Slider 2-->
                    </div>
                    <div class="swiper-pagination swiper-pagination3"></div>
                </div>
                <div class="swiper-button-next swiper-button-next-5"></div>
                <div class="swiper-button-prev swiper-button-prev-5"></div>
            </div>
        </div>
    </div>
    <section class="section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="text-heading-1 color-red mb-10">Packing</h3>

                </div>
                <div class="col-lg-4 text-lg-end text-start pt-30"><a class="btn btn-black icon-arrow-right-white"
                        href="{{ route('packing') }}">View More</a></div>
            </div>
        </div>
        <div class="container mt-50">
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
            </div>
        </div>
    </section>
    <section class="section-box mt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="text-heading-1 color-red mb-10">Recipes</h3>
                    {{-- <p class="text-body-lead-large color-gray-600">From Our blog and Event fanpage</p> --}}
                </div>
                <div class="col-lg-4 text-lg-end text-start pt-30"><a class="btn btn-black icon-arrow-right-white"
                        href="{{ route('packing') }}">View More</a></div>
            </div>
        </div>
        <section class="section-box recipes mt-10">
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
                </div>
            </div>
        </section>
    </section>
@endsection
