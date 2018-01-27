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
            <li class="@if(Route::is('home')) active @endif"><a href="/home"><i class="ion-location"></i> <span class="nav-label">Doctors</span></a>
            </li>

            @if(auth()->user()->role == 'student')
            <li><a href="/appointment"><i class="ion-grid"></i> <span class="nav-label">My Appointments</span></a>
            </li>

            <li class=""><a href="/prescriptions"><i class="ion-grid"></i> <span class="nav-label">Prescriptions</span></a>
            </li>
            @endif

            @if(auth()->user()->role == 'admin')
            <li class="@if(Route::is('student.index') || Route::is('student.create')) active @endif"><a href="{{ route('student.index') }}"><i class="ion-grid"></i> <span class="nav-label">Students</span></a></li>
            <li class="@if(Route::is('doctor.create')) active @endif"><a href="{{ route('doctor.create') }}"><i class="ion-grid"></i> <span class="nav-label">Add Doctor</span></a></li>
            @endif



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