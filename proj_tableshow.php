<?php

	function show_customer($conn){

	//include "dbconnect.php";

	$sql = "SELECT * FROM customer";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		echo "<br><h3> Customer Table<h3> <br>";
		
		echo '<table border>';
		echo '<thead><tr>';
		echo '<th>'."accountID".'</th>'.'<th>'."Name".'</th>'.'<th>'."Email".'</th>'.'<th>'."Address".'</th>'.'<th>'."phoneNumber".'</th>';
		echo '</tr></thead>';
		echo '<tbody>';

		while($row = $result->fetch_assoc()) {
			echo '<tr>';
			echo "<td>" . $row["accountID"]. "</td>";
			echo "<td>" . $row["name"]. "</td>";
			echo "<td>" . $row["email"]. "</td>";
			echo "<td>" . $row["address"]. "</td>";
			echo "<td>" . $row["phoneNumber"]. "</td>";
			echo '</tr>';
		}
		
		echo '</tbody>';
		echo '</table>';
		
		// output data of each row
		
		
	} else {
		echo "0 results";
	}
	//$conn->close();
}



function show_inventory($conn){

	//include "dbconnect.php";

	$sql = "SELECT * FROM inventory";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		echo "<br><h3> Inventory Table<h3> <br>";
		
		echo '<table border>';
		echo '<thead><tr>';
		echo '<th>'."itemNumber".'</th>'.'<th>'."Name".'</th>'.'<th>'."Price".'</th>'.'<th>'."QuantityInStock".'</th>';
		echo '</tr></thead>';
		echo '<tbody>';

		while($row = $result->fetch_assoc()) {
			echo '<tr>';
			echo "<td>" . $row["itemNumber"]. "</td>";
			echo "<td>" . $row["name"]. "</td>";
			echo "<td>" . $row["price"]. "</td>";
			echo "<td>" . $row["quantityInStock"]. "</td>";
			echo '</tr>';
		}
		
		echo '</tbody>';
		echo '</table>';
		
		// output data of each row
		
		
	} else {
		echo "0 results";
	}
	//$conn->close();
}
?>