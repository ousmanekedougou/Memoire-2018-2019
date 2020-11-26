<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
        @if(Auth::user() != Null)

              @if(Auth::user()->image != Null)
                <img src="{{ Storage::url(Auth::user()->image)}}" class="img-circle" alt="User Image">
                @else
                <img src="{{ asset('user/images/default.gif')}}" class="img-circle" alt="User Image">
              @endif

        @elseif(Auth::guard('medecin')->user() != Null)
              @if(Auth::guard('medecin')->user()->image != Null)
              <img src="{{ Storage::url(Auth::guard('medecin')->user()->image)}}" class="img-circle" alt="User Image">
              @else 
              <img src="{{ asset('user/images/default.gif')}}" class="img-circle" alt="User Image">
              @endif
        @else
              @if(Auth::guard('admin')->user() != Null)
                <img src="{{ Storage::url(Auth::guard('admin')->user()->image)}}" class="img-circle" alt="User Image">
              @else 
                <img src="{{ asset('user/images/default.gif')}}" class="img-circle" alt="User Image">
              @endif
        @endif
        </div>
        
        @if(Auth::guard('web')->user() != Null)
        <div class="pull-left info">
          <p>{{ Auth::user()->prenom . ' ' .Auth::user()->nom }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Client</a>
        </div>
        @elseif(Auth::guard('medecin')->user() != Null)
        <div class="pull-left info">
          <p>{{ Auth::guard('medecin')->user()->prenom . ' ' .Auth::guard('medecin')->user()->nom }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Medecin</a>
        </div>
        @else
        <div class="pull-left info">
          <p>{{ Auth::guard('admin')->user()->prenom . ' ' .Auth::guard('admin')->user()->nom }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Administrateur</a>
        </div>
        @endif
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        @if(Auth::guard('admin')->user() != Null)
        
        <!-- <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Paramettre</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
          <ul class="treeview-menu">
            <li class=""><a href="{{ route('info.index') }}"><i class="fa fa-circle-o"></i>Infos & Social</a></li>
            <li><a href="{{ route('role.index') }}"><i class="fa fa-circle-o"></i> Roles</a></li>
            <li><a href="{{ route('permission.index') }}"><i class="fa fa-circle-o"></i> Permissions</a></li>
            <li><a href="{{ route('slider.index') }}"><i class="fa fa-circle-o"></i> Slider</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i> <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="{{ route('post.index') }}"><i class="fa fa-circle-o"></i>Article</a></li>
            <li><a href="{{ route('category.index') }}"><i class="fa fa-circle-o"></i> Categories</a></li>
            <li><a href="{{ route('tag.index') }}"><i class="fa fa-circle-o"></i> Tags</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i> <span>Activites</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('service.index') }}"><i class="fa fa-circle-o"></i> Services</a></li>
          </ul>
        </li> -->

        <li>
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i> <span>Gestion rendez-Vous</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
         
          </ul>
        </li> -->
            <li class=""><a href="{{ route('departement.index') }}"><i class="fa fa-street-view"></i>Departements</a></li>
        <li class=""><a href="{{ route('admin.today') }}"><i class="fa fa-hospital-o"></i>Rendez-Vous du jour</a></li>
            <li><a href="{{ route('admin.latested') }}"><i class="fa fa-bar-chart"></i> Historique Rendez-Vous</a></li>
        <li class="text-info"><a href="{{ route('medecin.create') }}"><i class="fa fa-user-md text-info"></i>Ajouter un Medecin</a></li>
        <li class="text-info"><a href="{{ route('medecin.medecin_chef') }}"><i class="fa fa-th text-info"></i>Les Membres</a></li>
        <li><a href="{{ route('admin.ticker') }}"><i class="fa fa-file-text text-info"></i> Les Tickers</a></li>
        <li><a href="{{ route('statistique.index') }}"><i class="fa fa-th text-info"></i> Les Statistiques</a></li>
        <!-- <li>
          <a href="">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li> -->
        @elseif(Auth::guard('medecin')->user() != Null)
        <li ><a href="{{ route('medecin.home') }}"><i class="fa fa-hospital-o text-primary"></i>Rendez-Vous du jour</a></li>
        <li class="text-secondary"><a href="{{ route('medecin.asked') }}"><i class="fa fa-stethoscope text-secondary"></i>En Demande</a></li>
        <li class="text-warning"><a href="{{ route('medecin.weiting') }}"><i class="fa fa-medkit text-warning"></i>Rendez-Vous en Attente</a></li>
        <li class="text-info"><a href="{{ route('medecin.lasted') }}"><i class="fa fa-bar-chart text-info"></i>Historique</a></li>
        <li><a href="{{ route('medecin.ticker') }}"><i class="fa fa-file-text"></i> Vos Tickes</a></li>
          @if(Auth::guard('medecin')->user()->status == 1 ) 
            <li class="text-info"><a href="{{ route('medecin-show.create') }}"><i class="fa fa-plus-square text-info"></i>Ajouter un Medecin</a></li>
            <li><a href="{{ route('medecin.info_medecin') }}"><i class="fa fa-user-md"></i>Medecins</a></li>
            <li><a href="{{ route('medecin.hopital') }}"><i class="fa fa-hospital-o"></i>Ajouter un hopital</a></li>
          @endif
        @else

      <li><a href="{{ route('client.today') }}"><i class="fa fa-hospital-o"></i>Rendez-Vous Du Jour</a></li>
      <li><a href="{{ route('client.asked') }}"><i class="fa fa-stethoscope"></i>En Demander</a></li>
      <li><a href="{{ route('client.weiting') }}"><i class="fa fa-medkit"></i>Rendez-Vous Prochain</a></li>
      <li><a href="{{ route('client.lasted') }}"><i class="fa fa-bar-chart"></i>Historique</a></li>
      <li><a href="{{ route('client.ticker') }}"><i class="fa fa-file-text"></i> Vos Tickes</a></li>
      <li><a href="{{ route('client_region') }}"><i class="fa fa-th"></i> Toutes les regions</a></li>
      @endif
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>