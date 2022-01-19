<!-- div form add data donasi  -->
<div id="divTambahDonasi" style="display: none;">
    <div>
        <a href="javascript:void(0)" class="btn btn-primary btn-icon icon-left" @click="kembaliAtc()">
            <i class="fas fa-reply"></i> Kembali
        </a>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
            <div class="card card-primary">
                <div class="card-header">
                    <h4 class="card-title">Form tambah pengurus</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Donatur</label>
                        <input type="text" class="form-control" id="txtNamaDonatur"/>
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <textarea class="form-control" style="resize: none;" id="txtDetail"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tipe</label>
                        <select class="form-control" id="txtTipe">
                            <option value="PERSEORANGAN">Perseorangan</option>
                            <option value="INSTANSI">Instansi / Perusahaan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nominal</label>
                        <input type="text" class="form-control" id="txtNominal"/>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Donasi</label>
                        <input type="date" class="form-control" id="txtTanggalDonasi"/>
                    </div>
                    <div>
                        <a href="javascript:void(0)" class="btn btn-lg btn-primary btn-icon icon-left" @click="prosesTambahDonasiAtc()">
                            <i class="fas fa-save"></i>Proses Tambah Pengurus
                        </a>
                        &nbsp;&nbsp;
                        <a href="javascript:void(0)" class="btn btn-lg btn-info btn-icon icon-left" id="btnClearForm">
                            <i class="fas fa-i-cursor"></i> Clear
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
            <div class="card card-primary">
                <div class="card-header"></div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>