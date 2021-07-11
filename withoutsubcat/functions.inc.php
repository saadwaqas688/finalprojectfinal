<?php
function pr($arr){
	echo '<pre>';
	print_r($arr);
}

function prx($arr){
	echo '<pre>';
	print_r($arr);
	die();
}

function get_safe_value($con,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($con,$str);
	}
}









function get_link($con,$limit='',$cat_id='',$link_id=''){
	$sql="select link.*,categories.categories from link,categories where link.status=1 ";
	if($cat_id!=''){
		$sql.=" and link.categories_id=$cat_id ";
	}
	if($link_id!=''){
		$sql.=" and link.id=$link_id ";
	}
	$sql.=" and link.categories_id=categories.id ";
	$sql.=" order by link.id desc";
	if($limit!=''){
		$sql.=" limit $limit";
	}
	
	$res=mysqli_query($con,$sql);
	$data=array();
	while($row=mysqli_fetch_assoc($res)){
		$data[]=$row;
	}
	return $data;
}
?>





