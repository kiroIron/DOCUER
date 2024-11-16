@extends('layouts.app')
@section('content')
<!-- Page Content -->
<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8 offset-md-2">
						
							<!-- Account Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="{{asset('assets/img/login-banner.png')}}" class="img-fluid" alt="Login Banner">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Doctor Register <a href="{{route('login')}}">Not a Doctor?</a></h3>
										</div>
										
										<!-- Register Form -->
										<form method="post" action="{{route('registerdoctor')}}">
										@csrf
										<div class="form-group form-focus">
												<input name="name" type="text" class="form-control floating"value="{{ old('name') }}"id="name" @error('name') is-invalid @enderror required autocomplete="name" autofocus>
												<label class="focus-label">Name</label>
                                                
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
											</div>
                                            
											<div class="form-group form-focus">
												<input name="email" id="email" type="email" required class="form-control floating"value="{{ old('email') }}"@error('email') is-invalid @enderror autocomplete="email">
												<label class="focus-label">Email Address</label>
                                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
											</div>

											<div class="form-group form-focus">
												<input name="password" id="password" type="password" required class="form-control floating" @error('password') is-invalid @enderror autocomplete="new-password" >
												<label class="focus-label">Create Password</label>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
											</div>

											<div class="form-group form-focus">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                            </div>

											<div class="text-right">
												<a class="forgot-link" href="{{route('doctorlogin')}}">Already have an account?</a>
											</div>

											<div class="col-md-6 offset-md-4 w-100 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
											
										</form>
										<!-- /Register Form -->
										
									</div>
								</div>
							</div>
							<!-- /Account Content -->
								
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
			@endsection