<!-- div tabel data absensi  -->
<div id="divDataAbsensi">
    <div style="margin-bottom:15px;">
        <a href="javascript:void(0)" class="btn btn-lg btn-primary  btn-icon icon-left" @click="tambahAbsensiAtc()">
            <i class="fas fa-plus-circle"></i> Rekap Absensi Hari Ini
        </a>
        <a href="javascript:void(0)" class="btn btn-lg btn-info  btn-icon icon-left" @click="tambahAbsensiAtc()">
            <i class="fas fa-plus-circle"></i> Lihat seluruh rekap absensi
        </a>
    </div>
    <div class="row" style="padding-left:20px;margin-right:10px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
            <div class="card card-primary">
                <div class="card-body">
                    <div style="text-align: center;">
                        <h5>Data absensi hari ini ({{ date("d - M - Y") }})</h5>
                    </div>
                    <table id="tblAbsensi" class="table table-hover table-bordered table-stripped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Token</th>
                                <th>Nama Santri</th>
                                <th>Kafilah</th>
                                <th>Waktu Absen</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dataAbsensi as $absensi)
                            <tr>
                                <td>{{ $loop -> iteration }}</td>
                                <td>{{ substr($absensi -> token_absensi, 0, 7) }} ...</td>
                                <td>{{ $absensi -> santriData -> nama }}</td>
                                <td>{{ $absensi -> getKafilahData($absensi -> id_santri) }}</td>
                                <td>{{ Carbon\Carbon::parse($absensi-> created_at) -> format('d-m-Y H:i:s'); }}</td>
                                <td>
                                    <a href="javascript:void(0)" class="btn btn-primary" @click="hapusAbsensiAtc('{{ $absensi -> token_absensi }}')">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>