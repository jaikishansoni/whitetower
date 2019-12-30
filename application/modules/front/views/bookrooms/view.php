<link href="<?php echo base_url('assets/admin/plugins/iCheck/all.css') ?>" rel="stylesheet" type="text/css" />
<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto text-center mb-5 section-heading">
                <h2 class="mb-5"><?php echo lang("booking_overview"); ?></h2>
            </div>
            <div class="panel panel-primary margin-40-y mx-auto" >
                <div class="panel-heading" >
                    <h4 class="panel-title" style="line-height: 35px;"> <?php echo lang('room1_type') ?> - <?php echo @$room_type->title ?> - <?php echo date_convert($_GET['date_from']) ?> to <?php echo date_convert($_GET['date_to']) ?>  <button class="btn btn-primary pill px-4 py-2 pull-right" id="show_search" style="cursor:pointer;"><i class="fa fa-calendar"></i> <?php echo lang('reschedule') ?></button></h4>
                </div>

                <div class="panel-body">
                    <div id="search_div" class="margin-40-y">
                        <form method="get" class="p-5 bg-white" action="<?php echo site_url('front/bookrooms/index') ?>">
                            <div class="reservation">
                                <div class="row form-group">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label class="font-weight-bold" for="check_in"><?php echo lang('check_in'); ?></label>
                                        <input type="text" class="form-control datepicker1" name="date_from" placeholder="<?php echo lang('check_in'); ?>" value="<?php echo @$_GET['date_from'] ?>" required="">
                                    </div>
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label class="font-weight-bold" for="check_out"><?php echo lang('check_out'); ?></label>
                                        <input type="text" class="form-control datepicker2" name="date_to" placeholder="<?php echo lang('check_out'); ?>" value="<?php echo @$_GET['date_to'] ?>" required=" " />	
                                    </div>
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label class="font-weight-bold" for="check_in_time"><?php echo lang('check_in_time'); ?></label>
                                        <input type="time" class="form-control" name="check_in_time" placeholder="<?php echo lang('check_in_time'); ?>" value="<?php echo @$_GET['check_in_time'] ?>" required="">
                                    </div>
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label class="font-weight-bold" for="check_out_time"><?php echo lang('check_out_time'); ?></label>
                                        <input type="time" class="form-control" name="check_out_time" placeholder="<?php echo lang('check_out_time'); ?>" value="<?php echo @$_GET['check_out_time'] ?>" required="">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-6">
                                        <label class="font-weight-bold" for="adults"><?php echo lang('adults'); ?></label>
                                        <select name="adults" id="country2" class="form-control required">
                                            <option hidden="hidden"><?php echo lang('adults'); ?></option>
                                            <option value="1" <?php echo (@$_GET['adults'] == 1 ) ? 'selected="selected"' : ''; ?>>1</option>         
                                            <option value="2" <?php echo (@$_GET['adults'] == 2 ) ? 'selected="selected"' : ''; ?>>2</option>
                                            <option value="3" <?php echo (@$_GET['adults'] == 3 ) ? 'selected="selected"' : ''; ?>>3</option>
                                            <option value="4" <?php echo (@$_GET['adults'] == 4 ) ? 'selected="selected"' : ''; ?>>4</option>
                                            <option value="5" <?php echo (@$_GET['adults'] == 5 ) ? 'selected="selected"' : ''; ?>>5</option>
                                            <option value="6" <?php echo (@$_GET['adults'] == 6 ) ? 'selected="selected"' : ''; ?>>6</option>
                                            <option value="7" <?php echo (@$_GET['adults'] == 7 ) ? 'selected="selected"' : ''; ?>>7</option>
                                            <option value="8" <?php echo (@$_GET['adults'] == 8 ) ? 'selected="selected"' : ''; ?>>8</option>
                                            <option value="9" <?php echo (@$_GET['adults'] == 9 ) ? 'selected="selected"' : ''; ?>>9</option>
                                            <option value="10" <?php echo (@$_GET['adults'] == 10 ) ? 'selected="selected"' : ''; ?>>10</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="font-weight-bold" for="gender"><?php echo lang('kids'); ?></label>
                                        <select name="kids" id="country3" class="form-control required">
                                            <option hidden="hidden"><?php echo lang('kids'); ?></option>
                                            <option value="0" <?php echo (@$_GET['kids'] == 0 ) ? 'selected="selected"' : ''; ?>>0</option>         
                                            <option value="1" <?php echo (@$_GET['kids'] == 1 ) ? 'selected="selected"' : ''; ?>>1</option>         
                                            <option value="2" <?php echo (@$_GET['kids'] == 2 ) ? 'selected="selected"' : ''; ?>>2</option>
                                            <option value="3" <?php echo (@$_GET['kids'] == 3 ) ? 'selected="selected"' : ''; ?>>3</option>
                                            <option value="4" <?php echo (@$_GET['kids'] == 4 ) ? 'selected="selected"' : ''; ?>>4</option>
                                            <option value="5" <?php echo (@$_GET['kids'] == 5 ) ? 'selected="selected"' : ''; ?>>5</option>
                                            <option value="6" <?php echo (@$_GET['kids'] == 6 ) ? 'selected="selected"' : ''; ?>>6</option>
                                            <option value="7" <?php echo (@$_GET['kids'] == 7 ) ? 'selected="selected"' : ''; ?>>7</option>
                                            <option value="8" <?php echo (@$_GET['kids'] == 8 ) ? 'selected="selected"' : ''; ?>>8</option>
                                            <option value="9" <?php echo (@$_GET['kids'] == 9 ) ? 'selected="selected"' : ''; ?>>9</option>
                                            <option value="10" <?php echo (@$_GET['kids'] == 10 ) ? 'selected="selected"' : ''; ?>>10</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="room_type" value="<?php echo @$_GET['room_type'] ?>" />
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary pill px-4 py-2" value="<?php echo lang('search') ?>"/>
                                    </div>
                                </div>                               
                            </div>
                        </form>
                    </div>

                    <form class="p-5 bg-white" method="post" action="<?php echo site_url('front/bookrooms/step1') ?>" id="viewform">
                        <?php
                        $nights = GetDays($_GET['date_from'], $_GET['date_to']) - 1;

                        $base_price = get_room_price($_GET['date_from'], $_GET['date_to'], $_GET['room_type'], $_GET['adults'], $_GET['kids']);

                        // echo '<pre>'; print_r($base_price);die;
                        if ($nights == 0) {
                            $nights = 1;
                        }
                        //$amount	=	$room_type->base_price * $_GET['adults'] * $nights;	//old
                        $amount = $base_price['total_price'];
                        $taxamount = get_tax_amount($amount);
                        $amount = rate_exchange($amount);

                        $taxamount = rate_exchange($taxamount);
                        $total = $amount + $taxamount;
                        ?>

                        <input type="hidden"  name="date_from" value="<?php echo $_GET['date_from'] ?>" id="date_from" />
                        <input type="hidden"  name="date_to" value="<?php echo $_GET['date_to'] ?>"   id="date_to" />
                        <input type="hidden"  name="check_in_time" value="<?php echo $_GET['check_in_time'] ?>" id="check_in_time" />
                        <input type="hidden"  name="check_out_time" value="<?php echo $_GET['check_out_time'] ?>" id="check_out_time" />
                        <input type="hidden"  name="adults" value="<?php echo $_GET['adults'] ?>"  id="adults"/>
                        <input type="hidden"  name="kids" value="<?php echo $_GET['kids'] ?>" />
                        <input type="hidden"  name="room_type" value="<?php echo $_GET['room_type'] ?>" />
                        <input type="hidden"  name="nights" value="<?php echo $nights ?>" id="nights" />
                        <input type="hidden"  name="total" value="<?php echo $total; ?>" id="total" />

                        <table class="table table-striped table-hover">
                            <?php if (count($this->front_user) > 0) { ?>
                                <tr>
                                    <th class="col-md-3 col-sm-6"><?php echo lang('full_name') ?></th>
                                    <td class="table-active col-md-9 col-sm-6"><?php echo $this->front_user['firstname'] ?> <?php echo $this->front_user['lastname'] ?></td>
                                </tr>
                            <?php } ?>	
                            <tr>
                                <th><?php echo lang('number_of_rooms') ?></th>
                                <td>1</td>
                            </tr>
                            <tr>
                                <th><?php echo lang('adults') ?></th>
                                <td><?php echo @$_GET['adults']; ?></td>
                            </tr>
                            <tr>
                                <th><?php echo lang('kids') ?></th>
                                <td><?php echo @$_GET['kids']; ?></td>
                            </tr>
                            <tr>
                                <th><?php echo lang('nights') ?></th>
                                <td><?php echo $nights; ?></td>
                            </tr>
                            <tr>
                                <th><?php echo lang('check_in_time') ?></th>
                                <td><?php echo $_GET['check_in_time']; ?></td>
                            </tr>
                            <tr>
                                <th><?php echo lang('check_out_time') ?></th>
                                <td><?php echo $_GET['check_out_time']; ?></td>
                            </tr>
                            <tr>
                                <th><?php echo lang('price_per_night') ?></th>
                                <td>
                                    <table width="100%" border="0">
                                        <tr>
                                            <th>#</th>
                                            <th><?php echo lang('date'); ?></th>
                                            <td align="right"><b><?php echo lang('price'); ?></b></td>
                                            <?php if ($base_price['additional_person_amount'] > 0) { ?>
                                                <td align="center"><b><?php echo lang('addi_person'); ?></b></td>
                                                <td><b><?php echo lang('total') ?></b></td>
                                            <?php } ?>

                                        </tr>
                                        <?php
                                        $i = 1;
                                        foreach ($base_price['price_details'] as $key => $val) {
                                            ?>
                                            <tr>
                                                <td><?php echo $i ?>.</td>
                                                <td><?php echo date_convert($key); ?></td>
                                                <td align="right"><?php echo $this->setting->currency_symbol; ?>  <?php echo rate_exchange($val['price']) ?></td>
                                                <?php if ($val['add_person'] > 0) { ?>
                                                    <td align="center"><?php echo $val['add_person']; ?> &times;  <?php echo $this->setting->currency_symbol; ?> <?php echo rate_exchange($val['add_person_price']); ?> =	<?php echo rate_exchange($val['add_person_price'] * $val['add_person']); ?></td>
                                                    <td>  <?php echo $this->setting->currency_symbol; ?> <?php echo rate_exchange($val['price'] + $val['add_person_price'] * $val['add_person']) ?></td>
                                                <?php } ?>

                                            </tr>
                                            <?php
                                            $i++;
                                        }
                                        ?>
                                        <tr>
                                            <td></td>
                                            <td align=""><b><?php echo lang('total_price') ?></b></td>
                                            <td align="right"> <b> <?php echo $this->setting->currency_symbol; ?> <?php echo rate_exchange($base_price['amount']) ?></b></td>
                                            <?php if ($base_price['additional_person_amount'] > 0) { ?>
                                                <td align="center"><b><?php echo $this->setting->currency_symbol; ?> <?php echo rate_exchange($base_price['additional_person_amount']) ?></b></td>
                                                <td><b><?php echo $this->setting->currency_symbol; ?> <?php echo $amount; ?></b></td>
                                            <?php } ?>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                            <tr>
                                <th><?php echo lang('amount') ?></th>
                                <td><?php echo $this->setting->currency_symbol; ?> <b><?php echo $amount; ?></b></td>
                            </tr>
                            <tr>
                                <th><?php echo lang('taxes') ?></th>
                                <td>

                                    <table width="100%">
                                        <?php
                                        $i = 1;
                                        foreach ($taxes as $t) {
                                            ?>
                                            <tr>
                                                <td><?php echo $i ?>.</td>
                                                <td><?php echo $t->name ?></td>
                                                <td><?php echo ($t->type == 'Fixed') ? $this->session->userdata('currency_sybmol') : '' ?><?php echo $t->rate ?> <?php echo ($t->type == 'Percentage') ? '%' : '' ?></td>
                                                <td>= <?php echo $this->setting->currency_symbol; ?> <?php echo rate_exchange(get_tax_amount_by_tax($t->id, $amount)) ?></td>
                                            </tr>
                                            <?php
                                            $i++;
                                        }
                                        ?>
                                        <tr>
                                            <td colspan="3" align=""><b><?php echo lang('total_tax') ?></b></td>
                                            <td>= <b><?php echo $this->setting->currency_symbol; ?> <?php echo $taxamount ?></b></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <?php if (!empty($services)) { ?>
                                <tr>
                                    <th><?php echo lang('paid_services') ?></th>
                                    <td>
                                        <table width="100%" >
                                            <?php
                                            $i = 1;
                                            foreach ($services as $serv) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $i ?></td>
                                                    <td><?php echo $serv->title ?></td>
                                                    <td><input type="checkbox" name="paid_services[]" value="<?php echo $serv->id ?>" class="paid_service" /></td>
                                                    <td><?php echo $this->setting->currency_symbol; ?> <?php echo rate_exchange($serv->price) ?></td> 
                                                    <td><?php
                                                        $price_type = '';
                                                        if ($serv->price_type == 1) {
                                                            $price_type = lang('per_person');
                                                        }
                                                        if ($serv->price_type == 2) {
                                                            $price_type = lang('per_night');
                                                        }
                                                        if ($serv->price_type == 3) {
                                                            $price_type = lang('fixed_price');
                                                        }
                                                        echo $price_type;
                                                        ?>
                                                    </td>
                                                </tr>
                                                <?php
                                                $i++;
                                            }
                                            ?>
                                        </table>	
                                    </td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <th><?php echo lang('total_amount') ?></th>
                                <th  id="grand_total"><?php echo $this->setting->currency_symbol; ?> <?php echo $total; ?></th>
                            </tr>
                        </table>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-right">
                                    <?php
                                    //echo count($this->front_user);
                                    if (count($this->front_user) > 0) {
                                        ?>
                                        <input type="submit" name="continue" value="<?php echo lang('continue_to_payment') ?>" class="btn btn-primary pill px-4 py-2" />
                                    <?php } else { ?>
    <!--                                        <input type="button" name="continue_login" value="<?php echo lang('continue_login') ?>" data-target="#cs-login" href="#" data-toggle="modal" class="btn btn-primary pill px-4 py-2" />-->
                                        <a target="_blank" class="btn btn-primary pill px-4 py-2" href="<?php echo site_url('front/homepage/loginpage'); ?>">
                                            <?php echo lang('continue_login') ?>
                                        </a>

                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="<?php echo base_url('assets/admin/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>	
<script src="<?php echo base_url('assets/admin/') ?>/plugins/datepicker/bootstrap-datepicker.js"></script>			
<script>
    $(document).ready(function () {
        $('input[type="radio"],input[type="checkbox"]').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
        $("#search_div").hide();
        $("#show_search").click(function () {
            $("#search_div").animate({"opacity": "toggle", top: "202"}, 500);
        });

        $('.paid_service').on('ifChecked', function (event) {
            //alert($(this).val()); // alert value
            var total = $('#total').val();
            var id = $(this).val();
            var nights = $('#nights').val();
            var adults = $('#adults').val();
            var symb = '<?php echo $this->setting->currency_symbol; ?>';
            if (id) {
                call_loader();
                $.ajax({
                    url: '<?php echo site_url('front/bookrooms/add_service_price') ?>',
                    type: 'POST',
                    data: {id: id, total: total, adults: adults, nights: nights},
                    success: function (result) {

                        if (result) {
                            remove_loader();
                            $('#total').val(result);
                            $('#grand_total').text('');
                            $('#grand_total').html(symb + '' + result);
                        }

                    }
                });
            }
        });

        $('.paid_service').on('ifUnchecked', function (event) {
            //alert($(this).val()); // alert value
            var total = $('#total').val();
            var id = $(this).val();
            var nights = $('#nights').val();
            var adults = $('#adults').val();
            var symb = '<?php echo $this->setting->currency_symbol; ?>';

            if (id) {
                call_loader();
                $.ajax({
                    url: '<?php echo site_url('front/bookrooms/less_service_price') ?>',
                    type: 'POST',
                    data: {id: id, total: total, adults: adults, nights: nights},
                    success: function (result) {

                        if (result) {
                            remove_loader();
                            $('#total').val(result);
                            $('#grand_total').text('');
                            $('#grand_total').html(symb + '' + result);
                        }

                    }
                });
            }
        });


        $(function () {
            $('.datepicker1').datepicker({
                todayHighlight: true,
                autoclose: true,
                format: 'yyyy-mm-dd',
                orientation: "bottom",
                startDate: new Date(),
                // endDate : new Date('2014-08-08'),
            }).on('changeDate', function (selected) {
                $('.datepicker2').focus();
            });
            ;
            $('.datepicker2').datepicker({
                todayHighlight: true,
                autoclose: true,
                format: 'yyyy-mm-dd',
                orientation: "bottom",
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