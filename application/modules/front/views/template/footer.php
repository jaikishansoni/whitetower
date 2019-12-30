<?php
$aboutus = aboutus();
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
    $string .= '... <p><a style="color:#f23a2e;" href="' . base_url() . "/page/about-us" . '">' . lang("read_more") . '</a></p>';
}
?>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white"><?php echo lang('About Us');?></h3>
                <?php echo $string; ?>
            </div>
            <div class="col-md-6">
                <div class="col-md-12">
                    <h3 class="footer-heading mb-4 text-white">
                        <?php echo lang("social_details"); ?>
                    </h3>
                </div>
                <div class="col-md-12">
                    <p>
                        <a href="<?php echo $this->setting->facebook_link; ?>" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                        <a href="<?php echo $this->setting->twitter_link; ?>" class="p-2"><span class="icon-twitter"></span></a>
                        <a href="<?php echo $this->setting->linkedin_link; ?>" class="p-2"><span class="icon-linkedin"></span></a>
                        <a href="#" class="p-2"><span class="icon-vimeo"></span></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <p>
                    Copyright &copy; <script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="icon-heart text-primary" aria-hidden="true"></i> by <a href="javascript:void(0);" target="_blank" >Colorlib</a><br>
                    Managed by - <a href="https://www.facebook.com/groups/382841867393/" target="_blank" >Sharm Elsheikh Real Estate Group</a>                    
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo base_url('assets/front') ?>/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?php echo base_url('assets/front') ?>/js/jquery-ui.js"></script>
<script src="<?php echo base_url('assets/front') ?>/js/popper.min.js"></script>
<script src="<?php echo base_url('assets/front') ?>/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/front') ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url('assets/front') ?>/js/jquery.stellar.min.js"></script>
<script src="<?php echo base_url('assets/front') ?>/js/jquery.countdown.min.js"></script>
<script src="<?php echo base_url('assets/front') ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url('assets/front') ?>/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url('assets/front') ?>/js/aos.js"></script>
<script src="<?php echo base_url('assets/front') ?>/js/mediaelement-and-player.min.js"></script>
<script src="<?php echo base_url('assets/front') ?>/js/main.js"></script>
<script src="<?php echo base_url('assets/front') ?>/js/toastr.min.js"></script>
<script type='text/javascript'>
                        function remove_loader()
                        {
                            $('#overlay1').remove();
                        }
                        function call_loader() {

                            if ($('#overlay1').length == 0) {
                                var over = '<div id="overlay1">' +
                                        '<img  style="padding-top:300px; margin: 0 auto; " class="img-responsive " id="loading" src="http://localhost/correcthotel/assets/admin/dist/img/ajax-loader.gif"></div>';

                                $(over).appendTo('body');
                            }
                        }
                        $("#signup_form").submit(function (event) {
                            event.preventDefault();
                            var form = $(form).closest('form');
                            call_loader();
                            $.ajax({
                                url: SITE_URL + '/front/homepage/signup',
                                type: 'POST',
                                data: $("#signup_form").serialize(),
                                success: function (result) {
                                    //alert(result);return false;
                                    if (result == 1) {
                                        toastr.success('You Signup In Successfully');
                                        window.location.reload()
                                    } else {
                                        remove_loader();
                                        toastr.error(result);
                                        //$('#err').html(result);
                                    }
                                }
                            });
                        });

                        $("#signup_form").validate({
                            rules: {
                                sufirstname: {required: true},
                                sulastname: {required: true},
                                suemail: {required: true, email: true},
                                sumobile: {required: true},
                                supassword: {required: true, minlength: 4},
                                suconfirm: {required: true, equalTo: "#su-password"},
                            }, messages: {
                                sufirstname: {
                                    required: "You must enter firstname",
                                },
                                sulastname: {
                                    required: "You must enter lastname",
                                },
                                suemail: {
                                    required: "You must enter email",
                                },
                                supassword: {
                                    required: "You must enter password",
                                    minlength: "Password must be at least 4 characters long"
                                },
                                suconfirm: {
                                    required: "You must re-enter password ",
                                    equalTo: "Confirm passsword not macthed to Password",
                                },
                                sumobile: {
                                    required: "You must enter mobile",
                                },
                            }, submitHandler: function (form) {
                                form.submit();
                            }
                        });

                        $("#signup_form").validate({
                            submitHandler: function (form) {
                                if ($(form).valid())
                                    form.submit();
                                return false; // prevent normal form posting
                            }
                        });

