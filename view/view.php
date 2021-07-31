<?php
abstract class View{

	public function __construct(){
			
	}

	function displayHeader(){	 ?>

<html>
<head>
<title>Information Technology</title>

<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
			
			
	<?php
		if(isset($_SESSION['admin']))
			include 'view/Top_Menu.php';
	
	}
	abstract protected function displayBody();

	function displayFooter(){?>

<div>created by IT</div>

</body>
</html>
	<?php
	}
	public function display(){
		$this->displayHeader();
		$this->displayBody();
		$this->displayFooter();
	}
}
