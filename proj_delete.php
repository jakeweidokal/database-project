<!DOCTYPE html>
<html> 
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" >
</head>
<body >

   <div class="bg-light" style="min-height:900px;">

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

      <div class="container">
         <!-- Change query title for each page -->
         <h1>Delete Customer</h1>
         <br><br><br>

         <!-- FORM FOR QUERY (Edit inputs/labels as necessary for each page) -->
         <div class="row text-center">
            <div class="text-center" style="margin:auto;">
               <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>">
                  <label for="i_ID">ID </label>
                  <input name = "i_ID" type = "text" id = "i_ID">
                  <input name="delete" type="submit" id="delete"  value="delete" class="btn btn-danger">
               </form>
            </div>
         </div>
         <!------------------->

         <br><br>
         <div class="row">

            <!-- TABLE BEFORE QUERY (may need to change tale name depending on page) -->
            <div class="col-md-6">
               <h3 class="text-center">Before Query</h3>
               <?php
                  // import files to show tables and connect to DB
                  require("proj_tableshow.php");
                  require("proj_dbconnect.php");

                  show_customer($conn); 
               ?>
            </div>
            <!---------------------->

            <!-- TABLE AFTER QUERY (change the query for each page) -->
            <div class="col-md-6">
               <h3 class="text-center">After Query</h3>

                  <?php
                     if(isset($_POST['delete'])) {

                        $i_ID = $_POST['i_ID'];
               
                        $sql = "DELETE FROM customer WHERE accountID = $i_ID";
                        
                        //mysqli_select_db($conn,'university');
                        $retval = mysqli_query($conn, $sql);
                     
                        if(! $retval ) {
                           die('Could not enter data: ' . mysqli_error($conn));
                        }
                     
                        echo "Removed data successfully";
                     
                        show_customer($conn);
                     
                        mysqli_close($conn);
                     } 	 
                  ?>

            </div>
            <!-------------------->

         </div>
      </div>
   </div>
   
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
