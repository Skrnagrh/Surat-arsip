@extends('layouts.dashboard')

@section('content')
    <div id="layoutSidenav" class="m-3">
        <div id="layoutSidenav_content">

            <div class="table-responsive col-lg-12 mr-3">

                {{-- masuk --}}
                <div class="card shadow mb-5 mt-2">
                    <div class="card-header p-0">
                        <a href="#suratmasuk" class="d-block card-header" data-toggle="collapse" role="button"
                            aria-expanded="true" aria-controls="suratmasuk">
                            <h2 class="m-0 font-weight-bold text-dark"><strong>S</strong>urat <strong>M</strong>asuk</h2>
                        </a>
                    </div>

                    <div class="collapse show" id="suratmasuk">
                        <div class="card-body border-bottom-primary">

                            <div class="row justify-content-end mb-2 mx-2">
                                    <a href="/admin/surat/masuk" target="_blank" class="btn btn-outline-secondary mx-1"><i class="bi bi-printer-fill"></i> <strong>Print Report</strong></a>
                                  <form action="/dashboard/semua">
                                    <div class="input-group mx-1">
                                      <input type="text" class="form-control" placeholder="Search Surat Masuk" name="searchmasuk" value="{{ request('searchmasuk') }}">
                                      <button class="btn btn-sm btn-primary" type="submit"><i class="bi bi-search"></i></button>
                                    </div>
                                  </form>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="text-dark">
                                        <tr>
                                            <th><strong>No</strong></th>
                                            <th><strong>Nama Petugas</strong></th>
                                            <th><strong>Nomor Surat</strong></th>
                                            <th><strong>Pengirim</strong></th>
                                            <th><strong>Tanggal Surat</strong></th>
                                            <th><strong>Perihal Surat</strong></th>
                                            {{-- <th><strong>Keterangan Surat</strong></th> --}}
                                            <th><strong>Action</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-dark">
                                        @foreach ($masuk1 as $masuk)
                                            <tr>
                                                <td class="text-center"><strong>{{ $loop->iteration }}</strong></td>
                                                <td>{{ $masuk->nama }}</td>
                                                <td>{{ $masuk->nomor }}</td>
                                                <td>{{ $masuk->pengirim }}</td>
                                                <td>{{ $masuk->tanggal }}</td>
                                                <td>{{ $masuk->prihal }}</td>
                                                {{-- <td>{{ $masuk->keterangan }}</td> --}}
                                                <td>
                                                    <a href="/admin/surat/masuk/{{ $masuk->id }}"
                                                        class="btn btn-outline-success btn-sm m-1"><i class="bi bi-eye"></i>
                                                    </a>
                                                    <a href="/admin/surat/masuk/{{ $masuk->id }}/edit" target="_blank" class="btn btn-outline-secondary btn-sm m-1"><i class="bi bi-printer-fill"></i>
                                                    </a>
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

                {{-- keluar --}}
                <div class="card shadow mb-5 mt-2">
                    <div class="card-header p-0">
                        <a href="#suratkeluar" class="d-block card-header" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="suratkeluar">
                            <h2 class="m-0 font-weight-bold text-dark"><strong>S</strong>urat <strong>K</strong>eluar</h2>
                        </a>
                    </div>
                    <div class="collapse show" id="suratkeluar">
                        <div class="card-body border-bottom-primary">

                            <div class="row justify-content-end mb-2 mx-2">
                                    <a href="/admin/surat/keluar" target="_blank" class="btn  btn-outline-secondary mx-1"><i class="bi bi-printer-fill"></i> <strong>Print Report</strong></a>
                                    <form action="/dashboard/semua">
                                        <div class="input-group mx-1">
                                          <input type="text" class="form-control" placeholder="Search Surat Keluar" name="searchkeluar" value="{{ request('searchkeluar') }}">
                                          <button class="btn btn-sm btn-primary" type="submit"><i class="bi bi-search"></i></button>
                                        </div>
                                      </form>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="text-dark">
                            <tr>
                                <th><strong>No</strong></th>
                                <th><strong>Nama Petugas</strong></th>
                                <th><strong>Nomor Surat</strong></th>
                                <th><strong>Tujuan</strong></th>
                                <th><strong>Tanggal Surat</strong></th>
                                <th><strong>Perihal Surat</strong></th>
                                {{-- <th><strong>Keterangan</strong></th> --}}
                                <th><strong>Action</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($keluar1 as $keluar)
                                <tr>
                                    <td><strong>{{ $loop->iteration }}</strong></td>
                                    <td>{{ $keluar->nama }}</td>
                                    <td>{{ $keluar->nomor }}</td>
                                    <td>{{ $keluar->tujuan }}</td>
                                    <td>{{ $keluar->tanggal }}</td>
                                    <td>{{ $keluar->prihal }}</td>
                                    {{-- <td>{{ $keluar->keterangan }}</td> --}}
                                    <td>
                                        <a href="/admin/surat/keluar/{{ $keluar->id }}"
                                            class="btn btn-outline-success btn-sm m-1"><i class="bi bi-eye"></i>
                                        </a>
                                        <a href="/admin/surat/keluar/{{ $keluar->id }}/edit" target="_blank" class="btn btn-outline-secondary btn-sm m-1"><i class="bi bi-printer-fill"></i>
                                        </a>
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
