<!----------add result------------>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		
	
		<title>Add Result</title>
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
              <a class="nav-link " href="viewstudent.php">
                <i class="fas fa-info"> <p>ViewStudents</p></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link " href="addcourse.php">
                <i class="fas fa-info"> <p>AddCourse</p></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link " href="addtimetable.php">
                <i class="fas fa-info"> <p>AddTimeTable</p></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link " href="addsubject.php">
                <i class="fas fa-info"> <p>AddSubject</p></i>
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
                <h3>Add Result</h3>
				<div class="form-group">
                    <label  class="col-sm-3 control-label" >Indexno</label>
                    <div class="col-sm-8">
                        <input type="text" id="indexno" name="indexno" class="form-control " autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label" >Regno</label>
                    <div class="col-sm-8">
                        <input type="text" id="regno" name="regno" class="form-control " autofocus required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label" >courseCode</label>
                    <div class="col-sm-8">
                        <input type="text" id="coursecode" name="coursecode" class="form-control " autofocus required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label" >Name</label>
                    <div class="col-sm-8">
                        <input type="text" id="name" name="name" class="form-control " autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label" >SubjectName</label>
                    <div class="col-sm-8">
                        <input type="text" id="subname" name="subname" class="form-control " autofocus required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label" >Result</label>
                    <div class="col-sm-8">
                        <input type="text" id="result" name="result" class="form-control " autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label" >credit</label>
                    <div class="col-sm-8">
                        <input type="text" id="credit" name="credit" class="form-control " autofocus required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label" >totalGPA</label>
                    <div class="col-sm-8">
                        <input type="text" id="totalgpa" name="totalgpa" class="form-control " autofocus required>
                    </div>
                </div>
				
                
					<input type="submit" class="btn btn-primary ml-5" name="addresult" value="ADD"></button>
					
                </div>
                
                
                
				 </form> <!-- /form -->
                </div>	
           
        </div> <!-- ./container -->
	<?php
		if(isset($_POST['addresult']))
		{
			include '../controller/Mycontroller.php';
			$obj=new Mycontroller();
			$obj->Addresult($_POST['indexno'],$_POST['regno'],$_POST['name'],$_POST['coursecode'],$_POST['subname'],$_POST['result'],$_POST['credit'],$_POST['totalgpa']);
		}
	?>
	</body>
	</html>