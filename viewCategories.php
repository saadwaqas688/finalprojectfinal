<?php
require('top.php');
//require('connection.inc.php');
//require('functions.inc.php');


$cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
	$cat_arr[]=$row;	
}







?>
<!doctype html>
<html>
<head>

<link rel="stylesheet" href="./style2.css">

 <style>
 a.view:link, a.view:visited {
  background-color: #ffb3b3;
  color: black;
  border: 2px solid pink;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a.view:hover, a.view:active {
  background-color: #ffcccc;
  color: white;
}

 
 td ,th{
    border: none;
}
</style>

</head>
<body>

<div>
                            
                                <table >
										<th><h2>Categories</h2></th>
										<th colspan="3"><h2>Sub Categories</h2></th>
                                        <?php
										foreach($cat_arr as $list){
											?>
										<tr> 	
											<th><h2><a  class="view" href="categories.php?id=<?php echo $list['id']?>"><?php echo $list['categories']?></a></h2></th>
											
										<!--<tr> -->
											
											<?php
											$cat_id=$list['id'];
											$sub_cat_res=mysqli_query($con,"select * from sub_categories where status='1' and categories_id='$cat_id'");
											if(mysqli_num_rows($sub_cat_res)>0){
											?>
											
											
													<?php
													
													while($sub_cat_rows=mysqli_fetch_assoc($sub_cat_res)){
														
														echo '<td><a class="view" href="categories.php?id='.$list['id'].'&sub_categories='.$sub_cat_rows['id'].'">'.$sub_cat_rows['sub_categories'].'</a></td>';
												
													}
													?>
													
												
												<?php } ?>
												
										</tr> 
												
											<?php  }?>
								
                                
                                   </table>
									
      </div>                                  
					
    
		