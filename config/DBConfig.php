 <?php
//MySQL connection
$mysqli = new mysqli('localhost', 'root', '', 'reten');
 
 //If connection fail
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
?>