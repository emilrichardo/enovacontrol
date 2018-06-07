
<?php include("includes/header.php") ?>
<?php include("includes/nav.php") ?>
<?php include("includes/aside.php") ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <div class="hours p-2  text-right d-flex border-bottom text-secondary">
      <span>Dashboard</span>

      <ul class="clock p-0 ml-auto mb-0 text-secondary align-items-center">
        <li>
          <i class="fa fa-clock-o"></i>
        </li>
        <li>
          <i class="flag-sm flag-sm-US mr-2"></i><span><strong>USA</strong> 00:00</span>
        </li>
        <li>
          <i class="flag-sm flag-sm-MX mr-2"></i><span><strong>MEX</strong> 20:00</span>
        </li>
        <li>
          <i class="flag-sm flag-sm-BR mr-2"></i><span><strong>BRA</strong> 05:00</span>
        </li>
        <li>
          <i class="flag-sm flag-sm-AR mr-2"></i><span><strong>ARG</strong> 00:00</span>
        </li>
        <li>
          <span><strong>USA</strong> 21:00</span>
        </li>
      </ul>
    </div>

    


           
            
    <!-- Content Header (Page header) -->
    <div class="content-header d-none">
      <div class="container-fluid">

        

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Home</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Section</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content mt-4">
      <div class="container-fluid">
        <img class="w-100 rounded mb-3" src="dist/img/banner.jpg" alt="">
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>4</h3>

                <p>Total Clients</p>
              </div>
              <div class="icon">
                <i class="fa fa-handshake-o"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>53</h3>

                <p>Total projects</p>
              </div>
              <div class="icon">
                <i class="fa fa-suitcase"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>44</h3>

                <p>Total employees</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>6</h3>

                <p>Total Department</p>
              </div>
              <div class="icon">
                <i class="fa fa-building"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <div class="main row">
          <div class="col-md-8">
            <div class="card card-info card-outline">
              <div class="card-header">
                <h3 class="card-title">Our latest projects</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <td>Id</td>
                      <td>Projet name</td>
                      <td>Start date</td>
                      <td>Status</td>
                      <td>Assign</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>  Consectetur Lorem ipsum dolor sit ame </td>
                      <td>07/06/2018</td>
                      <td><span class="badge badge-primary">Work in progress</span></td>
                      <td>Juan Perez</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td> Dolor sit amet, consectetur </td>
                      <td>07/06/2018</td>
                      <td><span class="badge badge-danger">Pending</span></td>
                      <td>Juan Perez</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td> Lorem ipsum dolor sit amet, consectetur </td>
                      <td>07/06/2018</td>
                      <td><span class="badge badge-warning">En proceso</span></td>
                      <td>Juan Perez</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td> Lorem ipsum dolor sit amet, consectetur </td>
                      <td>07/06/2018</td>
                      <td><span class="badge badge-primary">En proceso</span></td>
                      <td>Juan Perez</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td> Lorem ipsum dolor sit amet, consectetur </td>
                      <td>07/06/2018</td>
                      <td><span class="badge badge-success">Realeased</span></td>
                      <td>Juan Perez</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td> Lorem ipsum dolor sit amet, consectetur </td>
                      <td>07/06/2018</td>
                      <td><span class="badge badge-primary">En proceso</span></td>
                      <td>Juan Perez</td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div><!-- /.card -->
          </div><!-- /.col-->
          <div class="col-right col-md-4">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Notices </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="callout ">
                  <h5>I am a danger callout!</h5>

                  <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire
                    soul,
                    like these sweet mornings of spring which I enjoy with my whole heart.</p>
                </div>
                <div class="callout callout-warning mt-2">
                  <h5>I am a danger callout!</h5>

                  <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire
                    soul,
                    like these sweet mornings of spring which I enjoy with my whole heart.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div><!-- /.col-->
        </div><!-- /.row -->

        <div class="row">
          <div class="map col-md-8">
            <div class="card card-info card-outline bg-info">
              <div class="card-header">
                <h3 class="card-title">Enova Team</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div id="world-map" style="height: 400px; width: 100%;"></div>
              </div>
              <!-- /.card-body -->
            </div>
          </div><!-- col-map -->
          <div class="calendar col-md-4">
            <!-- Calendar -->
            <div class="card bg-white">
              <div class="card-header no-border">

                <h3 class="card-title">
                  <i class="fa fa-calendar"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-bars"></i></button>
                    <div class="dropdown-menu float-right" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-widget="remove">
                    <i class="fa fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
          </div><!-- col-map -->
        </div>



      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
<?php include("includes/footer.php") ?>
  
