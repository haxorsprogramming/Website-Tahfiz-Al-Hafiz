<!-- div tabel data penggajian  -->
<div id="divDataPenggajian">
    <div style="margin-bottom:15px;">
        <a href="javascript:void(0)" class="btn btn-lg btn-primary  btn-icon icon-left" @click="buatSpillAtc()">
            <i class="fas fa-plus-circle"></i> Buat Spill Penggajian
        </a>
    </div>
    <div class="row" style="padding-left:20px;margin-right:10px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
            <div class="card card-primary">
                <div class="card-body">
                    <table id="tblPenggajian" class="table table-hover table-bordered table-stripped">
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
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>