<!DOCTYPE html>
<!-- saved from url=(0030)http://ims.iitds.win/dashboard -->
<html lang="en" style="overflow-y: hidden;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="http://ims.iitds.win/img/favicon_1.ico">

    <title>Students</title>




    <!-- Bootstrap core CSS -->
    <link media="all" type="text/css" rel="stylesheet" href="{!! asset('anonymous/bootstrap.min.css') !!}">

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




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body class="  pace-done" style=""><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div></div>

<!-- Aside Start-->
@include('partials.sideBar')
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
                        <img alt="" src="/Dashboard - IMS_files/avatar.png" class="img-circle profile-img thumb-sm">
                        <span class="username">Tanveer Preom</span> <span class="caret"></span>
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
        <section class="">

            <h2 class="">List of Students
                <a href="{!! route('student.create') !!}" class="btn btn-primary pull-right"> Create a student</a>
            </h2>
        </section>

        <section>

            <table class="table table-responsive table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Date of Birth</th>
                        <th>Regi No.</th>
                        <th>Dept</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{!! $student->name !!}</td>
                        <td>{!! \Carbon\Carbon::parse($student->date_of_birth)->format('M d, Y') !!}</td>
                        <td>{!! $student->registration_no !!}</td>
                        <td>{!! $student->dept !!}</td>
                        <td><a  class="btn btn-danger btn-xs btn-archive deleteBtn" data-toggle="modal" data-target="#deleteConfirm" href="#" deleteUri="{!! route('student.delete',$student->id)!!}">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </section>
    </div>
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
                <form method="POST" action="#" accept-charset="UTF-8" class="deleteForm">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="DELETE">
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