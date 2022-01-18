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
                
            </tbody>
        </table>
    </div>
</div>