<div class="slide-one-item home-slider owl-carousel">
    <?php foreach ($banners as $key => $values) { ?>
        <div class="site-blocks-cover overlay" style="background-image: url(<?php echo base_url('assets/admin/uploads/banners/' . $values->image) ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 text-center" data-aos="fade">
                        <h1 class="mb-2"><?php echo $values->heading; ?></h1>
                        <h2 class="caption"><?php echo $values->description; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>