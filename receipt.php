<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body onload="pr()">
  <?php require 'common.php';
    $id=$_GET['id'];
    $qr="SELECT * FROM patients WHERE id='$id'";
    $qrr=mysqli_query($con,$qr);
    $data=mysqli_fetch_array($qrr);
  
  ?>
      <div class="container card my-5">
        <div class=""></div>
        <img src="images/DPClogo.png" alt="" class="float-left"><br>
        <hr>
        <p><span class="float-left font-weight-bold">Name:</span><span class="float-right"><?=$data[1]?></span></p>
        <p><span class="float-left font-weight-bold">Age:</span><span class="float-right"><?=$data[8]?></span></p>
        <p><span class="float-left font-weight-bold">Gender:</span><span class="float-right"><?=$data[8]?></span></p>
        <p><span class="float-left font-weight-bold">Problem:</span><span class="float-right"><?=$data[7]?></span></p>
        <p><span class="float-left font-weight-bold">Appointment Date:</span><span class="float-right"><?=$data[5]?></span></p>
        <p><span class="float-left font-weight-bold">Address:</span><span class="float-right"><?=$data[3]?></span></p>
        <p><span class="float-left font-weight-bold">Payment:</span><span class="float-right"><?="Done!"?></span></p>
        
       
       </div>
      <script>
          function pr(){
              window.print();
              // window.location='';
          }
      </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
