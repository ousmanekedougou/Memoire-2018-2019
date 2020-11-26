<header class="main-header">
    @if(Auth::guard('admin')->user() != Null)
    <!-- Logo -->
    <a href="{{ route('admin.index') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img  src="{{ asset('admin/dist/img/LOGO.jpg') }}" alt="" srcset=""></span>
    </a>
    @elseif(Auth::guard('medecin')->user() != Null)
    <!-- Logo -->
    <a href="{{ route('medecin.home') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">R-V</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="{{ asset('admin/dist/img/LOGO.jpg') }}" alt="" srcset=""></span>

    </a>
    @else
     <!-- Logo -->
     <a href="{{ route('client.home') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">R-V</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="{{ asset('admin/dist/img/LOGO.jpg') }}" alt="" srcset=""></span>

    </a>
    @endif
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

        <!-- Message Pour Client -->
          @if(Auth::guard('web')->user() != Null)
          <li class="dropdown messages-menu">
            @if(count(notification_pour_client()) >= 1)
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o fa fa-bell-o"></i>
              <span class="label label-success">
              {{count(notification_pour_client())}}
              </span>
            </a>
            @endif
            <ul class="dropdown-menu">
              <li class="header">You have {{count(notification_pour_client())}} messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                @foreach(notification_pour_client() as $client_notification)
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="{{ route('client.view',$client_notification->id) }}">
                      <div class="pull-left">
                      @if($client_notification->medecin->image != Null)
                        <img class="img-circle" src="{{ Storage::url($client_notification->medecin->image) }}" alt="User Image">
                        @else  
                        <img src="{{ asset('user/images/default.gif')}}" class="img-circle" alt="User Image">
                      @endif
                      </div>
                      <h4>
                        {{ $client_notification->medecin->prenom .' '.$client_notification->medecin->nom }}
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Votre demande de rendez-vous a ete valider  </p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                @endforeach
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <!-- <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o "></i>
              <span class="label label-warning">10</span>
            </a>
           
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li> -->
          <!-- Tasks: style can be found in dropdown.less -->
          <!-- <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li> -->
        <!-- Fin message pour les Client -->

          @elseif(Auth::guard('medecin')->user() != Null)
           <!-- Messages: pour les medecin-->
           <li class="dropdown messages-menu">
            @if(count(notification_pour_medecin()) >= 1)
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o fa fa-bell-o"></i>
              <span class="label label-success">
              {{count(notification_pour_medecin())}}
              </span>
            </a>
            @endif
            <ul class="dropdown-menu">
              <li class="header">You have {{count(notification_pour_medecin())}} messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                @foreach(notification_pour_medecin() as $medecin_notification)
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="{{ route('medecin.view',$medecin_notification->id) }}">
                      <div class="pull-left">
                      @if($medecin_notification->user->image != Null)
                        <img class="img-circle" src="{{ Storage::url($medecin_notification->user->image) }}" alt="User Image">
                        @else  
                        <img src="{{ asset('user/images/default.gif')}}" class="img-circle" alt="User Image">
                      @endif
                      </div>
                      <h4>
                        {{ $medecin_notification->medecin->prenom .' '.$medecin_notification->medecin->nom }}
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Votre demande de rendez-vous a ete valider  </p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                @endforeach
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <!-- <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
           
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li> -->
          <!-- Tasks: style can be found in dropdown.less -->
          <!-- <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li> -->
          <!-- Fin message pour les medecin-->

          @else
         <!-- Messages: style can be found in dropdown.less-->
          <!-- <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                
                <ul class="menu">
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
               
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li> -->
          <!-- Notifications: style can be found in dropdown.less -->
          <!-- <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
           
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li> -->
          <!-- Tasks: style can be found in dropdown.less -->
          <!-- <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li> -->
          @endif
          <!-- User Account: style can be found in dropdown.less -->
         
          <li class="dropdown user user-menu">
        
         
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              @if(Auth::guard('medecin')->user() != Null)
                  @if(Auth::guard('medecin')->user()->image != Null)
                    <img src="{{ Storage::url(Auth::guard('medecin')->user()->image)}}" class="user-image" alt="User Image">
                    <span class="hidden-xs">{{Auth::guard('medecin')->user()->prenom .' '. Auth::guard('medecin')->user()->nom}}</span>
                  @else 
                    <span class="hidden-xs">{{Auth::guard('medecin')->user()->prenom .' '. Auth::guard('medecin')->user()->nom}}</span>
                    <img src="{{ asset('user/images/default.gif')}}" class="user-image" alt="User Image">
                  @endif
              @elseif(Auth::guard('admin')->user() != Null)

                  @if(Auth::guard('admin')->user()->image != Null)
                    <span class="hidden-xs">{{Auth::guard('admin')->user()->nom}}</span>
                    <img src="{{ Storage::url(Auth::guard('admin')->user()->image)}}" class="user-image" alt="User Image">
                  @else
                    <span class="hidden-xs">{{Auth::guard('admin')->user()->nom}}</span>
                    <img src="{{ asset('user/images/default.gif')}}" class="user-image" alt="User Image">
                  @endif

              @else
                  @if(Auth::guard('web')->user()->image != Null)
                    <img src="{{ Storage::url(Auth::user()->image)}}" class="user-image" alt="User Image">
                    <span class="hidden-xs">{{Auth::user()->prenom .' ' .Auth::user()->nom}}</span>
                  @else
                    <img src="{{ asset('user/images/default.gif')}}" class="user-image" alt="User Image">
                    <span class="hidden-xs">{{Auth::user()->prenom .' ' .Auth::user()->nom}}</span>
                  @endif

              @endif
            </a>

            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              @if(Auth::user() != Null)
                @if(Auth::user()->image != Null)
                  <img src="{{ Storage::url(Auth::user()->image)}}" class="img-circle" alt="User Image">
                  @else
                  <img src="{{ asset('user/images/default.gif')}}" class="img-circle" alt="User Image">
                @endif
              @elseif(Auth::guard('medecin')->user() != Null)
              <img src="{{ Storage::url(Auth::guard('medecin')->user()->image)}}" class="img-circle " alt="User Image">
              @else
                <img src="{{ Storage::url(Auth::guard('admin')->user()->image)}}" class="img-circle" alt="User Image">
              @endif

                @if(Auth::user() != Null)
                <p>
                {{ Auth::user()->prenom }} {{ Auth::user()->nom }} 
                  <small> Membre Depuis {{ Auth::user()->created_at->toFormattedDateString() }}</small>
                </p>
                @elseif(Auth::guard('medecin')->user() != Null)
                <p>
                {{ Auth::guard('medecin')->user()->prenom }} {{ Auth::guard('medecin')->user()->nom }} 
                  <small> Membre Depuis {{Auth::guard('medecin')->user()->created_at->toFormattedDateString() }}</small>
                </p>
                @else
                <p>
                {{ Auth::guard('admin')->user()->prenom}} {{ Auth::guard('admin')->user()->nom }} 
                  <small> Membre Depuis {{ Auth::guard('admin')->user()->created_at->toFormattedDateString() }}</small>
                </p>
                @endif
              </li>
              <!-- Menu Body -->
           
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                @if(Auth::guard('web')->user() != Null)
                  <a href="{{ route('view_client',Auth::user('web')) }}" class="btn btn-default btn-flat">Profile</a>
                @elseif(Auth::guard('medecin')->user() != Null)
                  <a href="{{ route('view_medecin',Auth::guard('medecin')->user()) }}" class="btn btn-default btn-flat">Profile</a>
                    @else
                  <a href="{{ route('view_admin',Auth::guard('admin')->user()) }}" class="btn btn-default btn-flat">Profile</a>
                @endif
                </div>
                <div class="pull-right">
                <a href="{{ route('logout') }}" 
                  onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                  class="btn btn-default btn-flat">Se Deconnecter</a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                 
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <!-- <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> -->
          </li>
          
        </ul>
      </div>
    </nav>
  </header>

 