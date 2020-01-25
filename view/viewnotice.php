<!----------view notice------------>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		
	
		<title>view notice</title>
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
              <a class="nav-link " href="student_home.php">
                <i class="fas fa-home"><p> Home</p></i>
              </a>
              </li>
			
			<li class="nav-item">
              <a class="nav-link " href="student_profile.php">
                <i class="fas fa-info"> <p>MyProfile</p></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link " href="student_subject.php">
                <i class="fas fa-info"> <p>Subjects</p></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link " href="viewtimetable.php">
                <i class="fas fa-info"> <p>TimeTable</p></i>
              </a>
            </li>
			
			<li class="nav-item">
              <a class="nav-link " href="result.php">
                <i class="fas fa-info"> <p>Results</p></i>
              </a>
            </li>
			
			<li class="nav-item">
              <a class="nav-link " href="viewnotice.php">
                <i class="fas fa-info"> <p>Notice</p></i>
              </a>
            </li>
			
           
			<li class="nav-item">
              <a class="nav-link " href="login.php" >
                <i class="fas fa-sign-out-alt  text-gray"><p>LogOut</p></i>
              </a>
            </li>

          </ul>

        </nav>
		</div>
		<div class="container bg-light col-5 mt-5"">
  <h2> Notices</h2>
  <table class="table table-striped card-text bg-light">
  
  <tbody>
     
			<?php
				
				include '../controller/Mycontroller.php';
				$obj=new Mycontroller();
				$result=$obj->viewnotice();
				while($row = mysqli_fetch_assoc($result)) 
				{
			?>
    
	<form >
     <tr> <th scope="col">Title</th><td scope="row"><input type="text"  class="form-control " value="<?php echo $row['title'] ;?>" readonly></td></tr>
     <tr><th scope="col">Begdate</th><td scope="row"><input type="date" class="form-control " value="<?php echo $row['begdate'] ;?>" readonly></td>
	 <tr> <th scope="col">Enddate</th><td scope="row"><input type="date"  class="form-control " value="<?php echo $row['enddate'] ;?>" readonly></td></tr>
	 <tr> <th scope="col">Description</th><td scope="row"><input type="text" class="form-control " value="<?php echo $row['description'] ;?>" readonly></td></tr>
	  
	  
	  
     
	 </form>
     
				<?php } ?>
    
	</tbody>
	</table>
	</div>
	</body>
	</html>