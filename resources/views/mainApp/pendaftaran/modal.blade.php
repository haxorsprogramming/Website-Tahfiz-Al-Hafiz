<!-- modal detail pendaftaran santri  -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalDetailPendaftaranSantri">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Data Pendaftaran Santri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Kode Pendaftaran</label><br/>
                                <span id="txtKdPendaftaran"></span>
                                <input type="hidden" id="txtKodePendaftaranHidden">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Alamat</label><br/>
                                <span id="txtAlamat"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Nama Santri</label><br/>
                                <span id="txtNamaSantri"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jenis Kelamin</label><br/>
                                <span id="txtJenisKelamin"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Nama Orang Tua</label><br/>
                                <span id="txtNamaOrangtua"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Nomor Handphone</label><br/>
                                <span id="txtNomorHandphone"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Tanggal Lahir</label><br/>
                                <span id="txtTanggalLahir"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kelas</label><br/>
                                <small id="txtKelas"></small>
                                <span></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Kafilah santri yang akan diterima</label>
                                <select class="form-control" id="txtKafilah">
                                    @foreach($dataKafilah as $kaf)
                                        <option value="{{ $kaf -> id_kafilah  }}">{{ $kaf -> nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="form-group col-md-12" style="text-align: center;">
                                <span>Harapan saya belajar di tahfiz qur'an : </span><br/>
                                <blockquote id="txtHarapan"></blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-12"></div>
                </div>
                <div>
                    <a class="btn btn-rounded btn-primary" href="javascript:void(0)" onclick="submitAction('approve')">
                        Setujui pendaftaran santri
                    </a>
                    <a class="btn btn-rounded btn-warning" href="javascript:void(0)">
                        Tolak pendaftaran santri
                    </a>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
