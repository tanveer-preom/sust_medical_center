<!DOCTYPE html>
<!-- saved from url=(0030)http://ims.iitds.win/dashboard -->
<html lang="en" style="overflow-y: hidden;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="shortcut icon" href="http://ims.iitds.win/img/favicon_1.ico">

  <title>Dashboard</title>




  <!-- Bootstrap core CSS -->
  <link media="all" type="text/css" rel="stylesheet" href="./Dashboard - IMS_files/bootstrap.min.css">

  <link media="all" type="text/css" rel="stylesheet" href="./Dashboard - IMS_files/bootstrap-reset.css">



  <!--Animation css-->
  <link media="all" type="text/css" rel="stylesheet" href="./Dashboard - IMS_files/animate.css">

  <link media="all" type="text/css" rel="stylesheet" href="./Dashboard - IMS_files/jquery-ui.css">



  <!--Icon-fonts css-->
  <link media="all" type="text/css" rel="stylesheet" href="./Dashboard - IMS_files/font-awesome.css">

  <link media="all" type="text/css" rel="stylesheet" href="./Dashboard - IMS_files/ionicons.min.css">




  <!--Morris Chart CSS -->
  <link media="all" type="text/css" rel="stylesheet" href="./Dashboard - IMS_files/morris.css">


  <link media="all" type="text/css" rel="stylesheet" href="./Dashboard - IMS_files/jquery.dataTables.min.css">


  <link rel="stylesheet" type="text/css" href="./Dashboard - IMS_files/chosen.css">

  <!-- Custom styles for this template -->
  <link media="all" type="text/css" rel="stylesheet" href="./Dashboard - IMS_files/style.css">

  <link media="all" type="text/css" rel="stylesheet" href="./Dashboard - IMS_files/helper.css">

  <link media="all" type="text/css" rel="stylesheet" href="./Dashboard - IMS_files/toastr.min.css">

  <link media="all" type="text/css" rel="stylesheet" href="./Dashboard - IMS_files/custom.css">



  <style type="text/css">
  .panel{
    /*overflow-x: scroll; */
  }
  .form-control{
    border-radius: 5px;
    border: 1px solid gray;
  }
  #ascrail2001-hr > div{
    background-color: rgb(90, 186, 188) !important;
    height: 10px !important;
    opacity: 1.0 !important;
  }

  #ascrail2002 > div{
    background-color: rgb(90, 186, 188) !important;
    width: 10px !important;
    opacity: 1.0 !important;
  }
