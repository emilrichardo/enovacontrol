<?php include("includes/header.php") ?>
<?php include("includes/nav.php") ?>
<?php include("includes/aside.php") ?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper   px-3">
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
              <li class="breadcrumb-item active">Create client</li>
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
      		<h3 class="card-header ">
      			Create client
      		</h3>
      		<form>
      		<div class="card-body">
      			
      				<div class="row">

      					<div class="col-md-6">
      						<div class="form-group">
      							<label for="Inputname">First Name*</label>
      							<input type="text" class="form-control form-control-lg" id="Inputname" aria-describedby="emailHelp" placeholder="Enter name">      					
      						</div>      						
      					</div>
      					<div class="col-md-6">
      						<div class="form-group">
      							<label for="Inputlastname">Last name*</label>
      							<input type="text" class="form-control form-control-lg" id="Inputlastname" aria-describedby="emailHelp" placeholder="Enter lastname">      					
      						</div>      						
      					</div>
      				</div>
      				<div class="row">
      					<div class="col-lg-4">
      						<div class="form-group">
      							<label for="exampleInputEmail1">Email address</label>
      							<input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">      					
      						</div>
      					</div>
      					<div class="col-lg-4">
      						<div class="form-group">
      							<label for="username">User Name*</label>
      							<input type="text" class="form-control form-control-lg" id="username" aria-describedby="emailHelp" placeholder="Enter user name">      					
      						</div>
      					</div>
      					<div class="col-lg-4">
      						<div class="form-group">
      							<label for="exampleInputPassword1">Password</label>
      							<input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
      						</div>
      					</div>
      				</div>
      				
      				
      			
      		</div>
      		<div class="card-footer">      			
      			
      			<div class="float-right">
      				
      				<button type="submit" class="btn btn-primary  btn-lg"> 
      					<i class="fa fa-save"></i> Save
      				</button>
      				<button type="submit" class="btn btn-light text-secondary   btn-lg"> 
      					<i class="fa fa-close"></i> Cancel
      				</button>
      				
      			</div>
      		</div>
      		</form>
      	</div><!-- card -->
   	
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include("includes/footer.php") ?>





