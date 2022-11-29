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

   <!-- start: CSS -->
  <link id="bootstrap-style" href="login/css/bootstrap.min.css" rel="stylesheet">
  <link href="login/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link id="base-style" href="login/css/style.css" rel="stylesheet">
  <link id="base-style-responsive" href="login/css/style-responsive.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
  <!-- end: CSS -->
  
    <!-- Theme Style -->
    <link rel="stylesheet" href="backend/css/style.css">
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
            <div class="col-md-6 col-sm-6 col-7 text-right">
              <b class="mb-0">
                          <a class="nav-link" href="{{URL::to('/dashboard')}}"><u>Back To Home</u></a></b>
            </div>
          </div>
        </div>
      </div>
     
    </header>
    <!-- END header -->
    
     <p class="alert-success" style="text-align: center;">
                      <?php

                      $message=Session::get('delete_message');
                    
                        if($message){
                           echo $message;
                        
                          Session::put('delete_message',null);
                         }
                         ?>
                      </p>

                       <p class="alert-success" style="text-align: center";>
                      <?php

                      $message=Session::get('update_message');
                    
                        if($message){
                           echo $message;
                        
                          Session::put('update_message',null);
                         }
                         ?>
                      </p>
   

    <div class="row-fluid sortable">    
        <div class="box span12">
          <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span></h2>
            
          </div>
          <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                <tr>
                  <th>Doctor Name</th>
                  <th>Designation</th>
                  <th>Specialist</th>
                  <th>Fees</th>
                  <th>Actions</th>
                </tr>
              </thead> 

             @foreach($all_doctor_info as $d_doctor)
              <tbody>
              <tr>
                <td>{{$d_doctor->doctor_name}}</td>
                <td class="center">{{$d_doctor->qualification}}</td>
                <td class="center">{{$d_doctor->specialist}}</td>
                 <td class="center">{{$d_doctor->doctor_fees}}</td>
                 <td class="center">
                  <a class="btn btn-info" href="{{URL::to('/update-doctor/'.$d_doctor->doctor_id)}}">
                    <i class="halflings-icon white edit"></i>  
                  </a>
                  <a class="btn btn-danger" href="{{URL::to('/delete-doctor/'.$d_doctor->doctor_id)}}" id="delete">
                    <i class="halflings-icon white trash"></i> 
                  </a>
                </td>
                              
              </tr>
              
             </tbody>
            @endforeach
            </table>            
          </div>
        </div><!--/span-->
      
      </div><!--/row-->

    <script src="backend/js/jquery-3.2.1.min.js"></script>
    <script src="backend/js/popper.min.js"></script>
    <script src="backend/js/bootstrap.min.js"></script>
    <script src="backend/js/owl.carousel.min.js"></script>
    <script src="backend/js/bootstrap-datepicker.js"></script>
    <script src="backend/js/jquery.timepicker.min.js"></script>
    <script src="backend/js/jquery.waypoints.min.js"></script>
    <script src="backend/js/main.js"></script>
    <!-- start: JavaScript-->

    <script src="login/js/jquery-1.9.1.min.js"></script>
  <script src="login/js/jquery-migrate-1.0.0.min.js"></script>
  
    <script src="login/js/jquery-ui-1.10.0.custom.min.js"></script>
  
    <script src="login/js/jquery.ui.touch-punch.js"></script>
  
    <script src="login/js/modernizr.js"></script>
  
    <script src="login/js/bootstrap.min.js"></script>
  
    <script src="login/js/jquery.cookie.js"></script>
  
    <script src='login/js/fullcalendar.min.js'></script>
  
    <script src='login/js/jquery.dataTables.min.js'></script>

    <script src="login/js/excanvas.js"></script>
  <script src="login/js/jquery.flot.js"></script>
  <script src="login/js/jquery.flot.pie.js"></script>
  <script src="login/js/jquery.flot.stack.js"></script>
  <script src="login/js/jquery.flot.resize.min.js"></script>
  
    <script src="login/js/jquery.chosen.min.js"></script>
  
    <script src="login/js/jquery.uniform.min.js"></script>
    
    <script src="login/js/jquery.cleditor.min.js"></script>
  
    <script src="login/js/jquery.noty.js"></script>
  
    <script src="login/js/jquery.elfinder.min.js"></script>
  
    <script src="login/js/jquery.raty.min.js"></script>
  
    <script src="login/js/jquery.iphone.toggle.js"></script>
  
    <script src="login/js/jquery.uploadify-3.1.min.js"></script>
  
    <script src="login/js/jquery.gritter.min.js"></script>
  
    <script src="login/js/jquery.imagesloaded.js"></script>
  
    <script src="login/js/jquery.masonry.min.js"></script>
  
    <script src="login/js/jquery.knob.modified.js"></script>
  
    <script src="login/js/jquery.sparkline.min.js"></script>
  
    <script src="login/js/counter.js"></script>
  
    <script src="login/js/retina.js"></script>

    <script src="login/js/custom.js"></script>
  <!-- end: JavaScript-->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script> 
 
  <script>

 $(document).on("click","#delete",function(e){

  e.preventDefault();

  var link =$(this).attr("href");

    bootbox.confirm("Are You Want to Delete!!",function(confirmed){
      
      if (confirmed){

              window.location.href =link;
         };
     });
  });

</script>

  </body>
</html>