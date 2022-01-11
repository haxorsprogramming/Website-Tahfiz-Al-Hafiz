<!-- div form add data pengurus  -->
<div id="divTambahPengurus" style="display: none;">
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
                        <label>Nama Pengurus **<small>Wajib di isi</small></label>
                        <input type="text" class="form-control" id="txtNamaPengurus" placeholder="Nama pengurus">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin **<small>Wajib di isi</small></label>
                        <select class="form-control" id="txtJk">
                            <option value="none">--- Pilih jenis kelamin ---</option>
                            <option value="L">Laki laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir **<small>Wajib di isi</small></label>
                        <input type="date" class="form-control" id="txtTanggalLahir">
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir **<small>Wajib di isi</small></label>
                        <input type="text" class="form-control" id="txtTempatLahir" placeholder="Tempat lahir">
                    </div>
                    <div>
                        <a href="javascript:void(0)" class="btn btn-lg btn-primary btn-icon icon-left" @click="prosesTambahPengurusAtc()">
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
                    <div class="form-group">
                        <label>Alamat **<small>Wajib di isi</small></label>
                        <input type="text" class="form-control" id="txtAlamat" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label>No Hp **<small>Wajib di isi</small></label>
                        <input type="text" class="form-control" id="txtHp" placeholder="Nomor Handphone">
                    </div>
                    <div class="form-group">
                        <label>Email **<small>Wajib di isi</small></label>
                        <input type="text" class="form-control" id="txtEmail" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Jabatan **<small>Wajib di isi</small></label>
                        <select class="form-control" id="txtJabatan">
                            <option value="none">--- Pilih jabatan ---</option>
                            <option value="PEMBINA">Pembina</option>
                            <option value="PENGAJAR">Pengajar</option>
                            <option value="ADMINISTRASI">Administrasi</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>