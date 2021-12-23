<!doctype html>
<html lang="en">

<head>
  <title>Book an appointment</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS --><!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>Life Care - Responsive HTML5 Multi Page Template</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>
   <!-- [if lt IE 9] -->
   </head>
   <body class="clinic_version">
      <!-- LOADER -->
      <!-- <div id="preloader">
         <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
      </div> -->
      <!-- END LOADER -->
<?php include 'header.php' ?>
    <div class="my-5"></div>
    <div class="jumbotron bg-primary">Specialties</div>

    
      <!-- footer -->
      <footer id="footer" class="footer-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="logo padding">
                     <a href=""><img src="images/DPClogo.png" alt=""></a>
                     <p>Locavore pork belly scen ester pine est chill wave microdosing pop uple itarian cliche artisan.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footer-info padding">
                     <h3>CONTACT US</h3>
                     <p><i class="fa fa-map-marker" aria-hidden="true"></i> Patel Clinic Door no. 13/B Mittal Court Pune</p>
                     <p><i class="fa fa-paper-plane" aria-hidden="true"></i> info@dpc.com</p>
                     <p><i class="fa fa-phone" aria-hidden="true"></i> (+91) 800 123 456</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="subcriber-info">
                     <h3>SUBSCRIBE</h3>
                     <p>Get healthy news, tip and solutions to your problems from our experts.</p>
                     <div class="subcriber-box">
                        <form id="mc-form" class="mc-form">
                           <div class="newsletter-form">
                              <input type="email" autocomplete="off" id="mc-email" placeholder="Email address" class="form-control" name="EMAIL">
                              <button class="mc-submit" type="submit"><i class="fa fa-paper-plane"></i></button> 
                              <div class="clearfix"></div>
                              <!-- mailchimp-alerts Start -->
                              <div class="mailchimp-alerts">
                                 <div class="mailchimp-submitting"></div>
                                 <!-- mailchimp-submitting end -->
                                 <div class="mailchimp-success"></div>
                                 <!-- mailchimp-success end -->
                                 <div class="mailchimp-error"></div>
                                 <!-- mailchimp-error end -->
                              </div>
                              <!-- mailchimp-alerts end -->
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>


      <div class="copyright-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="footer-text">
                     <p>© 2021 DPC. All Rights Reserved.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="social">
                     <ul class="social-links">
                        <li><a href=""><i class="fa fa-rss"></i></a></li>
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube"></i></a></li>
                        <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end copyrights -->


      
   </body>
</html>
   <link rel="stylesheet" href="css/custom.css">
   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>

  </head>

<body>

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

 

  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 </body>

</html>