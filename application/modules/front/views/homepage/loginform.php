<div class="site-section bg-light">
    <div class="container">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- white tower login page -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-8740818498061987"
             data-ad-slot="5692289502"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <div class="row">
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                <h2 class="mb-5"><?php echo lang('sign_in') ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-8 mb-5">
                <form class="form-horizontal" method="POST" id="signinPageForm">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"><?php echo lang('email') ?></label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="email form-control" id="inputEmail3" placeholder="Email" autocomplete='off'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('password') ?></label>
                        <div class="col-sm-10">
                            <input type="password" name="password" autocomplete='off' class="password form-control" placeholder="Password" autocomplete='off'>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary pill px-4 py-2"><?php echo lang('sign_in') ?></button>
                            <button type="button" class="btn btn-primary pill px-4 py-2" data-dismiss="modal" data-target="#cs-forgot" data-toggle="modal" ><?php echo lang('i_forgot_my_password') ?></button>
                        </div>
                    </div>
                </form>
                <div class="form-group">
                    <div class="col-sm-offset-10 col-sm-10">
                        <label class="col-sm-10 control-label">
                            <a data-target="#cs-signup" href="#" data-toggle="modal" >Dont't have account ? Create New.</a>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="p-4 mb-3 bg-white">
                    <h3 class="h5 text-black mb-3">Contact Info</h3>
                    <p class="mb-0 font-weight-bold"><?php echo lang("address"); ?></p>
                    <p class="mb-4"><?php echo $this->setting->address; ?></p>

                    <p class="mb-0 font-weight-bold"><?php echo lang("phone"); ?></p>
                    <p class="mb-4"><a href="#"><?php echo $this->setting->phone; ?></a></p>
                    <p class="mb-0 font-weight-bold"><?php echo lang("other_phone"); ?></p>
                    <p class="mb-4"><a href="#"><?php echo $this->setting->other_phone; ?></a></p>
                    <p class="mb-0 font-weight-bold"><?php echo lang("email"); ?></p>
                    <p class="mb-0"><a href="#"><?php echo $this->setting->email; ?></a></p>
                </div> 
            </div>
        </div>
    </div>
</div>
<div id="cs-forgot" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header header-panal">
                <h4 class="modal-title text-center"><?php echo lang('i_forgot_my_password') ?></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="forgotForm">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"><?php echo lang('email') ?></label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="femail" placeholder="Email" required  autocomplete='off'>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary pill px-4 py-2"><?php echo lang('get_reset_password_link') ?></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer" style="background-color:rgba(0, 173, 138, 0.06);">
                <button type="button" class="btn btn-primary pill px-4 py-2" data-dismiss="modal"><?php echo lang('close') ?></button>
            </div>
        </div>
    </div>
</div>