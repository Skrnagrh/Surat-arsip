@extends('layouts.dashboard')

@section('content')
    <div id="layoutSidenav" class="m-3">
        <div id="layoutSidenav_content">

            <div class="table-responsive col-lg-12 mr-3">

                <div class="row">
                    <div class="col-md-2 mb-2">
                        <div class="card shadow">
                            <button type="create" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#mocreat"
                                data-bs-whatever="@mdo"><i class="bi bi-bookmark-plus"></i> <strong>Buat Baru</strong></button>
                        </div>
                    </div>
                </div>

                @include('dashboard.datapetugas.create')


                <div class="card shadow mb-5 mt-2">
                    <div class="card-header p-0">
                        <a href="#suratuser" class="d-block card-header" data-toggle="collapse" role="button"
                            aria-expanded="true" aria-controls="suratuser">
                            <h2 class="m-0 font-weight-bold text-dark"><strong>D</strong>ata <strong>P</strong>etugas</h2>
                        </a>
                    </div>

                    <div class="collapse show" id="suratuser">
                        <div class="card-body border-bottom-primary">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="text-dark">
                                        <tr>
                                            <th class="text-center"><strong>No</strong></th>
                                            <th><strong>NIK</strong></th>
                                            <th><strong>Nama</strong></th>
                                            <th><strong>Email</strong></th>
                                            <th><strong>Action</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-dark">
                                        @foreach ($user1 as $user)
                                            <tr>
                                                <td class="text-center"><strong>{{ $loop->iteration }}</strong></td>
                                                <td>{{ $user->induk }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    <a href="/dashboard/datapetugas/{{ $user->id }}/edit"
                                                        class="btn btn-outline-warning btn-sm m-1"><i class="bi bi-pen"></i>
                                                    </a>
                                                    <form action="/dashboard/datapetugas/{{ $user->id }}" method="post"
                                                        class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-outline-danger btn-sm m-1" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="pagination justify-content-end mx-2">
                                    {{ $user1->links() }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('sweetalert::alert')
@endsection
