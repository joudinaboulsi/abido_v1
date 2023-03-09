@extends('layouts.master')
@section('content')
    <section class="section-box">
        <div class="banner-hero banner-head-image"
            style="background-image: url('{{ asset('assets/imgs/abido/p.jpg') }}');
            background-attachment: fixed;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
 ">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-heading-1 color-red mb-20">Product-Detail</h1>
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
    <div class="section-box mt-70"></div>
    <section class="section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="galleries">
                        <div class="detail-gallery"><span class="icon-plus"></span>
                            <div class="product-image-slider">
                                <figure class="border-radius-10"><img src="assets/imgs/abido/img5.jpg" alt="product image">
                                </figure>
                                <figure class="border-radius-10"><img src="assets/imgs/abido/img.jpg" alt="product image">
                                </figure>
                                <figure class="border-radius-10"><img src="assets/imgs/abido/img5.jpg" alt="product image">
                                </figure>
                                <figure class="border-radius-10"><img src="assets/imgs/abido/img5.jpg" alt="product image">
                                </figure>
                            </div>
                        </div>
                        <div class="slider-nav-thumbnails">
                            <div><img src="assets/imgs/abido/img5.jpg" alt="product image"></div>
                            <div><img src="assets/imgs/abido/img5.jpg" alt="product image"></div>
                            <div><img src="assets/imgs/abido/img5.jpg" alt="product image"></div>
                            <div><img src="assets/imgs/abido/img5.jpg" alt="product image"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="product-info">
                        <div class="d-flex">
                            <div class="box-category-product"><span class="tag-category">
                                    Miscellaneous
                                </span></div>

                        </div>
                        <h1 class="text-heading-3 mt-30">Salep - Grade (A)</h1>
                        <p class="text-body-text1 color-black-t mt-20">The WH-L600 delivers cinematic surround sound to
                            immerse
                            you in whatever you&apos;re watching or listening to. Sound modes enhance movies, dialogue,
                            games, and sport, while a 98.43-ft wireless listening range gives you the freedom to move
                            around.</p>
                        <div class="box-price"><span class="price">$318.00</span>

                            <span class="text-stock">(In stock)</span>
                        </div>



                        <div class="product-extra-link2">
                            <span class="text-size">Units Size:</span>
                            <a class="action-btn hover-up" aria-label="Add To Wishlist" href="#">15</a><a
                                class="action-btn hover-up" aria-label="Compare" href="#">50</a>

                        </div>

                        <div class="detail-extralink mb-30 mt-50">
                            <div class="detail-qty border radius"><a class="qty-down" href="#"><i
                                        class="fi-rs-angle-small-down"></i></a>
                                <input class="qty-val" type="text" name="quantity" value="1" min="1"><a
                                    class="qty-up" href="#"><i class="fi-rs-angle-small-up"></i></a>
                            </div>
                            <div class="product-extra-link2">
                                <button class="button button-add-to-cart" type="submit">Add to cart</button>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="product-description">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="nav mt-50" role="tablist">
                                <li><a class="btn btn-default btn-tab" href="#tab-1" data-bs-toggle="tab" role="tab"
                                        aria-controls="tab-1" aria-selected="true">Description</a></li>
                                <li><a class="btn btn-default btn-tab" href="#tab-2" data-bs-toggle="tab" role="tab"
                                        aria-controls="tab-2" aria-selected="false">Additional info</a>
                                </li>

                            </ul>
                            <div class="tab-content mt-50">
                                <div class="tab-pane fade active show" id="tab-1" role="tabpanel"
                                    aria-labelledby="tab-1">
                                    <p class="text-body-text1 color-black-t">
                                        Uninhibited carnally hired played in whimpered dear gorilla koala depending and much
                                        yikes off far quetzal goodness and from for grimaced goodness unaccountably and
                                        meadowlark near unblushingly crucial scallop tightly neurotic hungrily some and dear
                                        furiously
                                        this apart.<br><br> Spluttered narrowly yikes left moth in yikes bowed this that
                                        grizzly much hello on spoon-fed that alas rethought much decently richly and wow
                                        against
                                        the frequent fluidly at formidable acceptably flapped besides and much circa far
                                        over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish
                                        and one however because.
                                    </p>

                                </div>
                                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                                    <table class="table">
                                        <tbody>
                                            <tr class="stand-up">
                                                <th>Stand Up</th>
                                                <td>
                                                    <p>35&Prime;L x 24&Prime;W x 37-45&Prime;H(front to back wheel)</p>
                                                </td>
                                            </tr>
                                            <tr class="folded-wo-wheels">
                                                <th>Folded (w/o wheels)</th>
                                                <td>
                                                    <p>32.5&Prime;L x 18.5&Prime;W x 16.5&Prime;H</p>
                                                </td>
                                            </tr>
                                            <tr class="folded-w-wheels">
                                                <th>Folded (w/ wheels)</th>
                                                <td>
                                                    <p>32.5&Prime;L x 24&Prime;W x 18.5&Prime;H</p>
                                                </td>
                                            </tr>
                                            <tr class="door-pass-through">
                                                <th>Door Pass Through</th>
                                                <td>
                                                    <p>24</p>
                                                </td>
                                            </tr>
                                            <tr class="frame">
                                                <th>Frame</th>
                                                <td>
                                                    <p>Aluminum</p>
                                                </td>
                                            </tr>
                                            <tr class="weight-wo-wheels">
                                                <th>Weight (w/o wheels)</th>
                                                <td>
                                                    <p>20 LBS</p>
                                                </td>
                                            </tr>
                                            <tr class="weight-capacity">
                                                <th>Weight Capacity</th>
                                                <td>
                                                    <p>60 LBS</p>
                                                </td>
                                            </tr>
                                            <tr class="width">
                                                <th>Width</th>
                                                <td>
                                                    <p>24&Prime;</p>
                                                </td>
                                            </tr>
                                            <tr class="handle-height-ground-to-handle">
                                                <th>Handle height (ground to handle)</th>
                                                <td>
                                                    <p>37-45&Prime;</p>
                                                </td>
                                            </tr>
                                            <tr class="wheels">
                                                <th>Wheels</th>
                                                <td>
                                                    <p>12&Prime; air / wide track slick tread</p>
                                                </td>
                                            </tr>
                                            <tr class="seat-back-height">
                                                <th>Seat back height</th>
                                                <td>
                                                    <p>21.5&Prime;</p>
                                                </td>
                                            </tr>
                                            <tr class="head-room-inside-canopy">
                                                <th>Head room (inside canopy)</th>
                                                <td>
                                                    <p>25&Prime;</p>
                                                </td>
                                            </tr>
                                            <tr class="pa_color">
                                                <th>Color</th>
                                                <td>
                                                    <p>Black, Blue, Red, White</p>
                                                </td>
                                            </tr>
                                            <tr class="pa_size">
                                                <th>Size</th>
                                                <td>
                                                    <p>M, S</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                    <div class="product-item-1 hover-up"><a href="#">
                            <div class="product-image"><img src="{{ asset('assets/imgs/abido/img5.jpg') }}"
                                    alt="agon">
                            </div>
                            <div class="product-info">
                                <h3 class="title-product color-black-t">
                                    Salep - Grade</h3><span class="price-regular mr-15">$29.8</span>
                            </div>
                        </a>
                        <div class="button-add text-end"><a class="btn btn-cart" href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                    <div class="product-item-1 hover-up"><a href="#">
                            <div class="product-image"><img src="{{ asset('assets/imgs/abido/img5.jpg') }}"
                                    alt="agon">
                            </div>
                            <div class="product-info">
                                <h3 class="title-product color-black-t">
                                    Salep - Grade</h3><span class="price-regular mr-15">$29.8</span>
                            </div>
                        </a>
                        <div class="button-add text-end"><a class="btn btn-cart" href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                    <div class="product-item-1 hover-up"><a href="#">
                            <div class="product-image"><img src="{{ asset('assets/imgs/abido/img5.jpg') }}"
                                    alt="agon">
                            </div>
                            <div class="product-info">
                                <h3 class="title-product color-black-t">
                                    Salep - Grade</h3><span class="price-regular mr-15">$29.8</span>
                            </div>
                        </a>
                        <div class="button-add text-end"><a class="btn btn-cart" href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                    <div class="product-item-1 hover-up"><a href="#">
                            <div class="product-image"><img src="{{ asset('assets/imgs/abido/img5.jpg') }}"
                                    alt="agon">
                            </div>
                            <div class="product-info">
                                <h3 class="title-product color-black-t">
                                    Salep - Grade</h3><span class="price-regular mr-15">$29.8</span>
                            </div>
                        </a>
                        <div class="button-add text-end"><a class="btn btn-cart" href="#">Add to cart</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
