<div class="modal fade" id="mocreat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-dark" id="exampleModalLabel"><strong>R</strong>egister <strong>A</strong>dmin <strong>B</strong>aru</h3>
                <i class="bi bi-x-lg text-danger" data-bs-dismiss="modal" aria-label="Close"></i>
            </div>
            <div class="modal-body">
                <form method="post" action="/dashboard/datapetugas" class="mb-3" enctype="multipart/form-data"
                    id="createsuratmasuk">
                    @csrf

                    <div class="mb-3">
                        <label for="induk" class="form-label text-dark">Nomor Induk Karyawan<span style="color: red">*</span></label>
                        <input type="number" class="form-control" id="induk" name="induk" required autofocus value="{{ old('induk') }}" placeholder="Nomor Induk Karyawan">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label text-dark">Full Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" required autofocus value="{{ old('name') }}" placeholder="Full Name">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label text-dark">Email Addres<span style="color: red">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" required
                            value="{{ old('email') }}" placeholder="Email Addres">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label text-dark">Password<span style="color: red">*</span></label>
                        <input type="password" class="form-control" id="password" name="password" required autofocus value="{{ old('password') }}" placeholder="Password">
                    </div>

                    <div class="modal-footer">
                        <a href="/dashboard/datapetugas" class="btn btn-sm btn-outline-danger">
                            <i class="bi bi-arrow-left"></i> <strong>Cancel</strong>
                        </a>
                        <button type="submit" class="btn btn-sm btn-outline-primary"><i class="bi bi-send"></i><strong> Save</strong></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
