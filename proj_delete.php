<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" >
    <title>Delete Customer</title>
</head>

   <body>
   <div class="bg-light" style="min-height:900px;" align="center">
            
      <!-- NAV BAR (on all pages) -->
      <nav class="navbar navbar-dark bg-dark">
         <a class="navbar-brand" href="./index.html">Retail Database</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
               <a class="nav-item nav-link active" href="./index.html">Home<span class="sr-only">(current)</span></a>
            </div>
         </div>
      </nav>
      <!----------->
     
      <br><br>
          <!-- Change query title for each page -->
         <h1>Delete Customer</h1>
         <br><br><br>


             <?php
	  
		require("proj_tableshow.php");
		require("proj_dbconnect.php");
	  
         if(isset($_POST['remove'])) {
            

            $i_accountID = $_POST['i_accountID'];
			
			echo " <br> Customer table before deletion <br>";
			show_customer($conn);
   
            $sql = "DELETE FROM customer ".
               "WHERE accountID = ".
               "'$i_accountID'";
            
			//mysqli_select_db($conn,'university');
            $retval = mysqli_query($conn, $sql);
         
            if(! $retval ) {
               die('Could not remove data: ' . mysqli_error($conn));
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
               <td width = "250"> </td>
               <td>
                  <input name = "remove" type = "submit" id = "remove"  value = "delete" class="btn btn-primary">
               </td>

               <td>
                  <input name = "show" type = "submit" id = "show"  value = "show" class="btn btn-primary">
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