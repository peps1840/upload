<?php
include "connection.php";

if(isset($_POST['signup']))
{
 $usr = $_POST['uname'];
 $email = $_POST['mail'];
 $pwd = $_POST['pass'];
 $num = $_POST['nu'];
 $ag = $_POST['aage'];
 $gen = $_POST['gendr'];

 $query = "INSERT INTO logindata(username,email,password,number,age,gender)VALUES(' ".$usr." ',' ".$email." ','".$pwd." ',' ".$num."',' ".$ag." ',' ".$gen." ')";
 $result = mysql_query($query) or die (" query failed..".mysql_error());

if($result)
 {
  echo "records inserted";
} else
{
 echo "please try again..";
}
mysql_close();
}
?>

