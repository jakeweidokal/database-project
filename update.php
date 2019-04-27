<!DOCTYPE html>
<html> 
<body >
<div style="height:900px; background-color: lightblue;" align="center">
<br><br><br><br>


<p style="color:blue;font-weight:bold;"> write your code here that takes an instructor's ID as input and updates <br>
his/her salary by 10%. Please make sure you display <br>
instructor table before and after the update </p>

<?php
	  
    require("tableshow.php");
    require("dbconnect.php");
    
        if(isset($_POST['update'])) {
        
            $i_ID = $_POST['i_ID'];
            
            echo " <br> Instructor table before insertion <br>";
            show_instructor($conn);

            $sql = "UPDATE instructor ".
                   "SET salary = salary * 1.1 ". 
                   "WHERE ID = $i_ID";
            
            //mysqli_select_db($conn,'university');
            $retval = mysqli_query($conn, $sql);
            
            if(! $retval ) {
                die('Could not enter data: ' . mysqli_error($conn));
            }
            
            echo "Entered data successfully\n";
            
            echo " <br> Instructor table after insertion <br>";
            show_instructor($conn);
            
            mysqli_close($conn);
        } 
        else if(isset($_POST['show'])){
            
            show_instructor($conn);
        }	 
        
        else {
    ?>
    <br><br><br><br>
    <p>Enter Instructor ID to give them a 10% raise  <br> </p>
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
            <input name = "update" type = "submit" id = "update"  value = "update">
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
<a href="Frontpage.html" style="color:red;font-weight:bold;">Home</a>
<hr width="50">
</div>
</body> </html>
