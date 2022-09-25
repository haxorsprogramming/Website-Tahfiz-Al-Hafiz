<!-- modal edit santri  -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalEditSantri">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Santri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Id Santri</label>
                                <input type="text" class="form-control disabled" readonly placeholder="Id Santri" id="txtIdSantriEdit">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Alamat</label>
                                <textarea class="form-control" style="resize: none;" placeholder="Alamat Santri" id="txtAlamatEdit"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Nama Santri</label>
                                <input type="text" class="form-control" placeholder="Nama santri" id="txtNamaSantriEdit">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" id="txtType">
                                    <option value="L">Laki Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" id="txtTglLahirEdit" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kafilah</label>
                                <small>(Leave blank if quota not set)</small>
                                
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Kafilah</label>
                                <input type="date" class="form-control" id="txtExpired" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-12"></div>
                </div>
                <div>
                    <a class="btn btn-rounded btn-primary" href="javascript:void(0)" @click="prosesUpdateDataSantri()">
                        Update data santri
                    </a>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
