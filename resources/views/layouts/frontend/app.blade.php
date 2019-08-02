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
          #ticker-btn{
            background: #49e4fa;
            color: #fff;
            padding: 6px 20px !important;
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
                      <li><a href="aboutUs">About Us</a></li>
                      <li><a href="privacyPolicy">Privacy Policy</a></li>
                      <li><a href="contactUs">Contact</a></li>
                      <li>
                            @guest
                                <li class="">
                                    <a id="ticker-btn" href="" data-toggle="modal" data-target="#ModalLogin">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="">
                                        <a id="ticker-btn" href="" data-toggle="modal" data-target="#ModalRegister">{{ __('Register') }}</a>
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
                                        @if (Auth::check() && Auth::user()->role->id == 1)
                                        <a class="dropdown-item ticker-btn" href="{{ route('admin.dashboard') }}">
                                                {{ __('Dashboard') }}
                                        </a>
                                        @elseif (Auth::check() && Auth::user()->role->id == 2)
                                        <a class="dropdown-item ticker-btn" href="{{ route('verifier.dashboard') }}">
                                                {{ __('Dashboard') }}
                                        </a>
                                        @endif
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
        @yield('content')
        <!-- start footer Area -->      
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-12">
                        <div class="single-footer-widget">
                            <h6>Quick Links</h6>
                            <ul class="footer-nav">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('listing.index') }}">Submit Link</a></li>
                                <li><a href="{{ route('latest.index') }}">Latest Link</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-12">
                        <div class="single-footer-widget newsletter">
                            <h6>Newsletter</h6>
                            <p>Subscribe our news letter.</p>
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
                    <div class="col-lg-3 col-md-12">
                        <div class="single-footer-widget mail-chimp">
                            <h6 class="mb-20">Useful Links</h6>
                            <ul class="footer-nav">
                              <li><a href="privacyPolicy">Privacy Policy</a></li>
                              <li><a href="terms&conditions">Terms & Conditions</a></li>
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
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </footer>

<!-- login modal -->
<div class="modal fade container" id="ModalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="max-width: 500px;">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content" style="">
      <div class="modal-body py-4">
        <h4 align="center" class="text-dark">LOGIN</h4><hr>
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
              <div class="col-md-12 offset-md-2">
                  <button type="submit" class="btn text-white" style="background-color: #49e4fa;">
                      {{ __('Login') }}
                  </button>
                  @if (Route::has('password.request'))
                      <a class="btn btn-link" data-toggle="modal" data-target="#ModalReset">
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
<div class="modal fade container" id="ModalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="max-width: 600px;">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h4 align="center" class="text-dark">Register Here</h4><hr>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group row pt-3">
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
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn text-white" style="background-color: #49e4fa;">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Reset Password -->
<div class="modal fade container" id="ModalReset" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="max-width: 600px;">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content" style="">
      <div class="modal-body py-4">
        <h4 align="center" class="text-dark">Reset Password</h4><hr>
                      <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
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
        
        <script src="{{ asset('assets/frontend/js/rocket-loader.min.js') }}" data-cf-settings="f04d8ec4cdbd2d9f260c34aa-|49" defer=""></script>
</body>
</html>