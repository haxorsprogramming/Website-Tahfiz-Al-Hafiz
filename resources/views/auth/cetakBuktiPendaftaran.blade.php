@include('layout.headerPdf')

<div style="font-size: 12px;margin-top:20px;">
    <p>
        Terima kasih telah melakukan pendaftaran untuk belajar di Rumah Tahfiz Al-Haziq, berikut adalah data calon santri
    </p>
    <table class="table" style="width: 100%;">
        <tr>
            <td>Nama Lengkap</td><td>{{$dp -> nama_santri }}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td><td>{{ $dp -> jk === "L" ? "Laki Laki" : "Perempuan" }}</td>
        </tr>
        <tr>
            <td>Tempat / Tanggal Lahir</td><td>{{ $dp -> tempat_lahir }} / {{ $dp -> tanggal_lahir }} </td>
        </tr>
        <tr>
            <td>Email / No Hp</td><td>{{ $dp -> email }} / {{ $dp -> no_hp }}</td>
        </tr>
        <tr>
            <td>Nama Orang Tua</td><td>{{ $dp -> nama_ortu }}</td>
        </tr>
        <tr>
            <td>Alamat</td><td>{{ $dp -> alamat }}</td>
        </tr>
        <tr>
            <td>Kelas yang dipilih</td><td>{{ $dp -> kelas }}</td>
        </tr>
        <tr>
            <td>Harapan & Capaian</td><td>{{ $dp -> harapan }}</td>
        </tr>
    </table>
    <p>
        <i>Harap cetak formulir bukti pendaftaran ini ke Rumah Tahfiz Al-Haziq untuk selanjutnya dilakukan verifikasi data.</i>
    </p>
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