<?php
include '../config/connection.php';
class Mycontroller
{
	
	function LoginUser($user,$pass) #---------------------login user------------------
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->userlogin($user,$pass);
		
	}
	function Loadfirst()  #---------------load index page--------------
	{
		header('location:view/login.php');
	}
	
	#-----------------add student by admin-------------
	function Addstudent($regno,$name,$mobile,$depname,$course,$cpassword,$email,$username,$semno,$year)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->insert($regno,$name,$mobile,$depname,$course,$cpassword,$email,$username,$semno,$year);
		
	}
	#-------------- add course by admin----------------
	function Addcourse($depname,$course)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->addcourse($depname,$course);
		
	}
	
	#--------------add admin by superuser------------
	function Addadmin($name,$adminid,$password,$adminlv)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->addadmin($name,$adminid,$password,$adminlv);
		
	}
	
	#--------------------student's profile----------------
	function StudentProfile($ino)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$result=$mod->studentprofile($ino);
		return $result;
	}
	
	#----------------- view student's result-------------
	function Studentresult($ino)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$result=$mod->studentresult($ino);
		return $result;
	}
	
	#--------------------------add rsult by admin-------------
	function Addresult($indexno,$regno,$name,$coursecode,$subject,$result,$credit,$gpa)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->addresult($indexno,$regno,$name,$coursecode,$subject,$result,$credit,$gpa);
		
	}
	
	#-----------remove admin by superuser---------------------
	function RemoveAdmin($id)
	{
		
		$mod=new MyModel();
		$mod->RemoveAdmin($id);
		
	}
	
	#---------------------view admin by superuser-----------------
	function ViewAdmin()
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$result=$mod->ViewAdmin();
		return $result;
	}
	
	#----------add subject by admin--------------------------------
	function Addsubject($code,$sem,$subject,$year,$credit,$depname)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->addsubject($code,$sem,$subject,$year,$credit,$depname);
		
	}
	
	#--------------------student view subject-----------------
	function Viewsubjects($depname,$sem)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$result=$mod->viewsubject($depname,$sem);
		return($result);
	}
	
	#----------------admin view student-------------
	function ViewStudent()
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$result=$mod->ViewStudent();
		return $result;
	}
	
	#------------admin remove student-----------------
	function RemoveStudent($id)
	{
		
		$mod=new MyModel();
		$mod->RemoveStudent($id);
		
	}
	
	#-----------forgot password---------------------
	function ChangePass($username,$email,$pass)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->ChangePass($username,$email,$pass);
		
	}
	
	#---------------------add time table---------------------
	function AddTimetable($day,$depname,$subject1,$subject2,$subject3,$adminid,$subject4,$semester)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->addtimetable($day,$depname,$subject1,$subject2,$subject3,$adminid,$subject4,$semester);
		
	}
	
	#----------------student view timetable-----------------------
	function ViewTimetable($dep,$sem)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$result=$mod->ViewTimetable($dep,$sem);
		return $result;
	}
	
	#--------------add notice by admin--------------
	function AddNotice($title,$begdate,$enddate,$desc,$adminid)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->addnotice($title,$begdate,$enddate,$desc,$adminid);
		
	}
	
	
	#-------------------student view notice---------------------------
	function viewnotice()
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$result=$mod->viewnotice();
		return $result;
	}
	
}
?>
