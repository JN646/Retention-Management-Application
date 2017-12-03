<?php
 /**
  * Project:		Retention Management System
  * Copyright:		(C) JGinn 2017
  * FileCreated:	171203
  */
require_once($_SERVER["DOCUMENT_ROOT"] . "/reten/config/DBconfig.php");		// Include config file
//include($_SERVER["DOCUMENT_ROOT"] . "/reten/partials/header.php");		// Load Header

//Open the file.
$fileHandle = fopen("http://localhost/reten/import/data/data.csv", "r");
 
//Loop through the CSV rows.
echo "<table class='table'>";
	echo "<tr>";
		echo "<th>First Name</th>";
		echo "<th>Last Name</th>";
		echo "<th>City</th>";
		echo "<th>Country</th>";
	echo "</tr>";
while (($row = fgetcsv($fileHandle, 0, ",")) !== FALSE) {
	echo "<tr>";
		echo "<td>" . $row[0] . "</td>";
		echo "<td>" . $row[1] . "</td>";
		echo "<td>" . $row[2] . "</td>";
		echo "<td>" . $row[3] . "</td>";
	echo "</tr>";
}
echo "</table>";
fclose($fileHandle); //Close the file.
?>
<head><title>Parser</title></head>