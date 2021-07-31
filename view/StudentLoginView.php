<?php
class StudentLoginView extends View{
private $err_msg;
public function __construct($err_msg=NULL){
 
 		$this->err_msg=$err_msg;
 	}
	public function displayBody(){
				?>    
				 	
  
			<div>
			<h1>Welcome to IT</h1>	
            
				<div class="content">
                <p class='error_msg'><?php 
                			
                	if(isset($this->err_msg['admin_all_null']))       	
                		echo $this->err_msg['admin_all_null'];
                	if(isset($this->err_msg['admin_name_null']))
                		echo $this->err_msg['admin_name_null'];                	
                	if(isset($this->err_msg['admin_pwd_null']))
                		echo $this->err_msg['admin_pwd_null'];
                	if(isset($this->err_msg['no_admin_member']))
                		echo $this->err_msg['no_admin_member'];
                
                
                ?></p>  
               <form method="post">
               <table>
               <tr>
               <td>User name:</td><td> <input type="text" name="name"/></td></tr>
               <tr>
                <td>Password:</td><td> <input type="password" name="password"/></td></tr>
                <tr><td></td><td> <input type="submit" name="btnStdLogin" value="Sign in"/></td></tr>
                <input type="hidden" name="usecase" value="<?php echo UC_ADM;?>">
                <input type="hidden" name="action" value="<?php echo ACT_ADM_LOGIN;?>">
               </tr>
               
               
               </table>
               
               
               </form>   
                  
                     </div>
		
			</div>     	            
	
<?php }
}

		
		
