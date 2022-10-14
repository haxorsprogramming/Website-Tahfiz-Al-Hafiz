<!DOCTYPE html>
<html>

<head>
    <title>{{ $judul }} - {{ $dataSetting -> namaTahfiz  }}</title>
    <link rel="stylesheet" href="{{ asset('ladun') }}/dashboard/stisla/css/bootstrap.min.css">
</head>

<body style="margin-top: -40px;">

    <table style="width: 100%;border-bottom: 2px solid black;">
        <tr>
            <td style="width: 100px;">
                <img src="{{ asset('ladun/stisla/img/al-hafiz.png')}}" style="width: 100px;margin-bottom:10px;">
            </td>
            <td>
                <b>{{ $dataSetting -> namaTahfiz  }}</b><br />
                {{ $dataSetting -> alamat  }}<br />
                {{ $dataSetting -> kontak }}
            </td>
            <td style="text-align: right;">
                <h3><b>{{ $judul }}</b></h3>
            </td>
        </tr>
    </table>
