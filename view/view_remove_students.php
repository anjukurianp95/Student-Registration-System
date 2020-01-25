<!----------view remove student by admin------------>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		
	
		<title>view remove students</title>
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
              <a class="nav-link " href="adminhome.php">
                <i class="fas fa-home"><p> Home</p></i>
              </a>
              </li>
			
			<li class="nav-item">
              <a class="nav-link " href="addstudent.php">
                <i class="fas fa-info"> <p>AddStudents</p></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link " href="view_remove_students.php">
                <i class="fas fa-info"> <p>ViewStudents</p></i>
              </a>
            </li>
			
			<li class="nav-item">
              <a class="nav-link " href="addcourse.php">
                <i class="fas fa-info"> <p>AddCourse</p></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link " href="addsubject.php">
                <i class="fas fa-info"> <p>AddSubject</p></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link " href="addtimetable.php">
                <i class="fas fa-info"> <p>AddTimeTable</p></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link " href="addresult.php">
                <i class="fas fa-info"> <p>AddResult</p></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link " href="notices.php">
                <i class="fas fa-info"> <p>Notices</p></i>
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
		<div class="container bg-light col-5 mt-5">
					<h2>Students</h2>
			<table class="table table-striped card-text bg-light">
			  <thead>
				<tr>
				  <th scope="col">IndexNo</th>
				  <th scope="col">RegNo</th>
				  <th scope="col">Name</th>
				  <th scope="col">Mobile</th>
				  <th scope="col">Depname</th>
				  <th scope="col">Email</th>
				  <th scope="col">Semester</th>
				  <th></th>
				</tr>
			  </thead>
			  <tbody>
					<?php
						include '../controller/Mycontroller.php';
						$obj=new Mycontroller();
						$result=$obj->ViewStudent();	
						while($row = mysqli_fetch_assoc($result)) 
						{
					?>
					<tr>
					<form  method="post">
					    <td scope="row"><input type="text" id="id" name="indexno" class="form-control " value="<?php echo $row['indexno'] ;?>"></td>
						<td scope="row"><?php echo $row['regno'] ;?></td>
						<td scope="row"><?php echo $row['name'] ;?></td>
						<td scope="row"><?php echo $row['mobile'] ;?></td>
						<td scope="row"><?php echo $row['depname'] ;?></td>
						<td scope="row"><?php echo $row['email'] ;?></td>
						<td scope="row"><?php echo $row['semno'] ;?></td>
						<td scope="row"><input type="submit"  name="remove" class="form-control btn-danger" value="Remove"></td>
					</form>
					<tr>
						<?php } ?>
				</tbody>
			
		</div>
		</table>
			<?php
		if(isset($_POST['remove']))
		{
			
			$obj->RemoveStudent($_POST['indexno']);
		}
	?>
	</body>
	</html>