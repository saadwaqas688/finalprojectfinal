<?php require('top.php');

$cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
	$cat_arr[]=$row;	
}


?>
<div>
        
      
     <table style="width:100%">
	  <tr>
    <th>Sr</th>
    <th>Category Name</th> 
	<th>Click For Details</th> 
    
  </tr>
  
    <?php $sr=1;
                   foreach($cat_arr as $list){
	                 ?>
					 <tr>
					 <td><?php echo $sr?></td>
         <td><?php echo $list['categories']?></td>
		 <td><button class="button buttond"><a href="categories.php?id=<?php echo $list['id']?>">View all links of this category</a></button></td>
		 </tr>
	             <?php
	                $sr++ ;}
	                ?>
  
				
				</table>			
        </div>               
           
<?php require('footer.php')?>        

              