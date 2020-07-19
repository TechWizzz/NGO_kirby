<?php snippet('header') ?>
<!------------------------------------- HEADER ----------------------------->
    <div class="container-fluid text-center pt-5" style="background-image:url(<?php echo $page->background()->toFile()->url()?>) ;background-repeat:no-repeat;background-size: cover;background-attachment:fixed;background-size:100% 70%;height:400px"><br><br>
        <br>
        <h3 style='color:white;' ><?= $page->backgroundtext()->kt() ?></h3>
        <button type="button" class="btn btn-success "><a href="donate" style="text-decoration:none;color:white;">Donate</a></button>
        <br>
    </div>
    <div class="container-fluid text-center mt-3 ">
        <h1><b><?= $page->metatitle()->kt()?></b></h1>
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6 p-2 text-center" id="metadescription" >
            <h5 class="text-justify"><?= $page->metadatadescription()->kt()?></h5>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
    </div>
<!--------------------------VISION MISSION------------------------------------------------->
        <div class="container-fluid  mt-5 text-center">
           
            <h2><b><?= $page->vision_mission_title()->kt() ?></b></h2>
            
            <div class="row">
            <div class='col-lg-2'>
            </div>
            <div class='col-lg-4 '>
                <img class="img-fluid shadow p-2 mb-2 bg-white rounded h-100" src="<?php echo $page->vision_mission_image()->toFile()->url() ?>" style="  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.19);"/>
            </div>
            <div class='col-lg-4 pt-3' >
            <?= $page->vision_mission()->kt() ?>
            </div>
            <div class='col-lg-2'>
            </div>   
</div>
        </div>
<!---------------------- HOME BLOCK CONTENT ------------>
    <div class=" mt-2 text-center p-5" id="home_block">
        <h4 class="text-white"><?= $page->slogan()->kt() ?></h4>
    </div>
    <!-------------------our work ---- -->
    
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
            <h1 class="text-center text-justify"><b><?= $page->our_work_title()->kt() ?><b></h1>
            <h4 class="text-justify"><?= $page->our_work_content()->kt() ?></h4>
            <img class="shadow p-3 mb-3 bg-white rounded img-fluid" src="<?php echo $page->work_image()->toFile()->url() ?>"/>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div> 
 
<?php snippet('footer') ?>
