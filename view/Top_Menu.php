<div class="top_menu">
    <div class="top_button">
	<form method="post">
	<input type="submit" name="btnRegisterLink" value="Student Registration"/>
	<input type="hidden" name="usecase" value="UC_REG"/>
	<input type="hidden" name="action" value=ACT_REG_LINK/>
	
	
	</form>
	</div>
	<div class="top_button">
	<form method="post">
	<input type="submit" name="btnStudentListLink" value="Student List"/>
	<input type="hidden" name="usecase" value="UC_STD_LIST"/>
	<input type="hidden" name="action" value=ACT_STD_LIST/>
	
	
	</form>
	</div>
	
	<li> <a href="./?usecase=<?php echo UC_LOGOUT;?>&action=<?php echo ACT_LOGOUT_PAGE;?>" name='linkLogout'>Logout</a>
	</div>
