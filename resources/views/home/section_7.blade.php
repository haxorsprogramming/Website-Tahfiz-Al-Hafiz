
<!-- contact Us Start -->
<section class="section" id="daftar">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="text-center mb-5">
                    <h4 class="text-uppercase mb-0">Informasi kontak & pendaftaran santri</h4>
                    <p class="text-muted f-14">Jika anda atau putra/i anda ingin mendaftar menjadi santri Tahfiz Al-Haziq, dapat melakukan pendaftaran langsung
                        ke rumah tahfiz atau mengisi pendaftaran secara online di form di bawah ini.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="contact-address">
                    <h4 class="title mb-4">Informasi Kontak</h4>
                    <p class="text-muted f-15">{{ $setting -> namaTahfiz }}</p>
                    <p class="text-muted f-15 mb-4">{{ $setting -> alamat }}</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-address">
                            <h5 class="title f-18">Telp/Hp/Whatsapp</h5>
                            <p class="text-muted f-15">{{ $setting -> kontak }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-address">
                            <h5 class="title f-18">Email</h5>
                            <p class="text-muted f-15">{{ $setting -> email }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 offset-lg-1">
                <div class="custom-form mt-4 mt-lg-0">
                    <div id="message"></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group app-label">
                                    <label for="name">Nama</label>
                                    <input id="txtNama" type="text" class="form-control" placeholder="Nama calon santri">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group app-label">
                                    <label for="email">Alamat Email</label>
                                    <input id="txtEmail" type="email" class="form-control" placeholder="Email calon santri/orang tua">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group app-label">
                                    <label for="name">Tempat Lahir</label>
                                    <input id="txtTmpt" type="text" class="form-control" placeholder="Tempat lahir calon santri">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group app-label">
                                    <label for="email">Tanggal Lahir</label>
                                    <input id="txtTgl" type="date" class="form-control" placeholder="Tanggal lahir calon santri">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group app-label">
                                    <label for="name">Nomor Hp (Whatsapp)</label>
                                    <input id="txtHp" type="text" class="form-control" placeholder="Nomor hp santri/orang tua">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group app-label">
                                    <label for="txtJk">Jenis Kelamin</label>
                                    <select class="form-control" id="txtJk">
                                        <option value="L">Laki Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    <label for="subject">Nama Orang Tua</label>
                                    <input type="text" class="form-control" id="txtOrangTua" placeholder="Nama orang tua" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    <label for="txtKelas">Kelas</label>
                                    <select class="form-control" id="txtKelas">
                                        <option value="DASAR">Dasar</option>
                                        <option value="TAHFIZ">Tahfiz</option>
                                        <option value="TAHSIN">Tahsin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    <label for="subject">Alamat</label>
                                    <input type="text" class="form-control" id="txtAlamat" placeholder="Alamat santri" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    <label for="comments">Harapan & Capaian</label>
                                    <textarea id="txtHarapan" rows="3" class="form-control" placeholder="Harapan & capaian yang ingin diraih setelah belajar di rumah tahfiz al haziq"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="javascript:void(0)" class="btn btn-primary" id="btnProses" onclick="prosesPendaftaran()">
                                Proses pendaftaran <i class="mdi mdi-telegram ml-2"></i></a>
                                <div id="simple-msg"></div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact Us End -->

<!-- Footer Start -->
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="mb-4">
                    <a href="{{ url('/') }}">
                        <img src="https://s3.jagoanstorage.com/nadhamedia/project_asset/Logo_Project/al-hafiz.png" alt="" class="logo-light" height="62" />
                    </a>
                </div>
                <p class="footer-desc f-15">{{ $setting -> namaTahfiz }}, {{ $setting -> motto  }}.</p>
            </div>
            <div class="col-lg-7 offset-lg-1">
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="footer-list-title f-18 font-weight-normal mb-3">Mitra</h5>
                        <ul class="list-unstyled company-sub-menu">
                            <li><a href="">Haura Grafika</a></li>
                            <li><a href="">Nadhamedia</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5 class="footer-list-title f-18 font-weight-normal mb-3">Tahfiz Al-Haziq</h5>
                        <ul class="list-unstyled company-sub-menu">
                            <li><a href="">Tentang</a></li>
                            <li><a href="">Kegiatan</a></li>
                            <li><a href="">Donasi</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="text-center footer-alt my-3">
                    <p class="mb-0 f-15">{{ env('TAHUN') }} © Tahfiz Al-Haziq</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer End -->
