@extends('layouts.page')

@section('content')

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="/resources/views/welcome.blade.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">patient Dashboard</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="{{Auth::user()->image}}" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>{{Auth::user()->name}}</h3>
											<div class="patient-details">
												<h5><i class="fas fa-birthday-cake"></i> {{Auth::user()->dateofbirth}}</h5>
												<h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> {{Auth::user()->location}}</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li>
												<a href="{{route('home')}}">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="{{route('patient_doctors')}}">
													<i class="fas fa-user-md"></i>
													<span>Doctors</span>
												</a>
											</li>
											<li>
												<a href="{{route('patientprofile')}}">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="">
													<i class="fas fa-lock"></i>
													<span>Change Password</span>
												</a>
											</li>
											<li>
												<a href="{{route('logout')}}" onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
												<form id="logout-form" action="{{route('logout')}}" method="post" class="d-none">
													@csrf
												</form>
											</li>
										</ul>
									</nav>
								</div>

							</div>
						</div>
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="row row-grid">
							
							
							@foreach ($doctors as $doctor )
								
							
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="doc-img">
											<a href="doctor-profile.html">
												<img class="img-fluid" alt="User Image" src="{{$doctor->image}}">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="doctor-profile.html">{{$doctor->name}}</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">{{$doctor->special}}</p>
											
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> {{$doctor->location}}
												</li>
												
												<li>
													<i class="far fa-money-bill-alt"></i> {{$doctor->price}} <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="{{route('showdoctorprofle',$doctor->id)}}" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="{{route('patientbook',$doctor->id)}}" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach
		
								
							</div>
						</div>
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> -->
            <!-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div> -->
    <!-- </div>
</div> -->
@endsection
