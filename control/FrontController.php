<?php
class  FrontController{
	public  function execute(){
		if(@$_POST["usecase"]==null){
				
			$_POST["usecase"]=UC_FIRST;
			$_POST["action"]=ACT_FIRST_PAGE;

		}



		if(isset($_POST['btnStdLogin'])){
			$_POST['usecase']=UC_ADM;
			$_POST["action"]=ACT_ADM_LOGIN;
				
		}

//student registration
		if(isset($_POST['btnRegisterLink'])){
			$_POST['usecase']=UC_REG;
			$_POST["action"]=ACT_REG_LINK;
				
		}

		
	    if(isset($_POST['btnStdReg'])){
			$_POST['usecase']=UC_REG;
			$_POST["action"]=ACT_REG_CNF;
				
		}
	 if(isset($_POST['btnStdRegCancel'])){
	 
			$_POST['usecase']=UC_HP;
			$_POST["action"]=ACT_HP;
				
		}
		
		
		
		
		
		
		
		
		
		
		
		
	 if(isset($_POST['btnStdRegConfirm'])){
	 
			$_POST['usecase']=UC_REG;
			$_POST["action"]=ACT_REG_CMP;
				
		}
	
		
//Student list

	if(isset($_POST['btnStudentListLink'])){
	 
			$_POST['usecase']=UC_STD_LIST;
			$_POST["action"]=ACT_STD_LIST;
				
		}
		
//Student profile update
	if(isset($_POST['btnUpdate'])){
	 
			$_POST['usecase']=UC_UPDATE;
			$_POST["action"]=ACT_UPDATE;
				
		}
		
	if(isset($_POST['btnStdUpdate'])){
	 
			$_POST['usecase']=UC_UPDATE;
			$_POST["action"]=ACT_UPDATE_CNF;
				
		}	
		
	if(isset($_POST['btnStdUpdateConfirm'])){
	 
			$_POST['usecase']=UC_UPDATE;
			$_POST["action"]=ACT_UPDATE_CMP;
				
		}	
		
	if(isset($_POST['btnStdUpdateConfirmCancel'])){
	 
			$_POST['usecase']=UC_UPDATE;
			$_POST["action"]=ACT_UPDATE;
				
		}
		
//delete student
	if(isset($_POST['btnDelete'])){
	 
			$_POST['usecase']=UC_DELETE;
			$_POST["action"]=ACT_DELETE;
				
		}
		
		
//**************************************************/

		switch (($_POST["usecase"])){
			case UC_FIRST:if($_POST['action']==ACT_FIRST_PAGE)
			{
				$ctl=new StudentHomePageController();
				return $ctl->renderLogin();

			}
				
			case UC_ADM:if($_POST['action']==ACT_ADM_LOGIN)
			{
				$ctl=new StudentHomePageController();
				return $ctl->renderCheckLogin();

			}
				
			case UC_REG:{
							if($_POST['action']==ACT_REG_LINK)
							{
								$ctl=new StudentRegisterController();
								return $ctl->renderRegister();
				
							}
							if($_POST['action']==ACT_REG_CNF)
							{
								$ctl=new StudentRegisterController();
								return $ctl->renderRegisterConfirm();
				
							}
							
							
							
							
							
							
							
							
							
							
							if($_POST['action']==ACT_REG_CMP)
							{
								$ctl=new StudentRegisterController();
								return $ctl->renderRegisterComplete();
				
							}
								
					}
					
			case UC_STD_LIST:if($_POST['action']==ACT_STD_LIST){
				$ctl=new StudentListController();
				return $ctl->renderStudentListLink();
			}
			
		  case UC_HP:if($_POST['action']==ACT_HP)
			{
				$ctl=new StudentBrowseLinkController();
				return $ctl->renderStudentLink();

			}
			
		  case UC_UPDATE:if($_POST['action']==ACT_UPDATE)
						{
							$ctl=new StudentBrowseLinkController();
							return $ctl->renderStudentUpdateLink();
			
						}
						if($_POST['action']==ACT_UPDATE_CNF)
						{
							$ctl=new StudentBrowseLinkController();
							return $ctl->renderStudentUpdateConfirmLink();
			
						}
						
						if($_POST['action']==ACT_UPDATE_CMP)
						{
							$ctl=new StudentBrowseLinkController();
							return $ctl->renderStudentUpdateCompleteLink();
			
						}
		case UC_DELETE:if($_POST['action']==ACT_DELETE)
			{
				
				$ctl=new StudentBrowseLinkController();
				return $ctl->renderDeleteLink();

			}
			
			
		 case UC_LOGOUT:if($_POST['action']==ACT_LOGOUT_PAGE)
			{
				
				$ctl=new StudentHomePageController();
				return $ctl->renderLogin();

			}

		}

	}
}