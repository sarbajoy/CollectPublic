<?php
	include 'dbconnection.php';
	include 'header.php';
	echo "<br />";
	echo "<br />";
	echo "<br />";
	echo "<br />";
	echo "<br />";


  $sql = "SELECT * FROM Weight_Table";
  $result = $collectMySQLConnection->query($sql);

	if ($result->num_rows > 0) {
		echo "<table border='1'>
		<tr>
		<th>Timestamp</th>
		<th>Weight</th>
		</tr>";

	    // output data of each row
	    while($row = $result->fetch_assoc()) {
					echo "<tr>";

		    			echo "<td>" . $row['DATE_ADDED'] . "</td>";
							echo "<td>" . $row['WEIGHT'] . "</td>";
					echo "</tr>";
				}
		echo "</table>";
	} else {
	    echo "0 results";
	}
?>
