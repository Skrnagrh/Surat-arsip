@extends('layouts.dashboard')

@section('content')
    <div id="layoutSidenav" class="m-3">
        <div id="layoutSidenav_content">

            <div class="row justify-content-center m-5">
                <div class="col-md-5">
                    <div class="card border-primary shadow p-2 m-2">
                        <div class="row justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30%" height="20%"  fill="currentColor" class="bi bi-person-fill text-dark" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>

                        </div>

                        <div class="row justify-content-center mt-3">
                            <div class="col-md-12">
                                <h5 class="text-center text-dark text-uppercase"><strong>{{ auth()->user()->name }}</strong></h5>
                            </div>
                            <div class="col-md-12">
                                <p class="text-center text-dark" style="margin-top: -1%">{{ auth()->user()->induk }}</p>
                            </div>
                            <div class="col-md-12">
                                <p class="text-center text-dark" style="margin-top: -4%">{{ auth()->user()->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-5 mt-2">
                    <div class="card border-primary shadow">
                        <div class="card-body">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item mt-2" href="/dashboard/profile/{{ auth()->user()->id }}/edit">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Edit Profile
                            </a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    @include('sweetalert::alert')
@endsection
