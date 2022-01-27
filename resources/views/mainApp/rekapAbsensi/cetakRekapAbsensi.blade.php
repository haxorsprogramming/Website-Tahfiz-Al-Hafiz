@include('layout.headerPdf')

<div style="font-size: 12px;margin-top:20px;">
    ID Santri : {{ $dataSantri -> id_santri }}<br />
    Nama Santri : {{ $dataSantri -> nama }}<br />
    Kafilah : {{ $dataSantri -> kafilahData -> nama }}<br />
    Rekap Periode : {{ $namaBulan }} / {{ $tahun }}
</div>

<div class="row" style="margin-top: 10px;">
    <table class="table table-bordered" style="font-size:10px;">
        <thead>
            <tr style="background-color: #636e72;color:#dfe6e9;">
                <th>Tanggal</th>
                <th>Id Absen</th>
                <th>Waktu Absensi</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php for ($x = 1; $x <= $tHari; $x++) { ?>
        <?php
            $tAbsen = DB::table('tbl_absensi') -> where('id_santri', $dataSantri -> id_santri) -> where('tanggal', $x) -> where('bulan', $bulan) -> where('tahun', $tahun) -> count();
            if($tAbsen < 1){ ?>
                <tr>
                <td><?=$x; ?></td>
                <td>-</td>
                <td>-</td>
                <td>TIDAK HADIR</td>
            </tr>
            <?php }else{ ?>
                <?php 
                    $qAbsenSantri = DB::table('tbl_absensi') -> where('id_santri', $dataSantri -> id_santri) -> where('tanggal', $x) -> where('bulan', $bulan) -> where('tahun', $tahun) -> first();
                ?>
                <tr>
                <td><?=$x; ?></td>
                <td><?=$qAbsenSantri -> token_absensi; ?></td>
                <td><?=$qAbsenSantri -> created_at ?></td>
                <td>HADIR</td>
            </tr>
            <?php } ?>
            
        <?php } ?>
        </tbody>
    </table>
</div>

@include('layout.footerPdf')