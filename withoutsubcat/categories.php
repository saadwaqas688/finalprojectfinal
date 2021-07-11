<?php 
require('top.php');
if(isset($_GET['id']) && $_GET['id']!=''){
	$cat_id=mysqli_real_escape_string($con,$_GET['id']);
	if($cat_id>0){
		$get_link=get_link($con,'',$cat_id);
	}else{
		?>
		<script>
		window.location.href='home.php';
		</script>
		<?php
	}
}else{
	?>
	<script>
	window.location.href='home.php';
	</script>
	<?php
}										
?>

        
       
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="home.php">Home</a>
                                  
                                </nav>
                            </div>
            
        
            <div class="container">
                <div class="row">
					<?php if(count($get_link)>0){?>
                    
                                    <table>
									<tr>
									<th>name</th>
									<th>description</th>
									<th>id</th>
									</tr>
                                        <?php
										foreach($get_link as $list){
										?>
										
												
												<tr>
													<td><?php echo $list['name']?></a></td>
													<td><?php echo $list['description']?></a></td>
													<td><?php echo $list['categories_id']?></a></td>
													
												</tr>
											
										<?php } ?>
                            
                    </table>
					<?php } else { 
						echo "Data not found";
					} ?>
                
				</div>
            </div>
       
        
<?php require('footer.php')?>        