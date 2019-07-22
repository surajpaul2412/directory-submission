<!DOCTYPE html>
<html lang="zxx" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Directory Submission</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/linearicons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/nice-select.css') }}">                  
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">
        <style>
          .bold{
            font-weight: bold;
            text-transform: capitalize;
          }
          #adsbox{
            display: none;
          }
        </style>
    </head>
    <body>

          <header class="" id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                  <div id="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/frontend/img/logo.png') }}" alt="" title="" /></a>
                  </div>
                  <nav id="nav-menu-container">
                    <ul class="nav-menu">
                      <li class="menu-active"><a href="{{ route('home') }}">Home</a></li>
                      <li><a href="{{ route('listing.index') }}">Submit Link</a></li>
                      <li><a href="{{ route('latest.index') }}">Latest Link</a></li>
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Contact</a></li>
                        <li>
                            @guest
                                <li class="">
                                    <a class="ticker-btn" href="" data-toggle="modal" data-target="#ModalLogin">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="">
                                        <a class="ticker-btn" href="" data-toggle="modal" data-target="#ModalRegister">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="dropdown">
                                    <a id="navbarDropdown" class=" dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item ticker-btn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                        </a><br/>
                                        <a class="dropdown-item ticker-btn" href="{{ route('admin.dashboard') }}">
                                                {{ __('Dashboard') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </li>                                                
                    </ul>
                  </nav><!-- #nav-menu-container -->                    
                </div>
            </div>
          </header>
        <!-- start banner Area -->
        <section class="banner-area relative" id="home">    
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-center">
                    <div class="banner-content col-lg-12">
                        <h1 class="text-white">
                            <span>150+</span> Listings posted last week             
                        </h1>   
                        <form action="https://colorlib.com/preview/theme/joblisting/search.html" class="serach-form-area">
                            <div class="row justify-content-center form-wrap">
                                <div class="col-lg-7 form-cols">
                                    <input type="text" class="form-control" name="search" placeholder="Search your URL here...">
                                </div>
                                <div class="col-lg-3 form-cols">
                                    <div class="default-select" id="default-selects2">
                                        <select>
                                            <option value="1">Select Category</option>
                                            <option value="2">Medical</option>
                                            <option value="3">Technology</option>
                                            <option value="4">Goverment</option>
                                            <option value="5">Development</option>
                                        </select>
                                    </div>                                      
                                </div>
                                <div class="col-lg-2 form-cols">
                                    <button type="button" class="btn btn-info">
                                      <span class="lnr lnr-magnifier"></span> Search
                                    </button>
                                </div>                              
                            </div>
                        </form> 
                        <p class="text-white"> <span>Search by tags:</span> Tecnology, Business, Consulting, IT Company, Design, Development</p>
                    </div>                                          
                </div>
            </div>
        </section>
        <!-- End banner Area -->    

        <!-- Start features Area -->
        <section class="features-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ route('listing.index') }}">
                            <div class="single-feature">
                                <h4>Submit Link</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ route('latest.index') }}">
                            <div class="single-feature">
                                <h4>Latest Link</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-feature">
                            <h4>Top Link</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-feature">
                            <h4>About Us</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing.
                            </p>
                        </div>
                    </div>                                                                      
                </div>
            </div>  
        </section>
        <!-- End features Area -->
        
        <!-- Start popular-post Area -->
        <section class="popular-post-area pt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="active-popular-post-carusel">
                        <div class="single-popular-post d-flex flex-row">
                            <div class="thumb">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/p1.png') }}" alt="">
                                <a class="btns text-uppercase" href="#">view job post</a>
                            </div>
                            <div class="details">
                                <a href="#"><h4>Creative Designer</h4></a>
                                <h6>Los Angeles</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                                </p>
                            </div>
                        </div>  
                        <div class="single-popular-post d-flex flex-row">
                            <div class="thumb">
                                <img src="{{ asset('assets/frontend/img/p2.png') }}" alt="">
                                <a class="btns text-uppercase" href="#">view job post</a>
                            </div>
                            <div class="details">
                                <a href="#"><h4>Creative Designer</h4></a>
                                <h6>Los Angeles</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                                </p>
                            </div>
                        </div>
                        <div class="single-popular-post d-flex flex-row">
                            <div class="thumb">
                                <img src="{{ asset('assets/frontend/img/p1.png') }}" alt="">
                                <a class="btns text-uppercase" href="#">view job post</a>
                            </div>
                            <div class="details">
                                <a href="#"><h4>Creative Designer</h4></a>
                                <h6>Los Angeles</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                                </p>
                            </div>
                        </div>  
                        <div class="single-popular-post d-flex flex-row">
                            <div class="thumb">
                                <img src="{{ asset('assets/frontend/img/p2.png') }}" alt="">
                                <a class="btns text-uppercase" href="#">view job post</a>
                            </div>
                            <div class="details">
                                <a href="#"><h4>Creative Designer</h4></a>
                                <h6>Los Angeles</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                                </p>
                            </div>
                        </div>  
                        <div class="single-popular-post d-flex flex-row">
                            <div class="thumb">
                                <img src="{{ asset('assets/frontend/img/p1.png') }}" alt="">
                                <a class="btns text-uppercase" href="#">view job post</a>
                            </div>
                            <div class="details">
                                <a href="#"><h4>Creative Designer</h4></a>
                                <h6>Los Angeles</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                                </p>
                            </div>
                        </div>  
                        <div class="single-popular-post d-flex flex-row">
                            <div class="thumb">
                                <img src="{{ asset('assets/frontend/img/p2.png') }}" alt="">
                                <a class="btns text-uppercase" href="#">view job post</a>
                            </div>
                            <div class="details">
                                <a href="#"><h4>Creative Designer</h4></a>
                                <h6>Los Angeles</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                                </p>
                            </div>
                        </div>                                                                                                                                                          
                    </div>
                </div>
            </div>  
        </section>
        <!-- End popular-post Area -->
        
        <!-- Start feature-cat Area -->
        <section class="feature-cat-area pt-100" id="category">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-10">
                        <div class="title text-center">
                            <h1 class="mb-10">Featured Job Categories</h1>
                            <p>Who are in extremely love with eco friendly system.</p>
                        </div>
                    </div>
                </div>                      
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="category.html">
                                <img src="{{ asset('assets/frontend/img/o1.png') }}" alt="">
                            </a>
                            <p>Accounting</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="category.html">
                                <img src="{{ asset('assets/frontend/img/o2.png') }}" alt="">
                            </a>
                            <p>Development</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="category.html">
                                <img src="{{ asset('assets/frontend/img/o3.png') }}" alt="">
                            </a>
                            <p>Technology</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="category.html">
                                <img src="{{ asset('assets/frontend/img/o4.png') }}" alt="">
                            </a>
                            <p>Media & News</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="category.html">
                                <img src="{{ asset('assets/frontend/img/o5.png') }}" alt="">
                            </a>
                            <p>Medical</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="category.html">
                                <img src="{{ asset('assets/frontend/img/o6.png') }}" alt="">
                            </a>
                            <p>Goverment</p>
                        </div>          
                    </div>                                                                                                          
                </div>
            </div>  
        </section>
        <!-- End feature-cat Area -->
        
        <!-- Start post Area -->
        <section class="post-area section-gap">
            <div class="container">
                <div class="row justify-content-center d-flex">
                    <div class="col-lg-8 post-list">
                        
                        <div class="single-post d-flex flex-row">
                            <div class="thumb">
                                <img src="{{ asset('assets/frontend/img/post.png') }}') }}" alt="">
                                <ul class="tags">
                                    <li>
                                        <a href="#">Art</a>
                                    </li>
                                    <li>
                                        <a href="#">Media</a>
                                    </li>
                                    <li>
                                        <a href="#">Design</a>                  
                                    </li>
                                </ul>
                            </div>
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        <a href="single.html"><h4>Creative Art Designer</h4></a>
                                        <h6>Premium Labels Limited</h6>                 
                                    </div>
                                    <ul class="btns">
                                        <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                        <li><a href="#">Apply</a></li>
                                    </ul>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Full time</h5>
                                <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            </div>
                        </div>
                        <div class="single-post d-flex flex-row">
                            <div class="thumb">
                                <img src="{{ asset('assets/frontend/img/post.png') }}') }}" alt="">
                                <ul class="tags">
                                    <li>
                                        <a href="#">Art</a>
                                    </li>
                                    <li>
                                        <a href="#">Media</a>
                                    </li>
                                    <li>
                                        <a href="#">Design</a>                  
                                    </li>
                                </ul>
                            </div>
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        <a href="single.html"><h4>Creative Art Designer</h4></a>
                                        <h6>Premium Labels Limited</h6>                 
                                    </div>
                                    <ul class="btns">
                                        <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                        <li><a href="#">Apply</a></li>
                                    </ul>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Full time</h5>
                                <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            </div>
                        </div>
                        <div class="single-post d-flex flex-row">
                            <div class="thumb">
                                <img src="{{ asset('assets/frontend/img/post.png') }}') }}" alt="">
                                <ul class="tags">
                                    <li>
                                        <a href="#">Art</a>
                                    </li>
                                    <li>
                                        <a href="#">Media</a>
                                    </li>
                                    <li>
                                        <a href="#">Design</a>                  
                                    </li>
                                </ul>
                            </div>
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        <a href="single.html"><h4>Creative Art Designer</h4></a>
                                        <h6>Premium Labels Limited</h6>                 
                                    </div>
                                    <ul class="btns">
                                        <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                        <li><a href="#">Apply</a></li>
                                    </ul>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Full time</h5>
                                <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            </div>
                        </div>
                        <div class="single-post d-flex flex-row">
                            <div class="thumb">
                                <img src="{{ asset('assets/frontend/img/post.png') }}" alt="">
                                <ul class="tags">
                                    <li>
                                        <a href="#">Art</a>
                                    </li>
                                    <li>
                                        <a href="#">Media</a>
                                    </li>
                                    <li>
                                        <a href="#">Design</a>                  
                                    </li>
                                </ul>
                            </div>
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        <a href="single.html"><h4>Creative Art Designer</h4></a>
                                        <h6>Premium Labels Limited</h6>                 
                                    </div>
                                    <ul class="btns">
                                        <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                        <li><a href="#">Apply</a></li>
                                    </ul>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Full time</h5>
                                <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            </div>
                        </div>                                                          
                        <div class="single-post d-flex flex-row">
                            <div class="thumb">
                                <img src="{{ asset('assets/frontend/img/post.png') }}" alt="">
                                <ul class="tags">
                                    <li>
                                        <a href="#">Art</a>
                                    </li>
                                    <li>
                                        <a href="#">Media</a>
                                    </li>
                                    <li>
                                        <a href="#">Design</a>                  
                                    </li>
                                </ul>
                            </div>
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        <a href="single.html"><h4>Creative Art Designer</h4></a>
                                        <h6>Premium Labels Limited</h6>                 
                                    </div>
                                    <ul class="btns">
                                        <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                        <li><a href="#">Apply</a></li>
                                    </ul>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Full time</h5>
                                <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            </div>
                        </div>  
                        
                        <a class="text-uppercase loadmore-btn mx-auto d-block" href="category.html">Load More job Posts</a>

                    </div>
                    <div class="col-lg-4 sidebar">
                        <div class="single-slidebar">
                            <h4>Categories</h4>
                            <ul class="cat-list">
                                @foreach($categories as $category)
                                    <li><a class="justify-content-between d-flex" href=""><p>{{ $category->name }}</p></a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="single-slidebar">
                            <h4>Top listings</h4>
                            <div class="active-relatedjob-carusel">
                                <div class="single-rated">
                                    <img class="img-fluid" src="{{ asset('assets/frontend/img/r1.jpg') }}') }}" alt="">
                                    <a href="single.html"><h4>Creative Art Designer</h4></a>
                                    <h6>Premium Labels Limited</h6>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                    </p>
                                    <h5>Job Nature: Full time</h5>
                                    <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                    <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                                    <a href="#" class="btns text-uppercase">Apply job</a>
                                </div>
                                <div class="single-rated">
                                    <img class="img-fluid" src="{{ asset('assets/frontend/img/r1.jpg') }}" alt="">
                                    <a href="single.html"><h4>Creative Art Designer</h4></a>
                                    <h6>Premium Labels Limited</h6>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                    </p>
                                    <h5>Job Nature: Full time</h5>
                                    <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                    <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                                    <a href="#" class="btns text-uppercase">Apply job</a>
                                </div>
                                <div class="single-rated">
                                    <img class="img-fluid" src="{{ asset('assets/frontend/img/r1.jpg') }}" alt="">
                                    <a href="single.html"><h4>Creative Art Designer</h4></a>
                                    <h6>Premium Labels Limited</h6>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                    </p>
                                    <h5>Job Nature: Full time</h5>
                                    <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                    <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                                    <a href="#" class="btns text-uppercase">Apply job</a>
                                </div>                                                                      
                            </div>
                        </div>                          
                    </div>
                </div>
            </div>  
        </section>
        <!-- End post Area -->
            

        <!-- Start callto-action Area -->
        <section class="callto-action-area section-gap" id="join">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content col-lg-9">
                        <div class="title text-center">
                            <h1 class="mb-10 text-white">Join us today without any hesitation</h1>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            <a class="primary-btn" href="#">I am a Candidate</a>
                            <a class="primary-btn" href="#">Request Free Demo</a>
                        </div>
                    </div>
                </div>  
            </div>  
        </section>
    
        <!-- start footer Area -->      
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-12">
                        <div class="single-footer-widget">
                            <h6>Quick Links</h6>
                            <ul class="footer-nav">
                                <li><a href="#">Submit Link</a></li>
                                <li><a href="#">Latest Link</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-12">
                        <div class="single-footer-widget newsletter">
                            <h6>Newsletter</h6>
                            <p>You can trust us. we only send promo offers, not a single spam.</p>
                            <div id="mc_embed_signup">
                                <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                                    <div class="form-group row" style="width: 100%">
                                        <div class="col-lg-8 col-md-12">
                                            <input name="EMAIL" placeholder="Enter Email" onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Enter Email '" required="" type="email" data-cf-modified-f04d8ec4cdbd2d9f260c34aa-="">
                                            <div style="position: absolute; left: -5000px;">
                                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                            </div>
                                        </div> 
                                    
                                        <div class="col-lg-4 col-md-12">
                                            <button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
                                        </div> 
                                    </div>      
                                    <div class="info"></div>
                                </form>
                            </div>      
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-12">
                        <div class="single-footer-widget mail-chimp">
                            <h6 class="mb-20">Instragram Feed</h6>
                            <ul class="instafeed d-flex flex-wrap">
                                <li><img src="{{ asset('assets/frontend/img/i1.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('assets/frontend/img/i2.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('assets/frontend/img/i3.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('assets/frontend/img/i4.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('assets/frontend/img/i5.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('assets/frontend/img/i6.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('assets/frontend/img/i7.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('assets/frontend/img/i8.jpg') }}" alt=""></li>
                            </ul>
                        </div>
                    </div>                      
                </div>

                <div class="row footer-bottom d-flex justify-content-between">
                    <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
                        Copyright &copy; 2019 All Right Reserved. | Powered by Codeburnerz Technologies.
                    </p>
                    <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>

