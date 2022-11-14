@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">

                    <form action="/dashboard/profile/{{ auth()->user()->id }}" method="post" enctype="multipart/form-data"
                        class="text-dark">
                        @method('put')
                        @csrf

                        <div class="card-body">
                            <div class="mb-3">
                                <label for="induk" class="form-label"><strong>Nomor Induk Karyawan</strong> <span
                                        style="color: red">*</span></label>
                                <input name="induk" type="text"
                                    class="form-control @error('induk') is-invalid @enderror" id="induk"
                                    placeholder="induk" value="{{ auth()->user()->induk }}" readonly
                                    @error('induk')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                    </div>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label"><strong>Full Name</strong> <span style="color: red">*</span></label>
                                <input name="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                    placeholder="Name" value="{{ auth()->user()->name }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label"><strong>Email Address</strong> <span style="color: red">*</span></label>
                                <input name="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    placeholder="Email" value="{{ auth()->user()->email }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="password" class="form-label"><strong>Password </strong><span style="color: red">*</span></label>
                                <input name="password" type="password" class="form-control" id="password"
                                    placeholder="Password">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <a class="btn btn-sm btn-outline-danger" href="/dashboard/profile"><i
                                    class="bi bi-x-circle-fill"></i> <strong>Cancel</strong></a>
                            <button class="btn btn-sm btn-outline-success" type="submit"><i class="bi bi-save"></i>
                                <strong>Save</strong></button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
