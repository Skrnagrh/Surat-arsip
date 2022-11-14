@extends('layouts.main')


@section('content')
    
<div class="container my-4">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                        <div class="col-lg-12 p-5">
                                <div class="text-center">
                                    <img src="/logo/PT-Samudra-marine-Indonesia.png" width="30%" height="40%">
                                    <h1 class="h4 text-dark my-3">
                                    <strong>PT. SAMUDRA MARINE INDONESIA</strong>
                                    </h1>
                                    <hr>
                                </div>

                                <form action="/" method="post" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="email" class="text-dark"><strong>Email Address</strong></label>
                                        <input type="email" class="form-control"
                                            id="email" name="email" placeholder="Enter Email Address..." >
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="text-dark"><strong>Password</strong></label>
                                        <input type="password" class="form-control "
                                            id="password" name="password" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                        </div>
                </div>
            </div>

        </div>

    </div>

</div>
    @include('sweetalert::alert')
    @endsection
