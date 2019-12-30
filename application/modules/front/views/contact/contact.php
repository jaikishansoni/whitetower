<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                <h2 class="mb-5"><?php echo lang("get_in_touch"); ?></h2>
            </div>
        </div>
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
            <div class="col-md-12 col-lg-8 mb-5">
                <form action="<?php echo site_url('front/contact/save');?>" method="POST" class="p-5 bg-white">
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="name"><?php echo lang("name"); ?></label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="<?php echo lang('name'); ?>">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="email"><?php echo lang("email"); ?></label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="<?php echo lang("email"); ?>">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="phone"><?php echo lang("phone"); ?></label>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="<?php echo lang("phone"); ?>">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="message"><?php echo lang("message"); ?></label> 
                            <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="<?php echo lang("message"); ?>"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Send Message" class="btn btn-primary pill px-4 py-2">
                        </div>
                    </div>


                </form>
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
        <div class="container">
            <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3843.033869021371!2d32.58392471437133!3d15.58983918917867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x168e9179c5ec5f61%3A0xf8531752b7ef267a!2z2YHZhtiv2YIg2KfZhNio2LHYrCDYp9mE2KPYqNmK2LYg2YTZhNi02YLZgiDYp9mE2YXZgdix2YjYtNipIFdoaXRlIFRvd2VyIEhvdGVsIEFwYXJ0bWVudHM!5e0!3m2!1sen!2sin!4v1577529902985!5m2!1sen!2sin"></iframe>
        </div>    
    </div>
</div>