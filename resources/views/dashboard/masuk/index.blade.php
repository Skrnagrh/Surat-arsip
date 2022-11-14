@extends('layouts.dashboard')

@section('content')
    <div id="layoutSidenav" class="m-3">
        <div id="layoutSidenav_content">

            <div class="table-responsive col-lg-12 mr-3">

                <div class="justify-content-between">
                    <a type="create" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#mocreat"
                        data-bs-whatever="@mdo"><i class="bi bi-bookmark-plus"></i> <strong>Buat Baru</strong></a>
                    <a href="/surat/masuk/print" target="_blank"
                        class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-print fa-sm"></i>
                        <strong>Print Report</strong></a>
                    {{-- <a href="/excel/masuk" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> <strong>Export Excel</strong></a> --}}
                </div>


                @include('dashboard.masuk.create')

                <div class="card shadow mb-5 mt-2">
                    <div class="card-header p-0">
                        <a href="#suratmasuk" class="d-block card-header" data-toggle="collapse" role="button"
                            aria-expanded="true" aria-controls="suratmasuk">
                            <h2 class="m-0 font-weight-bold text-dark"><strong>S</strong>urat <strong>M</strong>asuk</h2>
                        </a>
                    </div>

                    <div class="collapse show" id="suratmasuk">
                        <div class="card-body border-bottom-primary">

                            <div class="row justify-content-end mb-2">
                                <div class="col-md-3">
                                    <form action="/dashboard/masuk">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search Surat Masuk"
                                                name="searchmasuk" value="{{ request('searchmasuk') }}">
                                            <button class="btn btn-sm btn-primary" type="submit"><i
                                                    class="bi bi-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered tebel-sm text-dark" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th><strong>No</strong></th>
                                            <th><strong>Nomor Surat</strong></th>
                                            <th><strong>Pengirim</strong></th>
                                            <th><strong>Tanggal Surat</strong></th>
                                            <th><strong>Perihal Surat</strong></th>
                                            <th><strong>Alamat Surat</strong></th>
                                            <th><strong>Action</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-dark">
                                        @foreach ($masuk1 as $masuk)
                                            <tr>
                                                <td class="text-center"><strong>{{ $loop->iteration }}</strong></td>
                                                <td>{{ $masuk->nomor }}</td>
                                                <td>{{ $masuk->pengirim }}</td>
                                                <td>{{ $masuk->tanggal }}</td>
                                                <td>{{ $masuk->prihal }}</td>
                                                <td>{{ $masuk->alamat }}</td>
                                                <td>
                                                    <a href="/dashboard/masuk/{{ $masuk->id }}"
                                                        class="btn btn-outline-success btn-sm m-1"><i class="bi bi-eye"></i>
                                                    </a>
                                                    <a href="/dashboard/masuk/{{ $masuk->id }}/edit"
                                                        class="btn btn-outline-warning btn-sm m-1"><i class="bi bi-pen"></i>
                                                    </a>
                                                    <form action="/dashboard/masuk/{{ $masuk->id }}" method="post"
                                                        class="d-inline" id="delete-mail">
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

                                <div class="pagination justify-content-end mx-2">
                                    {{ $masuk1->links() }}
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
