<!doctype html>
<html lang="en">

<head>
  <title>Book an appointment</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <?php include 'header.php' ?>
  <!-- Csgve Page Title, Csgve Parallax -->
  <div class="csgve-page-title csgve-parallax padding-none " style="">
    <div class="csgve-overlay-pattern" style="background-color:rgba(52,129,219,0.5);"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h2 class="page-title"><?php echo "hello"; ?></h2>
        </div>
        <div class="col-md-4">
          <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs"></nav>
        </div>
      </div>
    </div>
  </div>
<?php 
    $sp="SELECT * FROM specialty";
    $spr=mysqli_query($con,$sp);
?>
  <div class="container my-5">
    <h2 class="">Book Doctor Consultation and Health Package</h2>
    <div id="accordion">
<?php while($sprd=mysqli_fetch_array($spr)){ ?>
  <div class="card">
    <div class="card-header">
      <a class="card-link" data-toggle="collapse" href="#collapse<?= $sprd[0]?>">
        <?= $sprd[1]?>
      </a>
    </div>
    <div id="collapse<?= $sprd[0]?>" class="collapse" data-parent="#accordion">
      <div class="card-body">
        <?php
        $dr="SELECT * FROM doctors WHERE speciality='$sprd[1]'";
        $drr=mysqli_query($con,$dr);
        while($drd=mysqli_fetch_array($drr)){
        ?>
        
        <div class="card">
          <div class="card-body"><?=$drd[1]?></div>
        </div>
        
        <?php } ?>
      </div>
    </div>
  </div>
<?php } ?>

</div>
</div>

 

  <?php include 'footer.php' ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>