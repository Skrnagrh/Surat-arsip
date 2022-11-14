@extends('layouts.main')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="card col-md-6 o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form action="/register" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                                </div>

                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-block">
                                    Register Account
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="/">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @endsection
