<?php
	include 'dbconnection.php';
	include 'header_data.php';
	echo "<br />";
	echo "<br />";
	echo "<br />";
	echo "<br />";
	echo "<br />";


  $sql = "SELECT ITEM_ID, WEIGHT, LENGTH, WIDTH, DATE_ADDED FROM User_Transaction ORDER BY DATE_ADDED DESC";
  $result = $collectMySQLConnection->query($sql);

	if ($result->num_rows > 0) {
		echo "<table border='1'>
		<tr>
		<th>ID</th>
		<th>Weight</th>
		<th>Length</th>
		<th>Width</th>
		<th>Timestamp</th>
		</tr>";

	    // output data of each row
	    while($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>" . $row['ITEM_ID'] . "</td>";
					echo "<td>" . $row['WEIGHT'] . "</td>";
					echo "<td>" . $row['LENGTH'] . "</td>";
					echo "<td>" . $row['WIDTH'] . "</td>";
		    			echo "<td>" . $row['DATE_ADDED'] . "</td>";
					echo "</tr>";
				}
		echo "</table>";
	} else {
	    echo "0 results";
	}
?>
