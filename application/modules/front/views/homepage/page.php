<?php
$lang = $this->session->userdata("lang");
if ($lang == "arabic") {

    $description = $page->description_arabic;
    $direction = "rtl";
    $float = "right";
} else {
    $description = $page->description;
    $direction = "";
    $float = "left";
}
?>
<style>
    p{
        text-align:<?php echo $float; ?>;
    }
</style> 
<div class="site-section bg-light">
    <div class="container" style="dir:<?php echo $direction; ?>">
        <div class="row">
            <div class="col-md-12 mx-auto text-center mb-5 section-heading">
                <h2 class="mb-5"><?php echo lang($page->title); ?></h2>
            </div>
            <div class="col-md-12" >
                <div class="panel-body">
                    <p><?php echo $description ?></p>
                </div>
            </div>
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