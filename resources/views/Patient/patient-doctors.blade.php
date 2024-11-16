@extends('layouts.page')
@section('content')
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="assets/img/patients/patient.jpg" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>Richard Wilson</h3>
											<div class="patient-details">
												<h5><i class="fas fa-birthday-cake"></i> 24 Jul 1983, 38 years</h5>
												<h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Newyork, USA</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li>
												<a href="patient-dashboard.html">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="doctors.html">
													<i class="fas fa-user-md"></i>
													<span>Doctors</span>
												</a>
											</li>
											<li>
												<a href="profile-settings.html">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="change-password.html">
													<i class="fas fa-lock"></i>
													<span>Change Password</span>
												</a>
											</li>
											<li>
												<a href="index-2.html">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>

							</div>
						</div>
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="row row-grid">
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="doc-img">
											<a href="doctor-profile.html">
												<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-01.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="doctor-profile.html">Ruby Perrin</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
											
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Florida, USA
												</li>
												
												<li>
													<i class="far fa-money-bill-alt"></i> $300 - $1000 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking.html" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="doc-img">
											<a href="doctor-profile.html">
												<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-02.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="doctor-profile.html">Darren Elder</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">BDS, MDS - Oral & Maxillofacial Surgery</p>
											
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Newyork, USA
												</li>
												
												<li>
													<i class="far fa-money-bill-alt"></i> $50 - $300 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking.html" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="doc-img">
											<a href="doctor-profile.html">
												<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-03.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="doctor-profile.html">Deborah Angel</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
											
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Georgia, USA
												</li>
												
												<li>
													<i class="far fa-money-bill-alt"></i> $100 - $400 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking.html" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="doc-img">
											<a href="doctor-profile.html">
												<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-04.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="doctor-profile.html">Sofia Brient</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">MBBS, MS - General Surgery, MCh - Urology</p>
										
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Louisiana, USA
												</li>
											
												<li>
													<i class="far fa-money-bill-alt"></i> $150 - $250 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking.html" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="doc-img">
											<a href="doctor-profile.html">
												<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-05.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="doctor-profile.html">Marvin Campbell</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">MBBS, MD - Ophthalmology, DNB - Ophthalmology</p>
											
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Michigan, USA
												</li>
												
												<li>
													<i class="far fa-money-bill-alt"></i> $50 - $700 
													<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking.html" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="doc-img">
											<a href="doctor-profile.html">
												<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-06.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="doctor-profile.html">Katharine Berthold</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">MS - Orthopaedics, MBBS, M.Ch - Orthopaedics</p>
										
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Texas, USA
												</li>
												
												<li>
													<i class="far fa-money-bill-alt"></i> $100 - $500 
													<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking.html" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="doc-img">
											<a href="doctor-profile.html">
												<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-07.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="doctor-profile.html">Linda Tobin</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">MBBS, MD - General Medicine, DM - Neurology</p>
											
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Kansas, USA
												</li>
											
												<li>
													<i class="far fa-money-bill-alt"></i> $100 - $1000 
													<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking.html" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="doc-img">
											<a href="doctor-profile.html">
												<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-08.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="doctor-profile.html">Paul Richard</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">MBBS, MD - Dermatology , Venereology & Lepros</p>
											
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> California, USA
												</li>
												
												<li>
													<i class="far fa-money-bill-alt"></i> $100 - $400 
													<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking.html" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="doc-img">
											<a href="doctor-profile.html">
												<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-09.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="doctor-profile.html">Dr. John Gibbs</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
											
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Oklahoma, USA
												</li>
												
												<li>
													<i class="far fa-money-bill-alt"></i> $500 - $2500 
													<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking.html" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="doc-img">
											<a href="doctor-profile.html">
												<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-10.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="doctor-profile.html">Dr. Olga Barlow</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
										
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Montana, USA
												</li>
											
												<li>
													<i class="far fa-money-bill-alt"></i> $75 - $250 
													<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking.html" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="doc-img">
											<a href="doctor-profile.html">
												<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-11.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="doctor-profile.html">Dr. Julia Washington</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">MBBS, MD - General Medicine, DM - Endocrinology</p>
											
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Oklahoma, USA
												</li>
												
												<li>
													<i class="far fa-money-bill-alt"></i> $275 - $450 
													<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking.html" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="doc-img">
											<a href="doctor-profile.html">
												<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-12.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="doctor-profile.html">Dr. Shaun Aponte</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">MBBS, MS - ENT, Diploma in Otorhinolaryngology (DLO)</p>
											
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Indiana, USA
												</li>
												
												<li>
													<i class="far fa-money-bill-alt"></i> $150 - $350 
													<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking.html" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								
							</div>
						</div>
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
@endsection