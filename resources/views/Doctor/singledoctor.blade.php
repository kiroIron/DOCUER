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
                        <li class="breadcrumb-item active" aria-current="page">Doctor Profile</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Doctor Profile</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <div class="container">

        <!-- Doctor Widget -->
        <div class="card">
            <div class="card-body">
                <div class="doctor-widget">
                    <div class="doc-info-left">
                        <div class="doctor-img">
                            <img src="{{$doctor->image}}" class="img-fluid" alt="User Image">
                        </div>
                        <div class="doc-info-cont">
                            <h4 class="doc-name">{{$doctor->name}}</h4>
                            <p class="doc-speciality">{{$doctor->special}}</p>
                            
                            <div class="clinic-details">
                                <p class="doc-location"><i class="fas fa-map-marker-alt"></i>{{$doctor->location}}</p>
                                <p class="doc-location">
                                    <i class="far fa-money-bill-alt"></i>{{$doctor->price}}
                                </p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="doc-info-right">
                        
                        <div class="clinic-booking">
                            <a class="apt-btn" href="{{route('patientbook',$doctor->id)}}">Book Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Doctor Widget -->
        
        <!-- Doctor Details Tab -->
        <div class="card">
            <div class="card-body pt-0">
            
                <!-- Tab Menu -->
                <nav class="user-tabs mb-4">
                    <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" href="#doc_overview" data-toggle="tab">Overview</a>
                        </li>
                    
                    </ul>
                </nav>
                <!-- /Tab Menu -->
                
                <!-- Tab Content -->
                <div class="tab-content pt-0">
                
                    <!-- Overview Content -->
                    <div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
                        <div class="row">
                            <div class="col-md-12 col-lg-9">
                            
                                <!-- About Details -->
                                <div class="widget about-widget">
                                    <h4 class="widget-title">About Me</h4>
                                    <p>{{$doctor->bio}}</p>
                                </div>
                                <!-- /About Details -->
                            
                                

                            </div>
                        </div>
                    </div>
                    <!-- /Overview Content -->
                    
                
                </div>
            </div>
        </div>
        <!-- /Doctor Details Tab -->

    </div>
</div>		
<!-- /Page Content -->
@endsection