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
              <li class="breadcrumb-item active">Create employee</li>
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
      			Create employee
      		</h3>
      		<form>
      		<div class="card-body">
      			
      				<div class="row">

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="username">Username*</label>
                    <input type="text" class="form-control form-control-lg" id="username" aria-describedby="emailHelp" placeholder="Enter username">               
                  </div>                  
                </div>

      					<div class="col-md-4">
      						<div class="form-group">
      							<label for="firstname">First Name*</label>
      							<input type="text" class="form-control form-control-lg" id="firstname" aria-describedby="emailHelp" placeholder="Enter name">      					
      						</div>      						
      					</div>
      					<div class="col-md-4">
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
                      <label for="department">Department Name*</label>
                      <select class="form-control form-control-lg mb-3">
                        <option selected id="department">Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div> 
      					</div>
      					<div class="col-lg-4">
      						<div class="form-group">
      							<label for="exampleInputPassword1">Password</label>
      							<input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
      						</div>
      					</div>
      				</div>

              <div class="card card-primary card-outline  my-2">
                <div class="card-header">
                  <h5>Salary</h5>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="type-salary">Type of Salary</label>
                        <select class="form-control form-control-lg mb-3">
                          <option selected>Salary type</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>                                   
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="salaryamount">Salary Amount</label>
                        <input type="email" class="form-control form-control-lg" id="salaryamount" aria-describedby="emailHelp" placeholder="Enter salary Amount">                
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="starting">Salary Starting Date</label>
                        <input type="email" class="form-control form-control-lg" id="starting" aria-describedby="emailHelp" placeholder="Enter salary Amount">                
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- card -->

              <div class="card card-secondary card-outline  my-2">
                <div class="card-header">
                  <h5>Employee Files</h5>
                </div>
                <div class="card-body">
                  <div class="row">
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="profile_img">Profile Image <small>(gif,jpg,jpeg,png)</small></label>
                        <input type="file" class="form-control" name="profile_img">               
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="uploadfile">Upload File (CV)<small>(gif,jpg,jpeg,png,pdf,doc,docx)</small></label>
                        <input type="file" class="form-control" name="profile_img">               
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="prfresidence">Proof of Residence <small>(gif,jpg,jpeg,png,pdf,doc,docx)</small></label>
                        <input type="file" class="form-control" name="profile_img">               
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="profimage">Profile Image <small>(gif,jpg,jpeg,png)</small></label>
                        <input type="file" class="form-control" name="profile_img">               
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div><!-- card -->

              <div class="card card-primary card-outline  my-2">
                <div class="card-header">
                  <h5>Bank Details</h5>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Account Type</label>
                        <select class="form-control form-control-lg mb-3">
                          <option selected>Account Type</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>                                   
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="bankname">Bank Name</label>
                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Bank Name">                
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="caountnumber">Account Number</label>
                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Account Numbert">                
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="routing">Routing Number</label>
                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Routing Number">                
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="clabe">Clabe</label>
                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Clabe">                
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="swift">Swift / Area Code</label>
                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Swift / Area Code">                
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- card -->
              <div class="card card-primary card-outline  my-2">
                <div class="card-header">
                  <h5>Off Boarding</h5>
                </div>
                <div class="card-body">
                  <div class="row">
                    
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Why is the employment ending?</label>
                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">                
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Date of notice</label>
                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">                
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">What is the last date of work</label>
                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">                
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- card -->
      				
      				
      			
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





