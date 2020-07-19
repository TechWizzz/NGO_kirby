<?php snippet('header') ?>
<!------------------------------------------- bacckground image---------------->
<div class="container-fluid" style="background-image: url(<?php echo $page->background()->toFile()->url()?>);background-repeat:no-repeat;background-size: cover;background-attachment:fixed; background-size:100% 70%;height:400px;">
</div>
<!------------------------------contact addresss and number ---------------->
<div class="container-fluid  text-center"><br><br><br>
    <h1 style="letter-spacing:10px;">Contact</h1>
    <div class="row m-lg-4 p-lg-5">
        <div class="col-md-6 mt-3">
            <h3><b><?= $page->contact_number_title()->kt()?></b><h3>
            <?= $page->contact()->kt() ?>
        </div>
        <div class="col-md-6 mt-3">
            <h3><b><?= $page->address_title()->kt()?></b><h3>
             <?= $page->address()->kt() ?>
        </div>
    </div>
</div>
<div class="container-fluid text-center text-white p-5" style=" background-image: linear-gradient(#136a8a,#267871);">
        <h2><?= $page->tagline()->kt() ?></h2>
        <button class="btn btn-danger"><a href="donate" style="text-decoration:none;color:white">DONATE</a></button>
</div>
<!---------------- GOOGLE MAP ------------------------>
<div class='container-fluid'>
    <div class="mapouter embed-responsive embed-responsive-16by9">
    <div class="gmap_canvas">
    <iframe class="embed-responsive-item" id="gmap_canvas" src="https://maps.google.com/maps?q=ready%20bytes%20software%20lab%20bhilwara&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
    </iframe>
    <a href="https://www.pureblack.de">
    </a></div>
    <style>.mapouter{position:relative;text-align:right;height:400px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:800px;}</style></div>
</div>

<!-------------------------------------------------------------->
<?php snippet('footer') ?>