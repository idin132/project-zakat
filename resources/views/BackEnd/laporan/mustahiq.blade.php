<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>‎ </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.1/dist/bootstrap-table.min.css">
</head>


<body style="background-color: white;" onload="window.print()">

    <style>
        .line-title {
            border: 0;
            border-style: inset;
            border-top: 1px solid #000;
        }
    </style>

    <div class="row">
        <div class="col-md-12"> 
            <div class="card">
                <div class="card-body">
                    <table style="width: 100%;">
                        <tr>
                            <td align="center">
                                <span style="line-height: 1.6; font-weight:bold;">
                                    Laporan Mustahiq
                                </span>
                            </td>
                        </tr>
                    </table>

                    <hr class="line-title">
                    <p align="center">
                        Laporan Data Mustahiq
                    </p>
                    <p align="center">
                        Periode Tanggal {{ $tgl_masuk }} sampai dengan {{ $tgl_selesai}}
                    </p>
                    </hr>

                    <table class="table" id="maintable">
                        <thead>
                            <tr style="font-size: 8px">
                                <th style="font-size: 8px">Nik</th>
                                <th style="font-size: 8px">Nama Mustahiq</th>
                                <th style="font-size: 8px">Jenis Kelamin</th>
                                <th style="font-size: 8px">Tanggal Lahir</th>
                                <th style="font-size: 8px">Alamat</th>
                                <th style="font-size: 8px">Agama</th>
                                <th style="font-size: 8px">Pekerjaan</th>
                                <th style="font-size: 8px">Penghasilan</th>
                                <th style="font-size: 8px">Jumlah Anak</th>
                                <th style="font-size: 8px">Ashnaf</th>
                                <th style="font-size: 8px">Tanggal Masuk</th>
                            </tr>
                        </thead>
                        @if($tgl_masuk == 1)
                        <tr>
                            <td colspan="6"><center><b>Data Tidak ada pada periode tanggal {{date('d F Y', strtotime($tgl_masuk))}}</b></center></td>
                        </tr>
                        @else
                        <tbody>
                            @foreach ($data as $key => $item)
                            <tr>
                                <td style="font-size: 8px">{{ $item->nik }}</td>
                                <td style="font-size: 8px">{{ $item->nama_mustahiq }}</td>
                                <td style="font-size: 8px">{{ $item->jenis_kelamin }}</td>
                                <td style="font-size: 8px">{{ $item->tgl_lahir }}</td>
                                <td style="font-size: 8px">{{ $item->alamat }}</td>
                                <td style="font-size: 8px">{{ $item->agama }}</td>
                                <td style="font-size: 8px">{{ $item->pekerjaan }}</td>
                                <td style="font-size: 8px">Rp. {{ number_format($item->penghasilan) }}</td>
                                <td style="font-size: 8px">{{ $item->jumlah_anak }}</td>
                                <td style="font-size: 8px">{{ $item->ashnaf }}</td>
                                <td style="font-size: 8px">{{ date('d F Y', strtotime($item->created_at)) }}</td>
                            </tr>
                            @endforeach
                        @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <title>‎ </title>
</body>
</html>
