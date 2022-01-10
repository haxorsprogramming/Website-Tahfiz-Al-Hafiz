<div id="divSantri">
    <div id="divDataSantri">
        <div style="margin-bottom:15px;">
            <a href="javascript:void(0)" class="btn btn-lg btn-primary  btn-icon icon-left" @click="tambahSantriAtc()">
                <i class="fas fa-plus-circle"></i> Tambah Santri
            </a>
        </div>
        <div class="row" id="divTabelDataSantri" style="padding-left:20px;margin-right:10px;">
            <table id="tblSantri" class="table table-hover table-bordered table-stripped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Santri</th>
                        <th>JK</th>
                        <th>Alamat</th>
                        <th>Kafilah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($dataSantri as $santri)
                <tr>
                    <td>{{ $loop -> iteration }}</td>
                    <td>{{ $santri -> nama }}</td>
                    @if($santri -> jk == 'L')
                    <td>Laki Laki</td>
                    @else
                    <td>Perempuan</td>
                    @endif
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
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
                            <label>Nama Santri</label>
                            <input type="text" class="form-control" id="txtNamaSantri">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
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
                            <label>No Hp (Orangtua)</label>
                            <input type="text" class="form-control" id="txtNoHp">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" id="txtEmail">
                        </div>
                        <div class="form-group">
                            <label>Kafilah</label>
                            <select class="form-control" id="txtKafilah">
                                <option>--- Pilih kafilah ---</option>
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
</div>

<script src="{{ asset('ladun/') }}/base/js/santri.js"></script>