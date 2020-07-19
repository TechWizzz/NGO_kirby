<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $site->title() ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">   
    <?= css(['assets/css/index.css', 'assets/css/home.css']) ?>
  </head>
  <body><br>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" >
  <a class="navbar-brand" href="home"><img class="img-fluid" src="<?= $site->logo()->tofile()->crop(50,50)->url()?>">phone-pay</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse text-center" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto"  >
    <?php foreach ($site->children()->listed() as $item): ?>
      <a class="nav-item nav-link" style="text-decoration: none !important;" href="<?php echo $item->url()?>"><?php echo $item->title()->upper()?></a>
      <?php endforeach ?>  
    </div>
  </div>
</nav>   