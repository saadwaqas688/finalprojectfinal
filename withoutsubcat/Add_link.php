<?php
require('top.php');




if(isset($_POST['submit'])){
	$categories_id=get_safe_value($con,$_POST['categories_id']);
	$name=get_safe_value($con,$_POST['name']);

	$description=get_safe_value($con,$_POST['description']);
	
	mysqli_query($con,"insert into link(categories_id,name,description,status) values('$categories_id','$name','$description',1)");
			
			
     header('location:home.php');
		die();
	}

?>

                        <form method="post" enctype="multipart/form-data">
							
							   <div >
									<label for="categories" >Categories</label>
									<select  name="categories_id">
										<option>Select Category</option>
										<?php
										$res=mysqli_query($con,"select id,categories from categories order by categories asc");
										while($row=mysqli_fetch_assoc($res)){
											
												echo "<option value=".$row['id'].">".$row['categories']."</option>";
											}
												
											
											
										
										?>
									</select>
								</div>
								<div >
									<label for="name" >Product Name</label>
									<input type="text" name="name" placeholder="Enter product name"  required >
								</div>
								
								
								
								
								
								
								
								<div >
									<label for="description" >Description</label>
									
									<input type="text" name="description" placeholder="Enter product description"  required >
								</div>
								
								
								
								
								
								
								
								<div>
							   <input  name="submit" type="submit" >
							  
							   
							</div>
						</form>
             
         
<?php
require('footer.php');
?>