@extends('layouts.frontend.app')
@section('content')
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
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>                                      
                                </div>
                                <div class="col-lg-2 form-cols">
                                    <a href="latest#latest">
                                    <button type="button" class="btn btn-info">
                                      <span class="lnr lnr-magnifier"></span> Search
                                    </button>
                                    </a>
                                </div>                              
                            </div>
                        </form> 
                        <p class="text-white"> <span>Search by tags:</span>@foreach($categories as $category) {{ $category->name }}, @endforeach</p>
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
                        <a class="text-dark" href="{{ route('listing.index') }}">
                            <div class="single-feature">
                                <h4>Submit Link</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a class="text-dark" href="{{ route('latest.index') }}">
                            <div class="single-feature">
                                <h4>Latest Link</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a class="text-dark" href="{{ route('latest.index') }}">
                        <div class="single-feature">
                            <h4>Top Link</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing.
                            </p>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a class="text-dark" href="aboutUs">
                        <div class="single-feature">
                            <h4>About Us</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing.
                            </p>
                        </div>
                        </a>
                    </div>                                                                      
                </div>
            </div>  
        </section>
        <!-- End features Area -->
        
        <!-- Start popular-post Area -->
        <section class="popular-post-area pt-100 d-none">
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
                            <h1 class="mb-10">Featured Listing Categories</h1>
                            <p>Who are in extremely love with eco friendly system.</p>
                        </div>
                    </div>
                </div>                      
                <div class="row">
                    @foreach($categories as $category)
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="{{ route('homecategory.show',$category->id)}}">
                                <img src="{{$category->icon}}" width="60px" />
                            </a>
                            <p>{{$category->name}}</p>
                        </div>
                    </div>
                    @endforeach                  
                </div>
            </div>  
        </section>
        <!-- End feature-cat Area -->
        
        <!-- Start post Area -->
        <section class="post-area section-gap">
            <div class="container">
                <div class="row justify-content-center d-flex">
                    <div class="col-lg-8 post-list">
                        
                        @foreach($latests as $latest)
                        <div class="single-post d-flex flex-row">
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        <a href=""><h4>{{$latest->title}}</h4></a>
                                        <h6>Premium</h6>                 
                                    </div>
                                    <ul class="btns">
                                        <li><a href="{{ route('latest.show',$latest->id)}}">Visit listing</a></li>
                                    </ul>
                                </div>
                                <p>
                                    <strong class="mr-2">Link :</strong>
                                    <a href="{{$latest->URL}}">{{$latest->URL}}</a>
                                </p>
                                <p>
                                    <strong class="mr-2">Description :</strong>
                                    <span>{{$latest->description}}</span>
                                </p>
                                <p>
                                    <strong class="mr-2">Keyword :</strong>
                                    <span>{{$latest->keyword}}</span>
                                </p>
                                <p>
                                    <strong class="mr-2">Category :</strong>
                                    <span>{{$category->name}}</span>
                                </p>
                            </div>
                        </div>
                        @endforeach
                        
                        <a href="{{route('latest.index')}}" class="text-uppercase loadmore-btn mx-auto d-block" href="category.html">Load More Listings</a>

                    </div>
                    <div class="col-lg-4 sidebar">
                        <div class="single-slidebar">
                            <h4>Categories</h4><hr>
                            <ul class="cat-list">
                                @foreach($categories as $category)
                                    <li><a class="justify-content-between d-flex" href="{{ route('homecategory.index')}}"><p>{{ $category->name }}</p></a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="single-slidebar">
                            <h4>Latest listings</h4><hr>
                            <div class="active-relatedjob-carusel">
                                @foreach($latests as $latest)
                                <div class="single-rated">
                                    <img class="img-fluid" src="{{ asset('assets/frontend/img/r1.jpg') }}" alt="">
                                    <a href=""><h4>{{$latest->title}}</h4></a>
                                    <p>{{$latest->description}}</p>
                                    <p style="width: auto;overflow: hidden;">
                                        <a href="{{$latest->URL}}">{{$latest->URL}}</a>
                                    </p>
                                    <p class="address"><span class="lnr lnr-map mr-2"></span>{{$category->name}}</p>
                                    <p class="address"><span class="lnr lnr-database mr-2"></span> 15k - 25k</p>
                                    <a href="{{ route('latest.show',$latest->id)}}" class="btns text-uppercase">Visit Listing</a>
                                </div>
                                 @endforeach
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
    
@endsection