 @extends('auth/layout/app')
 @section('title','Login')
 @section('content')


       <!-- Welcome Text
      ========================= -->
      <div class="col-md-6">
        <div class="hero-wrap d-flex align-items-center h-100">
          <div class="hero-mask opacity-8 bg-primary"></div>
          <div class="hero-bg hero-bg-scroll" style="background-image:url('http://demo.harnishdesign.net/html/oxyy/images/login-bg.jpg');"></div>
          <div class="hero-content mx-auto w-100 h-100 d-flex flex-column">
            <div class="row no-gutters">
              <div class="col-10 col-lg-9 mx-auto">
                <div class="logo mt-5 mb-5 mb-md-0"> <a class="d-flex" href="http://demo.harnishdesign.net/html/oxyy/index.html" title="Oxyy"><img src="http://demo.harnishdesign.net/html/oxyy/images/logo-light.png" alt="Oxyy"></a> </div>
              </div>
            </div>
            <div class="row no-gutters my-auto">
              <div class="col-10 col-lg-9 mx-auto">
                <h1 class="text-11 text-white mb-4">Welcome back!</h1>
                <p class="text-4 text-white line-height-4 mb-5">We are glad to see you again!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Welcome Text End --> 
 <!-- Login Form
      ========================= -->
      <div class="col-md-6 d-flex align-items-center">
        <div class="container my-auto py-5">
          <div class="row">
            <div class="col-11 col-lg-9 col-xl-8 mx-auto">
             @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
             @endif
              <h3 class="font-weight-600 mb-4">Log In</h3>
               <form id="loginForm"  method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="form-group">
                  <label for="emailAddress">Email Address</label>
                  <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="emailAddress" required placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                  <label for="loginPassword">Password</label>
                  <input type="password" name="password" class="form-control" id="loginPassword" required placeholder="Enter Password">
                </div>
                <div class="row">
                  <div class="col-sm">
                    <div class="form-check custom-control custom-checkbox">
                      <input id="remember_me" name="remember" class="custom-control-input" type="checkbox">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="col-sm text-right">
                    @if (Route::has('password.request'))
                        <a class="btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                  </div>
                  
                </div>
                <button class="btn btn-primary btn-block my-4" type="submit">Login</button>
              </form>
              <p class="text-center text-muted mb-0">Don't have an account? <a class="btn-link" href="{{ url('register') }}">Sign Up</a></p>
            </div>
          </div>
        </div>
      </div>
      @endsection