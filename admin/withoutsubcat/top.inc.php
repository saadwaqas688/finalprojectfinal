<?php
require('connection.inc.php');
require('functions.inc.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

}else{
	header('location:login.php');
	die();
}
?>
<!doctype html>

   <head>
      
      <title>Dashboard Page</title>
     
      <link  rel="stylesheet" href="../style2.css">
    
   </head>
   <body>
   <div class="header">
   <h1 >Link Directory Portal</h1> 
     <h3>Admin Panel</h3>
	 
	 </div>
      <div>
         <nav>
            <div >
               <ul >
                  <li ><a href="home.php" >Welcome Admin</a></li>
                  <li >
                     <a href="manage_categories.php" >Manage Categories</a>
                  </li>
                   <li>
                     <a href="add_categories.php">Add Categories</a>
                  </li>
                  <li >
                     <a href="manage_links.php" > Manage Links</a >
                  </li>
				  <li >
                     <a href="add_links.php">Add Links</a>
                  </li>
				   <li >
                     <a href="users.php">Users</a>
                  </li>
				  
				  <li >
                     <a  href="logout.php">Logout</a>
                  </li>
			 
               </ul>
            </div>
         </nav>
      </div>
      <div >
	  
	  
	  
	  
         