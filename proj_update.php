<!DOCTYPE html>
<html> 
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" >
</head>
<body >
<div style="height:900px; background-color: lightblue;" align="center">
<br><br><br><br>

<?php
	  
    require("proj_tableshow.php");
    require("proj_dbconnect.php");
    
        if(isset($_POST['update'])) {
        
            $i_ID = $_POST['i_ID'];
            $i_newQuantity = $_POST['i_newQuantity'];
            
            echo " <br> Inventory before update <br>";
            show_inventory($conn);

            $sql = "UPDATE inventory SET quantityInStock = $i_newQuantity WHERE itemNumber = $i_ID";
            echo "$sql";
            
            //mysqli_select_db($conn,'university');
            $retval = mysqli_query($conn, $sql);
            
            if(! $retval ) {
                die('Could not enter data: ' . mysqli_error($conn));
            }
            
            echo "Entered data successfully\n";
            
            echo " <br> Inventory after update <br>";
            show_inventory($conn);
            
            mysqli_close($conn);
        } 
        else if(isset($_POST['show'])){
            
            show_inventory($conn);
        }	 
        
        else {
    ?>
    <br><br><br><br>
    <p>enter item ID and updated quantity for inventory  <br> </p>
    <form method = "post" action = "<?php $_PHP_SELF ?>">
        <table width = "150" border = "0" cellspacing = "1" cellpadding = "2">
        <tr>
            <td width = "20">ID</td>
            <td>
                <input name = "i_ID" type = "text" id = "i_ID">
            </td>

            <td width = "20">Stock</td>
            <td>
                <input name = "i_newQuantity" type = "text" id = "i_newQuantity">
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
<a href="index.html" style="color:red;font-weight:bold;">Home</a>
<hr width="50">
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body> </html>
