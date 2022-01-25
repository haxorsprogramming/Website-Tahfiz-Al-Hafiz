@include('layout.headerPdf')

<div style="font-size: 12px;margin-top:20px;">
    Nama Pengurus : {{ $dataGaji -> pengurusData -> nama }}<br />
    ID Pengurus : {{ $dataGaji -> pengurusData -> id_pengurus }}<br />
    Jabatan : {{ $dataGaji -> pengurusData -> jabatan }}<br />
    Periode Gaji : {{ $dataGaji -> periodeGaji($dataGaji -> tanggal_pembayaran) }}
</div>

<div style="margin-top: 20px;font-size:12px">
    <strong>Informasi pembayaran gaji</strong><br />
    <table class="table" style="margin-top: 5px;">
        <thead>
            <tr>
                <td>Gaji Pokok</td>
                <td>Tunjangan</td>
                <td>Potongan</td>
                <td>Total Pembayaran / Diterima</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Rp. {{ number_format($dataGaji -> gaji_pokok) }}</td>
                <td>Rp. {{ number_format($dataGaji -> tunjangan) }}</td>
                <td>Rp. {{ number_format($dataGaji -> potongan) }}</td>
                <td>Rp. {{ number_format($dataGaji -> total_gaji) }}</td>
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
    Vania<br/>
    (Pembina Rumah Tahfiz)
</div>

@include('layout.footerPdf')