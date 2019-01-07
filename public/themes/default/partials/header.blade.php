<div class="container body">
   <div class="main_container">
      <div class="col-md-3 left_col">
         <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <?php
                $rolename = array(2=>'Principal');
                ?>
                <a href="{{ route('user-page') }}" class="site_title"> <i class="fa fa-medkit"></i> <span style="font-size: 18px">{{@$rolename[Auth::user()->role_id]}} Dasboard</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
               <div class="profile_pic">
                  <img src="{{asset('assets/images/halodoc-circle.png')}}" alt="..." class="img-circle profile_img">
               </div>
               <div class="profile_info">
                  <span>Welcome, {{-- Auth::user()->name --}}</span>
                  <h2></h2>
               </div>
               <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
               <div class="menu_section">
                  <h3>General</h3>
                  <ul class="nav side-menu">
                      <li><a href="homepage"><i class="fa fa-home"></i> Homepage </a></li>
                     <li><a href="{{route('dashboard-page')}}"><i class="fa fa-dashboard"></i>Home</a></li>
                     <li><a href="{{route('user-page')}}"><i class="fa fa-users"></i> User </a></li>
                     
                  </ul>
               </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
               <a data-toggle="tooltip" data-placement="top" title="Settings">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
               </a>
               <a data-toggle="tooltip" data-placement="top" title="">
                  <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
               </a>
               <a data-toggle="tooltip" data-placement="top" title="Lock">
                  <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
               </a>
               <a data-t   oggle="tooltip" data-placement="top" title="Logout" href="{{route('auth-logout')}}">
                  <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
               </a>
            </div>
            <!-- /menu footer buttons -->
         </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
         <div class="nav_menu">
            <nav>
               <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
               </div>

               <ul class="nav navbar-nav navbar-right">
                  <li class="">
                     <a href="javascript:;" id="usermenu" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('assets/images/halodoc-circle.png')}}" alt="">  Toni {{-- Auth::user()->name --}} <span class=" fa fa-angle-down"></span>
                     </a>
                     <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="javascript:;"> Profile</a></li>
                        <li>
                           <a href="javascript:;">
                              <span class="badge bg-red pull-right">50%</span>
                              <span>Settings</span>
                           </a>
                        </li>
                        <li><a href="javascript:;">Help</a></li>
                        <li><a href="{{route('auth-logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                     </ul>
                  </li>

                  <li role="presentation" class="dropdown">
                     <!--                     <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                             <i class="fa fa-envelope-o"></i>
                                             <span class="badge bg-green">6</span>
                                          </a>-->
                     <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                        <li>
                           <a>
                              <span class="image"><img src="{{asset('assets/images/img.jpg')}}" alt="Profile Image" /></span>
                              <span>
                                 <span>John Smith</span>
                                 <span class="time">3 mins ago</span>
                              </span>
                              <span class="message">
                                 Film festivals used to be do-or-die moments for movie makers. They were where...
                              </span>
                           </a>
                        </li>
                        <li>
                           <a>
                              <span class="image"><img src="{{asset('assets/images/img.jpg')}}" alt="Profile Image" /></span>
                              <span>
                                 <span>John Smith</span>
                                 <span class="time">3 mins ago</span>
                              </span>
                              <span class="message">
                                 Film festivals used to be do-or-die moments for movie makers. They were where...
                              </span>
                           </a>
                        </li>
                        <li>
                           <a>
                              <span class="image"><img src="{{asset('assets/images/img.jpg')}}" alt="Profile Image" /></span>
                              <span>
                                 <span>John Smith</span>
                                 <span class="time">3 mins ago</span>
                              </span>
                              <span class="message">
                                 Film festivals used to be do-or-die moments for movie makers. They were where...
                              </span>
                           </a>
                        </li>
                        <li>
                           <a>
                              <span class="image"><img src="{{asset('assets/images/img.jpg')}}" alt="Profile Image" /></span>
                              <span>
                                 <span>John Smith</span>
                                 <span class="time">3 mins ago</span>
                              </span>
                              <span class="message">
                                 Film festivals used to be do-or-die moments for movie makers. They were where...
                              </span>
                           </a>
                        </li>
                        <li>
                           <div class="text-center">
                              <a>
                                 <strong>See All Alerts</strong>
                                 <i class="fa fa-angle-right"></i>
                              </a>
                           </div>
                        </li>
                     </ul>
                  </li>
               </ul>
            </nav>
         </div>
      </div>