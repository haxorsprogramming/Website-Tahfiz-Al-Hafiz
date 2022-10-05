<!-- div form add data santri  -->
<div id="divTambahSantri" style="display: none;">
    <div>
        <a href="javascript:void(0)" class="btn btn-primary btn-icon icon-left" @click="kembaliAtc()">
            <i class="fas fa-reply"></i> Kembali
        </a>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
            <div class="card card-primary">
                <div class="card-header">
                    <h4 class="card-title">Form tambah santri</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Santri **<small>Wajib di isi</small></label>
                        <input type="text" class="form-control" id="txtNamaSantri" placeholder="Nama santri">
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
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" id="txtTanggalLahir">
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" id="txtTempatLahir">
                    </div>
                    <div class="form-group">
                        <label>Status Orang Tua **<small>Wajib di isi</small></label>
                        <select class="form-control" id="txtStatusOrtu">
                            <option value="LENGKAP">Lengkap</option>
                            <option value="YATIM">Tidak ada ayah (YATIM)</option>
                            <option value="PIATU">Tidak ada ibu (PIATU)</option>
                            <option value="YATIM PIATU">Tidak ada ayah & ibu (YATIM PIATU)</option>
                        </select>
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
                    <div class="form-group">
                        <label>Alamat **<small>Wajib di isi</small></label>
                        <input type="text" class="form-control" id="txtAlamat">
                    </div>
                    <div class="form-group">
                        <label>No Hp (Orangtua)</label>
                        <input type="text" class="form-control" id="txtNoHp">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" id="txtEmail">
                    </div>
                    <div class="form-group">
                        <label>Nama Orang Tua</label>
                        <input type="text" class="form-control" id="txtNamaOrangTua">
                    </div>
                    <div class="form-group">
                        <label>Kelas **<small>Wajib di isi (Bisa di ganti kemudian)</small></label>
                        <select class="form-control" id="txtKelas">
                            <option value="none">--- Pilih kelas ---</option>
                            <option value="DASAR">Dasar</option>
                            <option value="TAHFIZ">Tahfiz</option>
                            <option value="TAHSIN">Tahsin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kafilah **<small>Wajib di isi (Bisa di ganti kemudian)</small></label>
                        <select class="form-control" id="txtKafilah">
                            <option value="none">--- Pilih kafilah ---</option>
                            @foreach($dataKafilah as $kafilah)
                            <option value="{{ $kafilah -> id_kafilah }}">{{ $kafilah -> nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
