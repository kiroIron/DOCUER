@extends('layouts.page')
@push('css')
<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
		<!-- Datetimepicker CSS -->
		
<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">
		
<!-- Select2 CSS -->
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">

<!-- Main CSS -->
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
@endpush
@section('content')
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Profile Settings</h2>
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
												<h5><i class="fas fa-birthday-cake"></i> {{Auth::user()->dateofbirth}}, <span id="age"></span>years</h5>
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
@push('js')
<script>
	function calcualteAge(dateOfBirth){
		const today = new Date ();
		const birthDate = new Date(dateOfBirth);
		let age = today.getFullYear() - birthDate.getMonth();
		const monthDifference =today.getMonth() - birthDate.getMonth();
		if(monthDifference < 0 || (monthDifference == 0 && today.getDate() < birthDate.getDate())) {
			age--;
		}
		return age;
	}
	$(document).ready(function (){
		$('#age').text(calcualteAge(new Data('{{Auth::user()->dateofbirth}}')));
	});
</script>
@endpush
							</div>
						</div>
                        <div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body">
									
									<!-- Profile Settings Form -->
									<form action="{{route('updateprofile',$user->id)}}" method="post" enctype="multipart/form-data" class=" container  justify-content-center ">
                                    @csrf
									@method('put')
										<div class="row form-row">
											<div class="col-12 col-md-12">
												<div class="form-group">
													<div class="change-avatar">
														<div class="profile-img">
															<img src="{{Auth::user()->image}}" alt="User Image">
														</div>
														<div class="upload-img">
															<div class="change-photo-btn">
																<span><i class="fa fa-upload"></i> Upload Photo</span>
																<input name="image" type="file" class="upload">
															</div>
															<small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
														</div>
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label>Name</label>
														<input readonly name="name" type="text" class="form-control" value="{{Auth::user()->name}}">
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="form-group">
													<label>Email</label>
														<input name="eamil" readonly type="eamil" class="form-control" value="{{Auth::user()->email}}">
													</div>
												</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Date of Birth</label>
													
														<input name="dateofbirth" type="date" class="form-control" value="{{Auth::user()->dateofbirth}}">

													{{--  class="cal-icon" --}}
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Blood Group</label>
													<select name="booldgroup" class="form-control select">
														<option selected disabled>select blood group</option>
														@foreach ($bloodgroups as $bloodgroup)
														<option @selected(Auth::user()->bloodgroup == $bloodgroup)>{{ $bloodgroup }}</option>
													@endforeach
												</select>
												</div>
											</div>
										

											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Mobile</label>
													<input name="mobile" type="text" value="{{Auth::user()->mobile}}" class="form-control">
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
												<label>Address</label>
													<input name="location" type="text" class="form-control" value="{{Auth::user()->location}}">
												</div>
											</div>
											
											
										</div>
										<div class="submit-section ">
											<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
										</div>
									</form>
									<!-- /Profile Settings Form -->
									
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
   
			

			@push('js')
 
			


	        <!-- Select2 JS -->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
		
		<!-- Datetimepicker JS -->
		<script src="{{asset('assets/js/moment.min.js')}}"></script>
		<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>

		<!-- Sticky Sidebar JS -->
        <script src="{{asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
        <script src="{{asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>
			@endpush


@endsection