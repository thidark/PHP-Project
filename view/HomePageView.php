<?php
class HomePageView extends View{
function __construct(){
	parent::__construct();
}

public function displayBody(){?>
	<div class="content">
	
	
	
	
	Welcome !.. <?php echo $_SESSION['admin']->getName();?>
	</div>
	
	
<?php }
}