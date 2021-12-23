
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPC</title>
    <link rel="shortcut icon" href="images/DPClogo.png" type="image/x-icon" />

    <style>
        body{
            background-color: ;
        }
    </style>
</head>
<body>
    <?php include 'header.php' ?>

    <div id="service" class="services wow fadeIn" style="margin-top:170px;">
         <div class="container">
            <div class="row ">
               <div class="col-md-6">
                   <p class="h1 " style="color: white;">Fill this form to complete the appointment</p>
               </div>
               <div class="col-sm-6 col-xs-12" >
                  <div class="appointment-form">
                     <h3><span>+</span> Book Appointment</h3>
                     <div class="form">
                        <form action="receipt.php" method="POST">
                           <fieldset>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="text" id="name" placeholder="Your Name" name="name" />
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="email" placeholder="Email Address" id="email" name="email"/>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="text" placeholder="Contact No." id="contact" name="contact"/>
                                    </div>
                                 </div>
                              </div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="text" placeholder="Your Address" id="address" name="address"/>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 select-section">
                                 <div class="row">
                                    <div class="form-group">
                                    <input type="date" placeholder="Date" id="date" name="date"/>
                                    </div>
                                    <div class="form-group">
                                    <input type="time" placeholder="Time" id="time" name="time"/>
                                    </div>
                                 </div>
                              </div>
                             
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <textarea rows="4" id="textarea_message" class="form-control" placeholder="Your Message..." name="problem"></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <div class="center"><button type="submit">Submit</button></div>
                                    </div>
                                 </div>
                              </div>
                           </fieldset>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      

</body>
</html>