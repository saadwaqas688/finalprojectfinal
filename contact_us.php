<?php
require('top.php');




if(isset($_POST['submit'])){
	$name=get_safe_value($con,$_POST['name']);
	$email=get_safe_value($con,$_POST['email']);

	$comment=get_safe_value($con,$_POST['comment']);
	
	mysqli_query($con,"insert into users(name,email,comment) values('$name','$email','$comment')");
			
			
     header('location:home.php');
		die();
	}

?>

                        <form method="post" >
							
							  
								
								<div >
									<label for="name" > Name</label>
									<input type="text" name="name" placeholder="Enter yout name"  required >
								</div>
								
								
								
								
								
								
								
								<div >
									<label for="email" >Email</label>
									
									<input type="text" name="email" placeholder="Enter your email"  required >
								</div>
								
								
								<div >
									<label for="comment" >Comment</label>
									
									<input type="text" name="comment" placeholder="Enter comment"  required >
								</div>
								
								
								
								
								
								
								
								
								<div>
							   <input  name="submit" type="submit" >
							  
							   
							</div>
						</form>
             
         
<?php
require('footer.php');
?>