<?php snippet('header') ?>
<div class="container-fluid" style="background-image: url(<?php echo $page->background()->toFile()->url()?>);background-repeat:no-repeat;background-size: cover;background-attachment:fixed;background-size:100% 70%;height:400px" >
</div>
<div class="container-fluid border shadow-sm p-3 my-5 bg-white rounded text-center">
<h1 style="letter-spacing:10px"><?= $page->events_title()->kt()?></h1>
</div>
<!------------------------------------------------- EVETNS ---------------- -->



 <div class="container-fluid"> 
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10">
      <div class="card-columns d-block  text-center "  >
              <?php $i=1;foreach ($page->events()->toStructure() as $team): ?>
        <div class="card p-2  border shadow p-3 mb-5 bg-white rounded" >
              <img style="height:200px;"src="<?php  echo $team->picture()->toFile()->crop(400,400)->url() ?>" class="card-img-top img-fluid " alt="TEAM MEMBER">
                  <div class=" card-body ">
                    <h6><?php  echo $team->name()->kt() ?></h6>
                    <?php  $a='a'.$i ?>
        <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#<?php echo $a ?>">Details</button>

        <!-- Modal -->
                <div class="modal fade" id="<?php echo $a ?>" role="dialog">
                   <div class="modal-dialog modal-lg ">
       <!-- Modal content-->
                      <div class="modal-content">
                            <div class="modal-header">
                               <h4 class="modal-title"><?php  echo $team->name()->kt() ?></h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              
                            </div>
                            <div class="modal-body">
                              <p><?php  echo $team->discription()->kt() ?></p>
                            </div>
                            <div class="modal-body">
                            <?php $images =  $team->pictures()->toFiles(); foreach($images as $image): ?>
                                <img class="img-fluid" src="<?= $image->crop(200,200)->url() ?>" alt="">
                                <?php endforeach ?>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                      </div>
                    </div>
                 </div>
            </div>
          </div>
                 <?php $i++;endforeach ?>
         </div>     
      </div>
      <div class="col-lg-1">
      </div>
  </div>
</div>

 <!--------------------------------------------------------------------------- ----->


<?php snippet('footer') ?>