<h4 class="card-title">Rekap absensi {{ $namaBulan }} - {{ $tahun }}</h4>
<div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
    <table id="tblAbsensi" class="table table-hover table-bordered table-stripped">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Santri</th>
                <th>Nama Santri</th>
                <th>Kafilah</th>
                <th>Kehadiran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dataSantri as $santri)
            <tr>
                <td>{{ $loop -> iteration }}</td>
                <td>{{ $santri -> id_santri }}</td>
                <td>{{ $santri -> nama }}</td>
                <td>{{ $santri -> kafilahData -> nama }}</td>
                <td>{{ $santri -> getKehadiranAbsensi($santri -> id_santri, $bulan, $tahun) }}</td>
                <td>
                    <a href="{{ url('/app/rekap-absensi/'.$santri -> id_santri.'/'.$bulan.'/'.$tahun.'/cetak') }}" class="btn btn-primary" target="new">
                        Cetak rekap
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script>
    $("#tblAbsensi").dataTable();
</script>