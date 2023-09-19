<!-- div tabel spp  -->
<div id="divDataSpp">
    <div style="margin-bottom:15px;">
        <a href="javascript:void(0)" class="btn btn-lg btn-primary  btn-icon icon-left" @click="tambahPembayaranSppAtc()">
            <i class="fas fa-plus-circle"></i> Tambah Pembayaran SPP
        </a>
    </div>
    <div class="row" id="divTabelDataSpp" style="padding-left:20px;margin-right:10px;">
        <table id="tblSpp" class="table table-hover table-bordered table-stripped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Token</th>
                    <th>Nama Santri</th>
                    <th>Bulan / Tahun</th>
                    <th>Total Pembayaran</th>
                    <th>Waktu Pembayaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($dataSpp as $spp)
            @php
                $monthNum = $spp -> bulan;
                $mn = date("F", mktime(0, 0, 0, $monthNum, 10));
            @endphp
                <tr>
                    <td>{{ $loop -> iteration }}</td>
                    <td>{{ substr($spp -> token_pembayaran, 0, 10) }}</td>
                    <td>{{ $spp -> santriData -> nama }}</td>
                    <td>{{ $mn }} / {{ $spp -> tahun }}</td>
                    <td>Rp. {{ number_format($spp -> total) }}</td>
                    <td>{{ $spp -> created_at }}</td>
                    <td>
                        <a href="{{ url('app/pembayaran-spp/'.$spp -> token_pembayaran.'/cetak') }}" target="new" class="btn btn-primary">Cetak</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
