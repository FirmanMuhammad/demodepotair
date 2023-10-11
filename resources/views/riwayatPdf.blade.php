<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riwayat Pemesanan</title>
    <style type="text/css">
        @font-face {
            font-family: "source_sans_proregular";
            src: local("Source Sans Pro"), url("fonts/sourcesans/sourcesanspro-regular-webfont.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;

        }

        body {
            font-family: "source_sans_proregular", Calibri, Candara, Segoe, Segoe UI, Optima, Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table thead th {
            padding: 1px 3px;
        }

        table td,
        th {
            border: 1px solid #999;
        }

        table td {
            padding: 1px 5px;
        }
    </style>
</head>

<body>
    <h1>Riwayat Pemesanan</h1>


    <table>
        <thead>
            <th>#</th>
            <th>Nama</th>
            <th>Alamat s</th>
            <th>No Hp</th>
            <th>Pembelian</th>
            <th>Jumlah</th>
            <th>Tagihan</th>
            <th>status</th>
        </thead>
        <tbody>
            @php
                $n = 1;
            @endphp
            @foreach ($data as $d)
                <tr>
                    <td>{{ $n++ }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->alamat }}</td>
                    <td>{{ $d->noHp }}</td>
                    <td>{{ $d->jenis }}</td>
                    <td>{{ $d->jumlah }}</td>
                    <td>{{ $d->harga }}</td>
                    <td>{{ $d->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
