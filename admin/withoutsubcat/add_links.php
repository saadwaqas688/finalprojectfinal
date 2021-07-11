<?php
require('top.inc.php');
$categories_id='';
$name='';


$description	='';




if(isset($_GET['id']) && $_GET['id']!=''){
	$image_required='';
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from link where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$categories_id=$row['categories_id'];
		$name=$row['name'];
		
		$description=$row['description'];
		
	}else{
		header('location:product.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$categories_id=get_safe_value($con,$_POST['categories_id']);
	$name=get_safe_value($con,$_POST['name']);

	$description=get_safe_value($con,$_POST['description']);
	
	

  
		if(isset($_GET['id']) && $_GET['id']!=''){
			
				$update_sql="update link set categories_id='$categories_id',name='$name',description='$description' where id='$id'";
				mysqli_query($con,$update_sql);
			}else{
				mysqli_query($con,"insert into link(categories_id,name,description,status) values('$categories_id','$name','$description',1)");
			}
			
   

		header('location:product.php');
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
											if($row['id']==$categories_id){
												echo "<option selected value=".$row['id'].">".$row['categories']."</option>";
											}else{
												echo "<option value=".$row['id'].">".$row['categories']."</option>";
											}
											
										}
										?>
									</select>
								</div>
								<div >
									<label for="categories" >Link Title</label>
									<input type="text" name="name" placeholder="Enter Link Title"  required value="<?php echo $name?>">
								</div>
								
								
								
								
								
								
								
								<div >
									<label for="categories" >Description</label>
								   <input type="text" name="description" placeholder="Enter product description"  required value="<?php echo $description?>">
								</div>
								
								
								
								
								
								
								
								<div >
							   <input  name="submit" type="submit" >
						      </div>
						 </form>
             
         
<?php
require('footer.inc.php');
?>