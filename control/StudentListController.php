<?php
class StudentListController{
	function renderStudentListLink(){
		
		$studentDao=new StudentDao();
		$result=$studentDao->getStudentList();
		return new StudentListView($result);
	}
}