@extends('layouts.dashboard')

@section('content')
    <div id="layoutSidenav" class="m-3">
        <div id="layoutSidenav_content">

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow">

                        <div class="card-header p-0">
                            <a href="#editsuratmasuk" class="d-block card-header" data-toggle="collapse" role="button"
                                aria-expanded="true" aria-controls="editsuratmasuk">
                                <h2 class="m-0 font-weight-bold text-dark"><strong>E</strong>dit <strong>S</strong>urat <strong>M</strong>asuk <strong>D</strong>ari {{ $masuk->pengirim }}
                                </h2>
                            </a>
                        </div>


                        <form method="post" action="/dashboard/masuk/{{ $masuk->id }}" class="mb-3 p-3 text-dark"
                            id="editsuratmasuk" enctype="multipart/form-data">
                            @method('put')
                            @csrf

                            <input type="hidden" class="form-control" id="nama" name="nama" value="{{ old('nama', $masuk->nama) }}">

                            <div class="mb-3">
                                <label for="nomor" class="form-label"><strong>Nomor Surat</strong><span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="nomor" name="nomor" required autofocus value="{{ old('nomor', $masuk->nomor) }}">
                                @error('nomor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="pengirim" class="form-label"><strong>Pengirim Surat</strong><span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="pengirim" name="pengirim" required value="{{ old('pengirim', $masuk->pengirim) }}">
                                    @error('pengirim')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="tanggal" class="form-label"><strong>Tanggal Surat</strong><span style="color: red">*</span></label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" required autofocus
                                    value="{{ old('tanggal', $masuk->tanggal) }}">
                                    @error('tanggal')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="prihal" class="form-label"><strong>Prihal Surat</strong><span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="prihal" name="prihal" required autofocus
                                    value="{{ old('prihal', $masuk->prihal) }}">
                                    @error('prihal')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="lamp" class="form-label"><strong>Lampiran Surat</strong><span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="lamp" name="lamp" required autofocus
                                    value="{{ old('lamp', $masuk->lamp) }}">
                                    @error('lamp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="alamat" class="form-label"><strong>Alamat Surat</strong><span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="alamat" name="alamat" required autofocus
                                    value="{{ old('alamat', $masuk->alamat) }}">
                                    @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        
                            <div class="mb-3">
                                <label for="keterangan" class="form-label"><strong>Keterangan Surat</strong><span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan" required
                                    autofocus value="{{ old('keterangan', $masuk->keterangan) }}">
                                    @error('keterangan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="mb-0">
                                <label class="form-label " for="oldpdf"><strong>File Surat (Tipe file PDF dan Ukuran file Max. 5MB)</strong><span style="color: red">*</span></label>
                            </div>
                            <div class="mb-3">
                                <input type="file" class="@error('pdf') is-invalid @enderror"
                                    value="{{ $masuk->pdf }}" name="pdf">
                                @error('pdf')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="modal-footer">
                                <a href="/dashboard/masuk" class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-arrow-left"></i> <strong>Back</strong>
                                </a>
                                <button type="submit" class="btn btn-sm btn-outline-primary"><i class="bi bi-send"></i> <strong>Save</strong></button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
