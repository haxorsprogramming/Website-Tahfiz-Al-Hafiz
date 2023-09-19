@include('layout.headerPdf')

<div style="font-size: 12px;margin-top:20px;">
    Nama santri : {{ $dataSpp -> santriData -> nama }}<br />
    ID Santri : {{ $dataSpp -> id_santri }}<br />
    Kafilah : {{ $dataSpp -> kafilahData($dataSpp -> santriData -> id_kafilah) -> nama }}<br />
</div>

<div style="margin-top: 20px;font-size:12px">
    <strong>Informasi pembayaran SPP</strong><br />
    <table class="table" border="1">
        <thead>
            <tr>
                <td>Id Pembayaran</td>
                <td>Tanggal Pembayaran</td>
                <td>Periode Pembayaran</td>
                <td>Total Pembayaran</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ substr($dataSpp -> token_pembayaran, 0, 5) }}</td>
                <td>{{ $dataSpp -> tanggalPembayaran($dataSpp -> created_at) }}</td>
                <td>{{ $dataSpp -> bulan }} / {{ $dataSpp -> tahun }}</td>
                <td>Rp. {{ number_format($dataSpp -> total) }}</td>
            </tr>
        </tbody>
    </table>
</div>

<div style="margin-top: 10px;font-size:12px">
    <strong>Status Pembayaran</strong><br />
    <h4>LUNAS</h4>
</div>


<div style="margin-top: 20px;font-size:12px">
    <strong>Batang Kuis, {{ date("d / m / Y") }}</strong><br />
    <br/>
    <br/>
    {{ $dataSpp -> pengurusData -> nama }}<br/>
    (Petugas Administrasi)
</div>


@include('layout.footerPdf')
