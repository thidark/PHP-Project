<?php
class StudentRegisterView extends View{
	private $err_msg;
	public function __construct($err_msg=NULL){
			parent::__construct();
		$this->err_msg=$err_msg;
	
	
	}
	

	
	public function displayBody(){
	
		if(isset($_SESSION['student']))
			$student=$_SESSION['student'];
		else 
			$student=new Student();
			
			$err_msg=$this->err_msg;
			
		
		
		?>
	
	<div class="content">
		
		
	<form method="post">
	<h1>Registeration Form</h1>
	<table>
		<tr>
			<td>Name:</td>
			<td><input type='text' name='std_name' value="<?php echo $student->getName()?>"/></td>
			<td><?php if (isset($err_msg['std_name_null']))
				echo $this->err_msg['std_name_null'];
			?></td>
		</tr>
		<tr>
			<td>Roll No:</td>
			<td><input type='text' name='std_rollNo' value="<?php echo $student->getRollNo()?>"/></td>
			<td><?php if (isset($err_msg['std_rno_null']))
				echo $err_msg['std_rno_null'];
			?></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type='text' name='std_address' value="<?php echo $student->getAddress()?>"/></td>
			<td><?php if (isset($err_msg['std_address_null']))
				echo $err_msg['std_address_null'];
			?></td>
		</tr>
		<tr>
			<td>Phone No:</td>
			<td><input type='text' name='std_phNo' value="<?php echo $student->getPhNo()?>"/></td>
			<td><?php if (isset($err_msg['std_phNo_null']))
				echo $err_msg['std_phNo_null'];
			?></td>
		</tr>
		<tr>
			<td><input type='submit' name='btnStdReg' value="Register"/></td>
				<input type="hidden" name="usecase" value="UC_REG"/>
				<input type="hidden" name="action" value="ACT_REG_CNF"/>
			<td><input type='submit' name='btnStdRegCancel' value="Cancel"/>
				<input type="hidden" name="usecase" value="UC_HP"/>
				<input type="hidden" name="action" value="ACT_HP"/>
			</td>
			
		</tr>
	</table>
		
	</form>
	
	</div>			
		
	<?php 
	}
}