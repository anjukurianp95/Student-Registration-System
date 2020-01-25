<!----------add student------------>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		
	
		<title>student Registration</title>
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
                <h3>StudentRegistration</h3>
				<div class="form-group">
                    <label  class="col-sm-3 control-label" >RegNo</label>
                    <div class="col-sm-8">
                        <input type="text" id="regno" name="regno" class="form-control " autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label" >Name</label>
                    <div class="col-sm-8">
                        <input type="text" id="name" name="name" class="form-control " autofocus required>
                    </div>
                </div>
				
                <div class="form-group">
                        <label  class="col-sm-3 control-label">Mobile</label>
                    <div class="col-sm-8">
                        <input type="number" id="mobile" class="form-control" name="mobile" required>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-sm-3 control-label" >DepartmentName</label>
                    <div class="col-sm-8">
                        <input type="text" id="age" name="depname" class="form-control " autofocus name="depname" required>
                    </div>
                </div> 
				<div class="form-group">
                    <label  class="col-sm-3 control-label" >Course</label>
                    <div class="col-sm-8">
                        <input type="text" id="gender" name="course" class="form-control " autofocus name="course" required>
                </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="password" placeholder="Password" class="form-control"name="password" required>
                </div>
                </div>
				<div class="form-group">
                    <label class="col-sm-4 control-label">Confirm Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="cpassword" placeholder="Cnfrm Password" class="form-control" name="cpassword" required><br>
						
				</div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Email </label>
                    <div class="col-sm-8">
                        <input type="email" id="email" class="form-control" name= "email" required>
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" id="username" class="form-control" name="username" required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label">SemesterNo</label>
                    <div class="col-sm-8">
                        <input type="text"  id="semno" class="form-control"name="semno" required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label">Year</label>
                    <div class="col-sm-8">
                        <input type="text"  id="year" class="form-control"name="year" required>
                    </div>
                </div>
					<button type="submit" class="btn btn-primary ml-5" name="userregister">Register</button>
					
                </div>
                
                
                
				 </form> <!-- /form -->
                </div>	
           
        </div> <!-- ./container -->
	<?php
		if(isset($_POST['userregister']))
		{
			include '../controller/Mycontroller.php';
			$obj=new Mycontroller();
			$obj->Addstudent($_POST['regno'],$_POST['name'],$_POST['mobile'],$_POST['depname'],$_POST['course'],$_POST['cpassword'],$_POST['email'],$_POST['username'],$_POST['semno'],$_POST['year']);
		}
	?>
	 
  <script>
			function validate_form()
			{
				var mb=document.forms["myform"]["mobile"].value;
				var str=document.forms["myform"]["password"].value;
				var str1=document.forms["myform"]["cpassword"].value;
				
				if(mb.length!=10){
					alert("Invalid mobileno");
					return false;
					
				}
				else if(str.length<6){
					alert("Password too short.");
					return false;
				}
				else if(str != str1){
					alert ("password doesn't match");
					return false;
				}
				/*else{
					return true;
				}*/
				
			}
		</script>
	</body>
	</html>