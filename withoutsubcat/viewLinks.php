<?php require('top.php');



?>
<div>
        
      
     <table style="width:100%">
	  <tr>
    <th>name</th>
    <th>category</th> 
    <th>description</th>
  </tr>
  </tr>
							<?php
							$get_link=get_link($con);
							foreach($get_link as $list){
							?>
							  <tr>
    <td><?php echo $list['name']?></td>
    <td><?php echo $list['categories_id']?></td>
    <td><?php echo $list['description']?></td>
  </tr>
                            
                                       
                                       
                              
							<?php } ?>
				</table>			
                       </div>
           
<?php require('footer.php')?>        