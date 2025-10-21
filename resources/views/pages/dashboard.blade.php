@extends('layouts.app')

@section('title', 'Duralux || Dashboard')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div class="page-header-left d-flex align-items-center">
        <div class="page-header-title">
            <h5 class="m-b-10">Dashboard</h5>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Dashboard</li>
        </ul>
    </div>
    <div class="page-header-right ms-auto">
        <div class="page-header-right-items">
            <div class="d-flex d-md-none">
                <a href="javascript:void(0)" class="page-header-right-close-toggle">
                    <i class="feather-arrow-left me-2"></i>
                    <span>Back</span>
                </a>
            </div>
            <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                <a href="javascript:void(0);" class="btn btn-primary">
                    <i class="feather-plus me-2"></i>
                    <span>Add New</span>
                </a>
            </div>
        </div>
        <div class="d-md-none d-flex align-items-center">
            <a href="javascript:void(0)" class="page-header-right-open-toggle">
                <i class="feather-align-right fs-20"></i>
            </a>
        </div>
    </div>
</div>
<!-- End Page Header -->

<!-- Dashboard Content -->
<div class="main-content">
    <div class="row">
        <div class="col-xxl-3 col-md-6">
            <div class="card stretch stretch-full">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between mb-4">
                        <div class="content-left">
                            <span class="badge bg-soft-primary text-primary">Today's Sales</span>
                        </div>
                        <div class="content-right">
                            <span class="text-success">+12.5%</span>
                        </div>
                    </div>
                    <h2 class="mb-0">$24,567</h2>
                    <p class="fs-12 text-muted">vs $21,890 yesterday</p>
                </div>
            </div>
        </div>
        
        <div class="col-xxl-3 col-md-6">
            <div class="card stretch stretch-full">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between mb-4">
                        <div class="content-left">
                            <span class="badge bg-soft-warning text-warning">Total Orders</span>
                        </div>
                        <div class="content-right">
                            <span class="text-success">+8.3%</span>
                        </div>
                    </div>
                    <h2 class="mb-0">1,456</h2>
                    <p class="fs-12 text-muted">vs 1,347 yesterday</p>
                </div>
            </div>
        </div>
        
        <div class="col-xxl-3 col-md-6">
            <div class="card stretch stretch-full">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between mb-4">
                        <div class="content-left">
                            <span class="badge bg-soft-success text-success">New Customers</span>
                        </div>
                        <div class="content-right">
                            <span class="text-danger">-3.2%</span>
                        </div>
                    </div>
                    <h2 class="mb-0">321</h2>
                    <p class="fs-12 text-muted">vs 332 yesterday</p>
                </div>
            </div>
        </div>
        
        <div class="col-xxl-3 col-md-6">
            <div class="card stretch stretch-full">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between mb-4">
                        <div class="content-left">
                            <span class="badge bg-soft-danger text-danger">Total Revenue</span>
                        </div>
                        <div class="content-right">
                            <span class="text-success">+15.7%</span>
                        </div>
                    </div>
                    <h2 class="mb-0">$84,567</h2>
                    <p class="fs-12 text-muted">vs $73,098 last month</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Welcome Message -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Welcome to Duralux CRM Dashboard!</h4>
                    <p class="text-muted">
                        This is a Laravel-powered CRM dashboard template. The navigation, header, and footer are separated into reusable Blade components for easy maintenance.
                    </p>
                    <p class="text-muted mb-0">
                        To customize this dashboard, you can:
                    </p>
                    <ul class="text-muted">
                        <li>Copy your template assets (CSS, JS, images) to the <code>public/assets</code> folder</li>
                        <li>Update the content in <code>resources/views/pages/dashboard.blade.php</code></li>
                        <li>Modify navigation in <code>resources/views/partials/navigation.blade.php</code></li>
                        <li>Customize the header in <code>resources/views/partials/header.blade.php</code></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('assets/js/dashboard-init.min.js') }}"></script>
@endpush
