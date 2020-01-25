<?php
class MyModel
{
	#-------------------------add student------------------
	function insert($regno,$name,$mobile,$depname,$course,$cpassword,$email,$uname,$semno,$year)
	{
		include '../config/connection.php';
		$sql="insert into student(regno,name,mobile,depname,coursename,password,email,username,semno,year) values('".$regno."','".$name."','".$mobile."','".$depname."','".$course."','".$cpassword."','".$email."','".$uname."','".$semno."','".$year."')";
		if(mysqli_query($conn,$sql))
		{
			echo "registred successfully";
		}
	}
	
	#------------------user login---------------------
	function userlogin($user,$pass)
	{
		include '../config/connection.php';
		$sql="select * from admin where username='".$user."' and password='".$pass."'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)>0)
		{
			header('location:adminhome.php');
		}
		else
		{
			$sql="select * from student where username='".$user."' and password='".$pass."'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0)
			{
				session_start();
				$row = mysqli_fetch_assoc($result);
				$_SESSION['ino']=$row['indexno'];
				$_SESSION['depname']=$row['depname'];
				$_SESSION['sem']=$row['semno'];
				header('location:student_home.php');
				
			}
			else
			{
				$sql="select * from superuser where username='".$user."' and password='".$pass."'";
				$result = mysqli_query($conn, $sql);
				if(mysqli_num_rows($result)>0)
				{
					
					header('location:superuser_home.php');
					
				}
			
			}
		}
	}
	#-----------------admin add course-----------------
	function addcourse($depname,$course)
	{
		include '../config/connection.php';
		$sql="insert into course(depname,coursename) values('".$depname."','".$course."')";
		if(mysqli_query($conn,$sql))
		{
			echo "course added";
		}
	}
	
	#-----------------------------student views profile----------------
	function studentprofile($ino)
	{
		include '../config/connection.php';
		$sql="select * from student where indexno='".$ino."'";
		$result=mysqli_query($conn,$sql);
			return($result);
	}
	
	#---------student view result-------------------
	function studentresult($ino)
	{
		include '../config/connection.php';
		$sql="select * from result where indexno='".$ino."'";
		$result=mysqli_query($conn,$sql);
			return($result);
	}
	
	#--------------------admin add result----------------
	function addresult($indexno,$regno,$name,$coursecode,$subject,$result,$credit,$gpa)
	{
		include '../config/connection.php';
		$sql="insert into result(indexno,regno,name,coursecode,subname,credit,totalgpa,result) values('".$indexno."','".$regno."','".$name."','".$coursecode."','".$subject."','".$result."','".$credit."','".$gpa."')";
		if(mysqli_query($conn,$sql))
		{
			echo "result added";
		}
	}
	
	#--------super user add admin------------------------
	function addadmin($name,$adminid,$pass,$adminlv)
	{
		include '../config/connection.php';
		$sql="insert into admin(username,adminid,adminlv,password) values('".$name."','".$adminid."','".$adminlv."','".$pass."')";
		if(mysqli_query($conn,$sql))
		{
			echo "admin added";
		}
	}
	#----------------superuser remove admin----------------
	function RemoveAdmin($id)
	{
		include '../config/connection.php';
		$sql="delete from admin where adminid='".$id."'";
		mysqli_query($conn,$sql);
	}
	
	#-------------------------superuser view admin--------------
	function ViewAdmin()
	{
		include '../config/connection.php';
		$sql="select * from admin";
		$result=mysqli_query($conn,$sql);
		return($result);
	}
	
	#------------------------add subjects---------------------
	function addsubject($code,$sem,$subject,$year,$credit,$depname)
	{
		include '../config/connection.php';
		
		$sql="insert into subject(code,semester,subjectname,year,credit,depname) values('".$code."','".$sem."','".$subject."','".$year."','".$credit."','".$depname."')";
		if(mysqli_query($conn,$sql))
		{
			echo "subject added";
		}
	}
	
	#--------add timetable----------------------
	function addtimetable($day,$depname,$subject1,$subject2,$subject3,$adminid,$subject4,$semester)
	{
		include '../config/connection.php';
		$sql="insert into timetable(day,subjecthour1,subjecthour2,subjecthour3,subjecthour4,depname,adminid,semester) values('".$day."','".$subject1."','".$subject2."','".$subject3."','".$subject4."','".$depname."','".$adminid."','".$semester."')";
		if(mysqli_query($conn,$sql))
		{
			echo "timetable added";
		}
		else
			echo "error";
	}
	
	#---------------student view subject-----------------------
	function viewsubject($dep,$sem)
	{
		include '../config/connection.php';
		$sql="select * from subject where depname='".$dep."' and semester='".$sem."'";
		$result=mysqli_query($conn,$sql);
		return($result);
	}
	
	#-------------------admin view student-----------------
	function ViewStudent()
	{
		include '../config/connection.php';
		$sql="select * from student order by depname";
		$result=mysqli_query($conn,$sql);
		return($result);
	}
	
	#-------admin remove student-----------------
	function RemoveStudent($id)
	{
		include '../config/connection.php';
		$sql="delete from student where indexno='".$id."'";
		mysqli_query($conn,$sql);
	}
	#---------------------change password-------------------------
	function ChangePass($user,$email,$pass)
	{
		include '../config/connection.php';
		$sql="select * from student where username='".$user."' and email='".$email."'";
		if(mysqli_query($conn,$sql))
		{
					$sql="UPDATE student SET password='".$pass."' where username='".$user."'";
					if(mysqli_query($conn,$sql))
					{
						header('location:login.php');
					}
		}	
	}
	#----------------student view timetable-----------------------
	function ViewTimetable($dep,$sem)
	{
		include '../config/connection.php';
		$sql="select * from timetable where depname='".$dep."' and semester='".$sem."'";
		$result=mysqli_query($conn,$sql);
		return($result);
	}
	
	#-----------------------admin add notice-------------------
	function addnotice($title,$begdate,$enddate,$desc,$adminid)
	{
		include '../config/connection.php';
		$sql="insert into notices(title,begdate,enddate,description,adminid) values('".$title."','".$begdate."','".$enddate."','".$desc."','".$adminid."')";
		if(mysqli_query($conn,$sql))
		{
			echo "notice added";
		}
		else
			echo "error";
	}
	#----------student view notice------------------
	function viewnotice()
	{
		include '../config/connection.php';
		$sql="select * from notices";
		$result=mysqli_query($conn,$sql);
		return($result);
	}
}
?>