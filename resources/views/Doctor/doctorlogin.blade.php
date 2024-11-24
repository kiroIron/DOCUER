
@extends('layouts.app')
@section('content')

			<!-- Page Content -->
			<div class="content" >
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
							
							<!-- Login Tab Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="{{asset('assets/img/login-banner.png')}}" class="img-fluid" alt="Doccure Login">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Login <span>Doccure</span> DOCTORS</h3>
										</div>
										<form method="post" action="{{ route('logindoctor') }}">
                                        @csrf
											<div class="form-group form-focus">
												<input id="email" name="email" type="email"  class="form-control floating" @error('email') is-invalid @enderror value ="{{ old('email') }}" required>
												<label class="focus-label">Email</label>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
											</div>

											<div class="form-group form-focus">
												<input id="password" name="password" type="password" @error('password') is-invalid @enderror class="form-control floating" required>
												<label class="focus-label">Password</label>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
											</div>
											
											<div class=" container">
                                                <button type="submit" class="btn btn-primary btn-block btn-lg login-btn  ">
                                                {{ __('Login') }}
                                                </button>
											</div>
											
											<div class="text-center Don’t-have" >Don’t have an account? <a href="{{ route('doctorregister') }}">Register</a></div>
										</form>

									</div>
								</div>
							</div>
							<!-- /Login Tab Content -->
								
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->

@endsection