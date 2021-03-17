 @extends('auth/layout/app')
 @section('title','Login')
 @section('content')

<!-- Welcome Text
      ========================= -->
      <div class="col-md-6">
        <div class="hero-wrap d-flex align-items-center h-100">
          <div class="hero-mask opacity-8 bg-primary"></div>
          <div class="hero-bg hero-bg-scroll" style="background-image:url('./images/login-bg.jpg');"></div>
          <div class="hero-content mx-auto w-100 h-100 d-flex flex-column">
            <div class="row no-gutters">
              <div class="col-10 col-lg-9 mx-auto">
                <div class="logo mt-5 mb-5 mb-md-0"> <a class="d-flex" href="index.html" title="Oxyy"><img src="images/logo-light.png" alt="Oxyy"></a> </div>
              </div>
            </div>
            <div class="row no-gutters my-auto">
              <div class="col-10 col-lg-9 mx-auto">
                <h1 class="text-11 text-white mb-4">Looks like you're new here!</h1>
                <p class="text-4 text-white line-height-4 mb-5">Sign up with your details to get started</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Welcome Text End --> 
      
      <!-- Register Form
      ========================= -->
      <div class="col-md-6 d-flex align-items-center">
        <div class="container my-auto py-5">
          <div class="row">
            <div class="col-11 col-lg-9 col-xl-8 mx-auto">
              <h3 class="font-weight-600 mb-4">Sign Up</h3>
              <form id="registerForm"  method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                  <label for="fullName">Full Name</label>
                  <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="fullName" required placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                  <label for="emailAddress">Email Address</label>
                  <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="emailAddress" required placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                  <label for="loginPassword">Password</label>
                  <input type="password" name="password" class="form-control" id="loginPassword" required placeholder="Enter Password">
                </div>
                <div class="form-group">
                  <label for="loginPassword">Confirm Password</label>
                  <input type="password" name="password_confirmation" class="form-control" id="loginPassword" required placeholder="Confirm Password">
                </div>
                <button class="btn btn-primary btn-block my-4" type="submit">Sign Up</button>
              </form>
              <p class="text-center text-muted mb-0">Already have an account? <a class="btn-link" href="{{ url('login') }}">Log In</a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Register Form End --> 
@endsection
