  <header class="header sticky-bar">
      <div class="container">
          <div class="main-header">
              <div class="header-left">
                  <div class="header-logo"><a class="d-flex" href="{{ route('home') }}"><img alt="Agon" class="img-logo"
                              src="{{ asset('assets/imgs/logo.png') }}"></a></div>
                  <div class="header-nav">
                      <nav class="nav-main-menu d-none d-xl-block">
                          <ul class="main-menu">
                              <li>
                                  <a class="{{ \Request::route()->getName() == 'home' ? 'active' : '' }}"
                                      href="{{ route('home') }}">Home</a>

                              </li>
                              <li><a href="{{ route('about') }}">About</a>
                              </li>
                              <li class="has-children"><a href="#">Products</a>
                                  <ul class="sub-menu">
                                      <li><a href="{{ route('ProductsSpices') }}"><i
                                                  class="fi fi-rr-arrow-right"></i>Spices</a>
                                      </li>
                                      <li><a href="{{ route('ProductsSpices') }}"><i
                                                  class="fi fi-rr-arrow-right"></i>Herbs</a></li>
                                      {{-- <li><a href="page-about-3.html"><i class="fi fi-rr-star"></i></a></li> --}}
                                  </ul>
                              </li>
                              {{-- <li><a href="{{ route('packing') }}">Packing</a> </li> --}}

                              <li><a href="{{ route('recipes') }}">Recipes</a></li>
                              {{-- <li><a href="{{ route('faq') }}">Faqs</a> </li> --}}
                              <li><a href="{{ route('contact') }}">Contact us</a>
                              </li>
                          </ul>
                      </nav>
                  </div>



                  <div class="cart-home d-flex"><i class="fa fa-search" style="font-size:24px"></i> <i
                          class="fa fa-shopping-cart" style="font-size:24px"></i>
                      <a class="btn btn-square btnHome" href="page-signup.html">Login</a>
                  </div>
              </div>
              {{-- <div class="header-right">
                  <div class="block-signin"><a class="btn btn-default hover-up icon-arrow-right"
                          href="page-signup.html">Get Started</a></div>
              </div> --}}
          </div>
      </div>
  </header>
