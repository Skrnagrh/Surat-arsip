@extends('layouts.dashboard')

@section('content')
    <div id="layoutSidenav" class="m-3">
        <div id="layoutSidenav_content">

            <div class="table-responsive col-lg-12 mr-3">


                <div class="justify-content-between">
                    <a type="create" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#createsuratkeluar" data-bs-whatever="@mdo"><i class="bi bi-bookmark-plus"></i> <strong>Buat Baru</strong></a>
                    <a href="/surat/keluar/print" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                            class="fas fa-print fa-sm"></i> <strong>Print Report</strong></a>
                    {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
                </div>

                @include('dashboard.keluar.create')

                <div class="card shadow mb-5 mt-2">
                    <div class="card-header p-0">
                        <a href="#suratkeluar" class="d-block card-header" data-toggle="collapse" role="button"
                            aria-expanded="true" aria-controls="suratkeluar">
                            <h2 class="m-0 font-weight-bold text-dark"><strong>S</strong>urat <strong>K</strong>eluar</h2>
                        </a>
                    </div>
                    <div class="collapse show" id="suratkeluar">
                        <div class="card-body border-bottom-primary">

                            <div class="row justify-content-end mb-2">
                                <div class="col-md-3">
                                  <form action="/dashboard/keluar">
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Search Surat Keluar" name="searchkeluar" value="{{ request('searchkeluar') }}">
                                      <button class="btn btn-sm btn-primary" type="submit"><i class="bi bi-search"></i></button>
                                    </div>
                                  </form>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered tebel-sm text-dark" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                            <tr>
                                <th><strong>No</strong></th>
                                <th><strong>Nomor Surat</strong></th>
                                <th><strong>Tujuan</strong></th>
                                <th><strong>Tanggal Surat</strong></th>
                                <th><strong>Perihal Surat</strong></th>
                                <th><strong>Keterangan</strong></th>
                                <th><strong>Action</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($keluar1 as $keluar)
                                <tr>
                                    <td><strong>{{ $loop->iteration }}</strong></td>
                                    <td>{{ $keluar->nomor }}</td>
                                    <td>{{ $keluar->tujuan }}</td>
                                    <td>{{ $keluar->tanggal }}</td>
                                    <td>{{ $keluar->prihal }}</td>
                                    <td>{{ $keluar->keterangan }}</td>
                                    <td>
                                        <a href="/dashboard/keluar/{{ $keluar->id }}" class="btn btn-outline-success btn-sm m-1">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="/dashboard/keluar/{{ $keluar->id }}/edit" class="btn btn-outline-warning btn-sm m-1">
                                            <i class="bi bi-pen"></i>
                                        </a>
                                        <form action="/dashboard/keluar/{{ $keluar->id }}" method="post"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-outline-danger btn-sm m-1"
                                                onclick="return confirm('Are you sure?')"><i
                                                    class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mx-2">
                            {{ $keluar1->links() }}
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>

    @include('sweetalert::alert')

@endsection
