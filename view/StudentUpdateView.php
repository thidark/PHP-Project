<?php
class StudentUpdateView extends View{
	private $err_msg;
	public function __construct($err_msg=NULL){
		parent::__construct();
		
		$this->err_msg=$err_msg;
	}
	
	public function displayBody(){
	if(isset($_SESSION['studentUpdateProfile']))
		$studentDetail=$_SESSION['studentUpdateProfile'];
	else 
		$studentDetail=new Student();
	
		
		
		?>
		
	
	
	<div class="content">
		
	<h1>Student Profile Update Form</h1>
	<form method="post">
	
	<table>
		<tr>
			<td>Name:</td>
			<td><input type='text' name='std_name' value="<?php echo $studentDetail->getName();?>"/></td>
			<td><?php if (isset($err_msg['std_name_null']))
				echo $this->err_msg['std_name_null'];
			?></td>
		</tr>
		<tr>
			<td>Roll No:</td>
			<td><input type='text' name='std_rollNo' value="<?php echo $studentDetail->getRollNo();?>"/></td>
			<td><?php if (isset($err_msg['std_rno_null']))
				echo $err_msg['std_rno_null'];
			?></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type='text' name='std_address' value="<?php echo $studentDetail->getAddress();?>"/></td>
			<td><?php if (isset($err_msg['std_address_null']))
				echo $err_msg['std_address_null'];
			?></td>
		</tr>
		<tr>
			<td>Phone No:</td>
			<td><input type='text' name='std_phNo' value="<?php echo $studentDetail->getPhNo();?>"/></td>
			<td><?php if (isset($err_msg['std_phNo_null']))
				echo $err_msg['std_phNo_null'];
			?></td>
		</tr>
		<tr>
			<td><input type='submit' name='btnStdUpdate' value="Update"/></td>
				<input type="hidden" name="usecase" value="UC_UPDATE"/>
				<input type="hidden" name="action" value="ACT_UPDATE_CNF"/>
				
			<td><input type='submit' name='btnStdRegCancel' value="Cancel"/>
				<input type="hidden" name="usecase" value="UC_HP"/>
				<input type="hidden" name="action" value="ACT_HP"/>
			</td>
			
		</tr>
	</table>
		
	</form>
	
	</div>
	
	
	
	
	<?php }
}