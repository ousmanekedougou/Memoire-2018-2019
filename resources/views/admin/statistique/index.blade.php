@extends('layouts.app')

@section('main-content')




     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
  

    <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="box-body">
                 <!-- =========================================================== -->

          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box bg-aqua">
                <span class="info-box-icon"><i class="fa fa-male"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Patients</span>
                  <span class="info-box-number">{{ $patient->count() }}</span>

                  <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div>
                      <span class="progress-description">
                        <!-- 70% Increase in 30 Days -->
                      </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box bg-green">
                <span class="info-box-icon"><i class="fa fa-stethoscope"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Medecins</span>
                  <span class="info-box-number">{{ $medecins->count() }}</span>

                  <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div>
                      <span class="progress-description">
                        <!-- 70% Increase in 30 Days -->
                      </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box bg-yellow">
                <span class="info-box-icon"><i class="fa fa-user-md"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Medecin Chef</span>
                  <span class="info-box-number">{{ $medecin_chef->count() }}</span>

                  <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div>
                      <span class="progress-description">
                        <!-- 70% Increase in 30 Days -->
                      </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-cog"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Administrateurs</span>
                  <span class="info-box-number">{{ $admins->count() }}</span>

                  <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div>
                      <span class="progress-description">
                        <!-- 70% Increase in 30 Days -->
                      </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

      <!-- =========================================================== -->

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ $rv_j->count() }}</h3>

              <p>Rendez-vous du jour</p>
            </div>
            <div class="icon">
              <i class="fa fa-bar-chart"></i>
            </div>
            <a href="#" class="small-box-footer">
              <!-- More info <i class="fa fa-arrow-circle-right"></i> -->
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $rv_t->count() }}<sup style="font-size: 20px"></sup></h3>

              <p>Rendez-vous passer</p>
            </div>
            <div class="icon">
              <i class="fa fa-bar-chart"></i>
            </div>
            <a href="#" class="small-box-footer">
              <!-- More info <i class="fa fa-arrow-circle-right"></i> -->
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{ $hp->count() }}</h3>

              <p>Nombre d'hopitaux</p>
            </div>
            <div class="icon">
              <i class="fa fa-hospital-o"></i>
            </div>
            <a href="#" class="small-box-footer">
              <!-- More info <i class="fa fa-arrow-circle-right"></i> -->
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $comments->count() }}</h3>

              <p>Commentaires</p>
            </div>
            <div class="icon">
              <i class="fa fa-comments"></i>
            </div>
            <a href="#" class="small-box-footer">
              <!-- More info <i class="fa fa-arrow-circle-right"></i> -->
            </a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <!-- =========================================================== -->

      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Messages</span>
              <span class="info-box-number">{{ $contact->count() }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Bookmarks</span>
              <span class="info-box-number">410</span>
            </div>
          </div>
        </div> -->
        <!-- /.col -->
        <!-- <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Uploads</span>
              <span class="info-box-number">13,648</span>
            </div>
          </div>
        </div> -->
        <!-- /.col -->
        <!-- <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Likes</span>
              <span class="info-box-number">93,139</span>
            </div>
          </div>
        </div> -->
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- =========================================================== -->

     </div>

      </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

