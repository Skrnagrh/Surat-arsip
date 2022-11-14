<div class="modal fade" id="createsuratkeluar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-dark" id="exampleModalLabel"><strong>S</strong>urat <strong>K</strong>eluar</h3>
                <i class="bi bi-x-lg text-danger" data-bs-dismiss="modal" aria-label="Close"></i>
            </div>
            <div class="modal-body scrollable-near-moon">
                <form method="post" action="/dashboard/keluar" enctype="multipart/form-data" class="text-dark">
                    @csrf

                    <input type="hidden" class="form-control" id="nama" name="nama" value="{{ auth()->user()->name }}">

                    <div class="mb-3">
                        <label for="nomor" class="col-form-label"><strong>Nomor Surat</strong><span style="color: red">*</span></label>
                        <input type="text" class="form-control @error('nomor') is-invalid @enderror" id="nomor" name="nomor"
                            placeholder="Nomor" required autofocus value="{{ old('nomor') }}">
                            @error('nomor')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tujuan" class="col-form-label"><strong>Tujuan Surat</strong><span style="color: red">*</span></label>
                        <input type="text" class="form-control @error('tujuan') is-invalid @enderror" id="tujuan" name="tujuan" required value="{{ old('tujuan') }}"
                            placeholder="tujuan">
                            @error('tujuan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tanggal" class="col-form-label"><strong>Tanggal Surat</strong><span style="color: red">*</span></label>
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" required value="{{ old('tanggal') }}"
                            placeholder="Tanggal">
                            @error('tanggal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>

                    <div class="mb-3">
                        <label for="lamp" class="col-form-label"><strong>Lampiran</strong><span style="color: red">*</span></label>
                        <input type="text" class="form-control class="@error('lamp') is-invalid @enderror" id="lamp" name="lamp"
                            placeholder="Lampiran" required value="{{ old('lamp') }}">
                            @error('lamp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>

                    <div class="mb-3">
                        <label for="prihal" class="col-form-label"><strong>Perihal Surat</strong><span style="color: red">*</span></label>
                        <input type="text" class="form-control @error('prihal') is-invalid @enderror" id="prihal" name="prihal" required value="{{ old('prihal') }}"
                            placeholder="Perihal">
                            @error('prihal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="col-form-label"><strong>Alamat Surat</strong><span style="color: red">*</span></label>
                        <input type="text" class="form-control @error('pdf') is-invalid @enderror" id="alamat" name="alamat"
                            placeholder="Alamat" required value="{{ old('alamat') }}">
                            @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>
                   
                    <div class="mb-3">
                        <label for="keterangan" class="col-form-label"><strong>Keterangan</strong><span style="color: red">*</span></label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" required value="{{ old('keterangan') }}"
                            placeholder="Keterangan">
                            @error('keterangan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>

                    <div>
                        <label class="form-label " for="pdf"><strong>File Surat </strong>(Tipe file PDF dan Ukuran file Max. 5MB)<span style="color: red">*</span></label>
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
                        <a href="/dashboard/keluar" class="btn btn-sm btn-outline-danger mt-2">
                            <i class="bi bi-arrow-left"></i> <strong>Cancel</strong>
                        </a>
                        <button type="submit" class="btn btn-sm btn-outline-primary mt-2"><i class="bi bi-send"></i><strong> Save</strong></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
