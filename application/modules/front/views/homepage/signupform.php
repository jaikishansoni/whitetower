<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                <h2 class="mb-5"><?php echo lang('signup') ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-8 mb-5">
                
                <form action="<?php echo site_url('front/homepage/signup') ?>" class="form-horizontal" id="signup_form" method="post">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"><?php echo lang('firstname') ?></label>
                        <div class="col-sm-10">
                            <input type="text" name="firstname" class="form-control" id="sufirstname" required  autocomplete='on' placeholder="<?php echo lang('firstname') ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"><?php echo lang('lastname') ?></label>
                        <div class="col-sm-10">
                            <input type="text" name="lastname" class="form-control"  id="sulastname" required  autocomplete='on' placeholder="<?php echo lang('lastname') ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"><?php echo lang('email') ?></label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="suemail" placeholder="Email" required  autocomplete='on'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('password') ?></label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" id="supassword" placeholder="Password" required autocomplete='on'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label"><?php echo lang('password_confirm') ?></label>
                        <div class="col-sm-10">
                            <input type="password" name="confirm" class="form-control" id="suconfirm" placeholder="<?php echo lang('password_confirm') ?>" required autocomplete='on'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"><?php echo lang('mobile') ?></label>
                        <div class="col-sm-10">
                            <input type="text" name="mobile" class="form-control" id="sumobile" placeholder="<?php echo lang('mobile') ?>" required  autocomplete='on'>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary pill px-4 py-2 SignupFormSubmit"><?php echo lang('signup') ?></button>
                        </div>
                    </div>
                </form>
                <div class="form-group">
                    <div class="col-sm-offset-10 col-sm-10">
                        <label class="col-sm-10 control-label"><a href="<?php echo site_url('front/homepage/loginform') ?>">Get login into website</a></label>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="p-4 mb-3 bg-white">
                    <h3 class="h5 text-black mb-3">Contact Info</h3>
                    <p class="mb-0 font-weight-bold">Address</p>
                    <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

                    <p class="mb-0 font-weight-bold">Phone</p>
                    <p class="mb-4"><a href="#">+1 232 3235 324</a></p>
                    <p class="mb-0 font-weight-bold">Email Address</p>
                    <p class="mb-0"><a href="#">youremail@domain.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>