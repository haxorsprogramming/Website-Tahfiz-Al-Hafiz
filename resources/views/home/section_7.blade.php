
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
                    <p class="text-muted f-15">Rumah Tahfidz Quran Al Haziq</p>
                    <p class="text-muted f-15 mb-4">Jalan Tanjung Sari gang masjid, Batang Kuis. ( Samping masjid Baitul qudus)</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-address">
                            <h5 class="title f-18">Telp/Hp/Whatsapp</h5>
                            <p class="text-muted f-15">0812-6286-3710</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-address">
                            <h5 class="title f-18">Email</h5>
                            <p class="text-muted f-15">cs@tahfizalhaziq.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 offset-lg-1">
                <div class="custom-form mt-4 mt-lg-0">
                    <div id="message"></div>
                    <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group app-label">
                                    <label for="name">Nama</label>
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Enter your name..">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group app-label">
                                    <label for="email">Alamat Email</label>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Enter your email..">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    <label for="subject">Kelas</label>
                                    <select class="form-control">
                                        <option>Dasar</option>
                                        <option>Tahfiz</option>
                                        <option>Tahsin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    <label for="subject">Alamat</label>
                                    <input type="text" class="form-control" id="subject" placeholder="Enter Subject.." />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    <label for="comments">Message</label>
                                    <textarea name="comments" id="comments" rows="3" class="form-control" placeholder="Enter message.."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" id="submit" name="send" class="btn btn-primary">Proses pendaftaran <i class="mdi mdi-telegram ml-2"></i></button>
                                <div id="simple-msg"></div>
                            </div>
                        </div>
                    </form>
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
                <p class="footer-desc f-15">Itaque earum rerum hic tenetur a sapiente delectus ut aut reiciendis voluptatibus.</p>
                <ul class="footer-icons list-inline f-20 mt-4">
                    <li class="list-inline-item mr-3"><a href="#" class=""><i class="mdi mdi-facebook"></i></a></li>
                    <li class="list-inline-item mr-3"><a href="#" class=""><i class="mdi mdi-twitter"></i></a></li>
                    <li class="list-inline-item mr-3"><a href="#" class=""><i class="mdi mdi-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-7 offset-lg-1">
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="footer-list-title f-18 font-weight-normal mb-3">Customer</h5>
                        <ul class="list-unstyled company-sub-menu">
                            <li><a href="">Buyer</a></li>
                            <li><a href="">Supplier</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5 class="footer-list-title f-18 font-weight-normal mb-3">Company</h5>
                        <ul class="list-unstyled company-sub-menu">
                            <li><a href="">About</a></li>
                            <li><a href="">Service</a></li>
                            <li><a href="">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5 class="footer-list-title f-18 font-weight-normal mb-3">Further Information</h5>
                        <ul class="list-unstyled company-sub-menu">
                            <li><a href="">Term & Condition</a></li>
                            <li><a href="">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="text-center footer-alt my-3">
                    <p class="mb-0 f-15">2019 © Neloz. Design by Themesdesign</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer End -->