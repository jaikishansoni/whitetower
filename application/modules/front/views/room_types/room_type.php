<!--<link rel="stylesheet" href="<?php echo base_url('assets/front/') ?>/js/datepicker3.css">  
-->
<style>
    .list-inline li{
        display:inline-block !important;
    }
</style>
<?php
$rt_image = get_room1_type_featured_image_medium($room_type->id);
?>
<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto text-center mb-5 section-heading">
                <h2 class="mb-5"><?php echo $room_type->title; ?></h2>
            </div>

            <div class="col-md-7">
                <?php
                if ($feature_images) {
                    ?>
                    <!-- Indicators -->
                    <div class='row no-gutters'>
                        <a href="<?php echo base_url('assets/admin/uploads/gallery/medium/' . $feature_images->image); ?>" class="image-popup img-opacity img-fluid">
                            <img src="<?php echo base_url('assets/admin/uploads/gallery/medium/' . $feature_images->image); ?>" alt="<?php echo $gallery->caption; ?>" class="img-fluid">
                        </a>
                    </div>
                <?php } else { ?>
                    <div class='row no-gutters'>
                        <a href="<?php echo base_url('assets/admin/dist/img/noImageAvailable.jpg'); ?>" class="image-popup img-opacity img-fluid">
                            <img src="<?php echo base_url('assets/admin/dist/img/noImageAvailable.jpg'); ?>" alt="<?php echo $gallery->caption; ?>" class="img-fluid">
                        </a>
                    </div>
                <?php } ?>
                <br />

                <?php if ($room_type->description): ?>
                    <p><?php echo $room_type->description ?></p>
                <?php endif; ?>
                <?php if (!empty($images)) { ?>
                    <h4 class="sub-title"><?php echo lang('room1_images'); ?></h4>
                    <div class="row no-gutters">
                        <?php foreach ($images as $key => $img) { ?>
                            <div class="col-md-6 col-lg-3">
                                <a href="<?php echo base_url('assets/admin/uploads/gallery/medium/' . $img->image); ?>" class="image-popup img-opacity">
                                    <img src="<?php echo base_url('assets/admin/uploads/gallery/medium/' . $img->image) ?>" alt="<?php echo $gallery->caption; ?>" class="img-fluid">
                                </a>
                            </div>           
                        <?php } ?>
                    </div>
                <?php }
                ?>
                <?php if (!empty($amenities)) { ?>
                    <h4 class = "sub-title"><?php echo lang('amenities'); ?></h4>
                    <ul class="list-inline">
                        <?php foreach ($amenities as $am): ?>
                            <li> 
                                <img src="<?php echo base_url('assets/admin/uploads/amenities/' . $am->image) ?>" class="img-responsive gray" width="32"  title="<?php echo $am->name ?>" data-toggle="tooltip"/> 
                            </li>
                        <?php endforeach; ?>	
                    </ul>
                <?php } ?>
            </div>
            <div class="col-md-5">
                <h4><?php echo lang('start') ?> <?php echo lang('from') ?> <?php echo $this->session->userdata('currency_sybmol'); ?> <?php echo rate_exchange($room_type->base_price) ?>  /<?php echo lang('per_night'); ?></h4>
                <h3><span><?php echo lang('make_reservation') ?></span></h3>
                <br />
                <form class="p-5 bg-white" method="get" action="<?php echo site_url('front/bookrooms/index') ?>" id="checkform">
                    <input type="hidden" name="checked" value="" id="checked"/>
                    <input type="hidden" name="room_type" value="<?php echo $room_type->id ?>"/>
                    <div class="reservation">
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="check_in"><?php echo lang('check_in'); ?></label>
                                <input type="text" class="form-control datepicker1" name="date_from" placeholder="<?php echo lang('check_in'); ?>" value="<?php echo @$_GET['date_from'] ?>" required=" " />
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="check_in"><?php echo lang('check_in_time'); ?></label>
                                <input type="time" class="form-control" name="check_in_time" placeholder="<?php echo lang('check_in_time'); ?>" value="<?php echo @$_GET['check_in_time'] ?>" required=" " />
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="check_out"><?php echo lang('check_out'); ?></label>
                                <input type="text" class="form-control datepicker2" name="date_to" placeholder="<?php echo lang('check_out'); ?>" value="<?php echo @$_GET['date_to'] ?>" required=" " />
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="check_out"><?php echo lang('check_out_time'); ?></label>
                                <input type="time" class="form-control" name="check_out_time" placeholder="<?php echo lang('check_out_time'); ?>" value="<?php echo @$_GET['check_out_time'] ?>" required=" " />
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="check_out"><?php echo lang('adults'); ?></label>
                            <select name="adults" class="form-control">
                                <option hidden="hidden"><?php echo lang('adults'); ?></option>
                                <option value="1">1</option>         
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="check_out"><?php echo lang('kids'); ?></label>
                            <select name="kids" class="form-control required">
                                <option hidden="hidden"><?php echo lang('kids'); ?></option>
                                <option value="0">0</option>         
                                <option value="1">1</option>         
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>

<!--                    <input type="hidden" name="room_type" value="<?php echo @$_GET['room_type'] ?>" />-->
                    <div class="keywords">	
                        <input class="btn btn-primary pill px-4 py-2" type="submit" value="Check Availabity" name="check" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
</div>

<script src="<?php echo base_url('assets/admin/') ?>/plugins/datepicker/bootstrap-datepicker.js"></script>		
<script type="text/javascript">

    $(function () {

        $("#checkform").submit(function (event) {
            var checked = $("#checked").val();
            if (checked != 1) {
                event.preventDefault();
            }
            var form = $(form).closest('form');
            call_loader();
            $.ajax({
                url: SITE_URL + 'front/room_types/checkroom',
                type: 'POST',
                data: $("#checkform").serialize(),
                success: function (result) {

                    if (result == 1)
                    {
                        remove_loader();

                        if (checked != 1) {
                            toastr.success('Available');
                        }
                        $("#checked").val(1);
                        $('#checkform').submit();

                    } else {

                        remove_loader();
                        toastr.error(result);
                        //$('#err').html(result);
                    }

                }
            });

        });
        $(function () {
            $('.datepicker1').datepicker({
                todayHighlight: true,
                autoclose: true,
                format: 'yyyy-mm-dd',
                startDate: new Date(),
                // endDate : new Date('2014-08-08'),
            }).on('changeDate', function (selected) {
                $('.datepicker2').focus();
            });
            
            $('.datepicker2').datepicker({
                todayHighlight: true,
                autoclose: true,
                format: 'yyyy-mm-dd',
                startDate: new Date(),
            }).on('changeDate', function (selected) {
                var date1 = $(".datepicker1").datepicker('getDate');
                var date2 = $(".datepicker2").datepicker('getDate');
                if (date2 < date1) {
                    toastr.error('Checkout Date Must Be Greater Then Checkout Date');
                    $('.datepicker2').val('');
                    $('.datepicker2').focus();
                }
            });
        });

    });

</script>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->

<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
-->
