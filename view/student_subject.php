<!----------student view subjects------------>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		
	
		<title>Student subjects</title>
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
		<div class="container bg-light col-5">
					<h2>Subjects</h2>
			<table class="table table-striped card-text bg-light">
			  <thead>
				<tr>
				  <th scope="col">Code</th>
				  <th scope="col">Semester</th>
				  <th scope="col">SubjectName</th>
				  <th scope="col">DepName</th>
				  <th scope="col">Credit</th>
				  <th></th>
				</tr>
			  </thead>
			  <tbody>
			<?php
				session_start();
				include '../controller/Mycontroller.php';
				$obj=new Mycontroller();
				$result=$obj->ViewSubjects($_SESSION['depname'],$_SESSION['sem']);
				
				while($row = mysqli_fetch_assoc($result)) 
				{
			?>
			<tr>
					<form  method="post">
					    <td scope="row"><?php echo $row['code'] ;?></td>
						<td scope="row"><?php echo $row['semester'] ;?></td>
						<td scope="row"><?php echo $row['subjectname'] ;?></td>
						<td scope="row"><?php echo $row['depname'] ;?></td>
						<td scope="row"><?php echo $row['credit'] ;?></td>
					</form>
					<tr>
						<?php } ?>
				</tbody>
			</table>
				
	</body>
	</html>