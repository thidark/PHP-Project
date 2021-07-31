<?php
class StudentDao extends DAO{
	function saveStudent(){
		if(isset($_SESSION['student']))
			$student=$_SESSION['student'];
		else 
			new Student();

			$name=$student->getName();
			$rno=$student->getRollNo();
			$address=$student->getAddress();
			$pno=$student->getPhNo();
			
			$sql="insert into student values(null,:name,:rno,:address,:pno)";
			$this->openDB();
			$this->prepareQuery($sql);
			$this->bindQueryParam(":name", $name);
			$this->bindQueryParam(":rno", $rno);
			$this->bindQueryParam(":address", $address);
			$this->bindQueryParam(":pno", $pno);
			$this->beginTrans();
			$result=$this->executeUpdate();
			
			if($result)
				$this->commitTrans();
			else 
				$this->rollbackTrans();
			
			
	}
	
	function getStudentList(){
		$sql="select * from student";
		
		$this->openDB();
		$this->prepareQuery($sql);
		$result=$this->executeQuery();
		return $result;
	}
	
	function  getStudentById($student_id){
		$sql="select * from student where std_id=:std_id";
		
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":std_id", $student_id);
		$result=$this->executeQuery();
		return $result;
		
	}
	
	function updateStdProfile(){
		$student=$_SESSION['studentUpdateProfile'];
		
		$sql="update student set std_name=:name,std_rollNo=:rno,std_address=:address,std_phNo=:pno where std_id=:id";
		
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":name", $student->getName());
		$this->bindQueryParam(":rno", $student->getRollNo());
		$this->bindQueryParam(":address", $student->getAddress());
		$this->bindQueryParam(":pno", $student->getPhNo());
		$this->bindQueryParam(":id", $_SESSION['stuUpd_id']);
		$this->beginTrans();
		$result=$this->executeUpdate();
		if($result)
			$this->commitTrans();
		else 
			$this->rollbackTrans();
		
	}
	
	public function deleteStudent(){
		$stdDel_id=$_SESSION['stuDel_id'];
		
		$sql="delete from student where std_id=:del_id";
		
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":del_id", $stdDel_id);
		$this->beginTrans();
		$result=$this->executeUpdate();
		if($result)
			$this->commitTrans();
		else
			$this->rollbackTrans();
	}
}