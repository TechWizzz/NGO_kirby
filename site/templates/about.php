<?php snippet('header') ?>
<!-------------------- BACKGROUND IMAGE ON TOP ----------------------->
<div class="container-fluid" style="background-image: url(<?php $i='background_image';echo $page->$i()->toFile()->url()?>);background-repeat:no-repeat;background-size: cover;background-attachment:fixed;background-size:100% 70%; min-height:300px; ">
</div>
<!-------------- ABOUT US BLOCK   ------------------------------------>
<div class="container-fluid py-5">
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-5 text-center">
      <img class='img-fluid shadow-lg p-3 mb-5 bg-white rounded' src="<?php echo $page->about_image()->toFile()->url() ?>"/>
    </div>
    <div class="col-lg-5 mt-2">
     <h2 class="text-center"><b><?= $page->about_title()->kt() ?></b></h2>
     <h6 class="text-justify"><?= $page->about_content()->kt() ?></h6>
    </div>
    <div class="col-lg-1">
    </div>
  </div>
</div>
<!--- HISTORY BLOCK --------------------------  -->
<div class="container-fluid text-white " style=" background: linear-gradient(rgba(255,255,255,.2), rgba(255,255,255,.2)),  url(<?php echo $page->bg_img_history()->toFile()->crop(500,600)->url()?>);background-repeat:no-repeat;background-size: cover;background-attachment:fixed;">
    <div class="p-lg-5 text-justify text-center">
      <h3><b><?= $page->history_title()->kt() ?></b></h3>
      <b><?= $page->history()->kt() ?></b></div>
</div>
<!---------------------TEAM ------------------------ -->
<div class="conatainer-fluid py-4 text-center">
  <h1 style="letter-spacing:10px;"><?= $page->team_title()->kt() ?></h1>
</div>

<div class="container-fluid ">
    <div class="row">
      <div class="col-lg-2">
      </div>
      <div class="col-lg-8">
        <div class="card-columns d-block  text-center " >
          <?php foreach ($page->team()->toStructure() as $team): ?>
          <div class="card   border shadow  mb-5 bg-white rounded" >
     
            <img src="<?php  echo $team->pic()->toFile()->crop(400,400)->url() ?>" class="card-img-top img-fluid  " alt="TEAM MEMBER">
            <div class="card-body bg-danger">
              <h6 class="card-title text-center text-white"><?= $team->name()->kt() ?></h6>
              <h6 class="card-title text-center text-white"><?= $team->designation()->kt() ?></h6>
            </div>
          </div> 
            <?php endforeach ?>
        </div>
      </div>
      <div class="col-lg-2">
      </div>
  </div>
</div>

<!------------------------------------------------------->
<!-- Example split danger button -->



<?php snippet('footer') ?>
  