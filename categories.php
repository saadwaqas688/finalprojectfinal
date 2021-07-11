<?php 
require('top.php');

if(!isset($_GET['id']) && $_GET['id']!=''){
	echo "<h1 >No link Exist</h1>";
	die();
	?>
	
	<?php
}


$cat_id=mysqli_real_escape_string($con,$_GET['id']);

$sub_categories='';
if(isset($_GET['sub_categories'])){
	$sub_categories=mysqli_real_escape_string($con,$_GET['sub_categories']);
}


if($cat_id>0 && ($sub_categories!='' && $sub_categories>0)){
	$get_product=get_product($con,'',$cat_id,'','',$sub_categories);
}else{
	echo "<h1 >No link Exist</h1>";
	die();
	?>
	
	<?php
}										
?>

      
           
               
					<?php if(count($get_product)>0){?>
                    
                        <div>       
                         <table>
						 <th>Name</th>
						 <th>Description</th>
						
                                        <?php
										foreach($get_product as $list){  
										?>
										      <tr>
												
												<td><a href="product-details.html"><?php echo $list['name']?></a></td>
													
														<td><h1><?php echo $list['description']?></h1></td>
														
										      </tr> 
											
										<?php } ?>
									
									<table>
									</div>	
                         
					<?php } else { 
						echo "<h1 >No link Exist</h1>";
					} ?>
                
			
     
<?php require('footer.inc.php')?>        