</style>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
        <script src="http://ims.iitds.win/js/html5shiv.js"></script>

        <script src="http://ims.iitds.win/js/respond.min.js"></script>


      <![endif]-->

      <script async="" src="./Dashboard - IMS_files/analytics.js.download"></script><script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-62751496-1', 'auto');
        ga('send', 'pageview');

      </script>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
      .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
      }

      .title {
        color: grey;
        font-size: 18px;
      }

      button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #009688;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
      }

      a {
        text-decoration: none;
        font-size: 22px;
        color: black;
      }

      button:hover, a:hover {
        opacity: 0.7;
      }
    </style>




  </head>
  <body class="  pace-done" style=""><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
    <div class="pace-progress-inner"></div>
  </div>
  <div class="pace-activity"></div></div>

  <!-- Aside Start-->
  <aside class="left-panel" tabindex="5000" style="overflow: hidden; outline: none;">

    <!-- brand -->
    <div class="logo">
      <!-- <i class="ion-social-buffer"></i> -->
      <img class="img-responsive" src="./Shahjalal University of Science &amp; Technology_files/logo.png" style="height: 100px;width: 100px;display: block;margin: auto;" alt="">
      <h4 style="text-align: center;">SUST Medical Center</h4>
      <!-- <span class="nav-label">IMS</span> -->
    </div>
    <!-- / brand -->


    <!-- Navbar Start -->
    <nav class="navigation">
      <ul class="list-unstyled">
        <!-- <li><a href="http://ims.iitds.win/home"><i class="ion-grid"></i> <span class="nav-label">Go To Main Site</span></a></li> -->

        <li class="active"><a href="/home"><i class="ion-location"></i> <span class="nav-label">Doctors</span></a>
        </li>

        <li><a href="/appointment"><i class="ion-grid"></i> <span class="nav-label">My Appointments</span></a>
        </li>

        <li><a href="/prescriptions"><i class="ion-grid"></i> <span class="nav-label">Prescriptions</span></a>
        </li>



                    <!-- <li class="has-submenu"><a href="#"><i class="ion-email"></i> <span class="nav-label">Mail</span></a>
                        <ul class="list-unstyled">
                            <li><a href="#">Inbox</a></li>
                            <li><a href="#">Compose Mail</a></li>
                            <li><a href="#">View Mail</a></li>
                        </ul>
                    </li>


                    <li class="has-submenu"><a href="#"><i class="ion-location"></i> <span class="nav-label">Maps</span></a>
                        <ul class="list-unstyled">
                            <li><a href="gmap.html"> Google Map</a></li>
                            <li><a href="vector-map.html"> Vector Map</a></li>
                        </ul>
                      </li> -->

                    </ul>
                  </nav>



                </aside>
                <!-- Aside Ends-->
                <style>
                .list-unstyled-1{
                 padding-left: 20px;
                 background-color: #39404c !important;
               }
             </style>


             <!-- Header -->
             <section class="content">
              <header class="top-head container-fluid">

                <nav class=" navbar-default" role="navigation">


                  <ul class="nav navbar-nav navbar-right top-menu top-right-menu">


                    <!-- user login dropdown start-->
                    <li class="dropdown text-center">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="http://ims.iitds.win/dashboard#">
                        <img alt="" src="./Dashboard - IMS_files/avatar.png" class="img-circle profile-img thumb-sm">
                        <span class="username">{{ $name }}</span> <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                        <li><a href="/logout"><i class="fa fa-sign-out"></i> Log Out</a></li>
                      </ul>
                    </li>
                    <!-- user login dropdown end -->
                  </ul>
                  <!-- End right navbar -->

                </nav>

              </header>


              <!-- Header Ends -->



              <div class="wraper container-fluid">
                <section class="">
                  

                  <?php
                  if($success == true)
                  {
                    echo '<div class="alert alert-success alert-dismissable">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                      <strong>Success!</strong> Your appointment has been created
                    </div>';


                  }
                  ?>
                  <h1>Doctors</h1>
                  <?php
                  $count=0;
                  foreach ($doctors as $doctor) {
                  if($count==0)
                  {
                    echo('<div class="row">');
                    }
                    if($count ==3)
                    {
                      $count=0;
                    echo('</div>
                    <br>
                    <br>'); 
                    echo('<div class="row">');
                     
                    }
                    echo("<div class=\"col-lg-3 col-sm-6\">
                      <div class=\"card\">
                        <form action=\"/make_appointment/$doctor->id\" method=\"GET\"> 
                          <img src=\"$doctor->profile_picture\" alt=\"John\" style=\"width:100%\" >
                          <h3>$doctor->name</h3>
                          <p>$doctor->designation</p>
                          <p><button type=\"submit\">Make Appointment</button></p>
                        </form>
                      </div></div>");  
                      $count++;       


                    }
                  echo('</div>
                  <br>
                  <br>'); 
                  ?>
                  

                </section>
              </div>


              <!-- Footer Start -->

              <!-- Footer Ends -->



            </section>



            <!-- js placed at the end of the document so the pages load faster -->
            <script src="./Dashboard - IMS_files/jquery.js.download"></script>

            <script src="./Dashboard - IMS_files/jquery-ui.js.download"></script>

            <script src="./Dashboard - IMS_files/bootstrap.min.js.download"></script>

            <script src="./Dashboard - IMS_files/pace.min.js.download"></script>

            <script src="./Dashboard - IMS_files/wow.min.js.download"></script>

            <script src="./Dashboard - IMS_files/jquery.nicescroll.js.download"></script>

            <script src="./Dashboard - IMS_files/jquery.app.js.download"></script><div id="ascrail2000" class="nicescroll-rails" style="width: 5px; z-index: auto; cursor: default; position: fixed; top: 0px; left: 245px; height: 710px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(142, 144, 154); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 5px; z-index: auto; top: 705px; left: 0px; position: fixed; cursor: default; display: none;"><div style="position: relative; top: 0px; height: 5px; width: 0px; background-color: rgb(142, 144, 154); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div>

            <script src="./Dashboard - IMS_files/toastr.min.js.download"></script>

            <script src="./Dashboard - IMS_files/chosen.js.download"></script>
            <script type="text/javascript">

              $(document).ready(function(){
//            $('.navigation li.active').find('ul').css('display', 'block');
$('.navigation > li.has-submenu').find('i').toggleClass('fa-plus fa-minus');
$('.panel').niceScroll({
  cursorcolor:"#333333",
  cursorborder: '0px solid #fff',
  cursoropacitymax: '1.0',
  cursoropacitymin: '0.5',
  cursorborderradius: '0px',
  horizrailenabled : false
});
            // $('.navigation .has-submenu a').click(function(){

            //   $(this).find('i').toggleClass('fa-plus fa-minus');
            // });
            $('html').niceScroll({
              cursorcolor:"#333333",
              cursorborder: '0px solid #fff',
              cursoropacitymax: '1.0',
              cursoropacitymin: '0.5',
              cursorborderradius: '0px',
              horizrailenabled : false
            });
            $('.list-unstyled-1').hide();
            $('.navigation li > ul > li.has-submenu').click(function (e) {
//                e.preventDefault();
$(this).find('ul').toggle(300);
$(this).find('i').toggleClass('fa-plus fa-minus');
});
          });

        </script>







        <div id="ascrail2001" class="nicescroll-rails" style="width: 5px; z-index: auto; cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(51, 51, 51); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div></body></html>