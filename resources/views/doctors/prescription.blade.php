<!DOCTYPE html>
<!-- saved from url=(0030)http://ims.iitds.win/dashboard -->
<html lang="en" style="overflow-y: hidden;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="shortcut icon" href="http://ims.iitds.win/img/favicon_1.ico">

  <title>Create Prescription</title>




  <!-- Bootstrap core CSS -->
  <link media="all" type="text/css" rel="stylesheet" href="/Dashboard - IMS_files/bootstrap.min.css">

  <link media="all" type="text/css" rel="stylesheet" href="/Dashboard - IMS_files/bootstrap-reset.css">


  <link media="all" type="text/css" rel="stylesheet" href="/css/jquery.dataTables.min.css">
  <!--Animation css-->
  <link media="all" type="text/css" rel="stylesheet" href="/Dashboard - IMS_files/animate.css">

  <link media="all" type="text/css" rel="stylesheet" href="/Dashboard - IMS_files/jquery-ui.css">



  <!--Icon-fonts css-->
  <link media="all" type="text/css" rel="stylesheet" href="/css/font-awesome.css">

  <link media="all" type="text/css" rel="stylesheet" href="/css/ionicons.min.css">




  <!--Morris Chart CSS -->
  <link media="all" type="text/css" rel="stylesheet" href="/Dashboard - IMS_files/morris.css">


  <link media="all" type="text/css" rel="stylesheet" href="/Dashboard - IMS_files/jquery.dataTables.min.css">


  <link rel="stylesheet" type="text/css" href="/Dashboard - IMS_files/chosen.css">

  <!-- Custom styles for this template -->
  <link media="all" type="text/css" rel="stylesheet" href="/Dashboard - IMS_files/style.css">

  <link media="all" type="text/css" rel="stylesheet" href="/Dashboard - IMS_files/helper.css">

  <link media="all" type="text/css" rel="stylesheet" href="/Dashboard - IMS_files/toastr.min.css">

  <link media="all" type="text/css" rel="stylesheet" href="/Dashboard - IMS_files/custom.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="/js/jquery.dataTables.min.js"></script>


  
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

      <script async="" src="/Dashboard - IMS_files/analytics.js.download"></script><script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-62751496-1', 'auto');
        ga('send', 'pageview');

      </script>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
      hr {
        border: 0;
        clear:both;
        display:block;
        width: 96%;               
        background-color:#000000;
        height: 1px;
      }


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
      <img class="img-responsive" src="/Shahjalal University of Science &amp; Technology_files/logo.png" style="height: 100px;width: 100px;display: block;margin: auto;" alt="">
      <h4 style="text-align: center;">SUST Medical Center</h4>
      <!-- <span class="nav-label">IMS</span> -->
    </div>
    <!-- / brand -->


    <!-- Navbar Start -->
    <nav class="navigation">
      <ul class="list-unstyled">
        <!-- <li><a href="http://ims.iitds.win/home"><i class="ion-grid"></i> <span class="nav-label">Go To Main Site</span></a></li> -->

        <li><a href="/home"><i class="ion-location"></i> <span class="nav-label">Dashboard</span></a>
        </li>

        <li  class="active"><a href="/appointment"><i class="ion-grid"></i> <span class="nav-label">Today's  Appointments</span></a>
        </li>

        <li><a href="/prescriptions"><i class="ion-grid"></i> <span class="nav-label">Upcoming Appointments</span></a>
        </li>

        <li><a href="/prescriptions"><i class="ion-grid"></i> <span class="nav-label">Manage Prescriptions</span></a>
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
                        <img alt="" src="/a0.jpg" class="img-circle profile-img thumb-sm">
                        <span class="username">Dr Md Mahbub Ahmed</span> <span class="caret"></span>
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

              <div>
                <section style="margin: 40px" class="">
                  <h2 >Create Prescription</h2>
                  <br>
                  <p><b>Patient Name : </b>Tanveer Preom</p>
                  <p><b>Age : </b>24</p>
                  <form class="form-inline" role="form">           
                  <b>Weight : </b><input type="text" class="form-control input-lg" id="weight" placeholder="Optional" style="width: 200px;height: 35px">
                  <b>&nbsp&nbsp&nbsp Height : </b><input type="text" class="form-control input-lg" id="height" placeholder="Optional" style="width: 200px;height: 35px">           
                  </form>
                  <h3 style="margin-top: 40px">Description : </h3>
                  <textarea class="form-control" rows="10" id="description"></textarea>
                  <h3 style="margin-top: 40px">Tests : </h3>
                  <textarea class="form-control" rows="10" id="tests"></textarea>
                  <h3 style="margin-top: 40px">Medications : </h3>
                  <style>

                  table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 70%;
                    margin-top: 40px;

                  }

                  td, th {
                    border: 1px solid #dddddd;
                    text-align: center;
                    padding: 8px;
                    
                  }

                  tr:nth-child(even) {
                    background-color: #dddddd;
                  }
                </style>

                <table id="medicine_table">
                  <tr>
                    <th>Name</th>
                    <th>Days To Take</th>
                    <th>Morning</th>
                    <th>Evening</th>
                    <th>Night</th>
                    <th>Action</th>
                  </tr>
                  
                </table>
                <button class="btn btn-primary" onclick="onAddClicked()"  data-toggle="modal" style="margin-top: 10px;width: 200px">Add new medicine</button> <br><br><br>
                <button  class="btn btn-primary" onclick="onSubmitClicked()" data-toggle="modal"  style="background-color: #009688;width: 300px;height: 35px;text-align: center;margin: auto;display: block;"> Create Prescription</button>

                <script>

                    function onDeleteMedicine(index)
                    {
                      var medicines = document.getElementById("medicine_table");
                      medicines.deleteRow(index);
                    }

                    function onAddClicked() {
                      var medicines = document.getElementById("medicine_table");
                      var rowCount = medicines.getElementsByTagName("tr").length;
                      var row = medicines.insertRow(rowCount);
                      var cell0 = row.insertCell(0);
                      var cell1 = row.insertCell(1);
                      var cell2 = row.insertCell(2);
                      var cell3 = row.insertCell(3);
                      var cell4 = row.insertCell(4);
                      var cell5 = row.insertCell(5);
                      cell0.innerHTML = '<input type="text" class="form-control input-lg" id="search-church" placeholder="" style="width: 300px;height: 35px;text-align: center;">';
                      cell1.innerHTML = '<input type="text" class="form-control input-lg" id="search-church" placeholder="" style="width: 100px;height: 35px;text-align: center;">';
                      cell2.innerHTML = '<input type="text" class="form-control input-lg" id="search-church" placeholder="" style="width: 100px;height: 35px;text-align: center;">';
                      cell3.innerHTML = '<input type="text" class="form-control input-lg" id="search-church" placeholder="" style="width: 100px;height: 35px;text-align: center;">';

                      cell4.innerHTML = '<input type="text" class="form-control input-lg" id="search-church" placeholder="" style="width: 100px;height: 35px;margin-left: 8px;text-align: center;">';
                      cell5.innerHTML = '<button class="btn btn-primary"   onclick="onDeleteMedicine('+rowCount+')"  data-toggle="modal" style="margin-top: 10px;width: 100px;background-color: #ff0000">Remove</button>';

                    }


                  function onSubmitClicked()
                  {
                      var weight = document.getElementById("weight").value;
                      var height = document.getElementById("height").value;
                      //var age = document.getElementById("weight").value;
                      var description = document.getElementById('description').value;
                      var tests = document.getElementById('tests').value;
                      var medicines = document.getElementById("medicine_table");
                      var rowCount = medicines.getElementsByTagName("tr").length;
                      var medications = "";
                      for(var i=1;i<rowCount;i++)
                      {
                          medications+= medicines.rows[i].cells[0].children[0].value+"\n( "+medicines.rows[i].cells[2].children[0].value+" + "+medicines.rows[i].cells[3].children[0].value+" + "+medicines.rows[i].cells[4].children[0].value+")\nDays To Take : "+medicines.rows[i].cells[1].children[0].value+"\n\n"
                          
                      }
                      
                      var form = document.createElement("form");
                      var weightElement = document.createElement("input"); 
                      var heightElement = document.createElement("input");
                      var descriptionElement = document.createElement("input");
                      var testsElement = document.createElement("input");
                      var medicationElement = document.createElement("input"); 
                      var token = document.createElement("input"); 

                      form.method = "POST";
                      form.action = "/prescription/submit";   

                      weightElement.value= weight;
                      heightElement.value= height;
                      descriptionElement.value= description;
                      testsElement.value= tests;
                      medicationElement.value= medications;
                      token.value = '{{ csrf_token() }}';

                      weightElement.name= 'weight';
                      heightElement.name= 'height';
                      descriptionElement.name= 'description';
                      testsElement.name= 'tests';
                      medicationElement.name= 'medicines';
                      token.name='_token';
                      

                      form.appendChild(weightElement); 
                      form.appendChild(heightElement);  
                      form.appendChild(descriptionElement);  
                      form.appendChild(testsElement);  
                      form.appendChild(medicationElement); 
                      form.appendChild(token);  

                      document.body.appendChild(form);

                      form.submit();  

                  }

                </script>


              </section>
            </section>
            <!-- Modal -->

  <!-- Modal -->
  <div class="modal fade" id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
        </div>
        <div class="modal-body">
          Are you sure to delete?
        </div>
        <div class="modal-footer">
          <form method="POST" action="#" accept-charset="UTF-8" class="deleteForm"><input name="_method" type="hidden" value="DELETE">
            
          <button type="button" class="btn btn-info" data-dismiss="modal" style="width: 100px">No</button>
          <input class="btn btn-danger" type="submit" value="Yes, Delete">
          </form>
        </div>
      </div>
    </div>
  </div>




            <!-- js placed at the end of the document so the pages load faster -->
            <script src="/Dashboard - IMS_files/jquery.js.download"></script>

            <script src="/Dashboard - IMS_files/jquery-ui.js.download"></script>

            <script src="/Dashboard - IMS_files/bootstrap.min.js.download"></script>

            <script src="/Dashboard - IMS_files/pace.min.js.download"></script>

            <script src="/Dashboard - IMS_files/wow.min.js.download"></script>

            <script src="/Dashboard - IMS_files/jquery.nicescroll.js.download"></script>

            <script src="/Dashboard - IMS_files/jquery.app.js.download"></script><div id="ascrail2000" class="nicescroll-rails" style="width: 5px; z-index: auto; cursor: default; position: fixed; top: 0px; left: 245px; height: 710px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(142, 144, 154); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 5px; z-index: auto; top: 705px; left: 0px; position: fixed; cursor: default; display: none;"><div style="position: relative; top: 0px; height: 5px; width: 0px; background-color: rgb(142, 144, 154); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div>

            <script src="/Dashboard - IMS_files/toastr.min.js.download"></script>

            <script src="/Dashboard - IMS_files/chosen.js.download"></script>
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

              $(document).on("click", ".deleteBtn", function() {
                var deleteUri = $(this).attr('deleteUri');
                $(".deleteForm").attr("action", deleteUri);
              });

        </script>
        






        <div id="ascrail2001" class="nicescroll-rails" style="width: 5px; z-index: auto; cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(51, 51, 51); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div></body></html>