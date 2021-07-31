<?php
class StudentListView extends View{
	private $studentList;
	public function __construct($studentList){
		parent::__construct();
		$this->studentList=$studentList;
	}
	
	public function displayBody(){
	$studentList=$this->studentList;
    $i=1;
	
		?>
	<div class="content">	
	<h1>Student List</h1>
	<table border=1>
  <tr>
    <th>No</th>
    <th>Name</th>
     <th>Roll No</th>
     <th>Address</th>
     <th>Phone No</th>
     <th colspan="2">Action</th>
     
  </tr>
  
  <?php foreach ($studentList as $key=>$value){?>
    <tr <?php if ($i%2!=0)echo "class='alt'"?>>
    <td><?php echo $i++?></td>
    <td><?php echo $value['std_name']?></td>
    <td><?php echo $value['std_rollNo']?></td>
    <td><?php echo $value['std_address']?></td>
    <td><?php echo $value['std_phNo']?></td>
    <td><form method="post"><input type="submit" name="btnUpdate" value="Update">
    	<input type="hidden" name="usecase" value="<?php echo UC_UPDATE;?>">
    	<input type="hidden" name="action" value="<?php echo ACT_UPDATE;?>">
    	<input type="hidden" name="student_id" value="<?php echo $value['std_id'];?>">
    	</form>
   </td>
   <td>	<form method="post"><input type="submit" name="btnDelete" value="Delete">
    	<input type="hidden" name="usecase" value="<?php echo UC_DELETE;?>">
    	<input type="hidden" name="action" value="<?php echo ACT_DELETE;?>">
    	<input type="hidden" name="student_id" value="<?php echo $value['std_id'];?>">
    	</form>
    </td>
    
  </tr>
  <?php }?>
</table>

		</div>
	<?php }
}