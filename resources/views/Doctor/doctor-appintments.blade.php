@extends('layouts.page')
@section('content')


							<!-- Profile Sidebar -->
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="{{Auth::guard('doctors')->user()->image}}" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>{{Auth::guard('doctors')->user()->name}}</h3>
											
											<div class="patient-details">
												<h5 class="mb-0">{{Auth::guard('doctors')->user()->special}}</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li>
												<a href="{{route('doctor.index')}}">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="appointments.html">
													<i class="fas fa-calendar-check"></i>
													<span>Appointments</span>
												</a>
											</li>
											
										
											<li>
												<a href="{{route('doctorprofile')}}">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
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
							<!-- /Profile Sidebar -->
@endsection