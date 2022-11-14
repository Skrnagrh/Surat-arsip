@extends('layouts.dashboard')

@section('content')

    <div id="layoutSidenav" class="m-4">
        <div id="layoutSidenav_content">


            {{-- back --}}
            <a href="/dashboard/semua" class="btn btn-sm btn-outline-success">
                <i class="bi bi-arrow-left"></i>
                <strong>Back</strong>
            </a>

            <a href="/admin/surat/masuk/{{ $masuk->id }}/edit" target="_blank" class="btn btn-outline-secondary btn-sm m-1"><i class="bi bi-printer-fill"></i> <strong>Print</strong>
            </a>

            {{-- Card --}}
            <div class="card shadow border-bottom-primary my-3">
                <div class="card-header p-0">
                    <a href="#suratmasuk" class="d-block card-header" data-toggle="collapse" role="button"
                        aria-expanded="true" aria-controls="suratmasuk">
                        <h2 class="m-0 font-weight-bold text-dark"><strong>S</strong>urat <strong>M</strong>asuk <strong>D</strong>ari
                            {{ $masuk->pengirim }}</h2>
                    </a>
                </div>

                <div class="row p-3" id="suratmasuk">
                    <div class="col-lg-5">
                        <table class="table lg-5">
                            <tbody class="text-dark">
                                <tr>
                                <tr>
                                    <th scope="row">Nomor Surat</th>
                                    <td>:</td>
                                    <td>{{ $masuk->nomor }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Pengirim</th>
                                    <td>:</td>
                                    <td>{{ $masuk->pengirim }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tanggal Surat</th>
                                    <td>:</td>
                                    <td>{{ $masuk->tanggal }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Lampiran Surat</th>
                                    <td>:</td>
                                    <td>{{ $masuk->lamp }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Perihal Surat</th>
                                    <td>:</td>
                                    <td>{{ $masuk->prihal }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat Surat</th>
                                    <td>:</td>
                                    <td>{{ $masuk->alamat }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Keterangan </th>
                                    <td>:</td>
                                    <td>{{ $masuk->keterangan }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Petugas</th>
                                    <td>:</td>
                                    <td>{{ $masuk->nama }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Waktu upload</th>
                                    <td>:</td>
                                    <td>{{ $masuk->created_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-7">
                        @if ($masuk->pdf)
                            <embed type="application/pdf" src="{{ asset('storage/' . $masuk->pdf) }}" width="100%"
                                height="100%" class="p-1" style="border-radius: 10px"></embed>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
    
@endsection
