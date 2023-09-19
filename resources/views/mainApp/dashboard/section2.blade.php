<div class="row">
    <div class="col-12 col-sm-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Kegiatan Tahfiz</h4>
            </div>
            <div class="card-body">
                <div class="owl-carousel owl-theme slider" id="slider1">
                    <?php for($x=1; $x <= 4; $x++){ ?>
                        <div><img alt="Kegiatan siswa" style="border-radius: 12px;border:#b2bec3 solid 2px;" src="{{ asset('/ladun/base/img/kegiatan/'.$x.'.jpg') }}"></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>History Absensi</h4>
            </div>
            <div class="card-body">
                <ul class="list-unstyled list-unstyled-border">
                    @foreach($hAbsen as $absen)
                    <li class="media">
                        <img class="mr-3 rounded-circle" width="50" src="https://demo.getstisla.com/assets/img/avatar/avatar-4.png" alt="avatar">
                        <div class="media-body">
                            <div class="badge badge-pill badge-success mb-1 float-right">Hadir</div>
                            <h6 class="media-title"><a href="javascript:void(0)">{{ $absen -> santriData -> nama }}</a></h6>
                            <div class="text-small text-muted">{{ $absen -> getKafilahData($absen -> id_santri) }}<div class="bullet"></div>
                            <span class="text-primary">{{ $absen -> created_at }}</span></div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    $("#slider1,#slider2").owlCarousel({
        items: 1,
        nav: false,
    });
</script>
