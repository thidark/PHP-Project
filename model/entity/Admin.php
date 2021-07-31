<?php
class Admin{
	
	private $id;
	private $name;
	private $password;
	
	public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id=$id;
	}
	
	public function getName(){
		return $this->name;
	}
	public function setName($name){
		$this->name=$name;
	}
	public function getPwd(){
		return $this->password;
	}
	public function setPwd($pwd){
		$this->pssword=$pwd;
	}
}