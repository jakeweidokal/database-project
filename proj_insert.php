<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" >
    <title>Add Customer</title>
</head>

   <body>
   <div style="height:900px; background-color: lightblue;" align="center">
      <?php
	  
		require("proj_tableshow.php");
		require("proj_dbconnect.php");
	  
         if(isset($_POST['add'])) {
            

            $i_accountID = $_POST['i_accountID'];
            $i_name = $_POST['i_name'];
            $i_email = $_POST['i_email'];
            $i_address = $_POST['i_address'];
            $i_phoneNumber = $_POST['i_phoneNumber'];
			
			echo " <br> Customer table before insertion <br>";
			show_customer($conn);
   
            $sql = "INSERT INTO customer ".
               "(accountID, name, email, address, phoneNumber) "."VALUES ".
               "('$i_accountID','$i_name','$i_email', '$i_address', '$i_phoneNumber')";
            
			//mysqli_select_db($conn,'university');
            $retval = mysqli_query($conn, $sql);
         
            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
         
            echo "Entered data successfully\n";
			
			echo " <br> Customer table after insertion <br>";
			show_customer($conn);
			
            mysqli_close($conn);
         } 


		  else if(isset($_POST['show'])){
			 
			 show_customer($conn);
		 }	 
		 
		 else {
      ?>
	  <br><br><br><br>
     <p>Enter Customer information for insertion <br> </p>
      <form method = "post" action = "<?php $_PHP_SELF ?>">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
               <td width = "250">ID</td>
               <td>
                  <input name = "i_accountID" type = "text" id = "i_accountID">
               </td>
            </tr>
         
            <tr>
               <td width = "250">Name</td>
               <td>
                  <input name = "i_name" type = "text" id = "i_name">
               </td>
            </tr>
         
            <tr>
               <td width = "250">Email</td>
               <td>
                  <input name = "i_email" type = "text" id = "i_email">
               </td>
            </tr>
      
            <tr>
               <td width = "250"> Address</td>
               <td> <input name="i_address" type= "text" id = "i_address"> </td>
            </tr>
            <tr>
               <td width = "250"></td>
               <td> </td>
            </tr>
         

            <tr>
               <td width = "250"> Phone Number</td>
               <td> <input name="i_phoneNumber" type= "text" id = "i_phoneNumber"> </td>
            </tr>
            <tr>
               <td width = "250"></td>
               <td> </td>
            </tr>


            <tr>
               <td width = "250"> </td>
               <td>
                  <input name = "add" type = "submit" id = "add"  value = "insert">
               </td>
            </tr>
			
         </table>

         <?php
            }
         ?>
   <hr width="50">
<a href="index.html" style="color:red;font-weight:bold;">Home</a>
<hr width="50">
   </div>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
</html>