<header class="top-head container-fluid">

    <nav class=" navbar-default" role="navigation">


        <ul class="nav navbar-nav navbar-right top-menu top-right-menu">


            <!-- user login dropdown start-->
            <li class="dropdown text-center">
                <a data-toggle="dropdown" class="dropdown-toggle" href="http://ims.iitds.win/dashboard#">
                    <img alt="" src="./Dashboard - IMS_files/avatar.png" class="img-circle profile-img thumb-sm">
                    <span class="username">{{ auth()->user()->email }}</span> <span class="caret"></span>
                </a>
                <ul class="dropdown-menu pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                    <li><a href="{{ route('password.change') }}"> Change Password</a></li>
                    <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Log Out</a></li>
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!-- End right navbar -->

    </nav>

</header>