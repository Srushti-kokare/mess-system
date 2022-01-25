<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mms-db";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	echo "failed";

}
// else
// {
// 	echo "connected";
// }
?>
