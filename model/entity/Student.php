<?php
class Student{
	private $std_id;
	private $name;
	private $rollNo;
	private $address;
	private $phNo;
	
	public function getStd_id(){
		return $this->std_id;
		
	}
	
	public function setStd_id($std_id){
		$this->std_id=$std_id;
	}
	
	public function getName(){
		return $this->name;
		
	}
	
	public function setName($name){
		$this->name=$name;
	}
	
	public function getRollNo(){
		return $this->rollNo;
		
	}
	
	public function setRollNo($rollNo){
		$this->rollNo=$rollNo;
	}
	
	public function getAddress(){
		return $this->address;
		
	}
	
	public function setAddress($address){
		$this->address=$address;
	}
	
	public function getPhNo(){
		return $this->phNo;
		
	}
	
	public function setPhNo($phNo){
		$this->phNo=$phNo;
	}
	
}