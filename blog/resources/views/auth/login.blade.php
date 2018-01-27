<!DOCTYPE html>
<!-- saved from url=(0026)http://ims.iitds.win/login -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="http://ims.iitds.win/img/favicon_1.ico">

        <title>Login</title>




        <!-- Bootstrap core CSS -->
        <link media="all" type="text/css" rel="stylesheet" href="./Login - IMS_files/bootstrap.min.css">

        <link media="all" type="text/css" rel="stylesheet" href="./Login - IMS_files/bootstrap-reset.css">



                <!--Animation css-->
        <link media="all" type="text/css" rel="stylesheet" href="./Login - IMS_files/animate.css">

        <link media="all" type="text/css" rel="stylesheet" href="./Login - IMS_files/jquery-ui.css">



                <!--Icon-fonts css-->
        <link media="all" type="text/css" rel="stylesheet" href="./Login - IMS_files/font-awesome.css">

        <link media="all" type="text/css" rel="stylesheet" href="./Login - IMS_files/ionicons.min.css">




                <!--Morris Chart CSS -->
        <link media="all" type="text/css" rel="stylesheet" href="./Login - IMS_files/morris.css">


        <link media="all" type="text/css" rel="stylesheet" href="./Login - IMS_files/jquery.dataTables.min.css">


        <link rel="stylesheet" type="text/css" href="./Login - IMS_files/chosen.css">

                <!-- Custom styles for this template -->
        <link media="all" type="text/css" rel="stylesheet" href="./Login - IMS_files/style.css">

        <link media="all" type="text/css" rel="stylesheet" href="./Login - IMS_files/helper.css">

        <link media="all" type="text/css" rel="stylesheet" href="./Login - IMS_files/toastr.min.css">

        <link media="all" type="text/css" rel="stylesheet" href="./Login - IMS_files/custom.css">


        
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

        <script async="" src="./Login - IMS_files/analytics.js.download"></script><script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-62751496-1', 'auto');
                ga('send', 'pageview');

        </script>

</head>
<body class="  pace-done" style=""><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>

<div class="wrapper-page animated fadeInDown">
    <div class="panel panel-color panel-primary">
        <div style="background-color: white;">
           <img class="img-responsive" src="./Shahjalal University of Science &amp; Technology_files/logo.png" style="height: 100px;width: 100px;display: block;margin: auto;" alt="">
           <h3 style="text-align: center;">SUST Medical Center Login</h3>
        </div>
        
             <!-- Added by Masiur -->
<!-- Added by Masiur -->






            <form method="POST" action="{{ route('login') }}" accept-charset="UTF-8" class="form-horizontal m-t-40">
                {{ csrf_field() }}
            <div class="form-group ">
                <div class="col-xs-12">
                    <input class="form-control" placeholder="Email Address" type="text" autofocus="autofocus" name="email" value="">
                    @if ($errors->has('email'))
                                    <span class="help-block" style="color:#F44336">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group ">

                <div class="col-xs-12">
                    <input class="form-control" placeholder="Password" type="password" name="password" value="">

                    @if ($errors->has('password'))
                                    <span class="help-block" style="color:#F44336">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>



        <div class="form-group m-t-30">



            

        </div>

        <div class="form-group text-right">
            <br>
                 <div class="col-xs-12">
                    <input class="btn btn-lg btn-login btn-block btn-success " type="submit" value="Log in">
                    <a class="btn btn-lg btn-login btn-block btn-info" href="/">
                        Back to Main Site
                    </a>
                </div>
        </div>




     <!--    <center>
        <p>Or,<br> You can sign in via social network</p>

        <div class="login-social-link">
            <a href="http://ims.iitds.win/login/fb" class="btn btn-primary"><i class="fa fa-facebook"></i> Facebook</a>
       <a href="#" class="btn btn-info"><i class="fa fa-twitter"></i>Twitter</a>
            <a href="http://ims.iitds.win/login/gp" class="btn btn-danger"><i class="fa fa-google-plus"></i> Google</a>
        </div>
       </center> -->




        


        </form>

    </div>
    
</div>






<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Forgot Password ?</h4>
            </div>
            <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>


                <form method="POST" action="http://ims.iitds.win/password/email" accept-charset="UTF-8">
                    {{ csrf_field() }}

                <input class="form-control placeholder-no-fix" placeholder="Email Address" autocomplete="off" name="email" type="email" value="">

            </form></div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>

                <input class="btn btn-success" type="submit" value="Submit">
                
            </div>
        </div>
    </div>
</div>
<!-- modal -->


<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="emailModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Resend Email</h4>
            </div>
            <div class="modal-body">
                <p>Enter your e-mail address below to resend verification email.</p>


                <form method="POST" action="http://ims.iitds.win/resend/email" accept-charset="UTF-8"><input name="_token" type="hidden" value="Vlz3YBcPlrKhg6i6IXiWVqGRefj9wOA3EoQ5OElj">

                <input class="form-control placeholder-no-fix" placeholder="Email Address" autocomplete="off" required="required" name="email" type="email" value="">

            </form></div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>

                <input class="btn btn-success" type="submit" value="Submit">
                
            </div>
        </div>
    </div>
</div>
<!-- modal -->






<!-- js placed at the end of the document so the pages load faster -->
<script src="./Login - IMS_files/jquery.js.download"></script>

<script src="./Login - IMS_files/bootstrap.min.js.download"></script>

<script src="./Login - IMS_files/pace.min.js.download"></script>

<script src="./Login - IMS_files/wow.min.js.download"></script>

<script src="./Login - IMS_files/jquery.nicescroll.js.download"></script>


        <!--common script for all pages-->
<script src="./Login - IMS_files/jquery.app.js.download"></script>



</body></html>

