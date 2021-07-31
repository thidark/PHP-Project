<?php
class AdmDAO extends DAO{
	public function getAdmId($name,$pwd){
		
		$sql="select * from admin where user_name=:name and password=:pwd";
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":name", $name);
		$this->bindQueryParam(":pwd", $pwd);
		$result=$this->executeQuery();
		return  $result;
		
	}
}
