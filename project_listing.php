<?php include("includes/header.php") ?>
<?php include("includes/nav.php") ?>
<?php include("includes/aside.php") ?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div> --><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project listing</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        <ul class="nav nav-tabs text-primary" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#potential" role="tab" aria-controls="home" aria-selected="true"><span>Potential</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#pending" role="tab" aria-controls="profile" aria-selected="false"><span>Pending</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#development" role="tab" aria-controls="contact" aria-selected="false"><span>Development</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#production" role="tab" aria-controls="contact" aria-selected="false"><span>Production</span></a>
          </li>
          
        </ul>
        <div class="tab-content bg-white p-4 border border-top-0" id="myTabContent">
          <div class="tab-pane fade show active" id="potential" role="tabpanel" aria-labelledby="home-tab">
            <table class="table table-striped">
              <thead>
                <tr>
                    <th>#</th>
                    <th>Project Name</th>
                    <th>Project Url</th>
                    <th>Client Name</th>
                    <th>Project Price</th>
                    <th>Estimated Time</th>
                    <th>Logged Time</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>                
                <tr>
                  <td>1</td>
                  <td>mynowmining</td>
                  <td>https://mynowmining.com/</td>
                  <td>client 01</td>
                  <td>6000</td>
                  <td>10:30:00</td>
                  <td>00:00:00</td>                  
                  <td>
                    <a href="#" class="btn btn-info btn-sm  py-1">
                      <span class="fa  fa-pencil"></span>                        
                    </a>                     

                    <a href="employee_detail.php" class="btn btn-light btn-sm py-1">
                      Project Detail       
                    </a>
                    <a href="employee_detail.php" class="btn btn-light btn-sm py-1">
                      Project board  
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>mynowmining</td>
                  <td>https://mynowmining.com/</td>
                  <td>client 01</td>
                  <td>6000</td>
                  <td>10:30:00</td>
                  <td>00:00:00</td>                  
                  <td>
                    <a href="#" class="btn btn-info btn-sm  py-1">
                      <span class="fa  fa-pencil"></span>                        
                    </a>                     
                    
                    <a href="employee_detail.php" class="btn btn-light btn-sm py-1">
                      Project Detail       
                    </a>
                    <a href="employee_detail.php" class="btn btn-light btn-sm py-1">
                      Project board  
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>mynowmining</td>
                  <td>https://mynowmining.com/</td>
                  <td>client 01</td>
                  <td>6000</td>
                  <td>10:30:00</td>
                  <td>00:00:00</td>                  
                  <td>
                    <a href="#" class="btn btn-info btn-sm  py-1">
                      <span class="fa  fa-pencil"></span>                        
                    </a>                     
                    
                    <a href="employee_detail.php" class="btn btn-light btn-sm py-1">
                      Project Detail       
                    </a>
                    <a href="employee_detail.php" class="btn btn-light btn-sm py-1">
                      Project board  
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>mynowmining</td>
                  <td>https://mynowmining.com/</td>
                  <td>client 01</td>
                  <td>6000</td>
                  <td>10:30:00</td>
                  <td>00:00:00</td>                  
                  <td>
                    <a href="#" class="btn btn-info btn-sm  py-1">
                      <span class="fa  fa-pencil"></span>                        
                    </a>                     
                    
                    <a href="employee_detail.php" class="btn btn-light btn-sm py-1">
                      Project Detail       
                    </a>
                    <a href="employee_detail.php" class="btn btn-light btn-sm py-1">
                      Project board  
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>mynowmining</td>
                  <td>https://mynowmining.com/</td>
                  <td>client 01</td>
                  <td>6000</td>
                  <td>10:30:00</td>
                  <td>00:00:00</td>                  
                  <td>
                    <a href="#" class="btn btn-info btn-sm  py-1">
                      <span class="fa  fa-pencil"></span>                        
                    </a>                     
                    
                    <a href="employee_detail.php" class="btn btn-light btn-sm py-1">
                      Project Detail       
                    </a>
                    <a href="employee_detail.php" class="btn btn-light btn-sm py-1">
                      Project board  
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div><!-- tab potential -->
          <div class="tab-pane fade" id="pending" role="tabpanel" aria-labelledby="profile-tab">...
          </div> <!-- tab pending -->
          <div class="tab-pane fade" id="development" role="tabpanel" aria-labelledby="contact-tab">...
          </div><!-- tab develop -->
          <div class="tab-pane fade" id="production" role="tabpanel" aria-labelledby="contact-tab">...
          </div><!-- tab production -->
        </div>
        

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include("includes/footer.php") ?>





