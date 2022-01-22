<!-- div tabel data laporan keuangan  -->
<div id="divDataLapkeu">
    <div style="margin-bottom:15px;">
        <a href="javascript:void(0)" class="btn btn-lg btn-primary  btn-icon icon-left" @click="pilihTahunAtc()">
            <i class="fas fa-plus-circle"></i> Pilih tahun laporan
        </a>
    </div>
    <div class="row" style="padding-left:20px;margin-right:10px;">
    <h4 class="card-title">Laporan keuangan tahun {{ $tahun }}</h4>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
            <table id="tblLapkeu" class="table table-hover table-bordered table-stripped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Bulan</th>
                        <th>Total Masuk</th>
                        <th>Total Keluar</th>
                        <th>Selisih</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($dataLaporan as $lap)
                <tr>
                    <td>{{ $loop -> iteration }}</td>
                    <td>{{ $lap['namaBulan'] }}</td>
                    <td>Rp. {{ number_format($lap['flowMasuk']) }}</td>
                    <td>Rp. {{ number_format($lap['flowKeluar']) }}</td>
                    <td>Rp. {{ number_format($lap['selisih']) }}</td>
                    <td>
                        <a href="{{ url('app/laporan-keuangan/'.$lap['bulan'].'/'.$tahun.'/cetak') }}" class="btn btn-primary" target="new">Cetak</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>