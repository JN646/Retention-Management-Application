 <?php
//Customise this file to match your server configutation.
//MySQL connection
//Server, Username, Password, Database.
$mysqli = new mysqli('localhost', 'root', '', 'reten');
 
//If connection fail
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
?>