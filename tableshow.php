<?php

	function show_customer($conn){

	//include "dbconnect.php";

	$sql = "SELECT * FROM customer";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		echo "<br><h3> Customer Table<h3> <br>";
		
		echo '<table border>';
		echo '<thead><tr>';
		echo '<th>'."accountID".'</th>'.'<th>'."Name".'</th>'.'<th>'."Email".'</th>'.'<th>'."Address".'</th>'."phoneNumber".'</th>';
		echo '</tr></thead>';
		echo '<tbody>';

		while($row = $result->fetch_assoc()) {
			echo '<tr>';
			echo "<td>" . $row["accountID"]. "</td>";
			echo "<td>" . $row["Name"]. "</td>";
			echo "<td>" . $row["Email"]. "</td>";
			echo "<td>" . $row["Address"]. "</td>";
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
?>