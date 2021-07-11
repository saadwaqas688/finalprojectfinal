<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='status'){
		$operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='active'){
			$status='1';
		}else{
			$status='0';
		}
		$update_status_sql="update link set status='$status' where id='$id'";
		mysqli_query($con,$update_status_sql);
	}
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from link where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select link.*,categories.categories from link,categories where link.categories_id=categories.id order by link.id desc";
$res=mysqli_query($con,$sql);
?>

				
					  <table >
						 <thead>
							<tr>
							   <th >#</th>
							   <th>ID</th>
							   <th>Category</th>
							   <th>Name</th>
							 
							   
							   <th>Desc</th>
							  
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['categories']?></td>
							   <td><?php echo $row['name']?></td>
							  
							   
							   <td><?php echo $row['description']?></td>
							  
							   <td>
								<?php
								if($row['status']==1){
									echo "<button class='button'><a  href='?type=status&operation=deactive&id=".$row['id']."'>Active</a></button>&nbsp;";
								}else{
									echo "<button class='button'><a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a></button>&nbsp;";
								}
								echo "<button class='button'><a href='manage_product.php?id=".$row['id']."'>Edit</a></button>&nbsp;";
								
								echo "<button class='button buttond'><a href='?type=delete&id=".$row['id']."'>Delete</a></button>";
								
								?>
							   </td>
							</tr>
							
							<?php $i++; } ?>
						 </tbody>
					  </table>
	
<?php
require('footer.inc.php');
?>