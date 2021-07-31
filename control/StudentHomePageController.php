<?php
class StudentHomePageController{

	function renderLogin(){
		if(isset($_SESSION['student']))
			unset($_SESSION['student']);
		if(isset($_SESSION['admin']))
			unset($_SESSION['admin']);
		return new StudentLoginView();
			
	}

	function renderCheckLogin(){


		$name=@$_POST['name'];
		$password=@$_POST['password'];
			
		if(!isset($_SESSION['admin']))

		{
				
			if((strlen($name)==0) && (strlen($password)==0)){
				$err_msg['admin_all_null']=ERR_LOGIN_ALL_NULL_FIELD;
				return new StudentLoginView($err_msg);
			}
			else{
				if(strlen($name)==0 ){
					
					$err_msg['admin_name_null']=ERR_LOGIN_NAME_NULL_FIELD;

						
				}
				if(strlen($password)==0){
				
					$err_msg['admin_pwd_null']=ERR_LOGIN_PWD_NULL_FIELD;

						
				}
			}
			if(!empty($err_msg)){

				return new StudentLoginView($err_msg);
			}


		}
		$adm_linkDAO=new admDAO();
		
		$adm_result=$adm_linkDAO->getAdmId(@$name,@$password);
		if(empty($adm_result)){
			$err_msg['no_admin_member']=ERR_NOT_ADMIN_MEMBER;
			return new StudentLoginView($err_msg);
		}

		else {
			$admin=new Admin();
			
			
			$admin->setId($adm_result[0]['id']);
			$admin->setName($adm_result[0]['user_name']);
			$admin->setPwd($adm_result[0]['password']);
			$_SESSION['admin']=$admin;

			return new HomePageView();
		}
	



	}
}