<?php
include "connection.php";

if(isset($_POST['login']))
 {
  $usr = mysql_real_escape_string($_POST['uname']);
  $pwd = mysql_real_escape_string($_POST['pass']);
 
$sql ="SELECT * FROM logindata WHERE username=' ".$usr." ' AND password=' ".$pwd." ' ";;
$res = mysql_query($sql) or die ("Query failed..".mysql_error());
$count = mysql_num_rows($res);
if($count==1)
{
  echo "you have been logged in..";
}else
{
 echo "invalid details, try again..";
}
mysql_close($con);
}
?>