<div class="row">
    <div class="col-12 col-sm-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Kegiatan Tahfiz</h4>
            </div>
            <div class="card-body">
                <div class="owl-carousel owl-theme slider" id="slider1">
                    <?php for($x=1; $x <= 4; $x++){ ?> 
                        <div><img alt="image" src="{{ asset('/ladun/base/img/kegiatan/'.$x.'.jpg') }}"></div>
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
                    <?php for($x=1; $x <= 6; $x++){ ?> 
                    <li class="media">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="cbx-1">
                            <label class="custom-control-label" for="cbx-1"></label>
                        </div>
                        <img class="mr-3 rounded-circle" width="50" src="https://demo.getstisla.com/assets/img/avatar/avatar-4.png" alt="avatar">
                        <div class="media-body">
                            <div class="badge badge-pill badge-danger mb-1 float-right">Not Finished</div>
                            <h6 class="media-title"><a href="#">Redesign header</a></h6>
                            <div class="text-small text-muted">Alfa Zulkarnain <div class="bullet"></div> <span class="text-primary">Now</span></div>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    $("#slider1,#slider2").owlCarousel({
        items: 1,
        nav: true,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>']
    });
</script>