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
              <li class="breadcrumb-item active">Client listing</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <a href="#" class="btn btn-lg btn-light"> <i class="fa fa-plus"></i> Add client</a>
            <div class="filters ml-5 d-inline-block">
              <div class="row">
                <div class="col-md-4">
                  <input type="text" class="form-control" placeholder="Buscar">
                </div>
                <div class="col-md-4">
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>Filter</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>Filter</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
            </div><!-- filter -->
          </div>
        </div>



        
      	<div class="card card-info card-outline">
      		<div class="card-header">
      			<h3 class="card-title">Client listing</h3>
      		</div>
      		<div class="card-body">
      			<table class="table table-striped  table-bordered">
                  <tbody>
                  	<tr>
                  		<th >#</th>
                  		<th>User name</th>
                  		<th>First name</th>
                  		<th>Last name</th>
                  		<th>Email</th>
                  		<th>Action</th>
                  	</tr>
                  	<tr>
                      <td>1</td>
                      <td>juan</td>
                      <td>Juan</td>
                      <td>Cortez</td>
                      <td>admin@email.com</td>                    
                      <td>
                       <a href="#" class="btn btn-info btn-sm">
                        <span class="fa  fa-pencil"></span>
                      </a>
                      <a href="#" class="btn btn-danger btn-sm">
                        <span class="fa  fa-trash"></span>
                      </a>
                    </td>
                  </tr>
                  <tr>
                      <td>1</td>
                      <td>juan</td>
                      <td>Juan</td>
                      <td>Cortez</td>
                      <td>admin@email.com</td>                    
                      <td>
                       <a href="#" class="btn btn-info btn-sm">
                        <span class="fa  fa-pencil"></span>
                      </a>
                      <a href="#" class="btn btn-danger btn-sm">
                        <span class="fa  fa-trash"></span>
                      </a>
                    </td>
                  </tr>
                  <tr>
                      <td>1</td>
                      <td>juan</td>
                      <td>Juan</td>
                      <td>Cortez</td>
                      <td>admin@email.com</td>                    
                      <td>
                       <a href="#" class="btn btn-info btn-sm">
                        <span class="fa  fa-pencil"></span>
                      </a>
                      <a href="#" class="btn btn-danger btn-sm">
                        <span class="fa  fa-trash"></span>
                      </a>
                    </td>
                  </tr>
                  <tr>
                      <td>1</td>
                      <td>juan</td>
                      <td>Juan</td>
                      <td>Cortez</td>
                      <td>admin@email.com</td>                    
                      <td>
                       <a href="#" class="btn btn-info btn-sm">
                        <span class="fa  fa-pencil"></span>
                      </a>
                      <a href="#" class="btn btn-danger btn-sm">
                        <span class="fa  fa-trash"></span>
                      </a>
                    </td>
                  </tr>
                  <tr>
                      <td>1</td>
                      <td>juan</td>
                      <td>Juan</td>
                      <td>Cortez</td>
                      <td>admin@email.com</td>                    
                      <td>
                       <a href="#" class="btn btn-info btn-sm">
                        <span class="fa  fa-pencil"></span>
                      </a>
                      <a href="#" class="btn btn-danger btn-sm">
                        <span class="fa  fa-trash"></span>
                      </a>
                    </td>
                  </tr>
                  
                  
                </tbody></table>
      		</div>
      		<!-- /.card-body -->
      		<div class="card-footer">
      			<ul class="pagination float-right"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul>
      		</div>
      	</div>
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include("includes/footer.php") ?>





