<!DOCTYPE html>
<html> 
<body >
<div style="height:900px; background-color: lightblue;" align="center">
<br><br><br><br>

<?php
	  
		require("proj_tableshow.php");
		require("proj_dbconnect.php");
	  
         if(isset($_POST['delete'])) {
            
            $i_ID = $_POST['i_ID'];
			
			echo " <br> Customer table before deletion <br>";
			show_customer($conn);
   
            $sql = "DELETE FROM customer WHERE accountID = $i_ID";
            
			//mysqli_select_db($conn,'university');
            $retval = mysqli_query($conn, $sql);
         
            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
         
            echo "Removed data successfully\n";
			
			echo " <br> Customer table after deletion <br>";
			show_customer($conn);
			
            mysqli_close($conn);
         } 
		 else if(isset($_POST['show'])){
			 
			 show_customer($conn);
		 }	 
		 
		 else {
      ?>
	  <br><br><br><br>
     <p>Enter Customer ID for deletion <br> </p>
      <form method = "post" action = "<?php $_PHP_SELF ?>">
         <table width = "150" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
               <td width = "20">ID</td>
               <td>
                  <input name = "i_ID" type = "text" id = "i_ID">
               </td>
            </tr>
         
            <tr>
               <td width = "150"></td>
               <td> </td>
            </tr>
         
            <tr>
               <td width = "70">
               <input name = "delete" type = "submit" id = "delete"  value = "delete">
                </td width = "70">
               <td>
                  <input name = "show" type = "submit" id = "show"  value = "show">
               </td>
            </tr>
			
         </table>
   
	  
   <?php
      }
   ?>



<br><br><br><br>

<hr width="50">
<a href="index.html" style="color:red;font-weight:bold;">Home</a>
<hr width="50">
</div>
</body> </html>
