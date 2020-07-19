<!-- Footer -->
<footer class="font-small cyan darken-3" id="footer">
  <!-- Footer Elements -->
  <div class="container">

    <!-- Grid row-->
    <div class="row text-center" >
    <div class="col-lg-2 ">
</div>
          <!-- Grid column -->
        <div class="col-lg-4 p-lg-5" id="footer_element">
        <?php foreach ($site->children()->listed() as $item): ?>
         <a class="nav-item nav-link footer-link" href="<?php echo $item->url()?>"><?php echo $item->title()->upper()?></a>
         <?php endforeach ?>  
  
        </div>
        <div class="col-lg-4 pt-5">
            <h6>FOLLOW US</h6>
            <div class="flex-inline pt-5">
                <a class="fb-ic" href="<?= $site->facebook()?>" style="color:blue;">
                  <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <a class="tw-ic" href="<?= $site->twitter()?>">
                    <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <a class="inc-fb" href="<?= $site->youtube() ?>">
                   <i class="fab fa-youtube fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:red"> </i>
                </a>
                <a class="ins-ic" href="<?= $site->instagram()?>">
                    <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:#e4405f;"> </i>
                </a>
            </div>
        </div>
        <div class="col-lg-2">
</div>
    </div>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
    <?php echo $site->copyright()->kt()?>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>