<?php
class StudentUpdateConfirmView extends View{
	public function __construct(){
		parent::__construct();
	}
	
	public function displayBody(){
	
		$student=$_SESSION['studentUpdateProfile'];
		
		?>
	<div class="content">
	<h1>Student Profile Update Confirm Form</h1>
	
	<form method="post">
	
	<table>
		<tr>
			<td>Name:</td>
			<td><input type='text' name='std_name' value="<?php echo $student->getName();?>"disabled/></td>
			
		</tr>
		<tr>
			<td>Roll No:</td>
			<td><input type='text' name='std_rollNo' value="<?php echo $student->getRollNo()?>"disabled/></td>
			
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type='text' name='std_address' value="<?php echo $student->getAddress()?>"disabled/></td>
			
		</tr>
		<tr>
			<td>Phone No:</td>
			<td><input type='text' name='std_phNo' value="<?php echo $student->getPhNo();?>"disabled/></td>
			
		</tr>
		<tr>
			<td><input type='submit' name='btnStdUpdateConfirm' value="Confirm"/></td>
				<input type="hidden" name="usecase" value="UC_UPDATE"/>
				<input type="hidden" name="action" value="ACT_UPDATE_CMP"/>
				
			<td><input type='submit' name='btnStdUpdateConfirmCancel' value="Cancel"/>
				<input type="hidden" name="usecase" value="UC_UPDATE"/>
				<input type="hidden" name="action" value="ACT_UPDATE"/>
			</td>
			
		</tr>
	</table>
		
	</form>
	
	
	
	</div>
	<?php }
}