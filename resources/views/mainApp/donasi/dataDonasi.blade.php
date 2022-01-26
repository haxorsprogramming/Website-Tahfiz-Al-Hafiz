<!-- div tabel data donasi  -->
<div id="divDataDonasi">
    <div style="margin-bottom:15px;">
        <a href="javascript:void(0)" class="btn btn-lg btn-primary  btn-icon icon-left" @click="tambahDonasiAtc()">
            <i class="fas fa-plus-circle"></i> Tambah data donasi
        </a>
    </div>
    <div class="row" style="padding-left:20px;margin-right:10px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
            <table id="tblDonasi" class="table table-hover table-bordered table-stripped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Token</th>
                        <th>Nama Donatur</th>
                        <th>Detail</th>
                        <th>Tipe</th>
                        <th>Nominal</th>
                        <th>Tanggal Donasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($dataDonasi as $donasi)
                <tr>
                    <td>{{ $loop -> iteration }}</td>
                    <td>{{ substr($donasi -> token, 0, 7) }} ...</td>
                    <td><b>{{ $donasi -> nama_donatur }}</b></td>
                    <td>{{ $donasi -> detail }}</td>
                    <td>{{ $donasi -> tipe }}</td>
                    <td>Rp. {{ number_format($donasi -> nominal) }}</td>
                    <td>{{ $donasi -> tanggal_donasi }}</td>
                    <td>
                        <a href="{{ url('app/donasi/'.$donasi -> token.'/cetak') }}" target="new" class="btn btn-primary">Cetak</a>&nbsp;
                        <a href="javascript:void(0)" class="btn btn-warning" @click="hapusAtc('{{ $donasi -> token }}')">Hapus</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>