<!doctype html>
<html lang="en">
  <head>
    <title>JB Diagnostic Centre</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="backend/css/bootstrap.css">
    <link rel="stylesheet" href="backend/css/animate.css">
    <link rel="stylesheet" href="backend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="backend/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="backend/css/jquery.timepicker.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <header role="banner">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-5">
              <ul class="social list-unstyled">
                <li><a href="https://www.facebook.com"><span class="fa fa-facebook"></span></a></li>
                <li><a href="https://twitter.com"><span class="fa fa-twitter"></span></a></li>
                <li><a href="https://www.instagram.com"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
           
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.html"><span style="font-weight: bold;font-size:35px;">JB </span>Diagnostic Centre  </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="{{URL::to('/dashboard')}}">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link  dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Appointment</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="{{URL::to('/add-b-patient')}}">New Patient</a>
                  <a class="dropdown-item" href="{{URL::to('/display-b-patient')}}">Display</a>
                 
                </div>

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="{{URL::to('/add-doctor')}}">New Doctor</a>
                  <a class="dropdown-item" href="{{URL::to('/display-doctor')}}">Display</a>
                  
                  
                </div>
              </li>
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tests && Reports</a>
                <div class="dropdown-menu" aria-labelledby="dropdown06">
                  <a class="dropdown-item" href="{{URL::to('/add-t-patient')}}">New Patient</a>
                  <a class="dropdown-item" href="{{URL::to('/display-t-patient')}}">Patient Information</a>
                  <a class="dropdown-item" href="{{URL::to('/add-test')}}">New Test</a>
                  <a class="dropdown-item" href="{{URL::to('/display-test')}}">Display TestName</a>
                  
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administration</a>
                <div class="dropdown-menu" aria-labelledby="dropdown07">
                  <a class="dropdown-item" href="{{URL::to('/add-reception')}}">New Receptionist</a>
                  <a class="dropdown-item" href="{{URL::to('/display-reception')}}">Display</a>
                  
                  
                </div>
              </li>
              
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                <div class="dropdown-menu" aria-labelledby="dropdown07">
                  <a class="dropdown-item" href="{{URL::to('/logout')}}">Log Out</a>
                  <a class="dropdown-item" href="{{URL::to('/add-admin')}}">New Admin</a>
                  <a class="dropdown-item" href="{{URL::to('/change-admin')}}">Change (Admin)</a>
                  
                  
                </div>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    <p class="alert-success" style="text-align: center;">
                      <?php

                      $message=Session::get('change_message');
                    
                        if($message){
                           echo $message;
                        
                          Session::put('change_message',null);
                         }
                         ?>
                      </p>
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('img/slider-2.jpg');">
        
        

      </div>

      <div class="slider-item" style="background-image: url('img/slider-1.jpg');">
       
      </div>
      <div class="slider-item" style="background-image: url('img/slider-3.jpg');">
       
      </div>

    </section>

            
        
    <!-- END slider -->

    <script src="backend/js/jquery-3.2.1.min.js"></script>
    <script src="backend/js/popper.min.js"></script>
    <script src="backend/js/bootstrap.min.js"></script>
    <script src="backend/js/owl.carousel.min.js"></script>
    <script src="backend/js/bootstrap-datepicker.js"></script>
    <script src="backend/js/jquery.timepicker.min.js"></script>
    <script src="backend/js/jquery.waypoints.min.js"></script>
    <script src="backend/js/main.js"></script>

  </body>
</html>