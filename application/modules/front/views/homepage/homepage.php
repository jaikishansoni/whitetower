<?php $this->load->view('front/template/includes/home_page_banners'); ?>

<div class="site-section bg-light">
    <div class="container">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Horizontal Responsive About us page -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-8740818498061987"
             data-ad-slot="8014599197"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <div class="row">
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                <h2 class="mb-5"><?php echo lang("room_types"); ?></h2>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($apartment_types as $key => $values) {
                $rt_image = get_room_type_featured_image_medium($values->id);
                ?>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="hotel-room text-center">
                        <a href="<?php echo site_url('apartments/' . $values->slug) ?>" class="d-block mb-0 thumbnail">
                            <img src="<?php echo $rt_image; ?>" alt="Image" class="img-fluid">
                        </a>
                        <div class="hotel-room-body">
                            <h3 class="heading mb-0">
                                <a href="<?php echo site_url('rooms/' . $values->slug) ?>"><?php echo $values->title; ?></a>
                            </h3>
                            <strong class="price"><?php echo $this->session->userdata('currency_sybmol') . " " . $values->base_price . "/" . lang('night'); ?></strong>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>


<div class="site-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-5 mb-md-0">
                <div class="img-border">
                    <img src="<?php echo base_url('assets/front') ?>/images/img_2.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <?php
            $title = $aboutus->title;
            $lang = $this->session->userdata("lang");
            if ($lang == "arabic") {
                $description = $aboutus->description_arabic;
            } else {
                $description = $aboutus->description;
            }
            // strip tags to avoid breaking any html
            $string = strip_tags($description);
            if (strlen($string) > 200) {

                // truncate string
                $stringCut = substr($string, 0, 200);
                $endPoint = strrpos($stringCut, ' ');

                //if the string doesn't contain any space then it will cut without word basis.
                $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                $string .= '... <p><a class="" href="' . base_url() . "/page/about-us" . '">' . lang("read_more") . '</a></p>';
            }
            ?>
            <div class="col-md-5 ml-auto">
                <div class="section-heading text-left">
                    <h2 class="mb-5"><?php echo lang($title); ?></h2>
                </div>
                <p class="mb-4"><?php echo $string; ?></p>

            </div>
        </div>
    </div>
</div>
<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                <h2 class="mb-5"><?php echo lang("room1_types"); ?></h2>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($room_types as $key => $values) {
                $rt_image = get_room1_type_featured_image_medium($values->id);
                ?>
                <div class="col-md-6 col-lg-6 mb-5">
                    <div class="hotel-room text-center">
                        <a href="<?php echo site_url('rooms/' . $values->slug) ?>" class="d-block mb-0 thumbnail">
                            <img src="<?php echo $rt_image; ?>" alt="Image" class="img-fluid">
                        </a>
                        <div class="hotel-room-body">
                            <h3 class="heading mb-0">
                                <a href="<?php echo site_url('rooms/' . $values->slug) ?>"><?php echo $values->title; ?></a>
                            </h3>
                            <strong class="price">
                                <?php echo $this->setting->currency_symbol . " " . $values->base_price . "/" . lang('night'); ?>
                            </strong>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                <h2 class="mb-5"><?php echo lang("hotel_features"); ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="text-center p-4 item">
<!--                    <span class="flaticon-cab display-3 mb-3 d-block text-primary"></span>-->
                    <h2 class="h5"><?php echo lang("safe_parking"); ?></h2>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="text-center p-4 item">
<!--                    <span class="flaticon-mosque"></span>-->
                    <h2 class="h5"><?php echo lang("mosque"); ?></h2>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="text-center p-4 item">
<!--                    <span class="flaticon-pool display-3 mb-3 d-block text-primary"></span>-->
                    <h2 class="h5"><?php echo lang("generators"); ?></h2>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="text-center p-4 item">
<!--                    <span class="flaticon-desk display-3 mb-3 d-block text-primary"></span>-->
                    <h2 class="h5"><?php echo lang("24_hour_secuirty"); ?></h2>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="text-center p-4 item">
<!--                    <span class="flaticon-exit display-3 mb-3 d-block text-primary"></span>-->
                    <h2 class="h5"><?php echo lang("football_fields"); ?></h2>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="text-center p-4 item">
<!--                    <span class="flaticon-parking display-3 mb-3 d-block text-primary"></span>-->
                    <h2 class="h5"><?php echo lang("gymnasium"); ?></h2>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="text-center p-4 item">
<!--                    <span class="flaticon-hair-dryer display-3 mb-3 d-block text-primary"></span>-->
                    <h2 class="h5"><?php echo lang("fire_fighting_systems"); ?></h2>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="text-center p-4 item">
<!--                    <span class="flaticon-minibar display-3 mb-3 d-block text-primary"></span>-->
                    <h2 class="h5"><?php echo lang("electric_elevators"); ?></h2>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="text-center p-4 item">
<!--                    <span class="flaticon-drink display-3 mb-3 d-block text-primary"></span>-->
                    <h2 class="h5"><?php echo lang("swimming_pool"); ?></h2>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="text-center p-4 item">
<!--                    <span class="flaticon-drink display-3 mb-3 d-block text-primary"></span>-->
                    <h2 class="h5"><?php echo lang("wifi"); ?></h2>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="text-center p-4 item">
<!--                    <span class="flaticon-drink display-3 mb-3 d-block text-primary"></span>-->
                    <h2 class="h5"><?php echo lang("reception_24_hour"); ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
<div class="py-5 upcoming-events" style="background-image: url('<?php echo base_url('assets/front') ?>/images/hero_1.jpg'); background-attachment: fixed;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="text-white">Summer Promo 50% Off</h2>
                <a href="#" class="text-white btn btn-outline-warning rounded-0 text-uppercase">Avail Now</a>
            </div>
            <div class="col-md-6">
                <span class="caption">The Promo will start in</span>
                <div id="date-countdown"></div>    
            </div>
        </div>

    </div>
</div>-->

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                <h2 class="mb-5"><?php echo lang("gallery"); ?></h2>
            </div>
        </div>
        <div class="row no-gutters">
            <?php foreach ($gallery as $key => $values) { ?>
                <div class="col-md-6 col-lg-3">
                    <a href="<?php echo base_url('assets/admin/uploads/gallery/medium/' . $values->image) ?>" class="image-popup img-opacity"><img src="<?php echo base_url('assets/admin/uploads/gallery/medium/' . $values->image) ?>" alt="<?php echo $gallery->caption; ?>" class="img-fluid"></a>
                </div>           
            <?php } ?>
        </div>
    </div>
</div>

<div class="site-section block-14 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                <h2><?php echo lang("testimonials"); ?></h2>
            </div>
        </div>
        <div class="nonloop-block-14 owl-carousel">
            <?php
            foreach ($testimonials as $key => $values) {
                ?>
                <div class="p-4">
                    <div class="d-flex block-testimony">
                        <div class="person mr-3">
                            <img src="<?php echo base_url('assets/admin/uploads/images/' . $values->auther_image) ?>" alt="<?php echo $values->title; ?>" class="img-fluid rounded">
                        </div>
                        <div>
                            <h2 class="h5"><?php echo $values->auther_name; ?></h2>
                            <blockquote><?php echo $values->testimonial; ?></blockquote>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Horizontal Responsive About us page -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-8740818498061987"
             data-ad-slot="8014599197"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
</div>
<div class="site-section block-14 bg-light">
    <div class="container">
        <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3843.033869021371!2d32.58392471437133!3d15.58983918917867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x168e9179c5ec5f61%3A0xf8531752b7ef267a!2z2YHZhtiv2YIg2KfZhNio2LHYrCDYp9mE2KPYqNmK2LYg2YTZhNi02YLZgiDYp9mE2YXZgdix2YjYtNipIFdoaXRlIFRvd2VyIEhvdGVsIEFwYXJ0bWVudHM!5e0!3m2!1sen!2sin!4v1577529902985!5m2!1sen!2sin"></iframe>
    </div>
</div>
<div class="py-5 quick-contact-info">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <div>
                    <span class="icon-room text-white h2 d-block"></span>
                    <h2><?php echo lang("address"); ?></h2>
                    <p class="mb-0"><?php echo $this->setting->address; ?></p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div>
                    <span class="icon-clock-o text-white h2 d-block"></span>
                    <h2><?php echo lang("service_times"); ?></h2>
                    <p class="mb-0"><?php echo lang("24_hours"); ?></p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div>
                    <span class="icon-comments text-white h2 d-block"></span>
                    <h2><?php echo lang("get_in_touch"); ?></h2>
                    <p class="mb-0"><?php echo lang("email"); ?> <?php echo $this->setting->email; ?> <br>
                        <?php echo lang("phone"); ?>: <?php echo $this->setting->phone; ?><br>
                        <?php echo lang("other_phone"); ?>: <?php echo $this->setting->other_phone; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>