<!-- login modal -->
<div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content" style="background: #ff3a6d; ">
      <div class="modal-body py-5">
        <h5 align="center" class="text-white">LOGIN</h5>
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
              <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>
          <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
              <div class="col-md-6">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>
          <div class="form-group row">
              <div class="col-md-4 offset-md-4">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      <label class="form-check-label" for="remember">
                          {{ __('Remember Me') }}
                      </label>
                  </div>
              </div>
          </div>
          <div class="form-group row">
              <div class="col-md-12 offset-md-4">
                  <button type="submit" class="btn text-white" style="background-color: #ff3a6d;">
                      {{ __('Login') }}
                  </button>
                  @if (Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}">
                          {{ __('Forgot Your Password?') }}
                      </a>
                  @endif
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- register modal -->
<div class="modal fade" id="ModalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group row" style="padding-top: 40px;">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-5 offset-md-4">
                </div>
                <div class="col-md-7 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
        <!-- End footer Area -->        

        <script src="{{ asset('assets/frontend/js/vendor/jquery-2.2.4.min.js') }}" type="f04d8ec4cdbd2d9f260c34aa-text/javascript"></script>
        <script src="{{ asset('assets/frontend/js/popper.min.js') }}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" type="f04d8ec4cdbd2d9f260c34aa-text/javascript"></script>
        <script src="{{ asset('assets/frontend/js/vendor/bootstrap.min.js') }}" type="f04d8ec4cdbd2d9f260c34aa-text/javascript"></script>          
        <script type="f04d8ec4cdbd2d9f260c34aa-text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="{{ asset('assets/frontend/js/easing.min.js') }}" type="f04d8ec4cdbd2d9f260c34aa-text/javascript"></script>            
        <script src="{{ asset('assets/frontend/js/hoverIntent.js') }}" type="f04d8ec4cdbd2d9f260c34aa-text/javascript"></script>
        <script src="{{ asset('assets/frontend/js/superfish.min.js') }}" type="f04d8ec4cdbd2d9f260c34aa-text/javascript"></script> 
        <script src="{{ asset('assets/frontend/js/jquery.ajaxchimp.min.js') }}" type="f04d8ec4cdbd2d9f260c34aa-text/javascript"></script>
        <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}" type="f04d8ec4cdbd2d9f260c34aa-text/javascript"></script> 
        <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}" type="f04d8ec4cdbd2d9f260c34aa-text/javascript"></script>          
        <script src="{{ asset('assets/frontend/js/jquery.sticky.js') }}" type="f04d8ec4cdbd2d9f260c34aa-text/javascript"></script>
        <script src="{{ asset('assets/frontend/js/jquery.nice-select.min.js') }}" type="f04d8ec4cdbd2d9f260c34aa-text/javascript"></script>            
        <script src="{{ asset('assets/frontend/js/parallax.min.js') }}" type="f04d8ec4cdbd2d9f260c34aa-text/javascript"></script>      
        <script src="{{ asset('assets/frontend/js/mail-script.js') }}" type="f04d8ec4cdbd2d9f260c34aa-text/javascript"></script>   
        <script src="{{ asset('assets/frontend/js/main.js') }}" type="f04d8ec4cdbd2d9f260c34aa-text/javascript"></script>  
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="f04d8ec4cdbd2d9f260c34aa-text/javascript"></script>
        <script type="f04d8ec4cdbd2d9f260c34aa-text/javascript">
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-23581568-13');
        </script>
        <script src="{{ asset('assets/frontend/js/rocket-loader.min.js') }}" data-cf-settings="f04d8ec4cdbd2d9f260c34aa-|49" defer=""></script>
</body>
</html>