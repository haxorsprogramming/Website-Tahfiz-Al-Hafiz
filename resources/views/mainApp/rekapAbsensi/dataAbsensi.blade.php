<!-- div tabel data rekap absensi  -->
<div id="divDataLapkeu">
    <div style="margin-bottom:15px;">
        <a href="javascript:void(0)" class="btn btn-lg btn-primary  btn-icon icon-left" @click="pilihWaktuAtc()">
            <i class="fas fa-plus-circle"></i> Pilih waktu rekap
        </a>
    </div>
    <div class="row" style="padding-left:20px;margin-right:10px;">
    <h4 class="card-title">Rekap absensi</h4>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
            <table id="tblAbsensi" class="table table-hover table-bordered table-stripped">
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
                
                </tbody>
            </table>
        </div>
    </div>
</div>