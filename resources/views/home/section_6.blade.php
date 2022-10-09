<!-- Clients Start -->
<section class="section bg-light" id="testimoni">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="text-center mb-5">
                    <h4 class="text-uppercase mb-0">Testimoni santri / orang tua</h4>
                    <p class="text-muted f-14">
                        Berikut adalah testimoni dari para santri/orang tua yang sedang belajar ataupun sudah menjadi alumni di rumah tahfiz qur'an Al-Haziq
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="owl-carousel owl-theme">
                <?php for($x = 0; $x <= 5; $x++){ ?>
                <div class="item">
                    <div class="testi-content text-center m-3 p-4 position-relative">
                        <div class="testi-icon"><i class="mdi mdi-format-quote-open"></i></div>
                        <p class="text-muted mb-4 position-relative f-15">@{{ kata-testimoni }}.</p>
                        <img src="https://i.pravatar.cc/300" alt="" class="img-fluid mx-auto d-block rounded-circle user-img">
                        <h5 class="title mb-1 mt-4">Afa Naninda</h5>
                        <p class="text-muted mb-2 f-15">Orang Tua Santri</p>
                        <ul class="list-unstyled f-15 text-warning mb-0">
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item mr-1"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                        </ul>
                    </div>
                </div>
                <?php } ?>
                <!-- owl item and -->
            </div>
        </div>
    </div>
</section>
<!-- Clients End -->

