<?php
class StudentRegisterController{
public  function renderRegister(){
	return new  StudentRegisterView();
}

public function renderRegisterConfirm(){
	$std_name=@$_POST['std_name'];
	$std_rollNo=@$_POST['std_rollNo'];
	$std_address=@$_POST['std_address'];
	$std_phNo=@$_POST['std_phNo'];
	
	$student=new Student();
	$student->setName($std_name);
	$student->setRollNo($std_rollNo);
	$student->setAddress($std_address);
	$student->setPhNo($std_phNo);
	$_SESSION['student']=$student;
	
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
		return new StudentRegisterConfirmView();
	else 
		return new StudentRegisterView($err_msg);
}

public function renderRegisterComplete(){
	$stdLink_Dao=new StudentDao();
	$stdLink_Dao->saveStudent();
	
	if(isset($_SESSION['student']))
	unset($_SESSION['student']);
	return new StudentRegisterCompleteView();
}
}