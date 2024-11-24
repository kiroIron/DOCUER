@extends('layouts.page')
@section('content')




	<!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Booking</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Booking</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

{{--  Profile Sidebar --}}
{{-- /Profile Sidebar --}}

<!-- Page Content -->
<div class="content">
    <div class="container">
    
        <div class="row">
            <div class="col-12">
            
                <div class="card">
                    <div class="card-body">
                        <div class="booking-doc-info">
                            <a href="doctor-profile.html" class="booking-doc-img">
                                <img src="{{$doctor->image}}" alt="User Image">
                            </a>
                            <div class="booking-info">
                                <h4><a href="doctor-profile.html">{{$doctor->name}}</a></h4>
                            
                                <p class="text-muted mb-3"><i class="fas fa-map-marker-alt"></i>{{$doctor->location}}</p>
                                <p class="doc-location">
                                    <i class="far fa-money-bill-alt"></i>{{$doctor->price}} 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <form  action="{{route('makeappintment',$doctor->id)}}" method="post">
                 @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                            <div class="card-body">
                                <h3>Choose your Appointment Date</h3>
                                <input name="date" type="date" class="form-control" required >
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                            <div class="card-body">
                                <h3>Choose your Appointment Time</h3>
                                <input name="time" type="time" class="form-control" required >
                            </div>
                        </div>
                        </div>
                    </div>
                    
                
                
                <!-- Schedule Widget -->
                
                <!-- /Schedule Widget -->
                
                <!-- Submit Section -->
                <div class="submit-section proceed-btn text-right">
                    <button type="submit" class="btn btn-primary submit-btn">Make Appointment</button>
                </div>
                <!-- /Submit Section -->
            </form>
            </div>
        </div>
    </div>

</div>		
<!-- /Page Content -->

@endsection