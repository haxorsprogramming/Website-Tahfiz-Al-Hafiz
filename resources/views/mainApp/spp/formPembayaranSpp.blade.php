<div id="divAddPembayaran" style="display: none;">
    <div>
        <a href="javascript:void(0)" class="btn btn-primary btn-icon icon-left" @click="kembaliAtc()">
            <i class="fas fa-reply"></i> Kembali
        </a>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
            <div class="card card-primary">
                <div class="card-header">
                    <h4 class="card-title">Form Pembayaran SPP</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Santri <small>** Klik field untuk memilih santri</small></label>
                        <input type="text" class="form-control"  data-toggle="modal" data-target="#modalSantri" @click="showModalSantriAtc()" id="txtNamaSantri" placeholder="Klik untuk memilih santri">
                    </div>

                    <div>
                        <a href="javascript:void(0)" class="btn btn-lg btn-primary btn-icon icon-left" @click="prosesTambahSantriAtc()">
                            <i class="fas fa-save"></i>Proses Tambah Santri
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