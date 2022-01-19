<div id="divAddPengeluaran" style="display: none;">
    <div>
        <a href="javascript:void(0)" class="btn btn-primary btn-icon icon-left" @click="kembaliAtc()">
            <i class="fas fa-reply"></i> Kembali
        </a>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
            <div class="card card-primary">
                <div class="card-header">
                    <h4 class="card-title">Form Tambah Pengeluaran</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Pengeluaran</label>
                        <input type="text" class="form-control" id="txtNama"/>
                    </div>
                    <div class="form-group">
                        <label>Deksripsi</label>
                        <textarea class="form-control" style="resize:none" id="txtDeks"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" id="txtKategori">
                            <option value="LISTRIK">Listrik</option>
                            <option value="AIR">Air</option>
                            <option value="ATK">ATK</option>
                            <option value="PAJAK">Pajak</option>
                            <option value="KEBUTUHAN_TAHFIZ">Kebutuhan Tahfiz</option>
                            <option value="EVENT">Event</option>
                            <option value="LAIN_LAIN">Lain lain</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nominal</label>
                        <input type="number" class="form-control" id="txtNominal"/>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pengeluaran</label>
                        <input type="date" class="form-control" id="txtTanggalPengeluaran"/>
                    </div>
                    <div>
                        <a href="javascript:void(0)" class="btn btn-lg btn-primary btn-icon icon-left" @click="prosesPengeluaranAtc()">
                            <i class="fas fa-save"></i>Proses Pengeluaran
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
                <div class="card-header">Informasi Pembayaran SPP</div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>