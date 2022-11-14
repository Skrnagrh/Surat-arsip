@extends('layouts.print')


@section('content')

<div class="row justify-content-center text-center m-0">
        <div class="col-md-12 m-2">
            <img src="/logo/Kop-surat-smi.png" width="100%" height="100%"> 
        </div>
        

    <div class="col-md-6 mb-3 mt-5">
        <h4 class="modal-title text-uppercase text-dark"><strong>Report Surat Keluar</strong></h4>
        <p><strong>Created By {{ auth()->user()->name }}</strong></p>
        <span id="date_time"></span>
    </div>

    <table class="table table-bordered table-sm m-2">
        <thead class="text-center">
            <tr class="text-dark">
                <th><strong>No</strong></th>
                <th><strong>Nama Petugas</strong></th>
                <th><strong>Nomor Surat</strong></th>
                <th><strong>Tujuan Surat</strong></th>
                <th><strong>Tanggal Surat</strong></th>
                <th><strong>Lampiran Surat</strong></th>
                <th><strong>Perihal Surat</strong></th>
                <th><strong>Alamat Surat</strong></th>
                <th><strong>Keterangan Surat</strong></th>
                <th><strong>Waktu Upload</strong></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($keluar as $keluar)
                <tr class="text-dark">
                    <td><strong>{{ $loop->iteration }}</strong></td>
                    <td>{{ $keluar->nama }}</td>
                    <td>{{ $keluar->nomor }}</td>
                    <td>{{ $keluar->tujuan }}</td>
                    <td>{{ $keluar->tanggal }}</td>
                    <td>{{ $keluar->lamp }}</td>
                    <td>{{ $keluar->prihal }}</td>
                    <td>{{ $keluar->alamat }}</td>
                    <td>{{ $keluar->keterangan }}</td>
                    <td>{{ $keluar->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

    <script> 
        window.print();
    </script>

<script type="text/javascript" src="/js/datetime.js"></script>
<script type="text/javascript">
    window.onload = date_time('date_time');
</script>
@endsection
