<!----------student view result------------>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		
	
		<title>Student Result</title>
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
              <a class="nav-link " href="login.php" >
                <i class="fas fa-sign-out-alt  text-gray"><p>LogOut</p></i>
              </a>
            </li>

          </ul>

        </nav>
		</div>
		<div class="card-body">
					<h2>Results</h2>
		<table class="table table-striped card-text bg-light">
		  <thead>
			<tr>
			  <th scope="col">RegNo</th>
			  <th scope="col">IndexNo</th>
			  <th scope="col">CourseCode</th>
			  <th scope="col">Name</th>
			  <th scope="col"> Subject</th>
			  <th scope="col">Result</th>
			  <th scope="col"> Credit</th>
			  <th scope="col"> GPA</th>
			</tr>
		  </thead>
		  <tbody>
			<?php
				session_start();
				include '../controller/Mycontroller.php';
				$obj=new Mycontroller();
				$result=$obj->Studentresult($_SESSION['ino']);
				
				while($row = mysqli_fetch_assoc($result)) 
				{
			?>
				<tr>
                <td scope="row"><input type="number" id="regno" class="form-control"  value="<?php echo $row['regno'] ;?>"readonly></td>
				<td><input type="number"  class="form-control" name="Indexno" value="<?php echo $row['indexno'] ;?>"readonly></td>
                <td scope="row"><input type="text"  class="form-control"  value="<?php echo $row['coursecode'] ;?>"readonly>
                <td scope="row"><input type="text" class="form-control"  value="<?php echo $row['name'] ;?>"readonly></td>
				<td scope="row"><input type="text" class="form-control" value="<?php echo $row['subname'] ;?>"readonly></td>
				<td scope="row"><input type="text" class="form-control" value="<?php echo $row['result'] ;?>"readonly></td>
				<td scope="row"><input type="text" class="form-control" value="<?php echo $row['credit'] ;?>"readonly></td>
				<td scope="row"><input type="text" class="form-control" value="<?php echo $row['totalgpa'] ;?>"readonly></td>
				</tr>
				<?php } ?>
			</tbody>
			</table>
            </div>
	</body>
	</html>