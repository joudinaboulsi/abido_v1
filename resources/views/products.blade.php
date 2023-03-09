@extends('layouts.master')

@section('content')
    <section class="section-box">
        <div class="banner-hero banner-head-image"
            style="background-image: url('{{ asset('assets/imgs/abido/p.jpg') }}');
            background-attachment: fixed;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-heading-1 color-red mb-20">Products</h1>
                        <p class="text-heading-6 color-white mb-20">
                            Our product range encompassesthe entire spectrum of spices
                            <br class="d-lg-block d-none"> and their derivatives
                            processed and blended as per the requirements of the customer.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-box mt-150">
        <div class="container">
            <h2 class="text-heading-1 color-red">Featured Products</h2>

        </div>
        <div class="container mt-70">
            <div class="filters-products d-flex">
                <div class="number-info"><strong class="text-body-text1 color-black-t">There are 1853 products in this
                        category</strong></div>
                <div class="fitler-info">
                    <div class="icon-layout mr-10 text-body-text1 color-black-t">Show:
                        <div class="color-red d-inline">
                            <div class="dropdown dropdown-sort">
                                <button class="btn dropdown-toggle" id="dropdownPage" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"
                                    data-bs-display="static"><span>50</span><i class="fi-rr-angle-small-down"></i></button>
                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownPage">
                                    <li><a class="dropdown-item active" href="{{ route('shopDetail') }}">50</a></li>
                                    <li><a class="dropdown-item" href="{{ route('shopDetail') }}">100</a></li>
                                    <li><a class="dropdown-item" href="{{ route('shopDetail') }}">150</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="icon-sort text-body-text1 color-black-t">Sort by:
                        <div class="color-red d-inline">
                            <div class="dropdown dropdown-sort">
                                <button class="btn dropdown-toggle" id="dropdownSort" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"
                                    data-bs-display="static"><span>Featured</span><i
                                        class="fi-rr-angle-small-down"></i></button>
                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort">
                                    <li><a class="dropdown-item active" href="{{ route('shopDetail') }}"">Featured</a></li>

                                    <li><a class="dropdown-item" href="{{ route('shopDetail') }}"">Low Price</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-40">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-item-2 hover-up"><a href="{{ route('shopDetail') }}">
                            <div class="product-image"><img src="{{ asset('assets/imgs/abido/img5.jpg') }}" alt="agon">
                            </div>
                        </a>
                        <div class="box-quick-view">
                            <div class="quick-view"><a class="like-product" href="{{ route('shopDetail') }}"></a><a
                                    class="shuffle-product" href="{{ route('shopDetail') }}""></a><a class="view-product"
                                    href="{{ route('shopDetail') }}"></a></div>
                        </div>
                        <div class="product-info"><span class="text-body-small color-red font-bold">Miscellaneous</span><a
                                href="{{ route('shopDetail') }}">
                                <h3 class="text-body-lead color-red">Salep - Grade (A)
                                </h3>
                            </a>

                            <div class="d-flex mt-20">
                                <div class="box-prices"><span class="price-regular mr-5">$22.51</span><span
                                        class="price-regular price-line"></span></div>
                                <div class="button-add text-end"><a class="btn btn-cart"
                                        href="{{ route('shopDetail') }}"">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-item-2 hover-up"><a href="{{ route('shopDetail') }}">
                            <div class="product-image"><img src="{{ asset('assets/imgs/abido/img5.jpg') }}" alt="agon">
                            </div>
                        </a>
                        <div class="box-quick-view">
                            <div class="quick-view"><a class="like-product" href="{{ route('shopDetail') }}"></a><a
                                    class="shuffle-product" href="{{ route('shopDetail') }}""></a><a class="view-product"
                                    href="{{ route('shopDetail') }}"></a></div>
                        </div>
                        <div class="product-info"><span class="text-body-small color-red font-bold">Miscellaneous</span><a
                                href="{{ route('shopDetail') }}">
                                <h3 class="text-body-lead color-red">Salep - Grade (A)
                                </h3>
                            </a>

                            <div class="d-flex mt-20">
                                <div class="box-prices"><span class="price-regular mr-5">$22.51</span><span
                                        class="price-regular price-line"></span></div>
                                <div class="button-add text-end"><a class="btn btn-cart"
                                        href="{{ route('shopDetail') }}"">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-item-2 hover-up"><a href="{{ route('shopDetail') }}">
                            <div class="product-image"><img src="{{ asset('assets/imgs/abido/img5.jpg') }}"
                                    alt="agon">
                            </div>
                        </a>
                        <div class="box-quick-view">
                            <div class="quick-view"><a class="like-product" href="{{ route('shopDetail') }}"></a><a
                                    class="shuffle-product" href="{{ route('shopDetail') }}"></a><a class="view-product"
                                    href="{{ route('shopDetail') }}"></a></div>
                        </div>
                        <div class="product-info"><span class="text-body-small color-red font-bold">Miscellaneous</span><a
                                href="{{ route('shopDetail') }}">
                                <h3 class="text-body-lead color-red">Salep - Grade (A)
                                </h3>
                            </a>

                            <div class="d-flex mt-20">
                                <div class="box-prices"><span class="price-regular mr-5">$22.51</span><span
                                        class="price-regular price-line"></span></div>
                                <div class="button-add text-end"><a class="btn btn-cart"
                                        href="{{ route('shopDetail') }}"">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-item-2 hover-up"><a href="{{ route('shopDetail') }}">
                            <div class="product-image"><img src="{{ asset('assets/imgs/abido/img5.jpg') }}"
                                    alt="agon">
                            </div>
                        </a>
                        <div class="box-quick-view">
                            <div class="quick-view"><a class="like-product" href="{{ route('shopDetail') }}"></a><a
                                    class="shuffle-product" href="{{ route('shopDetail') }}"></a><a class="view-product"
                                    href="{{ route('shopDetail') }}"></a></div>
                        </div>
                        <div class="product-info"><span class="text-body-small color-red font-bold">Miscellaneous</span><a
                                href="{{ route('shopDetail') }}">
                                <h3 class="text-body-lead color-red">Salep - Grade (A)
                                </h3>
                            </a>

                            <div class="d-flex mt-20">
                                <div class="box-prices"><span class="price-regular mr-5">$22.51</span><span
                                        class="price-regular price-line"></span></div>
                                <div class="button-add text-end"><a class="btn btn-cart"
                                        href="{{ route('shopDetail') }}"">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-item-2 hover-up"><a href="{{ route('shopDetail') }}">
                            <div class="product-image"><img src="{{ asset('assets/imgs/abido/img5.jpg') }}"
                                    alt="agon">
                            </div>
                        </a>
                        <div class="box-quick-view">
                            <div class="quick-view"><a class="like-product" href="{{ route('shopDetail') }}"></a><a
                                    class="shuffle-product" href="{{ route('shopDetail') }}"></a><a class="view-product"
                                    href="{{ route('shopDetail') }}"></a></div>
                        </div>
                        <div class="product-info"><span class="text-body-small color-red font-bold">Miscellaneous</span><a
                                href="{{ route('shopDetail') }}">
                                <h3 class="text-body-lead color-red">Salep - Grade (A)
                                </h3>
                            </a>

                            <div class="d-flex mt-20">
                                <div class="box-prices"><span class="price-regular mr-5">$22.51</span><span
                                        class="price-regular price-line"></span></div>
                                <div class="button-add text-end"><a class="btn btn-cart"
                                        href="{{ route('shopDetail') }}"">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="section-box mt-90">
        <div class="container">
            <h2 class="text-heading-1 color-red">You May Also Like</h2>
        </div>
        <div class="container mt-70">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                    <div class="product-item-1 hover-up"><a href="{{ route('shopDetail') }}"">
                            <div class="product-image"><img src="{{ asset('assets/imgs/abido/img5.jpg') }}"
                                    alt="agon">
                            </div>
                            <div class="product-info">
                                <h3 class="title-product color-black-t">
                                    Salep - Grade</h3><span class="price-regular mr-15">$29.8</span>
                            </div>
                        </a>
                        <div class="button-add text-end"><a class="btn btn-cart" href="{{ route('shopDetail') }}"">Add
                                to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                    <div class="product-item-1 hover-up"><a href="{{ route('shopDetail') }}"">
                            <div class="product-image"><img src="{{ asset('assets/imgs/abido/img5.jpg') }}"
                                    alt="agon">
                            </div>
                            <div class="product-info">
                                <h3 class="title-product color-black-t">
                                    Salep - Grade</h3><span class="price-regular mr-15">$29.8</span>
                            </div>
                        </a>
                        <div class="button-add text-end"><a class="btn btn-cart" href="{{ route('shopDetail') }}"">Add
                                to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                    <div class="product-item-1 hover-up"><a href="{{ route('shopDetail') }}"">
                            <div class="product-image"><img src="{{ asset('assets/imgs/abido/img5.jpg') }}"
                                    alt="agon">
                            </div>
                            <div class="product-info">
                                <h3 class="title-product color-black-t">
                                    Salep - Grade</h3><span class="price-regular mr-15">$29.8</span>
                            </div>
                        </a>
                        <div class="button-add text-end"><a class="btn btn-cart" href="{{ route('shopDetail') }}"">Add
                                to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                    <div class="product-item-1 hover-up"><a href="{{ route('shopDetail') }}"">
                            <div class="product-image"><img src="{{ asset('assets/imgs/abido/img5.jpg') }}"
                                    alt="agon">
                            </div>
                            <div class="product-info">
                                <h3 class="title-product color-black-t">
                                    Salep - Grade</h3><span class="price-regular mr-15">$29.8</span>
                            </div>
                        </a>
                        <div class="button-add text-end"><a class="btn btn-cart" href="{{ route('shopDetail') }}"">Add
                                to cart</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
