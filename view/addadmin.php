<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		
	
		<title>Login</title>
	</head>
	<body >
	<div class="container-fliud">
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow bg-gradient-primary">
		<!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle  bg-light">
            <i class="fa fa-bars"></i>
          </button>
		 <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto pr-5 p-hide">

            <!-- Nav Item - Alerts -->
            <li class="nav-item ">
              <a class="nav-link " href="superuser_home.php">
                <i class="fas fa-home"><p> Home</p></i>
              </a>
              </li>
			
			<li class="nav-item">
              <a class="nav-link " href="addadmin.php">
                <i class="fas fa-info"> <p>AddAdmin</p></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link " href="view_remove_admin.php">
                <i class="fas fa-info"> <p>Viewadmin</p></i>
              </a>
            </li>
			<li>
              <a class="nav-link " href="login.php" >
                <i class="fas fa-sign-out-alt  text-gray"><p>LogOut</p></i>
              </a>
            </li>

          </ul>

        </nav>
		</div>
		<div class="container bg-light col-5">
            <form class="form-horizontal" name="myform" role="form" onsubmit=" return validate_form()" method="post">
                <h3>AddAdmin</h3>
				<div class="form-group">
                    <label  class="col-sm-3 control-label" >Name</label>
                    <div class="col-sm-8">
                        <input type="text" id="name" name="name" class="form-control " autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label" >Admin-ID</label>
                    <div class="col-sm-8">
                        <input type="text" id="adminid" name="adminid" class="form-control " autofocus required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label" >Password</label>
                    <div class="col-sm-8">
                        <input type="text" id="password" name="password" class="form-control " autofocus required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label" >Admin-Level</label>
                    <div class="col-sm-8">
                        <input type="text" id="adminlv" name="adminlv" class="form-control " autofocus required>
                    </div>
                </div>
				
                
					<button type="submit" class="btn btn-primary ml-5" name="addadmin">ADD</button>
					
                </div>
                
                
                
				 </form> <!-- /form -->
                </div>	
           
        </div> <!-- ./container -->
		
	<?php
	if(isset($_POST['addadmin']))
		{
			include '../controller/Mycontroller.php';
			$obj=new Mycontroller();
			$obj->Addadmin($_POST['name'],$_POST['adminid'],$_POST['password'],$_POST['adminlv']);
		}
	?>
	</body>
	</html>