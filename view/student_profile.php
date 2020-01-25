<!----------student profile------------>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		
	
		<title>Student Profile</title>
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
					<h2>MY PROFILE</h2>
			<?php
				session_start();
				include '../controller/Mycontroller.php';
				$obj=new Mycontroller();
				$result=$obj->StudentProfile($_SESSION['ino']);
				
				while($row = mysqli_fetch_assoc($result)) 
				{
			?>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Regno</label>
                    <div class="col-sm-8">
                        <input type="number" id="regno" class="form-control" name="regno" value="<?php echo $row['regno'] ;?>"readonly>
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Indexno</label>
                    <div class="col-sm-8">
                        <input type="number" id="indexno" class="form-control" name="indexno" value="<?php echo $row['indexno'] ;?>"readonly>
                    </div>
                </div>
				<div class="form-group">
                    <label for="Name" class="col-sm-3 control-label" >Name</label>
                    <div class="col-sm-8">
                        <input type="text" id="Name" name="name" class="form-control " value="<?php echo $row['name'] ;?>"readonly>
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Mobile</label>
                    <div class="col-sm-8">
                        <input type="number" id="mobile" class="form-control" name="mobile" value="<?php echo $row['mobile'] ;?>"readonly>
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">DepName</label>
                    <div class="col-sm-8">
                        <input type="text" id="depname" class="form-control" name="depname" value="<?php echo $row['depname'] ;?>"readonly>
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Course</label>
                    <div class="col-sm-8">
                        <input type="text" id="course" class="form-control" name="course" value="<?php echo $row['coursename'] ;?>"readonly>
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-8">
                        <input type="text" id="email" class="form-control" name="email" value="<?php echo $row['email'] ;?>"readonly>
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" id="username" class="form-control" name="username" value="<?php echo $row['username'] ;?>"readonly>
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Semester</label>
                    <div class="col-sm-8">
                        <input type="text" id="sem" class="form-control" name="sem" value="<?php echo $row['semno'] ;?>"readonly>
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Year</label>
                    <div class="col-sm-8">
                        <input type="text" id="year" class="form-control" name="year" value="<?php echo $row['year'] ;?>"readonly>
                    </div>
                </div>
				<?php } ?>
            </div>
	</body>
	</html>