</script>
<script type="text/javascript">
    $("document").ready(function () {
        function remove_loader()
        {
            $('#overlay1').remove();
        }
        function call_loader() {
            if ($('#overlay1').length == 0) {
                var over = '<div id="overlay1">' +
                        '<img  style="padding-top:300px; margin: 0 auto; " class="img-responsive " id="loading" src="https://www.adventurevideos.in/assets/admin/dist/img/ajax-loader.gif"></div>';
                $(over).appendTo('body');
            }
        }
        $('#signinPageForm').validate({
            ignore: ".ignore",
            rules: {
                email: {
                    required: true
                },
                password: {
                    required: true,
                }
            },
            messages: {
                email: {
                    required: "Please enter your email"
                },
                password: {
                    required: "Please enter password",
                }
            },
            submitHandler: function (form) {
                call_loader();
                $.ajax({
                    type: 'post',
                    dataType: "json",
                    url: SITE_URL + 'front/homepage/login',
                    data: $(form).serialize(),
                    success: function (responseData) {
                        if (responseData.flag == 1) {
                            //$(form).unbind().submit();
                            toastr.success(responseData.msg);
                            location.href = SITE_URL;
                        } else {
                            toastr.error(responseData.msg);
                        }
                    },
                    error: function (responseData) {
                        console.log('Ajax request not recieved!');
                    }
                });
            }
        });
        $("#forgotForm").validate({
            rules: {
                femail: {required: true, email: true},
            }, messages: {
                femail: {
                    required: "You must enter email",
                }
            }, submitHandler: function (form) {
                call_loader();
                $.ajax({
                    type: 'post',
                    dataType: "json",
                    url: SITE_URL + '/front/homepage/get_password_link',
                    data: $(form).serialize(),
                    success: function (responseData) {
                        if (responseData.flag == 1) {
                            $(form).unbind().submit();
                            toastr.success(responseData.msg);
                            setTimeout(function () {
                                location.href = SITE_URL + '/front/homepage/loginpage';
                            }, 3000);
                        } else {

                            toastr.error(responseData.msg);
                            setTimeout(function () {
                                location.href = SITE_URL + '/front/homepage/loginpage';
                            }, 3000);

                        }
                    },
                    error: function (responseData) {
                        console.log('Ajax request not recieved!');
                    }
                });
            }
        });

//        $("#forgotForm").validate({
//            submitHandler: function (form) {
//                if ($(form).valid())
//                    form.submit();
//                return false;
//            }
//        });
//        $("#forgotForm").submit(function (event) {
//            event.preventDefault();
//            var form = $(form).closest('form');
//            call_loader();
//            $.ajax({
//                url: SITE_URL + '/front/homepage/get_password_link',
//                type: 'POST',
//                dataType: "json",
//                data: $("#forgotForm").serialize(),
//                success: function (result) {
//                    if (result == 1)
//                    {
//                        remove_loader();
//                        $('#cs-forgot').modal('toggle');
//
//                        setTimeout(function () {
//                            toastr.success('Password Reset Link Sent To Email');
//                        }, 3000);
//                        //location.href = SITE_URL + '/front/homepage/loginpage';
//                    } else
//                    {
//                        remove_loader();
//                        setTimeout(function () {
//                            toastr.error('Email Not Found');
//                        }, 3000);
//                        //location.href = SITE_URL + '/front/homepage/loginpage';
//                    }
//
//                }
//            }
//            );
//        });
    });
</script>

<?php
if (function_exists('validation_errors') && validation_errors() != '') {
    $error = validation_errors();
}
if ($this->session->flashdata('message')):
    ?>
    <script>
        toastr.success("<?php echo preg_replace("/\r|\n/", "", strip_tags($this->session->flashdata('message'))); ?>");
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>
    <script>
        toastr.error("<?php echo preg_replace("/\r|\n/", "", strip_tags($this->session->flashdata('error'))); ?>");
    </script>
<?php endif; ?>

<?php if (!empty($error)): ?>
    <script>
        toastr.error("<?php echo preg_replace("/\r|\n/", "", strip_tags($error)); ?>");
    </script>
<?php endif; ?>
<script async data-id="22035" src="https://cdn.widgetwhats.com/script.min.js"></script>
</body>
</html>