<div class="site-section bg-light">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 mx-auto text-center mb-5 section-heading">
                <h2 class="mb-5"><?php echo lang("room_types"); ?></h2>
            </div>
           
            <?php
            foreach ($apartment_types as $rt):
                $rt_image = get_room_type_featured_image_medium($rt->id);
                
                $amenities = $this->homepage_model->get_amenities($rt->id);
                ?>
                <div class="col-md-6 col-lg-4 mb-5">
                    <form method="get" action="<?php echo site_url('front/bookapartments/index') ?>">
                        <input type="hidden" name="date_from" value="<?php echo date("Y-m-d"); ?>" />
                        <input type="hidden" name="date_to" value="<?php echo date("Y-m-d"); ?>" />
                        <input type="hidden" name="adults" value="<?php echo 1 ?>" />
                        <input type="hidden" name="kids" value="<?php echo 0; ?>" />
                        <input type="hidden" name="room_type" value="<?php echo $rt->id ?>" />
                        <div class="hotel-room text-center">
                            <a href="<?php echo site_url('apartments/' . $rt->slug) ?>" class="d-block mb-0 thumbnail">
                                <img src="<?php echo $rt_image; ?>" alt="Image" class="img-fluid">
                            </a>
                            <div class="hotel-room-body">
                                <h3 class="heading mb-0">
                                    <a href="<?php echo site_url('rooms/' . $rt->slug) ?>"><?php echo $rt->title; ?></a>
                                </h3>
                                <strong class="price"><?php $this->setting->currency_symbol . " " . $rt->base_price . "/" . lang('night'); ?></strong>
                            </div>
                            <input class="btn btn-primary pill px-4 py-2" type="submit" name="search" value="<?php echo lang('book_now'); ?>" onclick="this.form.submit"/>
                        </div>
                    </form>    
                </div>

                <?php
                $i++;
            endforeach;
            ?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>