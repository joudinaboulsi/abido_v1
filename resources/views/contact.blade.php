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
                <h1 class="text-display-33 color-red mb-20">Contact Us</h1>
                <p class="text-body-text color-white">abido qualified team is here to provide you with more
                    information,
                    .<br class="d-lg-block d-none"> answer your questions and create a memory out of your dishes</p>
            </div>

        </div>
    </section>
    <section class="section-box">
        <div class="container mb-20 mt-150">
            <div>
                <div class="row">
                    <div class="col-lg-12 mb-60">
                        {{-- <span class="text-body-capitalized text-uppercase">Contact us</span> --}}
                        <h2 class="text-heading-1 color-red mt-10">Get in touch</h2>
                        <p class="text-body-text color-black-t mt-20">Whether you have a question about our Products,
                            investment.<br class="d-lg-block d-none"> our team is ready to answer you!</p>
                    </div>
                    {{-- <div class="col-lg-4 mb-40">
                        <h4 class="text-heading-6 color-gray-900 icon-home mb-10 mt-10">Abido Company for trade and industry
                        </h4>
                        <p class="text-body-text color-gray-600">4517 Washington Ave. <br>Manchester, Kentucky 39495</p>
                        <p class="text-body-text color-gray-600">(239) 555-0108</p>
                        <p class="text-body-text color-gray-600"><a
                                href="https://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="62010d0c160301162203050d0c4c010d0f">[email&#160;protected]</a></p>
                    </div> --}}
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" value="" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" value=""
                                        placeholder="Company (optioanl)">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" value="" placeholder="Your email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" value="" placeholder="Phone number">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Tell us about yourself"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-15">
                                <button class="btn btn-black icon-arrow-right-white mr-40 mb-20" type="submit">Send
                                    Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-50">

        <div class="container mt-100">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="list-icons hover-up">
                        <div class="item-icon">

                            <h4 class="text-heading-4">Phones</h4>
                            <p class="text-body-text1 color-black-t mt-15">+9611654369<br>Fax: +9611654385


                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="list-icons hover-up">
                        <div class="item-icon">

                            <h4 class="text-heading-4">Address</h4>
                            <p class="text-body-text1 color-black-t mt-15">Raja building-Makhsumi Street
                                <br>
                                Mazraa- Beirut- Lebanon

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="list-icons hover-up">
                        <div class="item-icon-email">

                            <h4 class="text-heading-4">Email</h4>
                            <p class="text-body-text1 color-black-t mt-15 email"><a
                                    class="text-body-text color-black-t
                                    href="mailto:export@abido.com">export@abido.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container mt-100">
            <div class="row">
                <div class="col">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.4033108147873!2d35.50167551455029!3d33.87926543427457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f171723d64f27%3A0x9fddf82e84b37d9!2sAbido%20Spices!5e0!3m2!1sen!2slb!4v1676543805193!5m2!1sen!2slb"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
