<?php
class StudentRegisterConfirmView extends View{

	public function __construct(){
	
		parent::__construct();
	}
	public function displayBody(){
	if(isset($_SESSION['student']))
		$student=$_SESSION['student'];
	else 
		$student=new Student();
		
		?>
	<div class="content">
		<h1>Student Registeration  Confirm.......</h1>
		
		<form method="post">
	
	<table>
		<tr>
			<td>Name:</td>
			<td><input type='text' name='std_name' value="<?php echo $student->getName()?>" disabled/></td>
			<td></td>
		</tr>
		<tr>
			<td>Roll No:</td>
			<td><input type='text' name='std_rollNo' value="<?php echo $student->getRollNo()?>" disabled/></td>
			<td></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type='text' name='std_address' value="<?php echo $student->getAddress()?>" disabled/></td>
			<td></td>
		</tr>
		<tr>
			<td>Phone No:</td>
			<td><input type='text' name='std_phNo' value="<?php echo $student->getPhNo()?>" disabled/></td>
			<td></td>
		</tr>
		<tr>
			<td><input type='submit' name='btnStdRegConfirm' value="Register"/></td>
				<input type="hidden" name="usecase" value="UC_REG"/>
				<input type="hidden" name="action" value="ACT_REG_CMP"/>
			<td><input type='submit' name='btnStdRegConfirmCancel' value="Cancel"/>
				<input type="hidden" name="usecase" value="UC_REG"/>
				<input type="hidden" name="action" value="ACT_REG_LINK"/>
			</td>
			
		</tr>
	</table>
		
	</form>
	</div>
	<?php }
}