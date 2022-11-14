
<div class="modal fade" id="mocreat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-dark" id="exampleModalLabel"><strong>S</strong>urat <strong>M</strong>asuk</h3>
                <i class="bi bi-x-lg text-danger" data-bs-dismiss="modal" aria-label="Close"></i>
            </div>
            <div class="modal-body">
                <form method="post" action="/dashboard/masuk" class="mb-3 text-dark" enctype="multipart/form-data"
                    id="createsuratmasuk">
                    @csrf

                    <input type="hidden" class="form-control" id="nama" name="nama" value="{{ auth()->user()->name }}">

                    <div class="mb-3">
                        <label for="nomor" class="form-label text-dark"><strong>Nomor Surat</strong><span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="nomor" name="nomor" required autofocus value="{{ old('nomor') }}" placeholder="Nomor Surat">
                        @error('nomor')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pengirim" class="form-label text-dark"><strong>Pengirim Surat</strong><span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="pengirim" name="pengirim" required value="{{ old('pengirim') }}" placeholder="Pengirim">
                            @error('pengirim')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tanggal" class="form-label text-dark"><strong>Tanggal Surat</strong><span style="color: red">*</span></label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required value="{{ old('tanggal') }}">
                        @error('tanggal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="prihal" class="form-label text-dark"><strong>Perihal Surat</strong><span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="prihal" name="prihal" required 
                            value="{{ old('prihal') }}" placeholder="Perihal Surat">
                            @error('prihal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="lamp" class="form-label text-dark"><strong>Lampiran Surat</strong><span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="lamp" name="lamp" required  value="{{ old('lamp') }}" placeholder="Lampiran Surat">
                        @error('lamp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="alamat" class="form-label text-dark"><strong>Alamat Surat</strong><span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required  value="{{ old('alamat') }}" placeholder="Alamat">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="keterangan" class="form-label text-dark"><strong>Keterangan Surat</strong><span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" required value="{{ old('keterangan') }}" placeholder="Keterangan">
                        @error('keterangan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <label class="form-label text-dark " for="pdf"><strong>File Surat</strong> (Tipe file PDF dan Ukuran file Max. 5MB)<span style="color: red">*</span></label>
                    </div>
                    <div class="mb-3">
                        <input type="file" class="@error('pdf') is-invalid @enderror" id="pdf" name="pdf">
                        @error('pdf')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="modal-footer">
                        <a href="/dashboard/masuk" class="btn btn-sm btn-outline-danger">
                            <i class="bi bi-arrow-left"></i> <strong>Cancel</strong>
                        </a>
                        <button type="submit" class="btn btn-sm btn-outline-primary"><i class="bi bi-send"></i><strong> Save</strong></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
