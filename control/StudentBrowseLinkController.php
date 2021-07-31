<?php
class StudentBrowseLinkController{
	function renderStudentLink(){
		if(isset($_SESSION['studentUpdateProfile']))
			unset($_SESSION['studentUpdateProfile']);
		if(isset($_SESSION['stuUpd_id']))
			unset($_SESSION['stuUpd_id']);
		return new HomePageView();
	}
	
	function renderStudentUpdateLink(){
		$student_id=@$_POST['student_id'];
		$_SESSION['stuUpd_id']=$student_id;		
				
		$studentDao=new StudentDao();
		$result=$studentDao->getStudentById($student_id);
		
	 
		
		$student=new Student();
		$student->setStd_id($result[0]['std_id']);
		$student->setName(@$result[0]['std_name']);
		$student->setRollNo(@$result[0]['std_rollNo']);
		$student->setAddress(@$result[0]['std_address']);
		$student->setPhNo(@$result[0]['std_phNo']);
		
		if(!isset($_SESSION['studentUpdateProfile']))
			$_SESSION['studentUpdateProfile']=$student;
		
		return new StudentUpdateView();
	}
	
	function renderStudentUpdateConfirmLink(){
		$std_name=@$_POST['std_name'];
		$std_rollNo=@$_POST['std_rollNo'];
		$std_address=@$_POST['std_address'];
		$std_phNo=@$_POST['std_phNo'];
		
		$student=new Student();
		$student->setName($std_name);
		$student->setRollNo($std_rollNo);
		$student->setAddress($std_address);
		$student->setPhNo($std_phNo);
		$_SESSION['studentUpdateProfile']=$student;
		
		$err_msg=array();
		if(strlen($std_name)==0){
			$err_msg['std_name_null']=ERR_STD_NAME_NULL;
			
		}
		if(strlen($std_rollNo)==0){
			$err_msg['std_rno_null']=ERR_STD_RNO_NULL;		
		}
		if(strlen($std_address)==0){
			$err_msg['std_address_null']=ERR_STD_ADD_NULL;		
		}
		if(strlen($std_phNo)==0){
			$err_msg['std_phNo_null']=ERR_STD_PHNO_NULL;		
		}
		
		if(empty($err_msg))
			return new StudentUpdateConfirmView();
		else 
			return new StudentUpdateView($err_msg);
	}
	
	public function renderStudentUpdateCompleteLink(){
		$studentDao=new StudentDao();
		$studentDao->updateStdProfile();
		return new StudentUpdateCompleteView();
	}
	
	public function renderDeleteLink(){
		$student_id=@$_POST['student_id'];
		$_SESSION['stuDel_id']=$student_id;	
		
		$studentDao=new StudentDao();
		$studentDao->deleteStudent();
		
		$studentList=$studentDao->getStudentList();
		return new StudentListView($studentList);
		
	}
		
	
}