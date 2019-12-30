<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto text-center mb-5 section-heading">
                <h2 class="mb-5"><?php echo lang("gallery"); ?></h2>
            </div>
            <?php
            $i = 1;
            foreach ($images as $img) {
                ?>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="hotel-room text-center">
                        <a href="#" class="d-block mb-0 thumbnail"><img src="<?php echo base_url('assets/admin/uploads/gallery/medium/' . $img->image) ?>" class="img-fluid"></a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>