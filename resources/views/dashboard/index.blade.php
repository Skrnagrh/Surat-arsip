@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <hr class="bg-primary">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="mb-0 text-dark"><strong>Dashboard By <a href="/dashboard/profile" class="text-decoration-none text-dark">{{ auth()->user()->name }}</strong></a></h2>
        </div>
        <hr class="bg-primary">
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}

        <div class="row">

            <!-- Pending Requests Card Example -->
            <div class="col-xl-6 col-md-4 mb-4">
                <a href="/dashboard/masuk" class="text-decoration-none">
                <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        <h4><strong>Surat Masuk</strong></h4>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-envelope fa-2x text-dark"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-6 col-md-4 mb-4">
                <a href="/dashboard/keluar" class="text-decoration-none">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    <h4><strong>Surat Keluar</strong></h4>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-envelope-open fa-2x text-dark"></i>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            @can('admin')
                <div class="col-xl-6 col-md-4 mb-4">
                    <a href="/dashboard/semua" class="text-decoration-none">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        <h4><strong>Semua Arsip</strong></h4>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-inbox fa-2x text-dark"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-6 col-md-4 mb-4">
                    <a href="/dashboard/datapetugas" class="text-decoration-none">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        <h4><strong>Data Petugas</strong></h4>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-dark"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            @endcan
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
