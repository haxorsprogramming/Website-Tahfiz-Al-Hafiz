<!-- div tabel data absensi  -->
<div id="divDataAbsensi">
    <div style="margin-bottom:15px;">
        <a href="javascript:void(0)" class="btn btn-lg btn-primary  btn-icon icon-left" @click="tambahAbsensiAtc()">
            <i class="fas fa-plus-circle"></i> Rekap Absensi Hari Ini
        </a>
    </div>
    <div class="row" style="padding-left:20px;margin-right:10px;">
        <table id="tblAbsensi" class="table table-hover table-bordered table-stripped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Token</th>
                    <th>Nama Santri</th>
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
                <td>{{ $absensi -> created_at }}</td>
                <td>
                    <a href="javascript:void(0)" class="btn btn-primary" @click="hapusAbsensiAtc('{{ $absensi -> token_absensi }}')">Hapus</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>