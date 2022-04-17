@extends('backend.layouts.auth')
@section('content')
    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
      
                    <div class="d-flex justify-content-center py-4">
                      <a href="index.html" class="logo d-flex align-items-center w-auto">
                        <img src="assets/img/logo.png" alt="">
                        <span class="d-none d-lg-block">FastBidders</span>
                      </a>
                    </div><!-- End Logo -->
      
                    <div class="card mb-3">
      
                      <div class="card-body">
      
                        <div class="pt-4 pb-2">
                          <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                          <p class="text-center small">Enter your personal details to create account</p>
                        </div>
      
                        <form method="POST" action="{{route('register')}}" class="row g-3 needs-validation" novalidate>
                          @csrf
                          <div class="col-12">
                            <label for="yourName" class="form-label">Your Name</label>
                            <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" id="yourName" required>
                           
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                          </div>
      
                          <div class="col-12">
                            <label for="yourEmail" class="form-label">Your Email</label>
                            <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="yourEmail" required>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
      
                         
      
                          <div class="col-12">
                            <label for="yourPassword" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="yourPassword" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                          </div>
                          <div class="col-12">
                            <label for="yourPassword" class="form-label">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  required autocomplete="new-password"  required>
                           
                          </div>
      
                          <div class="col-12">
                           
                          </div>
                          <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">Create Account</button>
                          </div>
                          <div class="col-12">
                            <p class="small mb-0">Already have an account? <a href="pages-login.html">Log in</a></p>
                          </div>
                        </form>
      
                      </div>
                    </div>
      
                    <div class="credits">
              
                   
                    </div>
      
                  </div>
                </div>
              </div>
      
            </section>
      
          </div>
        </main><!-- End #main -->
      
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      
@endsection
