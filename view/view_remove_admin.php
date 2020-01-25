<!----------superuser views and removes admin------------>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		
	
		<title>view remove admin</title>
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
		<div class="container bg-light col-5 mt-5">
					<h2>Admin</h2>
			<table class="table table-striped card-text bg-light">
			  <thead>
				<tr>
				  <th scope="col">ID</th>
				  <th scope="col">Name</th>
				  <th scope="col">AdminLevel</th>
				  <th></th>
				</tr>
			  </thead>
			  <tbody>
					<?php
						include '../controller/Mycontroller.php';
						$obj=new Mycontroller();
						$result=$obj->ViewAdmin();	
						while($row = mysqli_fetch_assoc($result)) 
						{
					?>
					<tr>
					<form  method="post">
					    <td scope="row"><input type="text" id="id" name="id" class="form-control " value="<?php echo $row['adminid'] ;?>"></td>
						<td scope="row"><?php echo $row['username'] ;?></td>
						<td scope="row"><?php echo $row['adminlv'] ;?></td>
						<td scope="row"><input type="submit"  name="remove" class="form-control btn-danger" value="Remove"></td>
					</form>
					<tr>
						<?php } ?>
				</tbody>
			</table>
			<?php
		if(isset($_POST['remove']))
		{
			
			$obj->RemoveAdmin($_POST['id']);
		}
	?>
		</div>
	</body>
	</html>