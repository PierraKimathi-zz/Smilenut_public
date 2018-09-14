<?php
require_once("../resource/config.php");

?>
           <?php include(TEMPLATE_FRONT . DS ."headers.php");?>

<?php

	
	if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
	
		header ("location: ../home/index.php");
		exit();
	
	}

?>


	<div class="container">
		<div class="example">
		    <div class="row" id="mainRow">	    			        	
		    	<div class="col-md-6">
		    		<div class="jumbotron" id="row1">

			    		<div class="row" id="row3">
			    		<form method="post">
			    			<div class="col-lg-8">
			    			
			    			
			    				
		    			
		    			
		         <div class="col-md-2"></div>
		        <div method="post" class="col-md-4" id="row2">
		        	<form method="post">
		        		<?php

		        			$firstname = $lastname = $surname = $email = "";

		        			if (isset($_POST['firstname']) &&
		        				isset($_POST['lastname']) &&
		        				isset($_POST['surname']) &&
		        				
		        				isset($_POST['email'])) {
		        				
									$firstname = $_POST['firstname'];
									$lastname = $_POST['lastname'];
									$surname = $_POST['surname'];
									
									$email = $_POST['email'];

		        			
		        			}

		        		?>
  
		            <div class="form-group has-feedback">
				        <label for="inputSuccess2">Title</label>
				        <input type = "text" class="form-control" name="title"				                
				        placeholder="Enter title *" value="" id="name"  onkeyup="name();">
				        <select multiple ="multiple" name="formTitle[]">
		                <option value ="" ="Miss">Miss</option>
		                <option value="Mrs">Mrs</option>
		                <option value="Mr">Mr</option>
		                </select>
		                
				        <span  id="id_dspy" class="form-control-feedback"></span>
		            </div>








					<div class="form-group has-feedback">
				        <label for="inputSuccess2">
				        <i class="fa fa-users"></i>  Firstname</label>
				        <input type = "text" class="form-control" name="firstname"				                
				        placeholder="Enter Your firstname *" value="<?php echo $firstname; ?>" id="firstname"  onkeyup="c_fne();">
				        
		            </div>
		            

		            <div class="form-group has-feedback">
				        <label for="inputSuccess2">
				        <i class="fa fa-users"></i> Lastname</label>
				        <input type = "text" class="form-control" name="lastname"				                
				        placeholder="Enter Your lastname *" value="<?php echo $lastname; ?>" id="lastname" onkeyup="c_lst();">
				        <span  id="lst_dspy" class="form-control-feedback"></span>
		            </div>
		            

		            <div class="form-group has-feedback">
				        <label for="inputSuccess2">
				        <i class="fa fa-users"></i>  Surname</label>
				        <input type = "text" class="form-control" name="surname"				                
				        placeholder="Enter Your surname *" value="" id="surname"  onkeyup="s_fne();">
				        <span  id="sn_dspy" class="form-control-feedback"></span>
		            </div>
		          
		            

		           <div class="form-group has-feedback">
				        <label for="inputSuccess2">
				        <i class="fa fa-envelope"></i>  Email</label>
				        <input type = "email" class="form-control" name="email"				                
				        placeholder="Enter Your Email *" value="" id="email" onkeyup="e_fne();">
				        <span  id="e_dspy" class="form-control-feedback"></span>

				        <?php

						    if (isset($_POST['email'])) {
						        
						        $email = $_POST['email'];

						        if (empty($email)) {
						            
						            echo '
						                    <span id="warning" class="glyphicon glyphicon-warning-sign 
						                    form-control-feedback">
						                    </span>
						                        
						                ';
						        } else {

						            $check_email = "SELECT `id`, `email` FROM user WHERE `email` = '$email'";

						            $run = mysql_query($check_email);

						            if (mysql_num_rows($run) > 0) {
						                
						                while($row = mysql_fetch_assoc($run)) {

						                    $id = $row['id'];

						                    echo '
						                            <span id="warning" class="glyphicon 
						                            glyphicon-warning-sign form-control-feedback">
						                            </span>
						                        
						                        ';

						                }
						            } else {

						                echo  '
						                                
						                    <span id="ok" class="glyphicon glyphicon-ok 
						                    form-control-feedback"></span>
						                        
						                ';
						            }
						        }
						    }

						?>
		            </div>

		            <div class="form-group has-feedback">
				        <label for="inputSuccess2"> 
				        <span class="glyphicon glyphicon-lock"></span>  Password</label>
				        <input type = "password" class="form-control" name="password"				                
				        placeholder="Enter Your Password *" value="" id="password"  onkeyup="pass();">
				        <span  id="pw_dspy" class="form-control-feedback"></span> 
		            </div>
		            
		            <div class="form-group has-feedback">
				        <label for="inputSuccess2"> 
				        <span class="glyphicon glyphicon-lock"></span>  Confirm Password</label>
				        <input type = "password" class="form-control" name="confirm_pass"				                
				        placeholder="Enter Your Password *" value="" id="confirm_pass"  onkeyup="cfm_pass();">
				        <span  id="p_dspy" class="form-control-feedback"></span>
		            </div>


		        		<?php

		        			$firstname = $lastname = $surname = $id_number = $email =

		        			$password = $confirm_pass = "";

		        			if (isset($_POST['firstname']) &&
		        				isset($_POST['lastname']) &&
		        				isset($_POST['surname']) &&
		        				isset($_POST['id_number']) &&
		        				isset($_POST['email']) &&
		        				isset($_POST['password']) &&
		        				isset($_POST['confirm_pass'])) {
		        				
									$firstname = $_POST['firstname'];
									$lastname = $_POST['lastname'];
									$surname = $_POST['surname'];
									$id_number = $_POST['id_number'];
									$email = $_POST['email'];
									$password = $_POST['password'];
									$confirm_pass = $_POST['confirm_pass'];

									$password = mysql_real_escape_string($password);

						        	$password = md5($password);

									if (!$firstname || !$lastname || !$password || !$surname) {
										
										echo '
									        <div class="alert alert-warning alert-dismissable">
								              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								              <strong>The Name fields are empty, PLease fill them</strong>
								            </div>
	                                	';
									}
									else if (!$email) {

										echo '
									        <div class="alert alert-warning alert-dismissable">
								              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								              <strong>Email is empty</strong>
								            </div>
	                                	';
									} else if (!$password || !$confirm_pass) {
	                                	
	                                	echo '
									        <div class="alert alert-warning alert-dismissable">
								              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								              <strong>The Passwords are empty</strong>
								            </div>
	                                	';

	                                }

	                                if ($password != $confirm_pass) {
	                                  		
	                                  		echo "Passwords Do Not Match.";
	                                  		
	                                  } else {

	                                	$check_email = "SELECT `id`, `email` FROM user WHERE `email` = '$email'";

						            	$run = mysql_query($check_email);

						            	if (mysql_num_rows($run) > 0) {
						                
						                while($row = mysql_fetch_assoc($run)) {

						                    $id = $row['id'];

						                    echo "The Email Already Exists.";

							                }
							            
							            }

							            $query = "INSERT INTO user VALUES 

	                                		 ('', '$firstname', '$lastname', '$surname', '$id_number',

	                                		 '$email', '$password')";
										
										if (mysql_query($query)) {
											
											echo '
									        <div class="alert alert-warning alert-dismissable">
								              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								              <strong>Registration Successful.</strong>
								            </div>
	                                	';
										}
	                                
	                                }  

		        				
		        				}

		        			?>

		            	<div class="form-group has-feedback">                        
                                <label>                                
                                    <input type="checkbox" name="checkbox" id="checkbox" onclick="toggleBtn()"/>
                                    <span id="checkbox_txt">Show <i class="fa fa-eye"></i></span>                                
                                </label>                                                   
                        </div>
		            
					<div class="form-group has-feedback pull-left">
						<input type="submit" class="btn btn-info" name="submit" value="Register" onclick="">
					</div>
					</form>
		        </div>
		    </div>
		</div>
	</div></body><!-- end of main container -->

	
</body>
</html>
 <?php include(TEMPLATE_FRONT . DS ."footer.php");?>
