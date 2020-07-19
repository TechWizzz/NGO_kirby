<?php snippet('header') ?>
<div class="container-fluid mt-2 p-lg-3 pt-lg-5 pt-5 text-center">
    <h3 style="letter-spacing:10px"><?= $page->donate_title()->kt()?></h3>
 </div>

    
        <div class="container-fluid text-center  p-5  bg-white rounded ">
            <h5 class="text-justify"><?= $page->tagline()->kt() ?></h5>
            <div class="card-group justify-content-center mt-lg-4 p-3 ">
            <?php foreach ($page->bank()->toStructure() as $details): ?>
        
            <div class="card m-4" style="max-width:150px;">
                <?php   $images =  $details->logo()->toFiles(); foreach($images as $image): ?>
                <img  class="img-fluid" src="<?php echo $image->crop(200,200)->url() ?>" alt="">
                <div class="card-body ">
                <p class="card-text"><button class="btn btn-outline-success btn-block"><a style="text-decoration:none ;color:green"href="<?= $details->link()->url() ?>">donate</a></button></p>
                </div>
                <?php endforeach ?>
            </div>
            <?php endforeach ?> 
            </div>
       
    </div>
      

<!-------------------------------------->
<div class="border mt-md-5 pt-3 text-center">
    <h3><?= $page->bank_tagline()->kt()?></h3>
    <br>
    <?= $page->bank_details()->kt()?>
</div>



<?php snippet('footer') ?>