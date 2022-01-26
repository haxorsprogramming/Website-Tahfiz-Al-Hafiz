@include('layout.headerPdf')

<div style="font-size: 12px;margin-top:20px;">
    ID Donasi : {{ substr($dataDonasi -> token, 0, 5) }}<br />
    Nama Donatur : {{ $dataDonasi -> nama_donatur }}<br />
    Tipe : {{ $dataDonasi -> tipe }}<br />
    Tanggal Pembayaran : {{ $dataDonasi -> tanggal_donasi }}
</div>
<hr/>
<div style="margin-top: 10px;font-size:12px">
    <strong>Status Pembayaran</strong><br />
    <h4>LUNAS</h4>
</div>
<hr/>
<div style="margin-top: 20px;font-size:12px">
    <strong>Batang Kuis, {{ date("d / m / Y") }}</strong><br />
    <br/>
    <br/>
    M. Agung Aditya<br/>
    (Pembina Rumah Tahfiz)
</div>

@include('layout.footerPdf')