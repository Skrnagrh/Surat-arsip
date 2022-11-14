<!DOCTYPE html>
<html  lang="en">

<head>
    <title>Export Surat Masuk</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="data-tables datatable-dark mt-3">

            <table class="table table-bordered table-sm">
                <thead class="text-center">
                    <tr class="text-dark">
                        <th><strong>No</strong></th>
                        <th><strong>Nomor Surat</strong></th>
                        <th><strong>Pengirim</strong></th>
                        <th><strong>Tanggal Surat</strong></th>
                        <th><strong>Lampiran Surat</strong></th>
                        <th><strong>Perihal Surat</strong></th>
                        <th><strong>Alamat Surat</strong></th>
                        <th><strong>Keterangan</strong></th>
                        <th><strong>Waktu Upload</strong></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($masuk as $masuk)
                        <tr class="text-dark">
                            <td><strong>{{ $loop->iteration }}</strong></td>
                            <td>{{ $masuk->nomor }}</td>
                            <td>{{ $masuk->pengirim }}</td>
                            <td>{{ $masuk->tanggal }}</td>
                            <td>{{ $masuk->lamp }}</td>
                            <td>{{ $masuk->prihal }}</td>
                            <td>{{ $masuk->alamat }}</td>
                            <td>{{ $masuk->keterangan }}</td>
                            <td>{{ $masuk->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#mauexport').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>



</body>

</html>




