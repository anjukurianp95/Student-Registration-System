<!----------add time table------------>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		
	
		<title>Add timetable</title>
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
		<div class="container bg-light col-5">
            <form class="form-horizontal" name="myform" role="form" onsubmit=" return validate_form()" method="post">
                <h3>Add TimeTable</h3>
				<div class="form-group">
                    <label  class="col-sm-3 control-label" >Day</label>
                    <div class="col-sm-8">
                        <input type="text" id="day" name="day" class="form-control " autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label" >Subject1</label>
                    <div class="col-sm-8">
                        <input type="text" id="subject" name="subject1" class="form-control " autofocus required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label" >Subject2</label>
                    <div class="col-sm-8">
                        <input type="text" id="subject" name="subject2" class="form-control " autofocus required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label" >Subject3</label>
                    <div class="col-sm-8">
                        <input type="text" id="subject" name="subject3" class="form-control " autofocus required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label" >Subject4</label>
                    <div class="col-sm-8">
                        <input type="text" id="subject" name="subject4" class="form-control " autofocus required>
                    </div>
                </div> 
				<div class="form-group">
                    <label  class="col-sm-3 control-label" >Depname</label>
                    <div class="col-sm-8">
                        <input type="text" id="gender" name="depname" class="form-control " autofocus name="depname" required>
                </div>
                </div>
				
                <div class="form-group">
                    <label class="col-sm-3 control-label">AdminID </label>
                    <div class="col-sm-8">
                        <input type="text" id="adminid" class="form-control" name= "adminid" required>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-sm-3 control-label">Semester </label>
                    <div class="col-sm-8">
                        <input type="number" id="semester" class="form-control" name= "semester" required>
                    </div>
                </div>
				
                
					<input type="submit" class="btn btn-primary ml-5" name="add" value="ADD"></button>
					
                </div>
                
                
                
				 </form> <!-- /form -->
                </div>	
           
        </div> <!-- ./container -->
	<?php
		if(isset($_POST['add']))
		{
			include '../controller/Mycontroller.php';
			$obj=new Mycontroller();
			$obj->Addtimetable($_POST['day'],$_POST['depname'],$_POST['subject1'],$_POST['subject2'],$_POST['subject3'],$_POST['adminid'],$_POST['subject4'],$_POST['semester']);
		}
	?>
	</body>
	</html>