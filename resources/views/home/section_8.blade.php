<!-- contact Us Start -->
<section class="section" id="pembayaranspp">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="text-center mb-5">
                    <h4 class="text-uppercase mb-0">Pembayaran SPP</h4>
                    <p class="text-muted f-14">Untuk melakukan pembayaran spp santri, silahkan transfer ke rekening resmi Rumah Tahfiz Qur'an berikut ini.</p>
                    <h2 class="title font-weight-normal text-muted mb-2">Rekening Pembayaran SPP</h2>
                    <h4>{{ $setting -> namaBank }}</h4>
                    <p>Setelah melakukan pembayaran, harap unggah bukti pendaftaran melalui form berikut ini</p>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group app-label">
                                <label for="name">Nomor Handphone</label> &nbsp;(<i><small>Ini adalah nomor handphone pada saat mendaftar</small></i>)
                                <input id="txtNomorHandphoneSantriSetorSpp" value="08-" type="text" class="form-control" placeholder="Nomor handphone santri/orang tua"><br/>
                                <a href="javascript:void(0)" class="btn btn-primary" onclick="checkDataSantriAtc()">Check Data</a>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="row" id="divBothSantriData" style="display: none;">
                        <div class="col-lg-12">
                            <div class="form-group app-label">
                                <label for="name">Data Santri</label>
                                <div style="text-align: left;">
                                    <table class="table">
                                        <tr>
                                            <td>Id Santri</td><td> : </td><td><span id="rIdSantri"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Santri</td><td> : </td><td><span id="rNamaSantri"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Orang Tua</td><td> : </td><td><span id="rNamaOrangTua"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Kelas</td><td> : </td><td><span id="rKelas"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Bukti Pembayaran</td><td> : </td><td><input type="file" id="txtFile"></td>
                                        </tr>
                                    </table>
                                </div>

                                <a href="javascript:void(0)" class="btn btn-primary" onclick="submitPembayaranAtc()">Submit data pembayaran</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

