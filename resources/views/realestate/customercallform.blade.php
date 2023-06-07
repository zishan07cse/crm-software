@extends('realestate.layouts.master')

@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
        <h3 class="page-title">
            Dashboard
        </h3>
        </div>
        <div class="row grid-margin">
        <div class="col-12">
            <div class="card card-statistics">
            <div class="card-body">
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <div class="statistics-item">
                    <p>
                        <i class="icon-sm fa fa-user mr-2"></i>
                        New users
                    </p>
                    <h2>54000</h2>
                    <label class="badge badge-outline-success badge-pill">2.7% increase</label>
                    </div>
                    <div class="statistics-item">
                    <p>
                        <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                        Avg Time
                    </p>
                    <h2>123.50</h2>
                    <label class="badge badge-outline-danger badge-pill">30% decrease</label>
                    </div>
                    <div class="statistics-item">
                    <p>
                        <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                        Downloads
                    </p>
                    <h2>3500</h2>
                    <label class="badge badge-outline-success badge-pill">12% increase</label>
                    </div>
                    <div class="statistics-item">
                    <p>
                        <i class="icon-sm fas fa-check-circle mr-2"></i>
                        Update
                    </p>
                    <h2>7500</h2>
                    <label class="badge badge-outline-success badge-pill">57% increase</label>
                    </div>
                    <div class="statistics-item">
                    <p>
                        <i class="icon-sm fas fa-chart-line mr-2"></i>
                        Sales
                    </p>
                    <h2>9000</h2>
                    <label class="badge badge-outline-success badge-pill">10% increase</label>
                    </div>
                    <div class="statistics-item">
                    <p>
                        <i class="icon-sm fas fa-circle-notch mr-2"></i>
                        Pending
                    </p>
                    <h2>7500</h2>
                    <label class="badge badge-outline-danger badge-pill">16% decrease</label>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="row">
        
        </div>
    </div> 
    </div>    
  
    <!-- main-panel ends -->
@endsection