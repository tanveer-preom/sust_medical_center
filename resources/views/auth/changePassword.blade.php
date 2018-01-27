<!DOCTYPE html>
<!-- saved from url=(0030)http://ims.iitds.win/dashboard -->
<html lang="en" style="overflow-y: hidden;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="http://ims.iitds.win/img/favicon_1.ico">

    <title>Students</title>




    <!-- Bootstrap core CSS -->
    {{--<link media="all" type="text/css" rel="stylesheet" href="{!! asset('anonymous/bootstrap.min.css') !!}">--}}

    <link media="all" type="text/css" rel="stylesheet" href="/Dashboard - IMS_files/bootstrap-reset.css">


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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<body class="  pace-done" style=""><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div></div>


{{-- aside start --}}
@include('partials.sideBar')
{{-- aside end --}}

<style>
    .list-unstyled-1{
        padding-left: 20px;
        background-color: #39404c !important;
    }
</style>


<!-- Header -->
<section class="content">
    @include('partials.header')
    <!-- Header Ends -->

    <div>
        <section class="top">

            <h2 class="">Change Password
                {{--<a href="{!! route('student.index') !!}" class="btn btn-primary pull-right"> List of Students</a>--}}
            </h2>
        </section>

        <section class="container">

            <div class="panel-body">
                <form class="form-horizontal" role="form" action="{{ route('password.doChange') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="password" class="col-md-2 control-label">Password*</label>
                        <div class="col-md-4">
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-2 control-label">Confirm Password*</label>
                        <div class="col-md-4">
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <button type="submit" class="btn btn-success">Change Password</button>
                        </div>
                    </div>
                </form>
            </div>

        </section>
    </div>
</section>
<!-- Modal -->






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