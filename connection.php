<?php
$host = "localhost";
$user = "root" ;
$pass = "";
$db = "dance";


// connection to the server

$con = mysql_connect($host, $user, $pass) or die
       ("unable to connect to server..." .mysql_error());



// connect to the database after connection to the server

 $dbase = mysql_select_db($db, $con) or die (" unable to connect to db...".mysql_error());

?>
