@extends('layouts.dashboard')

@section('content')
    <div id="layoutSidenav" class="m-3">
        <div id="layoutSidenav_content">

            <div class="row justify-content-center">
                <div class="col-md-10">

                    {{-- Card --}}
                    <div class="card shadow">

                        {{-- Card Header --}}
                        <div class="card-header p-0">
                            <a href="#editdatapetugas" class="d-block card-header" data-toggle="collapse" role="button"
                                aria-expanded="true" aria-controls="editdatapetugas">
                                <h2 class="m-0 font-weight-bold text-dark"><strong>E</strong>dit <strong>D</strong>ata <strong>P</strong>etugas
                                </h2>
                            </a>
                        </div>

                        {{-- Form --}}
                        <form method="post" action="/dashboard/datapetugas/{{ $user->id }}" class="mb-3 p-3" id="editdatapetugas" enctype="multipart/form-data">
                            @method('put')
                            @csrf

                            <div class="mb-3">
                                <label for="induk" class="form-label">induk<span style="color: red">*</span></label>
                                <input type="number" class="form-control" id="induk" name="induk" required autofocus
                                    value="{{ old('induk', $user->induk) }}">
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">name<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" required
                                    value="{{ old('name', $user->name) }}">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">email<span style="color: red">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" required value="{{ old('email', $user->email) }}">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">password<span style="color: red">*</span></label>
                                <input type="password" class="form-control" id="password" name="password" required >
                            </div>


                            <div class="modal-footer">
                                <a href="/dashboard/datapetugas" class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-arrow-left"></i> <strong>Back</strong>
                                </a>
                                <button type="submit" class="btn btn-sm btn-outline-primary"><i class="bi bi-send"></i> Save</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
