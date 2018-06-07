
   <!-- Main Sidebar Container -->
  <aside class="main-sidebar  bg-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link bg-primary2">
      <img src="dist/img/enova-control-w.png" alt="AdminLTE Logo" class="brand-image">
      <span class="brand-text font-weight-light">
        <img class="img-fluid" style="width: 160px;" src="dist/img/enova-control-logo-w.png" alt="">
        <span class="d-none">enova control</span> </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-1 mb-3 d-flex">
        <div class="image mt-2">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
          <h5 class="my-0">Superadmin</h5>
          <small class="mt-0">Project Mananger</small>
        </a>
        </div>
      </div>
      <hr>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">            
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fa  fa-dashboard nav-icon"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fa fa-get-pocket"></i>
              <p>
                Admin
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview bg-primary2">
              <li class="nav-item">
                <a href="admin_listing.php" class="nav-link">
                  <i class="fa fa-list  nav-icon"></i>
                  <p>Admin listing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="create_admin.php" class="nav-link">
                  <i class="fa  fa-plus  nav-icon"></i>
                  <p>Create admin</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Employee
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview bg-primary2">
              <li class="nav-item">
                <a href="employee_listing.php" class="nav-link">
                  <i class="fa fa-list  nav-icon"></i>
                  <p>Employee listing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="create_employee.php" class="nav-link">
                  <i class="fa  fa-plus  nav-icon"></i>
                  <p>Create employee</p>
                </a>
              </li>              
            </ul>
          </li>

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fa fa-handshake-o"></i>
              <p>
                Client
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview bg-primary2">
              <li class="nav-item">
                <a href="client_listing.php" class="nav-link">
                  <i class="fa fa-list  nav-icon"></i>
                  <p>Client listing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="create_client.php" class="nav-link">
                  <i class="fa  fa-plus  nav-icon"></i>
                  <p>Create client</p>
                </a>
              </li>              
            </ul>
          </li>

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fa fa-suitcase"></i>
              <p>
                Projects
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview bg-primary2">
              <li class="nav-item">
                <a href="project_listing.php" class="nav-link">
                  <i class="fa fa-list  nav-icon"></i>
                  <p>Projects listing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="create_project.php" class="nav-link">
                  <i class="fa  fa-plus  nav-icon"></i>
                  <p>Create project</p>
                </a>
              </li>              
            </ul>
          </li>


          <li><hr></li>

          

          <li class="nav-item">
            <a href="widgets.php" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>